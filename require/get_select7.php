<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
session_start();
require("../php_class/main_class.php");
$mc = new main_class("conn_main_class");
require ("response3.php");
$data_type = $_REQUEST['data_type'];
$data_value = $_REQUEST['data_value'];
$selected = @$_REQUEST['selected'];

$option_css = "form-select  my-1";

//var_dump($data_type);

switch ($data_type) {

//  case "amphoe":
  default:// "amphoe"
    $mc->list_option4(@$amphoe[$data_value], "acode", $option_css, $selected, "  ", "กรุณาเลือกหน่วยงาน");
    break;

  case "province":
    $mc->list_option5($province, "pcode", $option_css, $selected, " onChange=\"dochange('amphoe', this.value);\" ", "กรุณาเลือกจังหวัด");
    break;
}

$mc->clear_conn();
?>