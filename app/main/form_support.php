<?php
$title = "แบบประเมินการประกวด “อำเภอสวยงาม” ตามโครงการ
“อำเภอสวยงาม” ประจำปี พ.ศ. 2566";
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';


$action = "UPDATE";

require_once ("../../require/response3.php");
unset($province["03"]);
unset($province["99"]);
unset($province["10"]);

if (!isset ($_REQUEST["pcode"])) {
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
                            ที่ทำการปกครองอำเภอ
                            <?= @$_REQUEST['aname']; ?> จังหวัด
                            <?= @$_REQUEST['pname']; ?>
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

                                            <th style="width: 30%;" class="text-center">หลักฐานเชิงประจักษ์</th>
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
                                            <a target="_blank" href="upload_sup_view.php?id=<?= @$data['id']; ?>&pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>"  class="btn btn-primary   md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">ตรวจสอบหลักฐาน </a>

                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_1'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['home_1'] == "0") {
                                                          echo "checked";
                                                      } ?> name="home_1" id="home_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผักสวนครัวน้อยกว่า
                                                        5 ชนิด </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_1'] == "6") {
                                                        echo "checked";
                                                    } ?> name="home_1" id="home_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผักสวนครัวมากกว่า
                                                        5 ชนิด
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_1'] == "12") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['home_1'] == "12") {
                                                          echo "checked";
                                                      } ?> name="home_1" id="home_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการผักสวนครัวมากกว่า
                                                        10 ชนิด
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->
                                        <tr>
                                            <td style="vertical-align: top;"></td>
                                            <td>
                                                ผลการปฏิบัติงาน : มีจำนวนชนิดของไม้ผลริมถนนในพื้นที่อำเภอ
                                            </td>
                                            <td>
                                  

                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_6'] == "0") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['home_6'] == "0") {
                                                          echo "checked";
                                                      } ?> name="home_6" id="home_6"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม้ผลน้อยกว่า
                                                        3 ชนิด </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_6'] == "6") {
                                                        echo "checked";
                                                    } ?> name="home_6" id="home_6"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม้ผลมากกว่า
                                                        3 ชนิด
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_6'] == "12") {
                                                        echo "checked";
                                                    } ?> <?php if ($data['home_6'] == "12") {
                                                          echo "checked";
                                                      } ?> name="home_6" id="home_6"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม้ผลมากกว่า
                                                        5 ชนิด
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
                                  

                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_2'] == "0") {
                                                        echo "checked";
                                                    } ?> name="home_2" id="home_2"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่ปรากฏหลักฐานผู้รับผิดชอบ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_2'] == "6") {
                                                        echo "checked";
                                                    } ?> name="home_2" id="home_2"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ปรากฏหลักฐานผู้รับผิดชอบจากบุคลากรในที่ว่าการอำเภอน้อยกว่า
                                                        3 เดือนย้อนหลัง

                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_2'] == "12") {
                                                        echo "checked";
                                                    } ?> name="home_2" id="home_2"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
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
                                  

                                         </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_3'] == "0") {
                                                        echo "checked";
                                                    } ?> name="home_3" id="home_3"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการขยายผลและการถ่ายทอดองค์ความรู้</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_3'] == "6") {
                                                        echo "checked";
                                                    } ?> name="home_3" id="home_3"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label class="ms-2 text-sm font-medium dark:text-gray-300">
                                                        มีการขยายผลและมีการถ่ายทอดองค์ความรู้การทำแปลงผักสวนครัว</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_3'] == "12") {
                                                        echo "checked";
                                                    } ?> name="home_3" id="home_3"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการขยายผลและมีการถ่ายทอดองค์ความรู้การทำแปลงผักสวนครัวและการจัดทำศูนย์รวมเมล็ดพันธุ์และพันธุ์พืช</label>
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
                                  

                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['home_4'] == "0") {
                                                        echo "checked";
                                                    } ?> name="home_4" id="home_4"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัว</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['home_4'] == "3") {
                                                        echo "checked";
                                                    } ?> name="home_4" id="home_4"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปใช้
                                                        แจกจ่ายบุคลากรในที่ว่าการอำเภอ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['home_4'] == "6") {
                                                        echo "checked";
                                                    } ?> name="home_4" id="home_4"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่
                                                        หน่วยงานหรือชุมชน จำนวน 1 แห่ง </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="9" <?php if ($data['home_4'] == "9") {
                                                        echo "checked";
                                                    } ?> name="home_4" id="home_4"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่
                                                        หน่วยงานหรือชุมชน จำนวน 2 แห่ง </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['home_4'] == "12") {
                                                        echo "checked";
                                                    } ?> name="home_4" id="home_4"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการแจกจ่ายผลผลิตจากแปลงผักสวนครัวต้นแบบไปสู่
                                                        หน่วยงานหรือชุมชน จำนวนมากกว่า 2 แห่ง </label>
                                                </div>
                                            </td>

                                        </tr>




                                        <tr>

                                            <td style="vertical-align: top;">2.
                                                ผ้าไทยใส่ให้สนุก</td>
                                            <td>1. ผลการปฏิบัติงาน : มีการรณรงค์สวมใส่ผ้าไทย
                                                เพื่อเป็นต้นแบบ (การส่งเสริมการสวมใส่ผ้าไทย)


                                            </td>
                                          <td>
                                  

                                          </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['clothes_1'] == "0") {
                                                        echo "checked";
                                                    } ?> name="clothes_1" id="clothes_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการรณรงค์สวมใส่ผ้าไทยในพื้นที่
                                                        แต่ไม่มีการจัดทำสื่อประชาสัมพันธ์ผ่านช่องทางต่างๆ </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['clothes_1'] == "10") {
                                                        echo "checked";
                                                    } ?> name="clothes_1" id="clothes_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการรณรงค์สวมใส่ผ้าไทยในพื้นที่
                                                        แต่ไม่มีการจัดทำสื่อประชาสัมพันธ์ผ่านช่องทางต่างๆ</label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['clothes_1'] == "20") {
                                                        echo "checked";
                                                    } ?> name="clothes_1" id="clothes_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการรณรงค์สวมใส่ผ้าไทยในพื้นที่
                                                        และมีการจัดทำสื่อประชาสัมพันธ์
                                                        ผ่านช่องทางต่างๆ
                                                    </label>
                                                </div>

                                            </td>
                                        </tr><!-- comment -->







                                        <tr>

                                            <td style="vertical-align: top;">3.
                                                การบริหารจัดการขยะ
                                                ถังขยะเปียกลดโลกร้อน
                                                และธนาคารขยะ
                                            </td>
                                            <td>1. ผลการปฏิบัติงาน : พิจารณาจากผลการดำเนินโครงการบริหารจัดการขยะ
                                                ถังขยะเปียกลดโลกร้อน และธนาคารขยะ เพื่อให้อำเภอเป็นศูนย์การเรียนรู้
                                                เปรียบเทียบกับตามหลักเกณฑ์ที่กำหนดในแต่ละประเด็น

                                            </td>
                                            <td>
                                  

                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['support_1'] == "0") {
                                                        echo "checked";
                                                    } ?> name="support_1" id="support_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการดำเนินการ</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_1'] == "3") {
                                                        echo "checked";
                                                    } ?> name="support_1" id="support_1"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการสร้างจุดคัดแยกขยะและ
                                                        มีถังขยะเปียกลดโลกร้อนถูกต้องตามหลักวิชาการ
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_2'] == "2") {
                                                        echo "checked";
                                                    } ?> name="support_2" id="support_2"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการจัดกิจกรรมส่งเสริมองค์ความรู้การจัดทำถังขยะเปียก
                                                        ลดโลกร้อน
                                                        ให้คำแนะนำกับครัวเรือนและชุมชน
                                                        ในพื้นที่ผ่านกลไก 7 ภาคีเครือข่าย

                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_3'] == "2") {
                                                        echo "checked";
                                                    } ?> name="support_3" id="support_3"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการสร้างความตระหนักรู้และสนับสนุนการจัดทำถังขยะเปียก
                                                        ลดโลกร้อน

                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="2" <?php if ($data['support_4'] == "2") {
                                                        echo "checked";
                                                    } ?> name="support_4" id="support_4"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีแผนการขับเคลื่อนการทำถังขยะเปียกลดโลกร้อน
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['support_5'] == "4") {
                                                        echo "checked";
                                                    } ?> name="support_5" id="support_5"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการจัดกิจกรรมเกี่ยวกับสร้างนิสัยการคัดแยกขยะ
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="3" <?php if ($data['support_6'] == "3") {
                                                        echo "checked";
                                                    } ?> name="support_6" id="support_6"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการนำขยะรีไซเคิลกลับมาใช้ใหม่
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="4" <?php if ($data['support_7'] == "4") {
                                                        echo "checked";
                                                    } ?> name="support_7" id="support_7"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">มีการส่งเสริมการสร้างรายได้จากการคัดแยกขยะ
                                                    </label>
                                                </div>
                                            </td>
                                        </tr><!-- comment -->


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
    $(document).ready(function () {
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