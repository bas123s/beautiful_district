<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
ini_set('display_startup_errors', '1');
date_default_timezone_set("Asia/Bangkok");

$conn_name="main_class"; // main_class = connect db gun_report 
require("../../php_class/main_class.php");
// $mc = new main_class();
$mc = new main_class("conn_" . $conn_name);
$mc_variable = $mc->get_variable();
$strMonth = $mc->strMonth;
//require_once ("../../require/response2.php");
$mc->check_session(session_id(), $mc->app_id);
//echo "<hr>" . session_id() . " => " . $mc->app_id . "<hr>";
$user = $_SESSION[session_id()][$mc->app_id];
ksort($user);
    // $user_app_privilege=["app_1"=>'1',"app_2"=>'7',"app_3"=>'9',];
    // $test=json_encode($user_app_privilege);
    // $mc->check_array($test,'test');
// $mc->check_array($user["app_privilege"],'app_privilege');
$uap=json_decode($user["app_privilege"]);// uap = user_app_privilege
// $mc->check_array($uap,'user_app_privilege');

    // echo "<hr>".$uap->app_1."<hr>";

// $sql = "SELECT	`app_privilege_id`, `app_privilege_name` FROM `app_privilege` WHERE `ministry_id` = '" . @$user["ministry_id"] . "' AND `department_id` = '" . @$user["department_id"] . "' ;";
// $app_privilege = $mc->select_3($sql, 'app_privilege_id', 'app_privilege_name');

$app_privilege = $mc_variable["app_privilege"];
$all_status = $mc->get_variable();

// function checkPID($pid) {
//   if (strlen($pid) == 13) {
//     $sum = 0;
//     for ($i = 0; $i < 12; $i++) {
//       $sum += (int) ($pid[$i]) * (13 - $i);
//     }
//     if ((11 - ($sum % 11)) % 10 == (int) ($pid[12])) {
//       return TRUE;
//     } else {
//       return FALSE;
//     }
//   }
//   return FALSE;
// }

// $year = date("Y")+543;

?>