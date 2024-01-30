<?php
require '../../require/head_php.php';
//require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php

require_once '../../require/html2pdf/vendor/autoload.php';

$sql = "SELECT * FROM `beautiful_district`.`view_assessment_5s_p` WHERE `pcode` = '" . @($_REQUEST['pcode']) . "'";
$data = $mc->select_1($sql);
//echo $sql;

$i = 1;

$space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$space_2 = $space . $space . $space . $space . $space;
$space_3 = "&nbsp;&nbsp;&nbsp;";

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

$html2pdf = "";

try {
    ob_start(); // Start get HTML code
    $month = $mc->strMonth;
    $monthCut = $mc->strMonthCut;

    function showDate($date) {
        if ($date != "") {
            $d = date("d", strtotime($date)) + 0;
            $m = date("n", strtotime($date));
            $Y = date("Y", strtotime($date)) + 543;
            $show = $d . " " . $GLOBALS['monthCut'][$m] . " " . $Y;
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
            <title>ที่ทำการปกครองจังหวัด<?= @($_REQUEST['ยname']); ?></title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <!-- <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet"> -->

            <style>
                * {
                    font-family: "THSarabunNew";

                }
                body {
                }
                .table1{
                    border: none;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    font-size: 16pt;
                    text-align:center;
                }
                th, td {
                    border: 1px solid dimgray;
                    border-collapse: collapse;
                    font-size: 16pt;
                    text-align:center;
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
                .footer {
                    position: fixed;
                    bottom: 0;
                    width: 100%;
                    font-size: 16pt;
                    text-align: center;

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
            <div>
                <div style="font-size: 16pt; text-align: center; "><b>ที่ทำการปกครองอำเภอ<?= @($_REQUEST['aname']); ?>&nbsp;&nbsp; จังหวัด<?= @($_REQUEST['pname']); ?></b> </div>
                <h4 style="font-size: 16pt; text-align: center; font:bold"> หัวข้อการประเมินหลัก 3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)</h4>
                <!--<b style="font-size: 16pt; text-align: left;"> หัวข้อการประเมินหลัก  3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)  </b>-->
                <table >
                    <thead>
                        <tr>
                            <th  style="text-align: center;">ที่</th>
                            <th  style="text-align: center;">หัวข้อการประเมินย่อย</th>
                            <th style="text-align: center;">คะแนนเต็ม</th>
                            <th  style="text-align: center;">คะแนนที่ได้รับ</th>
                        </tr><!-- comment -->
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $css = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";
                            @$sum_all = 0;
                            @$sum_all = @$data['s1'] + @$data['s2'] + @$data['s3'] + @$data['s4'] + @$data['s5'];
                            ?>

                            <td style="width: 8%;">1</td>
                            <td style="width: 70%;text-align: left; padding-left: 10px;" >การสะสาง “ความเรียบร้อยของที่ทำการปกครองอำเภอ”</td>
                            <td>20</td>
                            <td class="px-4 py-2 text-right"> <?= @$data['s1']; ?></td>
                        </tr>
                        <tr>
                            <td>2 </td>
                            <td style="text-align: left; padding-left: 10px;" >สิ่งอำนวย “ความสะดวก” ในการเข้ารับบริการที่ทำการปกครองอำเภอ </td>
                            <td>20</td>
                            <td class="px-4 py-2 text-right"> <?= @$data['s2']; ?></td>
                        </tr>
                        <tr>
                            <td>3 </td>
                            <td style="text-align: left; padding-left: 10px;" >การรักษา “ความสะอาด” ของที่ทำการปกครองอำเภอ</td>
                            <td>20</td>
                            <td class="px-4 py-2 text-right"> <?= @$data['s3']; ?></td>
                        </tr>
                        <tr>
                            <td>4 </td>
                            <td style="text-align: left; padding-left: 10px;" >การสร้างมาตรฐาน “ในการให้บริการของที่ทำการปกครองอำเภอ”</td>
                            <td>20</td>
                            <td class="px-4 py-2 text-right"> <?= @$data['s4']; ?></td>
                        </tr>
                        <tr>
                            <td>5 </td>
                            <td style="text-align: left; padding-left: 10px;" >การสร้างวินัย “ความเรียบร้อยของที่ทำการปกครองอำเภอ”</td>
                            <td>20</td>
                            <td class="px-4 py-2 text-right"> <?= @$data['s5']; ?></td>
                        </tr><!-- comment -->
                        <tr>
                            <td colspan="2" style="font-size: 16pt; text-align: center; ">รวม</td>
                            <td >100</td>
                            <td class="px-4 py-2 text-right"><?= @$sum_all; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br>

            <div style=" text-align: center; width: 100%;font-size: 16pt;"><b>(..................................................)<br><br>
                    ผู้ว่าราชการจังหวัด<?= @($_REQUEST['pname']); ?><br><br>
                    ผู้ประเมิน</b></div>
            <div class="bottom-content" style="position: absolute;bottom: 0; text-right: ">
                พิมพ์รายงานเมื่อ <?= $mc->DateThai(date("Y-m-d")); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                โดย::<?= @$user['aname']; ?> จังหวัด<?= @$user['pname']; ?>
            </div>


        </body>
    </html>

    <?php
    $content = ob_get_clean();

    $html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'uTF-8', array(18, 10, 20, 20));
    $html2pdf->setDefaultFont("thsarabun");
    $html2pdf->writeHTML($content);
    $html2pdf->output('sheet1.pdf');
} catch (Html2PdfException $e) {
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