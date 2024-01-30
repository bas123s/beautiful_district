<?php

session_start();
error_reporting(E_ALL); //แสดง error ทั้งหมด
ini_set('display_errors', 1);
ini_set('log_errors', 1);

require("../../php_class/main_class.php"); //เรียกใช้ไฟล์คลาส
$mc = new main_class("conn_main_class"); // สร้าง connection ใหม่
$mc->table_name = "assessment_m"; //กำหนดชื่อตารางที่จะบันทึกข้อมูล
$debug = 1; // 1=เปิด debug , 0 ปิด debug
$mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา


$action = "UPDATE";

//  $mc->check_array($_POST, "POST");
////  $mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
if ($mc->basic_query("1", $action)) {
  $link = "บันทึกข้อมูลเรียบร้อยแล้ว";
  unset($_POST);
} else {
  $link = "";
}

$link = "form_main_m.php?a=" . $link . "&action=" . $action;
//echo "<hr>" . $link;
header("Location: " . $link);

