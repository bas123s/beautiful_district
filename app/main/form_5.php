<?php
$title = "แบบประเมินการประกวด “อำเภอสวยงาม” ตามโครงการ
“อำเภอสวยงาม” ประจำปี พ.ศ. 2566";
// require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';

if (@$_REQUEST["pcode"] != "") {
    $pcode = $_REQUEST["pcode"];
    $pname = $_REQUEST["pname"];
    $acode = $_REQUEST["pcode"] . "00";
    $aname = "ปกครองจังหวัด" . $_REQUEST["pname"];
} else {
    $pcode = $user["pcode"];
    $pname = $user["pname"];
    $acode = $user["acode"];
    $aname = $user["aname"];
}

//echo "acode = ".$acode;

if (isset($_REQUEST["id"]) && ($_REQUEST["id"] !== "")) {
    $title = "แก้ไข" . @$_REQUEST["gun_id"];
    $action = "UPDATE";
    $sql = "SELECT * FROM `assessment_support` WHERE `id` = '" . $_REQUEST["id"] . "'; ";
    $data = $mc->select_1($sql);
    //$mc->check_array($data, "data");
} else {
    $title = "เพิ่มข้อมูล";
    $action = "INSERT";
}
?>


<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-3">

            <!-- <h2 class="text-center  md:text-2xl text-3xl font-medium"></h2> -->
            <h2 class=" text-center md:text-xl text-xl font-medium ">ที่ทำการปกครองอำเภอ
                <?= @$user['aname']; ?> จังหวัด
                <?= @$user['aname']; ?>
            </h2>
            <h2 class=" text-center md:text-xl text-xl font-medium ">หัวข้อการประเมินหลัก	3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)</h2>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">


                    <form method="post" action="form_query.php">

                        <input type="hidden" name="pcode" value="<?= $user["pcode"]; ?>">
                        <input type="hidden" name="pname" value="<?= $user["pname"]; ?>">
                        <input type="hidden" name="acode" value="<?= $user["acode"]; ?>">
                        <input type="hidden" name="aname" value="<?= $user["aname"]; ?>">

                        <table class="table table-striped table-responsive" id="example">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 25%;" class="text-center">หัวข้อการประเมินย่อย</th>
                                    <th style="width: 50%;" class="text-center">ประเด็น</th>
                                    <th style="width: 10%;"class="text-center">คะแนนเต็ม</th>
                                    <th style="width: 15%;"class="text-center">คะแนนที่ได้รับ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;" rowspan="3">1.
                                    “การสะสาง” 
ความเรียบร้อยของ
ที่ทำการปกครองอำเภอ
</td>
                                    <td class="">1. ผลการปฏิบัติงาน : มีการจำแนกแบ่งสัดส่วนพื้นที่ให้บริการ (สะสางพื้นที่)
