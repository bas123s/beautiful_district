<?php
// session_start();
// session_start();
// session_start();
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set("memory_limit","-1");

// require("../../php_class/main_class.php");
require '../../require/head_php.php';
// $mc = new main_class();
//require '../../require/head_html.php'; //แก้ไข menu ในไฟล์ menuconfig.php

//use Mpdf\Mpdf;
//Require composer autoload
require_once '../../require/html2pdf/vendor/autoload.php';

$sql = "SELECT * FROM `dopa_decoration` WHERE `pid` = '".$user['pid']."'; ";
//$data = $mc->select_1($sql);
//echo $sql;

$sql2 = "SELECT * FROM `certificate` WHERE `pid` = '".$user['pid']."' AND `type` = '".$_REQUEST['type']."'; ";
//$data2 = $mc->select_1($sql2);
//echo $sql2;

$i = 1;

$space="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$space_2=$space.$space.$space.$space.$space;
$space_3="&nbsp;&nbsp;&nbsp;";

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

$month = array(
  '01' => 'มกราคม',
  '02' => 'กุมภาพันธ์',
  '03' => 'มีนาคม',
  '04' => 'เมษายน',
  '05' => 'พฤษภาคม',
  '06' => 'มิถุนายน',
  '07' => 'กรกฎาคม',
  '08' => 'สิงหาคม',
  '09' => 'กันยายน ',
  '10' => 'ตุลาคม',
  '11' => 'พฤศจิกายน',
  '12' => 'ธันวาคม'
);

$html2pdf="";

try {
ob_start(); // Start get HTML code
$month = $mc->strMonth;
$monthCut = $mc->strMonthCut;
function showDate($date){
  if ($date != "") {
    $d = date("d",strtotime($date))+0;
    $m = date("n",strtotime($date));
    $Y = date("Y",strtotime($date))+543;
    $show = $d." ".$GLOBALS['monthCut'][$m]." ".$Y;
  } else {
    $show = "";
  }
  return $show;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>การรายงานผลการดำเนินงานด้านความมั่นคงภายในภารกิจกรมการปกครองประจำเดือน</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet"> -->

  <style>
    * {font-family: "THSarabunNew";}
    body {}
    table, th, td {
      border: 1px solid dimgray;
      border-collapse: collapse;
      font-size: 16pt;
    }
    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;font-size: 16pt;
      text-align: center;
      input[type="radio"];
      appearance: none;
      background-color: #fff;
      margin: 0;
      font: inherit;
      color: currentColor;
      width: 1.15em;
      height: 1.15em;
      border: 0.15em solid currentColor;
      border-radius: 50%;
    }
  </style>

</head>
<body>

  <style type="text/css">
    .table{border:1px solid black;height:1em;}
    .inline{display:inline-block;}
  </style>

  <br><br>

  <div class="table" style="width:100%;background-color: #cccccc;">
    <b style="font-size: 16pt; text-align: center;"><div align="center">แบบเสนอขอพระราชทานและรับรองนิติบุคคล</div>
     ประกอบการเสนอขอพระราชทานเครื่องราชอิสริยาภรณ์ ประจำปี ๒๕๖๖ <br>สำหรับเจ้าหน้าที่ของรัฐหรือผู้ปฏิบัติงานในลักษณะเดียวกัน ผู้ปฏิบัติงานในหน่วยงาน<br>ตามกฎหมายจัดตั้งองค์กรปกครองส่วนท้องถิ่น และกฎหมายว่าด้วยลักษณะปกครองท้องที่</b>
   </div>
   <br><br><br>



   <b style="font-size: 16pt; text-align: left;">
    <u>คำชี้แจง</u> ระบุชื่อ ชื่อสกุล และแจ้งข้อมูลในช่องว่าง
    <br>1. ข้าพเจ้า <?=@$data2['title'].@$data2['fname']."  ".$data2['lname'];?>
    <br>&nbsp;&nbsp;&nbsp;1.1 ปัจจุบันดำรงตำแหน่ง  <?=@$data2['posi_line'];?>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สังกัด  <?=@$data2['org1'];?>
  </b>

  <b style="font-size: 16pt; text-align: left;">
    <br>&nbsp;&nbsp;&nbsp;1.2 เป็นผุ้มีคุณสมบัติอยู่ในเกณฑ์เสนอขอพระราชทานเครื่องราชอิสริยาภรณ์ ชั้น <?=@$data2['level_req'];?>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แต่ไม่ความประสงค์ให้ดำเนินการเสนอขอพระราชทานเครื่องราชอิสริยาภรณ์
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื่องจาก  <?=@$data2['remark_req'];?>

  </b>



  <b style="font-size: 16pt; text-align: right;">
    <br><br><br>
    ขอรับรองว่าข้อมูลดังกล่าวเป็นความจริงทุกประการ
    <br><br>ลงชื่อ..........................................................
    <br>(<?=@$data2["title"];?><?=@$data2["fname"];?> <?=@$data2["lname"];?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <br><?= $mc->DateThai(date("Y-m-d")); ?>&nbsp;&nbsp;&nbsp;
  </b>
  <br><br>


</body>

</html>

</page>

<?php
$content = ob_get_clean();

$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'uTF-8',array(18, 10, 20, 20));
$html2pdf->setDefaultFont("thsarabun");
$html2pdf->writeHTML($content);
$html2pdf->output('sheet1.pdf');
}catch (Html2PdfException $e) {
   //$html2pdf->clean();

 $formatter = new ExceptionFormatter($e);
 echo $formatter->getHtmlMessage();
}
?>
<script>
 html2pdf(document.getElementsByClassName('container-fluid'), {
   margin: 10,
   filename: "my.pdf",
   image: {type: 'jpeg', quality: 1},
   html2canvas: {dpi: 72, letterRendering: true},
   jsPDF: {unit: 'mm', format: 'a4', orientation: 'landscape'},
   pdfCallback: pdfCallback
 })

 function pdfCallback(pdfObject) {
   var number_of_pages = pdfObject.internal.getNumberOfPages()
   var pdf_pages = pdfObject.internal.pages
   var myFooter = "Footer info"
   for (var i = 1; i < pdf_pages.length; i++) {
   // We are telling our pdfObject that we are now working on this page
   pdfObject.setPage(i)
   
   pdfObject.text("my header text", 10, 10)
   
   // The 10,200 value is only for A4 landscape. You need to define your own for other page sizes
   pdfObject.text(myFooter, 10, 200)
 }
}
</script>