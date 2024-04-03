<?php
$title = "แบบประเมินการประกวด “อำเภอสวยงาม” ตามโครงการ
“อำเภอสวยงาม” ประจำปี พ.ศ. 2566";
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';


$action = "UPDATE";

require_once("../../require/response3.php");
unset($province["03"]);
unset($province["99"]);
unset($province["10"]);

if (!isset($_REQUEST["pcode"])) {
    $_REQUEST["pcode"] = "11";
}

//$mc->check_variable($_REQUEST, $_REQUEST);

$sql = "SELECT * FROM `assessment_m` WHERE `acode` = '" . $_REQUEST["acode"] . "'; ";
$data = $mc->select_1($sql);
//$mc->check_array($data, $sql);
?>


<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-3">
            <div class="card container  " style="  text-align: center;   ">

            </div>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">
                    <form method="post" action="form_m_query.php">

                        <!--<table id="example" class="table-bordered table-responsive">-->
                        <!-- <h2 class="text-center  md:text-2xl text-3xl font-medium"></h2> -->
                        <h2 class=" text-center md:text-xl text-xl font-medium ">
                            ที่ทำการปกครองอำเภอ<?= @$_REQUEST['aname']; ?> จังหวัด<?= @$_REQUEST['pname']; ?>
                        </h2>
                        <h2 class=" text-center md:text-xl text-xl font-medium ">หัวข้อการประเมินหลัก 3.
                        การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย  </h2>
                        <div class="card">
                            <div class="card-body md:text-xl text-xl font-medium text-center">

                                <table class="table table-striped table-responsive" id="example">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 30%;" class="text-center">หัวข้อการประเมินย่อย</th>
                                            <th style="width: 30%;" class="text-center">ประเด็น</th>
                                            <!-- <th style="width: 10%;" class="text-center">ภาพถ่าย</th> -->
                                            <th style="width: 30%;" class="text-center">การประเมินให้คะแนน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: top;">โครงการที่ 1 โครงการเสริมสร้างความมั่นคงทางด้านอาหาร น้อมนำแนวพระราชดำริสมเด็จพระกนิษฐาธิราชเจ้า 
กรมสมเด็จพระเทพรัตนราชสุดาฯสยามบรมราชกุมารี “บ้านนี้มีรัก ปลูกผักกินเอง” 
และขยายผลโครงการ “ทางนี้มีผล ผู้คนรักกัน” </td>
                                            <td>

                                                1.อำเภอมีการลงพื้นที่ตรวจเยี่ยม / ให้กำลังใจ / 
เข้าร่วมกิจกรรมที่เกี่ยวข้องกับโครงการ
บ้านนี้มีรัก ปลูกผักกินเอง 
 

                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             

                                                <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['food_1'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['food_1'] == "0") {
                                                          echo "checked";
                                                      } ?> name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการตรวจเยี่ยม/ลงพื้นที่</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="5" <?php if ($data['food_1'] == "5") {
                                                        echo "checked";
                                                    } ?> name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 1-5 ครั้ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['food_1'] == "10") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['food_1'] == "10") {
                                                          echo "checked";
                                                      } ?> name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 6-10 ครั้ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="15" <?php if ($data['food_1'] == "15") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['food_1'] == "15") {
                                                          echo "checked";
                                                      } ?> name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 10 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->

                                        <tr>
                                            <td style="vertical-align: top;">โครงการที่ 2 โครงการน้อมนำแนวพระราชดำริสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดาฯ 
สยามบรมราชกุมารี ในการส่งเสริมการสร้างสุขอนามัยให้แก่เด็กและแม่เติบโตอย่างถูกต้องตามเกณฑ์มาตรฐานสุขลักษณะ </td>
                                            <td>

                                                1. อำเภอมีการลงพื้นที่ตรวจเยี่ยม / ให้กำลังใจ 
