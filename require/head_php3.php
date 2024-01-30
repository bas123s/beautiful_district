<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
ini_set('display_startup_errors', '1');
date_default_timezone_set("Asia/Bangkok");

$conn_name = "main_class"; // main_class = connect db gun_report
require("../../php_class/main_class.php");
// $mc = new main_class();
$mc = new main_class("conn_" . $conn_name);
//$mc_variable = $mc->get_variable();
//$strMonth = $mc->strMonth;
?>