มีการจำแนกแบ่งสัดส่วนพื้นที่ให้บริการประชาชนออกเป็น 4 องค์ประกอบ ได้แก่ 	1. พื้นที่ให้บริการประชาชน 
	2. พื้นที่ของเจ้าหน้าที่ 
	3. พื้นที่สำคัญหรืออันตราย
	4. การจัดให้มีแสงสว่างเพียงพอในการให้บริการ

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ </td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน </td>
                                                    <td class="">มีการดำเนินการเพียง 1 องค์ประกอบ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">มีการดำเนินการ 2 องค์ประกอบ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">6 คะแนน</td>
                                                    <td class="">มีการดำเนินการ 3 องค์ประกอบ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">8 คะแนน</td>
                                                    <td class="">มีการดำเนินการครบทุกองค์ประกอบ
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">8</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td class="">2. มีการปรับปรุงป้ายหรือบอร์ดประชาสัมพันธ์หรือป้ายแสดงผังสำนักงานของส่วนราชการ (สะสางข้อมูล) 
มีการแสดงป้ายหรือประชาสัมพันธ์ข้อมูลที่จำเป็นอย่างครบถ้วนมี 4 องค์ประกอบ ดังนี้ 	1. มีความเป็นระเบียบเรียบร้อย 
	2. ข้อความประชาสัมพันธ์มีประโยชน์แก่ประชาชน 			3. ป้ายแสดงผังสำนักงานของส่วนราชการเป็นปัจจุบัน 			4. ป้ายแสดงผังสำนักงานของส่วนราชการมีความสะอาด สีไม่ซีด


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการเพียง 1 องค์ประกอบ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการ 2 องค์ประกอบ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">6 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการ 3 องค์ประกอบ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">8 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบทุกองค์ประกอบ
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">8</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">3. ผลการปฏิบัติงาน : มีการจัดเก็บป้ายที่หมดเงื่อนไขการประชาสัมพันธ์
หรือหมดอายุแล้ว (สะสางป้ายเก่า)
มีการจัดเก็บป้ายประชาสัมพันธ์ หรือเอกสาร หรือสื่อสิ่งพิมพ์ที่เกี่ยวข้องกับ
การประชาสัมพันธ์ ที่หมดอายุหรือเงื่อนไขการใช้งานแล้ว

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน </td>
                                                    <td class="">
                                                    มีการจัดเก็บป้ายประชาสัมพันธ์ หรือเอกสาร หรือสิ่งพิมพ์
ที่เกี่ยวข้อง ให้เป็นปัจจุบันเป็นบางส่วน
</td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการจัดเก็บป้ายประชาสัมพันธ์ หรือเอกสาร หรือสิ่งพิมพ์
ที่เกี่ยวข้อง ให้เป็นปัจจุบัน สะอาดเรียบร้อย

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                             

                            </tbody><!-- comment  จบข้อที่ 1-->
                            <!-- comment  ข้อที่ 2-->
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;" rowspan="5">2.
                                    สิ่งอำนวย 
“ความสะดวก” 
ในการเข้ารับบริการ
ที่ทำการปกครองอำเภอ
</td>
                                    <td class="">1. ผลการปฏิบัติงาน : มีการกำหนดและประกาศวันเวลาให้บริการประชาชน
