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

//$mc->check_variable($_REQUEST, $_REQUEST);

$sql = "SELECT * FROM `assessment_5s` WHERE `acode` = '" . $_REQUEST["acode"] . "'; ";
$data = $mc->select_1($sql);
//$mc->check_array($data, $sql);
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-3">

            <!-- <h2 class="text-center  md:text-2xl text-3xl font-medium"></h2> -->
            <h2 class=" text-center md:text-xl text-xl font-medium ">ที่ทำการปกครองอำเภอ
                <?= @$user['aname']; ?> จังหวัด
                <?= @$user['aname']; ?>
            </h2>
            <h2 class=" text-center md:text-xl text-xl font-medium ">หัวข้อการประเมินหลัก 2.
                การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.) และอำนวยความสะดวกแก่ประชาชน</h2>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">


                    <form method="post" action="form_5s_query.php">

                        <input type="hidden" name="pcode" value="<?= $_REQUEST["pcode"]; ?>">
                        <input type="hidden" name="pname" value="<?= $_REQUEST["pname"]; ?>">
                        <input type="hidden" name="acode" value="<?= $_REQUEST["acode"]; ?>">
                        <input type="hidden" name="aname" value="<?= $_REQUEST["aname"]; ?>">

                        <table class="table table-striped table-responsive" id="example">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 15%;" class="text-center">หัวข้อการประเมินย่อย</th>
                                    <th style="width: 30%;" class="text-center">ประเด็น</th>
                                    <th style="width: 40%;" class="text-center">รูปภาพ ก่อนและหลัง</th>
                                    <th style="width: 15%;" class="text-center">การประเมิน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;" >1.สะสาง

                                    </td>
                                    <td class="">
                                        1. มีการจัดเก็บอุปกรณ์และสิ่งของต่างๆ เป็นระเบียบเรียบร้อย


                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/1_1' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/1_1' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s1_1'] == "0") {
                                                echo "checked";
                                            } ?> name="s1_1" id="s1_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s1_1'] == "10") {
                                                echo "checked";
                                            } ?> name="s1_1" id="s1_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>






                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                <td></td>
                                    <td class="">2.
                                        ข้อมูลผังสำนักงานของส่วนราชการและป้ายประชาสัมพันธ์เป็นปัจจุบัน



                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/1_2' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/1_2' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s1_2'] == "0") {
                                                echo "checked";
                                            } ?> name="s1_2" id="s1_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s1_2'] == "10") {
                                                echo "checked";
                                            } ?> name="s1_2" id="s1_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>

                                    </td>
                                    
                                    <!-- comment -->
                                </tr>
                           
                            <!-- comment  ข้อที่ 2-->
                           
                                <tr>

                                    <td class=" " style="vertical-align: top;">2.สะดวก
                                    </td>
                                    <td class="">1.มีสิ่งอำนวยความสะดวกทางกายภาพที่คำนึงถึงผู้พิการและผู้สูงอายุ เช่น
                                        ที่จอดรถ ทางลาด ประตู ห้องน้ำ รถเข็น และสถานที่ติดต่อหรือประชาสัมพันธ์เป็นต้น


                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/2_1' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/2_1' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s2_1'] == "0") {
                                                echo "checked";
                                            } ?> name="s2_1" id="s2_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s2_1'] == "10") {
                                                echo "checked";
                                            } ?> name="s2_1" id="s2_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>






                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td></td>
                                    <td class="">2. มีการแสดงแผนผังขั้นตอนการให้บริการ


                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/2_2' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/2_2' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s2_2'] == "0") {
                                                echo "checked";
                                            } ?> name="s2_2" id="s2_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s2_2'] == "10") {
                                                echo "checked";
                                            } ?> name="s2_2" id="s2_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>






                                    </td>
                                    
                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td>
                                    <td class="">3. มีการแสดงแผนผังอำเภอและป้ายบอกทางภายในอาคาร


                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/2_3' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/2_3' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s2_3'] == "0") {
                                                echo "checked";
                                            } ?> name="s2_3" id="s2_3"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s2_3'] == "10") {
                                                echo "checked";
                                            } ?> name="s2_3" id="s2_3"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>
                                    </td>
                                    
                                    <!-- comment -->
                                </tr>



                         
                                <tr>

                                    <td class=" " style="vertical-align: top;">3.สะอาด
                                    </td>
                                    <td class="">1.มีการบำรุงดูแลรักษาตัวอาคารที่ว่าการอำเภอให้สะอาดเรียบร้อย สวยงาม
                                        และอยู่ในสภาพพร้อมใช้งาน
                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/3_1' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/3_1' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s3_1'] == "0") {
                                                echo "checked";
                                            } ?> name="s3_1" id="s3_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s3_1'] == "10") {
                                                echo "checked";
                                            } ?> name="s3_1" id="s3_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>
                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                    <td>
                                    <td class="">2.มีการปรับปรุงรักษาสิ่งก่อสร้างหรือถาวรวัตถุ
                                        จัดระเบียบและรักษาความสะอาดเรียบร้อยบริเวณสภาพแวดล้อมโดบรอบที่ทำการปกครองอำเภอ



                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/3_2' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/3_2' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s3_2'] == "0") {
                                                echo "checked";
                                            } ?> name="s3_2" id="s3_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s3_2'] == "10") {
                                                echo "checked";
                                            } ?> name="s3_2" id="s3_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>
                                    </td>
                                    
                                    <!-- comment -->
                                </tr>


                                <tr>

                                    <td class=" " style="vertical-align: top;">4.สุขลักษณะ
                                    </td>
                                    <td class="">1. กำหนดให้มีการปฏิบัติกิจกรรมโดยเฉพาะ สะสาง สะดวก สะอาดอย่างต่อเนื่อง



                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/4_1' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/4_1' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s4_1'] == "0") {
                                                echo "checked";
                                            } ?> name="s4_1" id="s4_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s4_1'] == "10") {
                                                echo "checked";
                                            } ?> name="s4_1" id="s4_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>
                                    </td>
                                </tr><!-- comment -->
                                <tr>
                                    <td>
                                    <td class="">2. แต่งตั้งคณะกรรมการติดตามผลการดำเนินกิจกรรม 5ส เพื่อรักษามาตรฐาน


                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/4_2' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/4_2' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s4_2'] == "0") {
                                                echo "checked";
                                            } ?> name="s4_2" id="s4_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s4_2'] == "10") {
                                                echo "checked";
                                            } ?> name="s4_2" id="s4_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>
                                    </td>
                                    
                                    <!-- comment -->
                                </tr>




                                <tr>

                                    <td class=" " style="vertical-align: top;" >5. สร้างวินัย
                                    </td>
                                    <td class="">1.จัดกิจกรรมส่งเสริมกิจกรรม 5ส เช่น การประกวดพื้นที่และมอบรางวัล




                                    </td>
                                    <td>
                                        <?php
                                        $filePath = '../../uploads/upload_5s/5_1' . @$_REQUEST["acode"] . "before.jpg";
                                        if (file_exists($filePath)) {
                                            ?>
                                            <div class="grid md:grid-cols-2 grid-cols-1 justify-center mx-auto mt-8">
                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>
                                                <?php
                                        } else {
                                            ?>


                                                <?php
                                        }
                                        $filePath = '../../uploads/upload_5s/5_1' . @$_REQUEST["acode"] . "after.jpg";
                                        if (file_exists($filePath)) {
                                            ?>

                                                <div
                                                    class="group relative block overflow-hidden transition-all duration-500">
                                                    <a href="<?= $filePath ?>"
                                                        class="lightbox transition-all duration-500 group-hover:scale-105"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="300" height="300">
                                                    </a>
                                                </div>



                                            </div><!--end grid-->
                                            <?php
                                        } else {
                                            ?>


                                            <?php
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="0" <?php if ($data['s5_1'] == "0") {
                                                echo "checked";
                                            } ?> name="s5_1" id="s5_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ผ่าน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="10" <?php if ($data['s5_1'] == "10") {
                                                echo "checked";
                                            } ?> name="s5_1" id="s5_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ผ่าน</label>
                                        </div>
                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->



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
                        <input type="hidden" name="created_date" value="<?= $user['pid']; ?>">
                        <input type="hidden" name="update_date" value="<?= $user['username']; ?>">
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
        "ordering": false,
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