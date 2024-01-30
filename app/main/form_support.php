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

$sql = "SELECT * FROM `assessment_support` WHERE `acode` = '" . $_REQUEST["acode"] . "'; ";
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
                    <form method="post" action="form_support_query.php">

                        <!--<table id="example" class="table-bordered table-responsive">-->
                        <!-- <h2 class="text-center  md:text-2xl text-3xl font-medium"></h2> -->
                        <h2 class=" text-center md:text-xl text-xl font-medium ">
                            ที่ทำการปกครองอำเภอ<?= @$_REQUEST['aname']; ?> จังหวัด<?= @$_REQUEST['pname']; ?>
                        </h2>
                        <h2 class=" text-center md:text-xl text-xl font-medium ">หัวข้อการประเมินหลัก 4.
                            อำเภอมีสภาพในการเป็นศูนย์การเรียนรู้</h2>
                        <div class="card">
                            <div class="card-body md:text-xl text-xl font-medium text-center">

                                <table class="table table-striped table-responsive" id="example">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 20%;" class="text-center">หัวข้อการประเมินย่อย</th>
                                            <th style="width: 20%;" class="text-center">ประเด็น</th>

                                            <th style="width: 30%;" class="text-center">ภาพถ่าย</th>
                                            <th style="width: 30%;" class="text-center">การประเมินให้คะแนน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: top;">1.
                                                บ้านนี้มีรักปลูกผัก กินเอง/ ทางนี้มีผลผู้คนรักกัน</td>
                                            <td>

                                                1. ผลการปฏิบัติงาน : มีแปลงผักสวนครัวต้นแบบอย่างน้อย 10 ชนิด
                                                ในพื้นที่ ของที่ว่าการอำเภอหรือศูนย์ราชการอำเภอ
                                                หรือมีการปลูกไม้ต้นหรือไม้ผลริมถนนในพื้นที่อำเภอ (ความยั่งยืนเชิงปริมาณ)
                                                อำเภอมีการปลูกผักสวนครัวต้นแบบอย่างน้อย 10 ชนิด ที่มีความหลากหลาย เช่น
                                                ไม้กิน ไม้หอม ไม้สมุนไพรฯ เป็นต้น
                                                หรือสนับสนุนให้มีการปลูกไม้ต้นหรือไม้ผลอย่างน้อย 3 ชนิด
                                                ซึ่งต้องมีความสวยงามทางกายภาพ และเกิดความยั่งยืนในเชิงปริมาณ

                                            </td>
                                            <td>
                                                <?php
                                 $filePath = '../../uploads/upload_sup/1_1' . @$_REQUEST["acode"] . "before.jpg";
                                 if (file_exists($filePath)) {
                                     ?>
                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                 } else {
                                     ?>


                                                    <?php
                                 }
                                 $filePath = '../../uploads/upload_sup/1_1' . @$_REQUEST["acode"] . "after.jpg";
                                 if (file_exists($filePath)) {
                                     ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                 } else {
                                     ?>


                                                <?php
                                 }

                                 ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_1'] == "0") {
        echo "checked";
    } ?> <?php if ($data['home_1'] == "0") {
          echo "checked";
      } ?> name="home_1" id="home_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการปลูกผักสวนครัวน้อยกว่า
                                                        10 ชนิด และมีการปลูกไม้ต้นหรือไม้ผลน้อยกว่า 3 ชนิด</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_1'] == "6") {
        echo "checked";
    } ?> name="home_1" id="home_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการปลูกผักสวนครัวมากกว่า
                                                        10 ชนิดขึ้นไป หรือมีการปลูก ไม้ต้นหรือไม้ผลมากกว่า 3 ชนิดขึ้นไป
                                                        ซึ่งมีการจัดรูปแปลงที่มีความสวยงามทางกายภาพสะท้อความยั่งยืนในเชิงปริมาณ
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_1'] == "12") {
        echo "checked";
    } ?> <?php if ($data['home_1'] == "12") {
           echo "checked";
       } ?> name="home_1" id="home_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการปลูกผักสวนครัวมากกว่า
                                                        15 ชนิดขึ้นไปและมีการปลูกไม้ต้นหรือไม้ผลมากกว่า 5 ชนิดขึ้นไป
                                                        ซึ่งมีการจัดรูปแปลงที่มีความสวยงามทางกายภาพสะท้อนความยั่งยืนในเชิงปริมาณ
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->
                                        <tr>
                                            <td></td>
                                            <td>2. ผลการปฏิบัติงาน :
                                                อำเภอมีการสร้างความต่อเนื่องในการปลูกผักสวนครัว
                                                อำเภอมีการสร้างความต่อเนื่องในการปลูกผักสวนครัว ได้แก่ การกำหนด
                                                ผู้รับผิดชอบหรือจัดตั้งกลุ่มจากภาคีเครือข่าย
                                                ในการบำรุงรักษาแปลงผักสวนครัว
                                                ที่มีความชัดเจนและต่อเนื่องด้วยความสมัครใจ
                                                (ความต่อเนื่อง)

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/1_2' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>


                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/1_2' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_2'] == "0") {
        echo "checked";
    } ?> name="home_2" id="home_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ปรากฏหลักฐานผู้รับผิดชอบ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['home_2'] == "3") {
        echo "checked";
    } ?> name="home_2" id="home_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ปรากฏหลักฐานผู้รับผิดชอบจากบุคลากรในที่ว่าการอำเภอ
                                                        หรือจากกลุ่มภาคีเครือข่ายที่ผ่านมา ไม่เกิน 3 เดือนย้อนหลัง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_2'] == "6") {
        echo "checked";
    } ?> name="home_2" id="home_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ปรากฏหลักฐานผู้รับผิดชอบจากบุคลากรในที่ว่าการอำเภอ
                                                        หรือจากกลุ่มภาคีเครือข่ายที่ผ่านมา มากกว่า 3 เดือนย้อนหลัง
                                                    </label>
                                                </div>
                                            </td>
                                            <!-- comment -->
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>3. ผลการปฏิบัติงาน :
                                                อำเภอมีการขยายผลและมีการถ่ายทอดองค์ความรู้
                                                การทำแปลงผักสวนครัว ในพื้นที่ของที่ว่าการอำเภอหรือศูนย์ราชการอำเภอ
                                                (การขยายผลและการถ่ายทอดองค์ความรู้)
                                                อำเภอมีการจัดตั้งธนาคารเมล็ดพันธุ์พืชเพื่อเก็บเมล็ดพันธุ์จนสามารถนำไปสู่
                                                การแบ่งปันภายในพื้นที่อำเภออย่างน้อย 1 แห่ง

                                            </td>
                                            <td>

                                                <?php
                                            $filePath = '../../uploads/upload_sup/1_3' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>


                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/1_3' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_3'] == "0") {
        echo "checked";
    } ?> name="home_3" id="home_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการขยายผลและการถ่ายทอดองค์ความรู้</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['home_3'] == "3") {
        echo "checked";
    } ?> name="home_3" id="home_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label class="ms-2 text-sm font-medium dark:text-gray-300">
                                                        มีการขยายผลและมีการถ่ายทอดองค์ความรู้การทำแปลงผักสวนครัว</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_3'] == "6") {
        echo "checked";
    } ?> name="home_3" id="home_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการขยายผลและมีการถ่ายทอดองค์ความรู้และการจัดตั้งธนาคารเมล็ดพันธ์</label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>4. ผลการปฏิบัติงาน :
                                                อำเภอมีการแจกจ่ายผลผลิตที่ได้จากแปลงผักสวนครัว
                                                ต้นแบบ (มีผู้ได้รับประโยชน์)
                                                อำเภอมีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่หน่วยงาน
                                                หรือชุมชนและครัวเรือนในพื้นที่ของที่ว่าการอำเภอหรือศูนย์ราชการอำเภอ
                                                อย่างเป็นรูปธรรม อย่างน้อย 2 แห่ง เพื่อให้เกิดความยั่งยืนเชิงคุณภาพ

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/1_4' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/1_4' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->

                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_4'] == "0") {
        echo "checked";
    } ?> name="home_4" id="home_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัว</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['home_4'] == "3") {
        echo "checked";
    } ?> name="home_4" id="home_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปใช้
                                                        แจกจ่ายบุคลากรในที่ว่าการอำเภอ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_4'] == "6") {
        echo "checked";
    } ?> name="home_4" id="home_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่
                                                        หน่วยงานหรือชุมชน จำนวน 1 แห่ง </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="9" <?php if ($data['home_4'] == "9") {
        echo "checked";
    } ?> name="home_4" id="home_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่
                                                        หน่วยงานหรือชุมชน จำนวน 2 แห่ง </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_4'] == "12") {
        echo "checked";
    } ?> name="home_4" id="home_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่
                                                        หน่วยงานหรือชุมชน จำนวนมากกว่า 2 แห่ง </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>5. ผลการปฏิบัติงาน : ผู้ได้รับประโยชน์มีการแจกจ่ายผลผลิตของตน
                                                ที่ได้รับ
                                                เมล็ดพันธุ์/ต้นกล้าจากแปลงผักสวนครัวต้นแบบ ไปสู่ผู้ได้รับประโยชน์ลำดับ
                                                ถัดไป (ผู้ได้รับประโยชน์ดำเนินการขยายผลต่อไป)
                                                ผู้ได้รับประโยชน์มีการแจกจ่ายผลผลิตของตน ที่ได้รับเมล็ดพันธุ์/ต้นกล้า
                                                จากแปลงผักสวนครัวต้นแบบ
                                                ไปสู่ผู้ได้รับผลประโยชน์ลำดับถัดไปอย่างเป็นรูปธรรม

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/1_5' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/1_5' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>

                                                    <?php
                                            } else {
                                                ?>


                                                    <?php
                                            }

                                            ?>

                                                </div>
                                                <!--end grid-->
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_5'] == "0") {
        echo "checked";
    } ?> name="home_5" id="home_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ผู้ได้รับประโยชน์จากแปลงผักสวนครัวต้นแบบ
                                                        ไม่มีการ
                                                        แจกจ่ายจ่ายผลผลิตไปสู่ผู้ได้รับประโยชน์ลำดับถัดไป</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_5'] == "12") {
        echo "checked";
    } ?> name="home_5" id="home_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ผู้ได้รับประโยชน์จากแปลงผักสวนครัวต้นแบบมีการแจกจ่าย
                                                        ผลผลิตไปสู่ผู้ได้รับผลประโยชน์อย่างเป็นรูปธรรม</label>
                                                </div>


                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>6. ผลการปฏิบัติงาน : อำเภอมีการปลูกผักสวนครัวโดยใช้กลไก 7 ภาคี
                                                เครือข่าย (การมีส่วนร่วม)
                                                อำเภอมีการใช้กลไกการมีส่วนร่วมจากภาคีเครือข่ายทั้ง 7 ภาคี ดำเนินการ
                                                ขับเคลื่อนแปลงผักสวนครัวต้นแบบ เช่น การทำแปลงผัก การดูแลแปลงผัก
                                                การพัฒนาองค์ความรู้ การเก็บเมล็ดพันธุ์
                                                การแจกจ่ายเมล็ดพันธุ์/ต้นกล้าพันธุ์
                                                เป็นต้น

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/1_6' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/1_6' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_6'] == "0") {
        echo "checked";
    } ?> name="home_6" id="home_6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการปลูกผักสวนครัวแต่ไม่มีมีส่วนร่วมจาก
                                                        7 ภาคีเครือข่าย</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_6'] == "6") {
        echo "checked";
    } ?> name="home_6" id="home_6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการปลูกผักสวนครัวโดยใช้กลไกการมีส่วนร่วมจาก
                                                        7 ภาคี เครือข่าย</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_6'] == "12") {
        echo "checked";
    } ?> name="home_6" id="home_6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการปลูกผักสวนครัวโดยใช้กลไกการมีส่วนร่วมจาก
                                                        7 ภาคี เครือข่าย ครบทุกภาคีเครือข่าย</label>
                                                </div>
                                            </td>

                                        </tr>



                                        <tr>

                                            <td style="vertical-align: top;">2.
                                                ผ้าไทยใส่ให้สนุก</td>
                                            <td>1. ผลการปฏิบัติงาน : การส่งเสริมกิจการ/กิจกรรม
                                                เกี่ยวกับผ้าไทยของชุมชน
                                                หรือกลุ่มวิสาหกิจชุมชนในพื้นที่ (ส่งเสริมการผลิตผ้าไทย)
                                                อำเภอมีการส่งเสริมกิจการหรือกิจกรรมที่เกี่ยวกับการทอผ้าไทยหรือการผลิตผ้าไทย
                                                ของชุมชนหรือกลุ่มวิสาหกิจชุมชน อย่างน้อย 2 แห่ง

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/2_1' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/2_1' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>


                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clothes_1'] == "0") {
        echo "checked";
    } ?> name="clothes_1" id="clothes_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการส่งเสริมกิจการหรือกิจกรรมเกี่ยวกับการทอผ้าไทย
                                                        หรือการผลิตผ้าไทยของชุมชนหรือกลุ่มวิสาหกิจชุมชน</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="1" <?php if ($data['clothes_1'] == "1") {
        echo "checked";
    } ?> name="clothes_1" id="clothes_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการส่งเสริมกิจการหรือกิจกรรมที่เกี่ยวกับการทอผ้าไทย
                                                        หรือการผลิตผ้าไทยของชุมชนหรือกลุ่มวิสาหกิจชุมชน จำนวน 1
                                                        แห่ง</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['clothes_1'] == "2") {
        echo "checked";
    } ?> name="clothes_1" id="clothes_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการส่งเสริมกิจการหรือกิจกรรมที่เกี่ยวกับการทอผ้าไทย
                                                        หรือการผลิตผ้าไทยของชุมชนหรือกลุ่มวิสาหกิจชุมชน จำนวน 2
                                                        แห่ง</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['clothes_1'] == "3") {
        echo "checked";
    } ?> name="clothes_1" id="clothes_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการส่งเสริมกิจการหรือกิจกรรมที่เกี่ยวกับการทอผ้าไทย
                                                        หรือการผลิตผ้าไทยของชุมชนหรือกลุ่มวิสาหกิจชุมชน จำนวนมากกว่า 2
                                                        แห่งขึ้นไป</label>
                                                </div>
                                            </td>
                                        </tr><!-- comment -->
                                        <tr>
                                            <td></td>
                                            <td>2. ผลการปฏิบัติงาน :
                                                การใช้ประโยชน์และเพิ่มมูลค่าจากทรัพยากรธรรมชาติ
                                                ในพื้นที่ผ่านการผลิตผ้าไทย (กระบวนการผลิตที่ดี)
                                                อำเภอมีการใช้ประโยชน์และเพิ่มพูนมูลค่าของทรัพยากรธรรมชาติในพื้นที่ เช่น
                                                การใช้วัตถุดิบจากธรรมชาติในพื้นที่ การไม่ใช้สารเคมีในกระบวนการผลิต
                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/2_2' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>


                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/2_2' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>

                                                    <?php
                                            } else {
                                                ?>


                                                    <?php
                                            }

                                            ?>

                                                </div>
                                                <!--end grid-->
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clothes_2'] == "0") {
        echo "checked";
    } ?> name="clothes_2" id="clothes_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการใช้ประโยชน์และเพิ่มพูนมูลค่าของทรัพยากรธรรมชาติ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="1" <?php if ($data['clothes_2'] == "1") {
        echo "checked";
    } ?> name="clothes_2" id="clothes_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผลิตผ้าไทยจากวัตถุดิบธรรมชาตินอกพื้นที่และมีการใช้
                                                        สารเคมีเข้ามาเกี่ยวข้องในกระบวนการผลิต</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['clothes_2'] == "2") {
        echo "checked";
    } ?> name="clothes_2" id="clothes_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผลิตผ้าไทยจากวัตถุดิบจากธรรมชาติในพื้นที่แต่ยังมี
                                                        การใช้สารเคมีเข้ามาเกี่ยวข้องในกระบวนการผลิต</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['clothes_2'] == "3") {
        echo "checked";
    } ?> name="clothes_2" id="clothes_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผลิตผ้าไทยจากวัตถุดิบจากธรรมชาตินอกพื้นที่และไม่มี
                                                        การใช้สารเคมีในกระบวนการผลิต</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['clothes_2'] == "4") {
        echo "checked";
    } ?> name="clothes_2" id="clothes_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผลิตผ้าไทยจากวัตถุดิบจากธรรมชาติในพื้นที่
                                                        และไม่มี การใช้สารเคมีในกระบวนการผลิต</label>
                                                </div>
                                            </td>

                                            <!-- comment -->
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>3. ผลการปฏิบัติงาน :
                                                ลายผ้าไทยในพื้นที่มีการแสดงเรื่องราวความเป็นมา
                                                ของลายผ้าไทย (การสร้างความหลากหลายทางวัฒนธรรม) อำเภอมีการต่อยอดลายผ้าไทย
                                                จากพื้นฐานรากเหง้าความเป็นมาของชุมชน และนํามา
                                                ประยุกต์ผสมผสานกับเทคโนโลยีและนวัตกรรม เพื่อให้สอดรับกับบริบททางเศรษฐกิจ

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/2_3' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>



                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/2_3' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clothes_3'] == "0") {
        echo "checked";
    } ?> name="clothes_3" id="clothes_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการต่อยอดลายผ้าไทย</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="1" <?php if ($data['clothes_3'] == "1") {
        echo "checked";
    } ?> name="clothes_3" id="clothes_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">เป็นการใช้ลายผ้าไทยแบบดั้งเดิม
                                                        บนพื้นฐานรากเหง้าความ เป็นมา
                                                        ยังไม่มีใช้เทคโนโลยีและนวัตกรรมเข้ามาเกี่ยวข้อง</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['clothes_3'] == "2") {
        echo "checked";
    } ?> name="clothes_3" id="clothes_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการต่อยอดลายผ้าไทย
                                                        บนพื้นฐานรากเหง้าความเป็นมา ของชุมชน
                                                        ยังไม่มีใช้เทคโนโลยีและนวัตกรรมเข้ามาเกี่ยวข้อง</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['clothes_3'] == "3") {
        echo "checked";
    } ?> name="clothes_3" id="clothes_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการต่อยอดลายผ้าไทย
                                                        จากเทคโนโลยีและนวัตกรรม
                                                        บนพื้นฐานรากเหง้าความเป็นมาของชุมชน</label>
                                                </div>
                                            </td>

                                            <!-- comment -->
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>4. ผลการปฏิบัติงาน : มีการจัดกิจกรรมรณรงค์สวมใส่ผ้าไทย
                                                (การส่งเสริมการ
                                                สวมใส่ผ้าไทย) อำเภอมีการรณรงค์ส่งเสริมการสวมใส่ผ้าไทย ผ่านช่องทางต่าง ๆ
                                                เช่น
                                                การกำหนดให้
                                                ส่วนราชการสวมใส่ผ้าไทยทุกวันพุธ การสนับสนุนให้นักเรียนสวมใส่ผ้าไทยทุกวัน
                                                ศุกร์ การจัดทำสื่อประชาสัมพันธ์ผ่านช่องทางต่าง ๆ ในพื้นที่ เป็นต้น

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/2_4' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/2_4' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clothes_4'] == "0") {
        echo "checked";
    } ?> name="clothes_4" id="clothes_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการรณรงค์สวมใส่ผ้าไทย</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['clothes_4'] == "2") {
        echo "checked";
    } ?> name="clothes_4" id="clothes_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการรณรงค์ส่งเสริมการสวมใส่ผ้าไทยในพื้นที่แต่ยังไม่มีการ
                                                        จัดทำสื่อประชาสัมพันธ์ผ่านช่องทางต่าง ๆ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['clothes_4'] == "4") {
        echo "checked";
    } ?> name="clothes_4" id="clothes_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการรณรงค์ส่งเสริมการสวมใส่ผ้าไทยในพื้นที่และมีการจัดทำ
                                                        สื่อประชาสัมพันธ์ผ่านช่องทางต่าง ๆ</label>
                                                </div>
                                            </td>

                                            <!-- comment -->
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>5. ผลการปฏิบัติงาน :
                                                การสร้างเศรษฐกิจชุมชนหรือกลุ่มวิสาหกิจชุมชน
                                                (การสร้างความยั่งยืนภายในชุมชน)
                                                ชุมชนหรือกลุ่มวิสาหกิจชุมชนสามารถสร้างแหล่งรายได้จากการผลิตผ้าไทย และมี
                                                ศักยภาพต่อเนื่อง จนสามารถมีเงินทุนหมุนเวียนสร้างผลตอบแทนคืนสู่ชุมชน
                                                หรือกลุ่มวิสาหกิจชุมชน โดยต้องแสดงหลักฐานเชิงประจักษ์
                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/2_5' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>


                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/2_5' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->

                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clothes_5'] == "0") {
        echo "checked";
    } ?> name="clothes_5" id="clothes_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ชุมชนหรือกลุ่มวิสาหกิจชุมชนยังไม่สามารถมีเงินทุน
                                                        หมุนเวียนสร้างผลตอบแทนคืนสู่ชุมชนได้</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['clothes_5'] == "6") {
        echo "checked";
    } ?> name="clothes_5" id="clothes_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ชุมชนหรือกลุ่มวิสาหกิจชุมชนสามารถแสดงหลักฐาน
                                                        การมีเงินทุนหมุนเวียน และผลตอบแทนจากผ้าไทยคืนสู่ชุมชน</label>
                                                </div>


                                            </td>

                                            <!-- comment -->
                                        </tr>






                                        <tr>

                                            <td style="vertical-align: top;">3.
                                                การให้ความช่วยเหลือ
                                                ผู้ยากไร้</td>
                                            <td>1. ผลการปฏิบัติงาน : การบันทึกและปรับปรุงข้อมูลจากฐานข้อมูลของ มท.
                                                อย่างสม่ำเสมอ (ปรับปรุงข้อมูลสม่ำเสมอ)
                                                อำเภอมีการบันทึกและปรับปรุงข้อมูลจากฐานข้อมูลผู้ยากไร้ตามที่ มท. กำหนด
                                                ครอบคลุมทั่วถึงในพื้นที่อย่างสม่ำเสมอ

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/3_1' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>


                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/3_1' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>



                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->

                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['support_1'] == "0") {
        echo "checked";
    } ?> name="support_1" id="support_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_1'] == "2") {
        echo "checked";
    } ?> name="support_1" id="support_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการดำเนินการบันทึกและปรับปรุงฐานข้อมูลฯ</label>
                                                </div>


                                            </td>
                                        </tr><!-- comment -->
                                        <tr>

                                            <td></td>
                                            <td>2. ผลการปฏิบัติงาน : มีการแต่งตั้งคณะกรรมการ/คณะทำงาน
                                                ที่เกี่ยวข้องกับการ
                                                ช่วยเหลือผู้ยากไร้ (แต่งตั้งคณะกรรมการ/คณะทำงานจาก 7 ภาคีเครือข่าย)
                                                อำเภอมีการแต่งตั้งคณะกรรมการ/คณะทำงาน ที่เกี่ยวข้องกับการช่วยเหลือ
                                                ผู้ยากไร้มีองค์ประกอบจาก 7 ภาคีเครือข่าย และมีการมอบหมายภารกิจ
                                                และอำนาจหน้าที่ที่ชัดเจน


                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/3_2' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>




                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/3_2' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['support_2'] == "0") {
        echo "checked";
    } ?> name="support_2" id="support_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_2'] == "2") {
        echo "checked";
    } ?> name="support_2" id="support_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแต่งตั้งคณะกรรมการ/คณะทำงาน
                                                        ที่เกี่ยวข้องฯ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['support_2'] == "4") {
        echo "checked";
    } ?> name="support_2" id="support_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแต่งตั้งคณะกรรมการ/คณะทำงาน
                                                        ที่เกี่ยวข้องฯ โดยมี องค์ประกอบจากภาคีเครือข่าย</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['support_2'] == "6") {
        echo "checked";
    } ?> name="support_2" id="support_2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแต่งตั้งคณะกรรมการ/คณะทำงาน
                                                        ที่เกี่ยวข้องฯ โดยมี องค์ประกอบจากภาคีเครือข่ายครบ 7
                                                        ภาคี</label>
                                                </div>
                                            </td>

                                            <!-- comment -->
                                        </tr>

                                        <tr>

                                            <td></td>
                                            <td>3. ผลการปฏิบัติงาน : มีเครือข่ายความร่วมมือที่เข้มแข็งในการสนับสนุน
                                                พัฒนาในการสร้างโอกาสและความเสมอภาค (เพิ่มโอกาสการเข้าถึงบริการภาครัฐ)
                                                อำเภอมีเครือข่ายความร่วมมือที่เข้มแข็ง
                                                มีการบูรณาการผ่านกลไกภาคีเครือข่าย
                                                ที่สนับสนุนดูแลและค้นหาผู้ยากไร้ในพื้นที่อย่างต่อเนื่อง
                                                มีกระบวนการส่งต่อการ
                                                ช่วยเหลือผู้ยากไร้ให้สามารถเข้าถึงบริการพื้นฐานทางสังคมของหน่วยงานภาครัฐ
                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/3_3' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>



                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/3_3' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['support_3'] == "0") {
        echo "checked";
    } ?> name="support_3" id="support_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="1" <?php if ($data['support_3'] == "1") {
        echo "checked";
    } ?> name="support_3" id="support_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการบูรณาการผ่านกลไกภาคีเครือข่าย
                                                        ดังนี้ <br>
                                                        - มีการสนับสนุนดูแลผู้ยากไร้ <br>
                                                        - ไม่มีการค้นหาผู้ยากไร้อย่างต่อเนื่อง <br>
                                                        - ไม่มีการส่งต่อกระบวนการช่วยเหลือผู้ยากไร้ให้สามารถ
                                                        เข้าถึงบริการพื้นฐานทางสังคมของหน่วยงานภาครัฐ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_3'] == "2") {
        echo "checked";
    } ?> name="support_3" id="support_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการบูรณาการผ่านกลไกภาคีเครือข่าย
                                                        ดังนี้ <br>
                                                        - มีการสนับสนุนดูแลผู้ยากไร้ <br>
                                                        - และมีการค้นหาผู้ยากไร้อย่างต่อเนื่อง <br>
                                                        - แต่ไม่มีการส่งต่อกระบวนการช่วยเหลือผู้ยากไร้ให้สามารถ
                                                        เข้าถึงบริการพื้นฐานทางสังคมของหน่วยงานภาครัฐ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['support_3'] == "3") {
        echo "checked";
    } ?> name="support_3" id="support_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการบูรณาการผ่านกลไกภาคีเครือข่าย
                                                        ดังนี้ <br>
                                                        - มีการสนับสนุนดูแลผู้ยากไร</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['support_3'] == "4") {
        echo "checked";
    } ?> name="support_3" id="support_3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการบูรณาการผ่านกลไกภาคีเครือข่าย
                                                        ดังนี้ <br>
                                                        - มีการสนับสนุนดูแลผู้ยากไร้ <br>
                                                        - และมีการค้นหาผู้ยากไร้อย่างต่อเนื่อง <br>
                                                        - และมีการส่งต่อกระบวนการช่วยเหลือผู้ยากไร้ให้สามารถ
                                                        เข้าถึงบริการพื้นฐานทางสังคมของหน่วยงานภาครัฐ <br>
                                                        - และมีหลักฐานปรากฎว่าผู้ยากไร้มีคุณภาพชีวิตที่ดีขึ้นจาก
                                                        การเข้าถึงบริการพื้นฐานทางสังคมของหน่วยงานภาครัฐ</label>
                                                </div>
                                            </td>

                                            <!-- comment -->
                                        </tr>

                                        <tr>

                                            <td></td>
                                            <td>4. ผลการปฏิบัติงาน :การจัดกิจกรรมส่งเสริมทักษะการใช้ชีวิตและการประกอบ
                                                อาชีพ (สร้างทักษะ/ส่งเสริมอาชีพ)
                                                อำเภอมีการบูรณาการร่วมกับภาคีเครือข่ายทั้ง 7 ภาคี
                                                จัดกิจกรรมส่งเสริมทักษะ
                                                การใช้ชีวิตและทักษะการประกอบอาชีพให้กับผู้ยากไร้ในพื้นที่อย่างต่อเนื่อง
                                                และสามารถแสดงผลสัมฤทธิ์เชิงประจักษ์ อย่างน้อย 2 บุคคล/ครัวเรือน

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/3_4' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>


                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/3_4' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['support_4'] == "0") {
        echo "checked";
    } ?> name="support_4" id="support_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_4'] == "2") {
        echo "checked";
    } ?> name="support_4" id="support_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการบูรณาการร่วมกับภาคีเครือข่ายทั้ง
                                                        7 ภาคี จัดกิจกรรม
                                                        ส่งเสริมทักษะการใช้ชีวิตและทักษะการประกอบอาชีพให้กับ ผู้ยากไร้
                                                        และสามารถแสดงผลสัมฤทธิ์เชิงประจักษ์ น้อยกว่า 2
                                                        บุคคล/ครัวเรือน</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['support_4'] == "4") {
        echo "checked";
    } ?> name="support_4" id="support_4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการบูรณาการร่วมกับภาคีเครือข่ายทั้ง
                                                        7 ภาคี จัดกิจกรรม
                                                        ส่งเสริมทักษะการใช้ชีวิตและทักษะการประกอบอาชีพให้กับ ผู้ยากไร้
                                                        และสามารถแสดงผลสัมฤทธิ์เชิงประจักษ์ มากกว่า 2
                                                        บุคคล/ครัวเรือน</label>
                                                </div>
                                            </td>

                                            <!-- comment -->
                                        </tr>
                                        <tr>

                                            <td></td>
                                            <td>5. . ผลการปฏิบัติงาน :
                                                มีผลสัมฤทธิ์จากการช่วยเหลือผู้ยากไร้ให้มีคุณภาพชีวิต
                                                ที่ดีขึ้นในเชิงประจักษ์ (การช่วยเหลืออย่างยั่งยืน)
                                                อำเภอสามารถแสดงผลสัมฤทธิ์เชิงประจักษ์
                                                จากการช่วยเหลือผู้ยากไร้ให้มีคุณภาพชีวิต
                                                ที่ดีอย่างยั่งยืน (ต้องเป็นมากกว่าการสงเคราะห์) อย่างน้อย 2
                                                บุคคล/ครัวเรือน

                                            </td>
                                            <td>
                                                <?php
                                            $filePath = '../../uploads/upload_sup/3_5' . @$_REQUEST["acode"] . "before.jpg";
                                            if (file_exists($filePath)) {
                                                ?>

                                                <div
                                                    class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>
                                                    <?php
                                            } else {
                                                ?>

                                                    <?php
                                            }
                                            $filePath = '../../uploads/upload_sup/3_5' . @$_REQUEST["acode"] . "after.jpg";
                                            if (file_exists($filePath)) {
                                                ?>
                                                    <div
                                                        class="group relative block overflow-hidden transition-all duration-500">
                                                        <a href="<?= $filePath ?>"
                                                            class="lightbox transition-all duration-500 group-hover:scale-105"
                                                            title="">
                                                            <img src="<?= $filePath ?>" class="" width="300"
                                                                height="300">
                                                        </a>
                                                    </div>



                                                </div>
                                                <!--end grid-->
                                                <?php
                                            } else {
                                                ?>


                                                <?php
                                            }

                                            ?>
                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['support_5'] == "0") {
        echo "checked";
    } ?> name="support_5" id="support_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_5'] == "2") {
        echo "checked";
    } ?> name="support_5" id="support_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีผลสัมฤทธิ์เชิงประจักษ์
                                                        จากการช่วยเหลือผู้ยากไร้ให้มี คุณภาพชีวิตที่ดีอย่างยั่งยืน
                                                        (ต้องเป็นมากกว่าการสงเคราะห์) น้อยกว่า 2 บุคคล/ครัวเรือน</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['support_5'] == "4") {
        echo "checked";
    } ?> name="support_5" id="support_5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีผลสัมฤทธิ์เชิงประจักษ์
                                                        จากการช่วยเหลือผู้ยากไร้ให้มี คุณภาพชีวิตที่ดีอย่างยั่งยืน
                                                        (ต้องเป็นมากกว่าการสงเคราะห์) มากกว่า 2 บุคคล/ครัวเรือน</label>
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