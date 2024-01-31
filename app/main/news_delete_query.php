



<?php

//session_start(); //เริ่ม session
require '../../require/head_php.php';



	$sql = "DELETE FROM `news` WHERE `id` = '".$_REQUEST["id"]."'; ";
	$mc->any_query($sql);

	$mc->delete_by_id($_REQUEST["id"], "id", "news");

 
	$link = "news_detail.php?a=ลบข้อมูลเรียบร้อยแล้ว";



header("Location: " . $link);

?>