/ เข้าร่วมกิจกรรมที่เกี่ยวข้องกับโครงการ
เสริมสร้างสุขอนามัยให้แก่เด็กและแม่
เติบโตอย่างถูกต้อง



                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clean_1'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['clean_1'] == "0") {
                                                          echo "checked";
                                                      } ?> name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการตรวจเยี่ยม/ลงพื้นที่</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['clean_1'] == "10") {
                                                        echo "checked";
                                                    } ?> name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 1-5 ครั้ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['clean_1'] == "20") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['clean_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 6-10 ครั้ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['clean_1'] == "30") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['clean_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 10 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->
                                        <tr>
                                            <td></td>
                                            <td>2. อำเภอดำเนินการขับเคลื่อนนโยบายของ
สมาคมแม่บ้านมหาดไทยให้เกิดผลอย่าง
เป็นรูปธรรม เช่น โครงการตรวจเยี่ยม/มอบ
สิ่งของ/ให้กำลังใจ แก่เด็กเล็กและแม่ ใน
พื้นที่อำเภอ 
(แนบหลักฐานโครงการประกอบ)

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="10" <?php if ($data['clean_2'] == "10") {
                                                        echo "checked";
                                                    } ?> name="clean_2" id="clean_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ดำเนินโครงการที่เกี่ยวข้อง 1 โครงการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['clean_2'] == "20") {
                                                        echo "checked";
                                                    } ?> name="clean_2" id="clean_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ดำเนินโครงการที่เกี่ยวข้อง 2 โครงการ
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['clean_2'] == "30") {
                                                        echo "checked";
                                                    } ?> name="clean_2" id="clean_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ดำเนินโครงการที่เกี่ยวข้อง 3 โครงการ
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="40" <?php if ($data['clean_2'] == "40") {
                                                        echo "checked";
                                                    } ?> name="clean_2" id="clean_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ดำเนินโครงการที่เกี่ยวข้อง 4 โครงการ
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>3. มีการขับเคลื่อนการขยายผลโครงการ 
ณ ที่ว่าการอำเภอ/พื้นที่ดำเนินการที่อำเภอ
นำเสนอ

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clean_3'] == "0") {
                                                        echo "checked";
                                                    } ?> name="clean_3" id="clean_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีขยายผลโครงการครอบคลุม ศพด/ร.ร ในพื้นที่ ร้อยละ 1-35</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['clean_3'] == "10") {
                                                        echo "checked";
                                                    } ?> name="clean_3" id="clean_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ขยายผลโครงการครอบคลุม ศพด/ร.ร ในพื้นที่ ร้อยละ 1-35
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['clean_3'] == "20") {
                                                        echo "checked";
                                                    } ?> name="clean_3" id="clean_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ขยายผลโครงการครอบคลุม ศพด/ร.ร ในพื้นที่ ร้อยละ 36-70
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['clean_3'] == "30") {
                                                        echo "checked";
                                                    } ?> name="clean_3" id="clean_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ขยายผลโครงการครอบคลุม ศพด/ร.ร ในพื้นที่ ร้อยละ 70-100
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">โครงการที่3 โครงการส่งเสริมการใช้ผ้าไทย น้อมนำแนวพระราชดำริสมเด็จพระเจ้าลูกเธอ เจ้าฟ้าสิริวัณณวรี นารีรัตนราชกัญญา 
“ผ้าไทยใส่ให้สนุก” เพื่อพัฒนาการสวมใส่ผ้าไทยทุกช่วงวัย ทุกโอกาส  </td>
                                            <td>

                                                1. อำเภอมีการลงพื้นที่ตรวจเยี่ยม / ให้กำลังใจ 
/ เข้าร่วมกิจกรรมที่เกี่ยวข้องกับโครงการ
“ผ้าไทยใส่ให้สนุก” 




                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['th_1'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['th_1'] == "0") {
                                                          echo "checked";
                                                      } ?> name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการตรวจเยี่ยม/ลงพื้นที่</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['th_1'] == "10") {
                                                        echo "checked";
                                                    } ?> name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 1-5 ครั้ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['th_1'] == "20") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['th_1'] == "20") {
                                                          echo "checked";
                                                      } ?> name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 6-10 ครั้ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['th_1'] == "30") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['th_1'] == "30") {
                                                          echo "checked";
                                                      } ?> name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 10 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->
                                        <tr>
                                            <td></td>
                                            <td>2. อำเภอดำเนินการขับเคลื่อนนโยบายของ