ทั้งในและนอกวันเวลาราชการ (เวลาสะดวก)
มีการกำหนดเวลาให้บริการที่สอดคล้องกับผลสำรวจความต้องการของประชาชน ทั้งในและนอกวันเวลาราชการ

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน </td>
                                                    <td class="">มีการให้บริการในเวลาราชการ วันจันทร์-ศุกร์ แต่เพิ่มเวลาพักเที่ยงหรือเวลา 17.00 - 19.00 น.</td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">การให้บริการในเวลาราชการ วันจันทร์-ศุกร์ แต่เพิ่มเวลาพักเที่ยงหรือเวลา ๑๗.00 - 19.00 และวันเสาร์-อาทิตย์ เวลา 09.00 - 12.00 น. หรือวันหยุดนักขัตฤกษ์
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td class="">2. ผลการปฏิบัติงาน : การจัดให้มีระบบขนส่งสาธารณะที่เข้าถึงที่ว่าการอำเภอ/ศูนย์ราชการอำเภอได้สะดวก (เดินทางสะดวก)
มีการบูรณาการกับหน่วยงานที่เกี่ยวข้องในการจัดให้มีระบบขนส่งสาธารณะ
ที่สามารถเข้าถึงที่ว่าการอำเภอได้อย่างสะดวก การจัดให้มีป้ายหรือสัญลักษณ์บอกทิศทางในการเข้าถึงจุดให้บริการ


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">
                                                    มีระบบขนส่งสาธารณะที่เข้าถึงที่ว่าการอำเภอ/ศูนย์ราชการอำเภอได้สะดวก
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการบูรณาการกับหน่วยงานที่เกี่ยวข้องในการจัดให้มีระบบขนส่งสาธารณะที่สามารถเข้าถึงที่ว่าการอำเภอได้อย่างสะดวก มีป้ายหรือสัญลักษณ์บอกทิศทางในการเข้าถึงจุดให้บริการ
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">3. ผลการปฏิบัติงาน : มีการจัดระเบียบจราจร และที่จอดรถภายในที่ว่าการอำเภออย่างเป็นระบบ (จราจรสะดวก)
มีองค์ประกอบ ดังนี้  <br>1. มีการจัดระบบจราจรภายใน ไม่ให้กีดขวางต่อการเข้ารับบริการของประชาชน มีการจัดทำป้ายเครื่องหมายบนพื้นทาง หรือป้ายสัญญาณจราจรที่จำเป็นอย่างครบถ้วน 
	             <br> 2. มีการจัดที่จอดรถอย่างเป็นระเบียบ แบ่งสัดส่วนที่จอดรถยนต์และที่จอดรถจักรยานยนต์อย่างเหมาะสม
	             <br> 3. มีการแยกที่จอดรถของเจ้าหน้าที่และประชาชนอย่างเป็นสัดส่วน โดยคำนึกถึงความสะดวกของประชาชนผู้เข้ารับบริการเป็นสำคัญ

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการเพียง 1 องค์ประกอบ

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">3 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการ 2 องค์ประกอบ

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการ 3 องค์ประกอบ

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">4. ผลการปฏิบัติงาน : มีการติดตั้งป้ายชื่อหน่วยงานบริการต่าง ๆ ของอำเภอ (ติดต่อสะดวก) 
มีการจัดทำป้ายแผนผังหน่วยงานในอาคารที่ว่าการอำเภอ ในจุดที่สามารถมองเห็นได้อย่างชัดเจนครบถ้วน เช่น ป้ายสำนักทะเบียนอำเภอ ศูนย์ดำรงธรรมอำเภอ เป็นต้น มี 2 องค์ประกอบ ดังนี้ 	<br>
	1. มีการแสดงแผนผังขั้นตอนการให้บริการ / แผนผังอำเภอ 
    <br>2. มีป้ายบอกทางภายในอาคาร
    <br>3. องค์ประกอบของข้อ 1 และ 2 มองเห็นได้ชัดเจน ครบถ้วน

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">1 คะแนน </td>
                                                    <td class="">มีการดำเนินการเพียง 1 องค์ประกอบ

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">มีการดำเนินการ 2 องค์ประกอบ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">3 คะแนน</td>
                                                    <td class="">มีการดำเนินการ 3 องค์ประกอบ
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">3</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>
                                <tr>
                                    <td class="">ผลการปฏิบัติงาน : มีสิ่งอำนวยความสะดวกทางกายภาพที่คำนึงถึงผู้พิการ และผู้สูงอายุ (มีสิ่งอำนวยความสะดวก) 
อำเภอมีการจัดสิ่งอำนวยความสะดวกให้แก่ประชาชนผู้รับบริการ โดยคำนึงถึง
ผู้พิการ ผู้สูงอายุ โดยมี 5 องค์ประกอบ ดังนี้ <br>
	1. ที่จอดรถสำหรับคนพิการหรือผู้สูงอายุ 
    <br>	2. ทางลาด 
    <br>	3. ป้ายแสดงอุปกรณ์หรือสิ่งอำนวยความสะดวกสำหรับคนพิการหรือผู้สูงอายุ 
    <br>	4. ห้องน้ำสำหรับคนพิการหรือผู้สูงอายุ
    <br>	5. รถเข็นผู้พิการ หรือผู้สูงอายุ

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">1 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการเพียง 1 องค์ประกอบ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการ 2 องค์ประกอบ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">3 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการ 3 องค์ประกอบ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการ 4 องค์ประกอบ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">5 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการ 5 องค์ประกอบ</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">5</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                            </tbody>
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;" rowspan="5">3.
                                    การรักษา 
