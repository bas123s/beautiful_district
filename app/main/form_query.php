<?php
require '../../require/head_php.php';

$mc->table_name = "assessment_dopa"; //กำหนดชื่อตารางที่จะบันทึกข้อมูล
$debug = 0; // 1=เปิด debug , 0 ปิด debug
//$mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
//exit();

$action = "UPDATE";
$fields_name = ["dcast", "svs", "damrong", "whitehouse", "thaiD"];

foreach ($_REQUEST["id"] as $key => $value) {

  $_POST["id"] = $key;

  $sql = "SELECT * FROM `assessment_dopa` where `id` ='" . $key . "' ;";
  $_POST = $mc->select_1($sql);
  foreach ($fields_name as $field) {
    if (isset($_REQUEST[$field][$key])) {
      $_POST[$field] = $_REQUEST[$field][$key];
    }
  }

  //  $mc->check_array($_POST, "POST");
////  $mc->check_variable();  // เอาไว้เช็คค่าตัวแปร GET , POST , REQUEST ที่ส่งมา
  if ($mc->basic_query($debug, $action)) {
    $link = "บันทึกข้อมูลเรียบร้อยแล้ว&pcode=" . $_POST["pcode"];
    unset($_POST);
  } else {
    $link = "บันทึกข้อมูลไม่สำเร็จ";
  }
}
$link = "form_dopa.php?a=" . $link . "&action=" . $action;


header("Location: " . $link);
?>