สมาคมแม่บ้านมหาดไทยให้เกิดผลอย่าง
เป็นรูปธรรม 

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="10" <?php if ($data['th_2'] == "10") {
                                                        echo "checked";
                                                    } ?> name="th_2" id="th_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ใส่ผ้าไทยในการปฏิบัติงาน จำนวน 1 วัน/สัปดาห</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['th_2'] == "20") {
                                                        echo "checked";
                                                    } ?> name="th_2" id="th_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ใส่ผ้าไทยในการปฏิบัติงาน จำนวน 2 วัน/สัปดาห
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['th_2'] == "30") {
                                                        echo "checked";
                                                    } ?> name="th_2" id="th_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ใส่ผ้าไทยในการปฏิบัติงาน จำนวน 3 วัน/สัปดาห
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="40" <?php if ($data['th_2'] == "40") {
                                                        echo "checked";
                                                    } ?> name="th_2" id="th_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ใส่ผ้าไทยในการปฏิบัติงาน จำนวน 4 วัน/สัปดาห
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>3.มีการขับเคลื่อนการขยายผลโครงการ 
ณ ที่ว่าการอำเภอ/พื้นที่ดำเนินการที่อำเภอ
นำเสนอ เช่น จัดกิจกรรมแสดงแบบผ้าไทย/
กิจกรรมใส่ผ้าไทยไปวัด/กิจกรรมตักบาตร
ผ้าไทย เป็นต้น 

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['th_3'] == "0") {
                                                        echo "checked";
                                                    } ?> name="th_3" id="th_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการจัดกิจกรรมที่เกี่ยวข้อง</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['th_3'] == "10") {
                                                        echo "checked";
                                                    } ?> name="th_3" id="th_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง จำนวน 1-3 กิจกรรม
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['th_3'] == "20") {
                                                        echo "checked";
                                                    } ?> name="th_3" id="th_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง จำนวน 4-6 กิจกรรม 
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['th_3'] == "30") {
                                                        echo "checked";
                                                    } ?> name="th_3" id="th_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง จำนวน 7-10กิจกรรม
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">โครงการที่4 โครงการ “ครอบครัวมหาดไทย ใส่ใจสิ่งแวดล้อม” โดยการจัดทำ ถังขยะเปียก ลดโลกร้อน </td>
                                            <td>

                                                1. อำเภอมีการลงพื้นที่ตรวจเยี่ยม / ให้กำลังใจ 
/ เข้าร่วมกิจกรรมที่เกี่ยวข้องกับโครงการ 
ครอบครัวมหาดไทย ใส่ใจสิ่งแวดล้อม โดย
การจัดทำถังขยะเปียก ลดโลกร้อน 



                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['bin_1'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['bin_1'] == "0") {
                                                          echo "checked";
                                                      } ?> name="bin_1" id="bin_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการตรวจเยี่ยม/ลงพื้นที่</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['bin_1'] == "10") {
                                                        echo "checked";
                                                    } ?> name="bin_1" id="bin_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 1-5 ครั้ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['bin_1'] == "20") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['bin_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="bin_1" id="bin_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 6-10 ครั้ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['bin_1'] == "30") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['bin_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="bin_1" id="bin_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 10 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->
                                        <tr>
                                            <td></td>
                                            <td>2. อำเภอดำเนินการขับเคลื่อนนโยบายของ
สมาคมแม่บ้านมหาดไทยให้เกิดผลอย่าง
เป็นรูปธรรม

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="10" <?php if ($data['bin_2'] == "10") {
                                                        echo "checked";
                                                    } ?> name="bin_2" id="bin_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 0-25 ของครัวเรือนที่ดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['bin_2'] == "20") {
                                                        echo "checked";
                                                    } ?> name="bin_2" id="bin_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 26-50 ของครัวเรือนที่ดำเนินการ
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['bin_2'] == "30") {
                                                        echo "checked";
                                                    } ?> name="bin_2" id="bin_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 51-75 ของครัวเรือนที่ดำเนินการ
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="40" <?php if ($data['bin_2'] == "40") {
                                                        echo "checked";
                                                    } ?> name="bin_2" id="bin_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 76-100 ของครัวเรือนที่ดำเนินการ
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>3. มีการขับเคลื่อนการขยายผลโครงการ 
ณ ที่ว่าการอำเภอ/พื้นที่ดำเนินการที่อำเภอ
นำเสนอ

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['bin_3'] == "0") {
                                                        echo "checked";
                                                    } ?> name="bin_3" id="bin_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีส่วนราชการอื่นจัดทำถังขยะเปียกฯ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['bin_3'] == "10") {
                                                        echo "checked";
                                                    } ?> name="bin_3" id="bin_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ส่วนราชการอื่นจัดทำถังขยะเปียกฯ จำนวน 1-2 แห่ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['bin_3'] == "20") {
                                                        echo "checked";
                                                    } ?> name="bin_3" id="bin_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ส่วนราชการอื่นจัดทำถังขยะเปียกฯ จำนวน 3-4 แห่ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['bin_3'] == "30") {
                                                        echo "checked";
                                                    } ?> name="bin_3" id="bin_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ส่วนราชการอื่นจัดทำถังขยะเปียกฯ จำนวน 5แห่งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">โครงการที่5 โครงการให้ความช่วยเหลือผู้ยากไร้ อาทิ โครงการ “รถเข็นนั่ง ปันสุข”