“ความสะอาด” 
ของที่ทำการปกครองอำเภอ
</td>
                                    <td class="">1. ผลการปฏิบัติงาน : มีป้ายชื่อที่ว่าการอำเภอติดตั้งบริเวณทางเข้าอำเภอ 
ตัวอาคารและรอบอาคารที่ว่าการอำเภอ สะอาด สวยงาม ตัวอักษรสมบูรณ์ครบถ้วน และสามารถมองเห็นได้อย่างชัดเจน (ป้ายชื่อสะอาด)
อำเภอมีการบำรุงรักษา/ปรับปรุงป้ายชื่อที่ว่าการอำเภอ บนตัวอาคารและ
รอบอาคารที่ว่าการอำเภอที่สวยงาม สะอาด ตัวอักษรครบถ้วนสมบูรณ์


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">2 คะแนน </td>
                                                    <td class="">
                                                    มีการดำเนินการเพียงบางส่วน
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td class="">2. ผลการปฏิบัติงาน : มีการบำรุงดูแลรักษาตัวอาคารที่ว่าการอำเภอให้สะอาดเรียบร้อย สวยงาม และอยู่ในสภาพพร้อมใช้งาน (อาคารสะอาดตา)
อำเภอมีการดูแลรักษาความสะอาด และบำรุงรักษาตัวอาคาร เช่น พื้น ผนัง เพดาน กระจก หลังคา เป็นต้น ให้มีความสะอาด ไม่มีรอยคราบเลอะเทอะ
เปรอะเปื้อน รวมถึงอุปกรณ์ต่าง ๆ ที่เกี่ยวข้อง เช่น ประตู หลอดไฟ อุปกรณ์ไฟฟ้า เป็นต้น ไม่ให้ชำรุดทรุดโทรมและมีความสมบูรณ์พร้อมใช้งาน


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการเพียงบางส่วน
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">3. ผลการปฏิบัติงาน : การกำหนดพื้นที่ปลอดบุหรี่/พื้นที่สูบบุหรี่ และสุขาสะอาด (อากาศสะอาด)
อำเภอมีการจัดให้มีเขตสูบบุหรี่เป็นการเฉพาะมีสัดส่วนที่ชัดเจนในบริเวณที่เหมาะสม และจัดให้มีห้องสุขาที่สะอาดและถูกสุขลักษณะ โดยคำนึงถึงผู้พิการ ผู้สูงอายุ

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการเพียงบางส่วน
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">4. ผลการปฏิบัติงาน : มีการปรับปรุง จัดระเบียบและรักษาความสะอาดเรียบร้อย บริเวณสภาพแวดล้อมโดยรอบที่ว่าการอำเภอ (รอบอำเภอสะอาด)
อำเภอมีการทำความสะอาดและเก็บกวาดขยะ ใบไม้ บริเวณโดยรอบของอาคารที่ว่าการอำเภออย่างสม่ำเสมอ ตลอดจนมีการบำรุงดูแลต้นไม้รอบอาคารที่ว่าการอำเภอให้มีความอุดมสมบูรณ์ มีการตัดแต่งสนามหญ้า และต้นไม้ต่าง ๆ ให้เกิดความสวยงาม ไม่รกรุงรัง

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการเพียงบางส่วน
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>
                                <tr>
                                    <td class="">5. ผลการปฏิบัติงาน : มีการบำรุง ซ่อมแซมสิ่งก่อสร้างหรือถาวรวัตถุ ที่อยู่บริเวณโดยรอบ (รอบอาคารน่าใช้)
