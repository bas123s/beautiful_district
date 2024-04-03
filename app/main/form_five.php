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

//$mc->check_variable($_REQUEST, $_REQUEST);

$sql = "SELECT * FROM `assessment_5s` WHERE `acode` = '" . $_REQUEST["acode"] . "'; ";
$data = $mc->select_1($sql);
$sql2 = "SELECT * FROM `file_5s` WHERE `acode` = '" . $_REQUEST["acode"] . "'; ";
$data2 = $mc->select_1($sql);
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
                การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอและการอำนวยความสะดวกประชาชน </h2>
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
                                    <th style="width: 30%;" class="text-center">หัวข้อการประเมินย่อย</th>
                                    <th style="width: 30%;" class="text-center">ประเด็น</th>
                                    <th style="width: 20%;" class="text-center">หลักฐานเชิงประจักษ์</th>
                                    <th style="width: 20%;" class="text-center">การประเมิน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class=" " style="vertical-align: top;">2.1 ด้านสถานที่

                                    </td>
                                    <td class="">
                                    

                                    </td>
                                    <td>

                              
                                    </td>
                                    <td>
                                      


                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
<td class=" " style="vertical-align: top;">   
2.1.1 สะสาง : การแยกของที่ไม่ต้องการ /ไม่จำเป็นต้องใช้ ออกจากสิ่งที่ต้องการ
    /จำเป็นต้องใช้
</td>
<td class="">

</td>
<td>
</td>
<td>
 






</td>
<!-- comment -->
</tr><!-- comment -->
<tr>

<td class=" " style="vertical-align: top;">   
</td>
<td class="">

    <br>(1)มีการจัดเก็บอุปกรณ์และสิ่งของต่างๆ เป็นระเบียบเรียบร้อย (สะสางพื้นที่)


</td>
<td>
<a target="_blank" href="upload_5s_view.php?id=<?= @$data['id']; ?>&pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>"  class="btn btn-primary   md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">ตรวจสอบหลักฐาน </a>


</td>
<td>
    <div class="flex items-left mb-4">
        <input type="radio" value="5" <?php if ($data['s1_1'] == "5") {
            echo "checked";
        } ?> name="s1_1" id="s1_1"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
        <label
            class="ms-2 text-sm font-medium dark:text-gray-300">มีการจัดวางวัสดุอุปกรณ์สำนักงานอย่างเป็นระเบียบเรียบร้อย</label>
    </div>
    <div class="flex items-left">
        <input type="radio" value="5" <?php if ($data['s1_2'] == "5") {
            echo "checked";
        } ?> name="s1_2" id="s1_2"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
        <label
            class="ms-2 text-sm font-medium dark:text-gray-300">มีการจัดเรียงเอกสารเป็นหมวดหมู่พร้อมใช้งาน</label>
    </div>






</td>
<!-- comment -->
</tr><!-- comment -->
                                <tr>
                                    <td></td>
                                    <td class="">(2) มีผังสำนักงานส่วนราชการครบถ้วน และมีข้อมูลในป้ายประชาสัมพันธ์ เป็นปัจจุบัน
                                        (สะสางข้อมูล)



                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="5" <?php if ($data['s1_3'] == "5") {
                                                echo "checked";
                                            } ?> name="s1_3" id="s1_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีข้อมูลบุคลากรของส่วนราชการ
                                                ต่างๆ ครบถ้วน และเป็นปัจจุบัน</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s1_4'] == "5") {
                                                echo "checked";
                                            } ?> name="s1_4" id="s1_4"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการจัดแสดงข้อมูลที่บอร์ดประชาสัมพันธ์ของ
                                                ทปค.อ. อย่างชัดเจน</label>
                                        </div>

                                    </td>

                                    <!-- comment -->
                                </tr>

                                <!-- comment  ข้อที่ 2-->

                                <tr>

                                    <td class=" " style="vertical-align: top;">
                                        2.1.2 สะดวก : การจัดแบ่งหมวดหมู่และการจัดสถานที่
                                        โดยมีป้ายชี้บอกเพื่อให้ทราบข้อมูลหรือขั้นตอนที่สำคัญในการทำงาน
                                        รวมถึงอำนวยความสะดวกให้ผู้มาใช้บริการ
                                    </td>
                                    <td class="">
                                    </td>
                                 <td>
                                 

                                 </td>
                                    <td>
                        






                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>

<td class=" " style="vertical-align: top;">
</td>
<td class="">(1) มีสิ่งอำนวยความสะดวกทางกายภาพให้แก่ผู้รับบริการ โดยเฉพาะผู้พิการ
    สตรีมีครรภ์ และผู้สูงอายุ
