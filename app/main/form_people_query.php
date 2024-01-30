<?php

session_start();
error_reporting(E_ALL); //แสดง error ทั้งหมด
ini_set('display_errors', 1);
ini_set('log_errors', 1);

require("../../php_class/main_class.php"); //เรียกใช้ไฟล์คลาส
$mc = new main_class("conn_main_class"); // สร้าง connection ใหม่
$mc->table_name = "assessment_services"; //กำหนดชื่อตารางที่จะบันทึกข้อมูล
$debug = 0; // 1=เปิด debug , 0 ปิด debug
require_once("../../require/response3.php");
//$mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
//exit();

$_POST["pname"] = $province[$_POST["pcode"]];
$_POST["aname"] = $amphoe[$_POST["pcode"]][$_POST["acode"]];
$action = "INSERT";

//  $mc->check_array($_POST, "POST");
////  $mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
if ($mc->basic_query($debug, $action)) {
  $link = "บันทึกข้อมูลเรียบร้อยแล้ว";
  unset($_POST);
} else {
  $link = "ไม่สามารถบันทึกข้อมูลได้";
}

$link = "form_people.php?a=" . $link . "&action=" . $action;
//echo "<hr>" . $link;
header("Location: " . $link);

