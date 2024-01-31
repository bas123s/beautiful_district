<?php

session_start();
error_reporting(E_ALL); //แสดง error ทั้งหมด
ini_set('display_errors', 1);
ini_set('log_errors', 1);

require("../../php_class/main_class.php"); //เรียกใช้ไฟล์คลาส
require '../../require/image_function.php';
$mc = new main_class("conn_main_class"); // สร้าง connection ใหม่
$mc->table_name = "news"; //กำหนดชื่อตารางที่จะบันทึกข้อมูล
$debug = 0; // 1=เปิด debug , 0 ปิด debug
$currentDateTime = date('Ymd_His');


$_POST['created_date'] = date('Y-m-d H:i:s', strtotime($_POST['created_date'] . ' ' . date('H:i:s')));

$_POST['status'] = "1";
// print_r($_FILES);
// exit();

function store_uploaded_image($html_element_name,$fileNameNew,$key_data, $data_attrib, $fileDestination, $new_img_width, $new_img_height) {
	//install php gd 
    $fileTmpName = $data_attrib['tmp_name'];
    
    $image = new SimpleImage();
    $image->load($fileTmpName);
    $image->resize($new_img_width, $new_img_height);
    $image->save($fileDestination);
    //echo $data_attrib['tmp_name'];
    return $fileNameNew; //return name of saved file in case you want to store it in you database or show confirmation message to user
}

foreach ($_FILES as $key => $value) {
	if($value['name']!=""){
	    $fileName = $value['name'];
	    $fileTmpName = $value['tmp_name'];
	    $fileSize = $value['size'];
	    $fileError = $value['error'];
	    $fileType = $value['type'];

	    $fileExt = explode('.', $fileName);
	    $fileActualExt = strtolower(end($fileExt));

		$fileNameNew = "GEN_" . $key . $currentDateTime . "." . $fileActualExt;
	    $fileDestination = "../../uploads/upload_news/".$fileNameNew;

	    /*move_uploaded_file($fileTmpName, $fileDestination);
	    $message = "File upload successful";
	    echo $key;*/
	    if($fileActualExt=="jpg"||$fileActualExt=="png"||$fileActualExt=="gif"||$fileActualExt=="jpeg"){
	        $file_save = store_uploaded_image($fileName,$fileNameNew,$key,$value, $fileDestination, 800, 600);
	        echo $file_save; 
   
	    }
	    else{
	    	// move_uploaded_file($value['tmp_name'], $fileDestination);


	    }
	    $_POST[$key]=$fileNameNew;

     
	}
}

$action = $_REQUEST["action"];
if ($mc->basic_query($debug, $action)) {
  $link = "บันทึกข้อมูลเรียบร้อยแล้ว";
  unset($_POST);
} else {
  $link = "ไม่สามารถบันทึกข้อมูลได้";
}

$link = "news_detail.php?a=" . $link . "&action=" . $action;
//echo "<hr>" . $link;
header("Location: " . $link);