การซ่อมแซมบ้านเรือนผู้ยากไร้ การมอบทุนการศึกษาแก่นักเรียนผู้ยากไร้ การมอบสิ่งของอุปโภค บริโภคแก่ผู้ยากไร้ เป็นต้น </td>
                                            <td>

                                                1. อำเภอมีการลงพื้นที่ตรวจเยี่ยม / ให้กำลังใจ 
/ เข้าร่วมกิจกรรมที่เกี่ยวข้องกับ โครงการ
ให้ความช่วยเหลือผู้ยากไร้ อาทิ โครงการ 
“รถเข็นนั่ง ปันสุข”การซ่อมแซมบ้านเรือนผู้
ยากไร้ การมอบทุนการศึกษาแก่นักเรียนผู้
ยากไร้ การมอบสิ่งของอุปโภค บริโภคแก่ผู้
ยากไร้ เป็นต้น



                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['homeless_1'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['homeless_1'] == "0") {
                                                          echo "checked";
                                                      } ?> name="homeless_1" id="homeless_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการตรวจเยี่ยม/ลงพื้นที่</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['homeless_1'] == "10") {
                                                        echo "checked";
                                                    } ?> name="homeless_1" id="homeless_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 1-5 ครั้ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['homeless_1'] == "20") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['homeless_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="homeless_1" id="homeless_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 6-10 ครั้ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['homeless_1'] == "30") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['homeless_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="homeless_1" id="homeless_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 10 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->
                                        <tr>
                                            <td></td>
                                            <td>2.  อำเภอดำเนินการขับเคลื่อนนโยบายของ
สมาคมแม่บ้านมหาดไทยให้เกิดผลอย่าง
เป็นรูปธรรม 

                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="10" <?php if ($data['homeless_2'] == "10") {
                                                        echo "checked";
                                                    } ?> name="homeless_2" id="homeless_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง 1 โครงการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['homeless_2'] == "20") {
                                                        echo "checked";
                                                    } ?> name="homeless_2" id="homeless_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง 2 โครงการ
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['homeless_2'] == "30") {
                                                        echo "checked";
                                                    } ?> name="homeless_2" id="homeless_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง 3 โครงการ
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="40" <?php if ($data['homeless_2'] == "40") {
                                                        echo "checked";
                                                    } ?> name="homeless_2" id="homeless_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">จัดกิจกรรมที่เกี่ยวข้อง 4 โครงการ
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>3. มีการขับเคลื่อนการขยายผลโครงการ 
ณ ที่ว่าการอำเภอ/พื้นที่ดำเนินการที่อำเภอ
นำเสนอ


                                            </td>
    
                                            <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['homeless_3'] == "0") {
                                                        echo "checked";
                                                    } ?> name="homeless_3" id="homeless_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีบูรณาการส่งต่อความช่วยเหลือ </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['homeless_3'] == "10") {
                                                        echo "checked";
                                                    } ?> name="homeless_3" id="homeless_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">บูรณาการส่งต่อความช่วยเหลือ จำนวน 1-3 กิจกรรม
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['homeless_3'] == "20") {
                                                        echo "checked";
                                                    } ?> name="homeless_3" id="homeless_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">บูรณาการส่งต่อความช่วยเหลือ จำนวน 4-6 กิจกรรม
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['homeless_3'] == "30") {
                                                        echo "checked";
                                                    } ?> name="homeless_3" id="homeless_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">บูรณาการส่งต่อความช่วยเหลือ จำนวน 7-10 กิจกรรม
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>
                                        
                                        

                                      


                                    </tbody>

                                </table>



                                <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                                <input type="hidden" name="rec_pid" value="<?= $user['pid']; ?>">
                                <input type="hidden" name="rec_name" value="<?= $user['username']; ?>">
                                <input type="hidden" name="action" value="<?= $action; ?>">
                                <button type="submit"
                                    class="btn btn-primary  mt-2 md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">เพิ่มข้อมูล</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>



<script>
$(document).ready(function() {
    $('#example').DataTable({
        "ordering": false,
        "paging": false,


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