</td>
<td>


</td>
<td>
    <div class="flex items-left mb-4">
        <input type="radio" value="5" <?php if ($data['s2_1'] == "5") {
            echo "checked";
        } ?> name="s2_1" id="s2_1"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
        <label class="ms-2 text-sm font-medium dark:text-gray-300">
            มีจุดแรกรับในการช่วยเหลืออำนวย ความสะดวกต่างๆ </label>
    </div>
    <div class="flex items-left">
        <input type="radio" value="5" <?php if ($data['s2_2'] == "5") {
            echo "checked";
        } ?> name="s2_2" id="s2_2"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
        <label class="ms-2 text-sm font-medium dark:text-gray-300">
            มีการออกแบบสถานที่ที่คำนึงถึงผู้พิการ สตรีมีครรภ์ และผู้สูงอายุ</label>
    </div>






</td>
<!-- comment -->
</tr><!-- comment -->
                                <tr>
                                    <td></td>
                                    <td class="">(2) มีแผนผังขั้นตอนการให้บริการที่ ชัดเจน ครบถ้วน (บริการสะดวก)


                                    </td>
                                  <td>
                                    
                                  </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="5" <?php if ($data['s2_3'] == "5") {
                                                echo "checked";
                                            } ?> name="s2_3" id="s2_3"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการแสดงแผนผังขั้นตอน
                                                การให้บริการในจุดที่สามารถ มองเห็นได้อย่างชัดเจน
                                            </label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s2_4'] == "5") {
                                                echo "checked";
                                            } ?> name="s2_4" id="s2_4"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีข้อมูลที่ครบถ้วนครอบคลุม
                                                ทุกภารกิจงาน (ทุกส่วน/ฝ่ายงาน) เป็นปัจจุบัน
                                            </label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s2_5'] == "5") {
                                                echo "checked";
                                            } ?> name="s2_5" id="s2_5"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีแผนผังและป้ายบอกทางภายในอาคาร
                                                ทปค.อ. ที่ชัดเจน ครบถ้วน(ติดต่อสะดวก)
                                            </label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s2_6'] == "5") {
                                                echo "checked";
                                            } ?> name="s2_6" id="s2_6"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการแสดงแผนผังและป้ายบอกทางภายในอาคาร
                                                ทปค.อ. ในจุดที่สามารถมองเห็นได้อย่างชัดเจนทุกภารกิจงาน
                                                (ทุกส่วน/ฝ่ายงาน)เป็นปัจจุบัน
                                            </label>
                                        </div>






                                    </td>

                                    <!-- comment -->
                                </tr>

                                <tr>
                                    <td> 2.1.3.สะอาด : การดูแลรักษาความสะอาดของพื้นที่ทำงานทั้งหมดอย่างสม่ำเสมอ รวมถึง
                                        การบำรุงรักษา เครื่องใช้อุปกรณ์ให้อยู่ในสภาพที่ใช้งานได้ตลอดเวลา </td>
                                    <td class="">
                                    </td>
                                   <td>
                                   

                                   </td>
                                    <td>
                                      
                                    </td>

                                    <!-- comment -->
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="">(1).ตัวอาคาร ทปค.อ. สะอาด เรียบร้อย สวยงาม และอยู่ในสภาพพร้อมใช้งาน
                                        (อาคารสะอาด)
                                    </td>
                                   <td>
                                   

                                   </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="5" <?php if ($data['s3_1'] == "5") {
                                                echo "checked";
                                            } ?> name="s3_1" id="s3_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการบำรุงรักษาตัวอาคาร
                                                ทปค.อ. ทั้งภายในและภายนอกให้มีความสะอาดเรียบร้อย สวยงาม
                                            </label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s3_2'] == "5") {
                                                echo "checked";
                                            } ?> name="s3_2" id="s3_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label class="ms-2 text-sm font-medium dark:text-gray-300">ตัวอาคาร ทปค.อ.
                                                อยู่ในสภาพพร้อมใช้งาน</label>
                                        </div>
                                    </td>

                                    <!-- comment -->
                                </tr>



                                <tr>

                                    <td class=" " style="vertical-align: top;">
                                    </td>
                                    <td class="">(2).สิ่งก่อสร้างถาวรวัตถุและสภาพแวดล้อม บริเวณโดยรอบ ทปค.อ. สะอาด
                                        เรียบร้อย สวยงาม และอยู่ในสภาพพร้อมใช้งาน(บริเวณสะอาด)

                                    </td>
                                    <td></td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="5" <?php if ($data['s3_3'] == "5") {
                                                echo "checked";
                                            } ?> name="s3_3" id="s3_3"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการบำรุงรักษาสิ่งก่อสร้างถาวรวัตถุและสภาพแวดล้อม
                                                บริเวณโดยรอบ ทปค.อ. สะอาด เรียบร้อย สวยงาม</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s3_4'] == "5") {
                                                echo "checked";
                                            } ?> name="s3_4" id="s3_4"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">สิ่งก่อสร้างถาวรวัตถุและสภาพแวดล้อม
                                                บริเวณโดยรอบ ทปค.อ. อยู่ในสภาพพร้อมใช้งาน</label>
                                        </div>
                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->



                                <tr>

                                    <td class=" " style="vertical-align: top;">2.1.4 สุขลักษณะ :
                                        การดูแลสถานที่ทำงานให้มีสภาพแวดล้อมที่ดี มีบรรยากาศน่าทำงาน
                                        และรักษามาตรฐานที่ดีของ 3ส แรกไว้ รวมถึงค้นหาสาเหตุต่างๆ
                                        เพื่อยกระดับมาตรฐานให้สูงขึ้น
                                    </td>
                                    <td class="">



                                    </td>
                              <td>
                              

                              </td>
                                    <td>
                                    
                                    </td>
                                </tr><!-- comment -->
                                
                                <tr>

                                    <td class=" " style="vertical-align: top;">
                                    </td>
                                    <td class="">(1).มีการปฏิบัติกิจกรรม สะสาง สะดวก สะอาด อย่างต่อเนื่อง



                                    </td>
                              <td>
                              

                              </td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="5" <?php if ($data['s4_1'] == "5") {
                                                echo "checked";
                                            } ?> name="s4_1" id="s4_1"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการปฏิบัติกิจกรรม
                                                สะสาง สะดวก สะอาด อย่างต่อเนื่อง</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s4_2'] == "5") {
                                                echo "checked";
                                            } ?> name="s4_2" id="s4_2"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการประเมินการปฏิบัติกิจกรรม
                                                สะสาง สะดวก สะอาด จากผู้บังคับบัญชา อย่างต่อเนื่อง
                                            </label>
                                        </div>
                                    </td>
                                </tr><!-- comment -->
                                <tr>
                                    <td>
                                    <td class="">(2).มีการติดตามผลการดำเนินกิจกรรม 5ส อยู่เสมอ เพื่อรักษามาตรฐาน


                                    </td>
                                 <td></td>
                                    <td>
                                        <div class="flex items-left mb-4">
                                            <input type="radio" value="5" <?php if ($data['s4_3'] == "5") {
                                                echo "checked";
                                            } ?> name="s4_3" id="s4_3"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการแต่งตั้งคณะกรรมการหรือผู้รับผิดชอบในการติดตามผลการดำเนินกิจกรรม
                                                5ส</label>
                                        </div>
                                        <div class="flex items-left">
                                            <input type="radio" value="5" <?php if ($data['s4_2'] == "5") {
                                                echo "checked";
                                            } ?> name="s4_4" id="s4_4"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                            <label
                                                class="ms-2 text-sm font-medium dark:text-gray-300">มีการรายงานผลการติดตามการดำเนินกิจกรรม
                                                5ส. ของคณะกรรมการหรือผู้รับผิดชอบ อย่างสม่ำเสมอ
                                            </label>
                                        </div>
                                    </td>

                                    <!-- comment -->
                                </tr>




                                <tr>

                                    <td class=" " style="vertical-align: top;">2.1.5 สร้างวินัย : การดำเนินกิจกรรม 5ส
                                        อย่างต่อเนื่องเป็นปกติจนกลาย เป็นนิสัย
                                    </td>
                                    <td class="">




                                    </td>
                                 <td>
                                 

                                 </td>
                                    <td>
                                       
                                    </td>
                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>

<td class=" " style="vertical-align: top;">
</td>
<td class="">(1).จัดกิจกรรมส่งเสริมกิจกรรม 5ส




</td>
<td>


</td>
<td>
    <div class="flex items-left mb-4">
        <input type="radio" value="5" <?php if ($data['s5_1'] == "5") {
            echo "checked";
        } ?> name="s5_1" id="s5_1"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
        <label
            class="ms-2 text-sm font-medium dark:text-gray-300">มีการประกวดหรือมอบรางวัล</label>
    </div>
    <div class="flex items-left">
        <input type="radio" value="5" <?php if ($data['s5_2'] == "5") {
            echo "checked";
        } ?> name="s5_2" id="s5_2"
            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
        <label
            class="ms-2 text-sm font-medium dark:text-gray-300">ผู้บริหารเข้าร่วมและสนับสนุน
            การจัดกิจกรรมส่งเสริมกิจกรรม 5ส</label>
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