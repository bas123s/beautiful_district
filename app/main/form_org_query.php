<?php

session_start();
error_reporting(E_ALL); //แสดง error ทั้งหมด
ini_set('display_errors', 1);
ini_set('log_errors', 1);

require("../../php_class/main_class.php"); //เรียกใช้ไฟล์คลาส
$mc = new main_class("conn_main_class"); // สร้าง connection ใหม่
$mc->table_name = "assessment_org"; //กำหนดชื่อตารางที่จะบันทึกข้อมูล
$debug = 0; // 1=เปิด debug , 0 ปิด debug
//echo " frm org query";
//$mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
//exit();

$action = "UPDATE";
//$fields_name = ["dcast", "svs", "damrong", "whitehouse", "thaiD"];
$fields_name = ["ita", "gecc", "moral"];

foreach ($_REQUEST["id"] as $key => $value) {

    $_POST["id"] = $key;

    $sql = "SELECT * FROM `assessment_org` where `id` ='" . $key . "' ;";
    $_POST = $mc->select_1($sql);
    foreach ($fields_name as $field) {
        if (isset($_REQUEST[$field][$key])) {
            $_POST[$field] = $_REQUEST[$field][$key];
        }
    }

//  $mc->check_array($_POST, "POST");
    //  $mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
    if ($mc->basic_query($debug, $action)) {
        $link = "บันทึกข้อมูลเรียบร้อยแล้ว";
        unset($_POST);
    } else {
        $link = "";
    }
}
$link = "form_org.php?a=" . $link . "&action=" . $action;
//echo "<hr>" . $link;
header("Location: " . $link);

