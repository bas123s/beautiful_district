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
                                            <th style="width: 20%;" class="text-center">หัวข้อการประเมินย่อย</th>
                                            <th style="width: 20%;" class="text-center">ประเด็น</th>
                                            <th style="width: 30%;" class="text-center">หลักฐานเชิงประจักษ์</th>

                                            <th style="width: 30%;" class="text-center">การประเมินให้คะแนน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: top;">3.1 อำเภอตรวจเยี่ยม/
ให้กำลังใจ/เข้าร่วมกิจกรรม
ที่สอดคล้องกับนโยบายสมาคมแม่บ้านมหาดไทย (มมท.)
 </td>
                                            <td>

                                                1.พิจารณาจากจำนวนการตรวจเยี่ยม/ให้กำลังใจ/เข้าร่วมกิจกรรมที่สอดคล้องกับนโยบาย มมท. ที่สำคัญ ของอำเภอ 
 

                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             
                                                <td>
                                                <a target="_blank" href="upload_m_view.php?id=<?= @$data['id']; ?>&pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>"  class="btn btn-primary   md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">ตรวจสอบหลักฐาน </a>
                                

                                            </td>
                                                <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['food_1'] == "0") {
                                                        echo "checked";
                                                    } ?>  name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ไม่มีการตรวจเยี่ยม/ลงพื้นที่</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="6" <?php if ($data['food_1'] == "6") {
                                                        echo "checked";
                                                    } ?> name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 2 ครั้ง
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['food_1'] == "12") {
                                                        echo "checked";
                                                    } ?> name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 4 ครั้ง
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="18" <?php if ($data['food_1'] == "18") {
                                                        echo "checked";
                                                    } ?>  name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 6 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="24" <?php if ($data['food_1'] == "24") {
                                                        echo "checked";
                                                    } ?>  name="food_1" id="food_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ตรวจเยี่ยม/ลงพื้นที่ 8 ครั้งขึ้นไป
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->

                                        <tr>
                                            <td style="vertical-align: top;">3.2 อำเภอขับเคลื่อนการขยายผลโครงการ ณ ที่ทำการปกครองอำเภอ/พื้นที่ดำเนินการที่ของอำเภอ </td>
                                            <td>

                                                1. พิจารณาจากร้อยละการขยายผลโครงการครอบคลุมไปยัง ร.ร. และ ศพด. ในสังกัด อปท. ในพื้นที่อำเภอ 



                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->
                                                <td>
                                

                                            </td>
                             

                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="6" <?php if ($data['clean_1'] == "6") {
                                                        echo "checked";
                                                    } ?>  name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 20</label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="12" <?php if ($data['clean_1'] == "12") {
                                                        echo "checked";
                                                    } ?> name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 40
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="18" <?php if ($data['clean_1'] == "18") {
                                                        echo "checked";
                                                    } ?>  name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 60
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="24" <?php if ($data['clean_1'] == "24") {
                                                        echo "checked";
                                                    } ?>  name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 80
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['clean_1'] == "30") {
                                                        echo "checked";
                                                    } ?>  name="clean_1" id="clean_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">ร้อยละ 100
                                                    </label>
                                                </div>
                                            </td>

                                        </tr><!-- comment -->

                                        <tr>
                                            <td style="vertical-align: top;">3.3 อำเภอขับเคลื่อนนโยบายของสมาคมแม่บ้านมหาดไทยให้เกิดผลเป็นรูปธรรม  </td>
                                            <td>
                                                1. พิจารณาจากจำนวนโครงการที่อำเภอขับเคลื่อนนโยบายที่สำคัญของ มมท. ที่เห็นผลเป็นรูปธรรม 
                                            </td>
                                        
                                        <!-- <td> <a
                                                href="inspector_view.php?pcode=<?= @$data['pcode']; ?>&acode=<?= @$data['acode']; ?>&aname=<?= @$data['aname']; ?>&pname=<?= @$data['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td> -->

                             
                                                <td>
                                

                                            </td>
                                            <td>
                                                <div class="flex item-left mb-4">
                                                    <input type="radio" value="0" <?php if ($data['th_1'] == "0") {
                                                        echo "checked";
                                                    } ?>  name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">0 โครงการ </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="10" <?php if ($data['th_1'] == "10") {
                                                        echo "checked";
                                                    } ?> name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">1 โครงการ 
                                                    </label>
                                                </div>

                                                <div class="flex item-left">
                                                    <input type="radio" value="20" <?php if ($data['th_1'] == "20") {
                                                        echo "checked";
                                                    } ?>  name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">2 โครงการ 
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="30" <?php if ($data['th_1'] == "30") {
                                                        echo "checked";
                                                    } ?>  name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">3 โครงการ 
                                                    </label>
                                                </div>
                                                <div class="flex item-left">
                                                    <input type="radio" value="40" <?php if ($data['th_1'] == "40") {
                                                        echo "checked";
                                                    } ?>  name="th_1" id="th_1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label
                                                        class="ms-2 text-sm font-medium dark:text-gray-300">4 โครงการ ขึ้นไป
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