มีการบำรุงซ่อมแซมสิ่งก่อสร้างหรือถาวรวัตถุต่าง ๆ ที่อยู่บริเวณโดยรอบ เช่น กำแพงรั้ว ศาลาพักคอย โรงจอดรถ อนุสาวรีย์ เสาธง เป็นต้น ให้มีความสะอาดเรียบร้อย และอยู่สภาพที่พร้อมใช้งานอยู่เสมอ

                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">2 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการเพียงบางส่วน
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                            </tbody>
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;" rowspan="7">4.
                                    “การสร้างมาตรฐาน” ในการให้บริการของ
ที่ทำการปกครองอำเภอ
</td>
                                    <td class="">1. ผลการปฏิบัติงาน : มีการใช้ ชัก แสดงธงชาติไทยและธงตราสัญลักษณ์ 
การประดับตราสัญลักษณ์ที่ถูกต้องตามกฎหมายและระเบียบที่เกี่ยวข้อง 
(ใช้ถูกต้องเหมาะสม) อำเภอมีการใช้ ชัก แสดงธงชาติไทยและธงตราสัญลักษณ์ การประดับตราสัญลักษณ์ จะต้องมีสภาพที่ดี เรียบร้อยสมบูรณ์ ไม่ขาดวิ่น และสีไม่ซีดจนเกินควร มีการประดับตราสัญลักษณ์ในสถานที่อันควรและเหมาะสม


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">3 คะแนน </td>
                                                    <td class="">มีการดำเนินการไม่ครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">6 คะแนน</td>
                                                    <td class="">มีการดำเนินการครบถ้วนสมบูรณ์ เหมาะสม
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">6</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td class="">2. ผลการปฏิบัติงาน : มีจัดเก็บธงชาติไทยและธงตราสัญลักษณ์
และตราสัญลักษณ์ ในสถานที่เหมาะสมอันควร (จัดเก็บถูกต้องเหมาะสม)
อำเภอมีการมอบหมายให้เจ้าหน้าที่หรือบุคคลผู้มีหน้าที่รับผิดชอบในการใช้ 
ชัก แสดงธงชาติไทยและธงตราสัญลักษณ์ ตราสัญลักษณ์จัดเก็บรักษาไว้ด้วย
ความเคารพ ในสถานที่เหมาะสมอันควร


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="">3 คะแนน </td>
                                                    <td class="">มีการดำเนินการไม่ครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">6 คะแนน</td>
                                                    <td class="">มีการดำเนินการครบถ้วนสมบูรณ์ เหมาะสม
                                                    </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">6</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">3. ผลการปฏิบัติงาน : มีการส่งเสริมให้บุคลากรมีการแต่งกายที่สุภาพเรียบร้อยตามธรรมเนียมนิยม และมีการกำหนดให้สวมใส่ผ้าไทยทุกโอกาส และมีความเหมาะสมสอดคล้องกับภารกิจและการปฏิบัติหน้าที่ (แต่งกายเหมาะสม)
อำเภอมีการส่งเสริมให้บุคลากรในที่ทำการปกครองอำเภอมีการแต่งกายสุภาพเรียบร้อย สอดคล้องเหมาะสมกับภารกิจหน้าที่และธรรมเนียมนิยม รวมถึงมีการกำหนดให้สวมใส่ผ้าไทยทุกโอกาสและมีความเหมาะสมกับภารกิจและการปฏิบัติหน้าที่


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                        ไม่มีการดำเนินการ
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">3 คะแนน</td>
                                                    <td class="">
                                                    มีการแต่งกายสอดคล้องเหมาะสมกับภารกิจหน้าที่และ
