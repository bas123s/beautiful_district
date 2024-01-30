<?php

session_start();
error_reporting(E_ALL); //แสดง error ทั้งหมด
ini_set('display_errors', 1);
ini_set('log_errors', 1);

require("../../php_class/main_class.php"); //เรียกใช้ไฟล์คลาส

$mc = new main_class("conn_main_class"); // สร้าง connection ใหม่
$mc->table_name = "file_support"; //กำหนดชื่อตารางที่จะบันทึกข้อมูล
$debug = 1; // 1=เปิด debug , 0 ปิด debug

$_POST['created_date'] = date('Y-m-d');



$file = $_FILES['before'];

$fileExt = pathinfo($file["name"], PATHINFO_EXTENSION);

$fileName = $_POST["assessment"] . $_POST["acode"] . "before." . $fileExt;
$fileType = $_FILES['before']['type'];
$fileTempName = $_FILES['before']['tmp_name'];
$fileError = $_FILES['before']['error'];
$fileSize = $_FILES['before']['size'];


// ตรวจสอบว่ามีข้อผิดพลาดในการอัปโหลดไฟล์หรือไม่
if ($fileError === 0) {
  // กำหนดโฟลเดอร์ที่จะเก็บไฟล์
  $fileDestination = "../../uploads/upload_sup/" . $fileName;

  // ย้ายไฟล์ที่ถูกอัปโหลดไปยังโฟลเดอร์ที่กำหนด
  if (move_uploaded_file($fileTempName, $fileDestination)) {
    $a = "ไฟล์ถูกอัปโหลดเรียบร้อยแล้ว";

  } else {
    $a = "เกิดข้อผิดพลาดในการย้ายไฟล์";
  }
} else {
  $a = "เกิดข้อผิดพลาดในการอัปโหลดไฟล์";
}

$file_after = $_FILES['after'];

$fileExt_after = pathinfo($file_after["name"], PATHINFO_EXTENSION);

$fileName_after = $_POST["assessment"] . $_POST["acode"] . "after." . $fileExt_after;
$fileType_after = $_FILES['after']['type'];
$fileTempName_after = $_FILES['after']['tmp_name'];
$fileError_after = $_FILES['after']['error'];
$fileSize_after = $_FILES['after']['size'];

// ตรวจสอบว่ามีข้อผิดพลาดในการอัปโหลดไฟล์หรือไม่
if ($fileError_after === 0) {
  // กำหนดโฟลเดอร์ที่จะเก็บไฟล์
  $fileDestination_after = "../../uploads/upload_sup/" . $fileName_after;

  // ย้ายไฟล์ที่ถูกอัปโหลดไปยังโฟลเดอร์ที่กำหนด
  if (move_uploaded_file($fileTempName_after, $fileDestination_after)) {
    $a = "ไฟล์ after ถูกอัปโหลดเรียบร้อยแล้ว";
 
  } else {
    $a = "เกิดข้อผิดพลาดในการย้ายไฟล์ after";
  }
} else {
  $a = "เกิดข้อผิดพลาดในการอัปโหลดไฟล์ after";
}


$_POST['after'] = $fileName_after;
$_POST['before'] = $fileName;

$action = "INSERT";
$temp;
if ($action == "INSERT") {
  $temp = $mc->basic_query("0", "INSERT");
} else {
  $temp = $mc->basic_query("0", "UPDATE");
}
$link = "rpt_support_amp_upload.php?a=บันทึกสำเร็จ&pcode=" . $_POST['pcode'] . "&aname=" . $_POST['aname'] . "";
header("Location: " . $link);





?>