ธรรมเนียมนิยม

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">6 คะแนน</td>
                                                    <td class="">
                                                    มีการกำหนดให้สวมใส่ผ้าไทยทุกโอกาสและมีความเหมาะสมกับภารกิจและหน้าที่
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">6</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td class="">4. ผลการปฏิบัติงาน : มีการจัดระบบการประเมินความพึงพอใจแก่ผู้เข้ารับบริการ (มีการประเมินความพึงพอใจ)
                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ </td>
                                                </tr>
                                                <tr>
                                                    <td class="">4 คะแนน </td>
                                                    <td class="">
                                                    มีการจัดให้มีการประเมินผลความพึงพอใจ

                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">4</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>



                            </tbody>
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;" rowspan="6">5. “การสร้างวินัย” 
ความเรียบร้อยของ
ที่ทำการปกครองอำเภอ
</td>
                                    <td class="">1. ผลการปฏิบัติงาน : การจัดให้มีระบบคัดกรองผู้รับบริการและระบบคิวให้บริการ (มีการจัดคิว/จุดแรกรับ)
อำเภอจัดให้มีระบบคิวเพื่อให้บริการได้อย่างเป็นธรรม รวมถึงการมีจุดแรกรับ 
เพื่ออำนวยความสะดวกต่าง ๆ เช่น สถานที่คัดกรองผู้รับบริการ เคาเตอร์ให้คำแนะนำในการขอรับบริการ



                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">ไม่มีการดำเนินการ</td>
                                                </tr>
                                
                                                <tr>
                                                    <td class="">5 คะแนน</td>
                                                    <td class="">มีการดำเนินการเพียงบางส่วน
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">10 คะแนน</td>
                                                    <td class="">มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                        
                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">10</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td class="">2. ผลการปฏิบัติงาน : มีการบริหารจัดการ จัดระเบียบ และรักษาความสะอาดเรียบร้อย โดยรอบอาคารที่ว่าการอำเภออย่างสม่ำเสมอ (มีแผนบริหารจัดการ)
อำเภอมีการบริหารจัดการ กำหนดตารางเวรและผู้รับผิดชอบหรือกำหนดวันร่วมกันในการทำความสะอาด การเก็บขยะ บริเวณโดยรอบอาคารที่ว่าการอำเภอให้มีความเรียบร้อยสม่ำเสมอ 


                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="2" class=" text-center">เกณฑ์การพิจารณาคะแนน
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">0 คะแนน </td>
                                                    <td class="">
                                                    ไม่มีการดำเนินการ

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="">5 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการเพียงบางส่วน

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">10 คะแนน</td>
                                                    <td class="">
                                                    มีการดำเนินการครบถ้วนสมบูรณ์
                                                    </td>
                                                </tr>
                                                

                                            </tbody>
                                        </table>
                                    </td>
                                    <td class="">10</td>
                                    <td class=""><input
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-indigo-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                            type="number" name="home_1" placeholder="กรุณากรอกคะแนน"
                                            value="<?= @$data['home_1'] ?>"></td>
                                    <td></td>
                                    <!-- comment -->
                                </tr>


                            </tbody>
                        </table>
                        </td>
               
                        <!-- comment -->
                        </tr>

                        </tbody><!-- comment -->
                        </table>

                        <?php if ($action == "UPDATE") { ?>
                                    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                        <?php } ?>
                        <input type="hidden" name="rec_pid" value="<?= $user['pid']; ?>">
                        <input type="hidden" name="rec_name" value="<?= $user['username']; ?>">
                        <input type="hidden" name="action" value="<?= $action; ?>">
                        <button type="submit"
                            class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">เพิ่มข้อมูล</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>



<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'rtip',


        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#example1').DataTable({
            "language": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
                "sInfoEmpty": "แสดง 0 ถึง 0 จากทั้งหมด 0 รายการ",
                "sInfoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ รายการ",
                "sLoadingRecords": "กำลังโหลด...",
                "sProcessing": "กำลังประมวลผล...",
                "sSearch": "ค้นหา:",
                "sZeroRecords": "ไม่พบรายการที่ตรงกับการค้นหา",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เรียงลำดับจากน้อยไปมาก",
                    "sSortDescending": ": เรียงลำดับจากมากไปน้อย"
                },
                "buttons": [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            }
        });
    });
</script>
<?php

require '../../require/footer_content4.php';
?>

<!-- /footer content -->