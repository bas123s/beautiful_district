<?php
$title = "แบบประเมินความพึงพอใจการให้บริการประชาชน";
//require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;

if (isset($_REQUEST["id"]) && ($_REQUEST["id"] !== "")) {
    // $title = "แก้ไข" . @$_REQUEST["gun_id"];
    $action = "UPDATE";
    $sql = "SELECT * FROM `assessment_services` WHERE `id` = '" . $_REQUEST["id"] . "'; ";
    $data = $mc->select_1($sql);
    //$mc->check_array($data, "data");
} else {
    $title = "เพิ่มข้อมูล";
    $action = "INSERT";
}
?>


<section class="relative  md:py-24 py-16">
    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
        <h2 class="text-center  md:text-2xl text-3xl font-medium">แบบประเมินความพึงพอใจการให้บริการประชาชน</h2>
        <h2 class=" text-center md:text-xl text-xl font-medium ">คำชี้แจง : แบบสอบถามนี้จัดทำขึ้นเพื่อเป็นข้อมูลในการปรับปรุงและพัฒนาการให้บริการของที่ทำการปกครองอำเภอ
        </h2>
        <h2 class=" text-center md:text-xl text-xl font-medium ">แบบประเมินความพึงพอใจการให้บริการประชาชน</h2>
        <div class="card container">
            <div class="card-body md:text-xl text-xl font-medium text-center">

                <div class="container mx-auto px-4  relative">
                    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
                        <div class="card container  " style="  text-align: left;   ">
                            <form id ="search_dopa" name="search_dopa" action="form_dopa.php">
                                <div class="card-body md:text-xl text-xl font-medium text-left">
                                    <div class="container-fluid mt-3">
                                        <h1>  ส่วนที่ 1 ข้อมูลทั่วไปของผู้เข้ารับบริการ</h1>
                                        <p>เพื่อนำข้อมูลที่ได้รับไปปรับปรุงและพัฒนาการให้บริการของที่ทำการปกครองอำเภอ ให้สอดคล้อง
                                            กับกลุ่มเป้าหมาย โปรดทำเครื่องหมาย ✓ ในช่องตามความเป็นจริง</p>
                                        <div class="row">
                                            <div>1. อายุของผู้เข้ารับบริการ</div>
                                            <div class="row">
                                                <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                    <label for="age1">ต่ำกว่า 20 ปี </label></div>
                                                <div class="col p-4"><input type="radio" id="age2" name="age" value="60">
                                                    <label for="age2">20-30 ปี</label></div>
                                                <div class="col p-4"> <input type="radio" id="age3" name="age" value="100">
                                                    <label for="age3">31-40 ปี</label></div>
                                            </div>
                                            <div class="row">
                                                <div <div class="col p-4">   <input type="radio" id="age3" name="age" value="100">
                                                    <label for="age3">41-50 ปี</label></div><!-- comment -->
                                                <div <div class="col p-4">  <input type="radio" id="age3" name="age" value="100">
                                                    <label for="age3">51-60 ปี</label></div><!-- comment -->
                                                <div class="col p-4"><input type="radio" id="age3" name="age" value="100">
                                                    <label for="age3">60 ปีขึ้นไป</label></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div>2. เงื่อนไขของผู้เข้ารับบริการ</div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">ทั่วไป</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">ผู้พิการ</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">ผู้สูงอายุ</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">นักบวช/นักพรต</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">สตรีมีครรภ์</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">อื่น ๆ</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">อื่น ๆ</label></div>
                                        </div>
                                    </div>
                                    <div class="container-fluid mt-3">
                                        <h1>  ส่วนที่ 2 ข้อมูลทั่วไปของหน่วยงานให้บริการ</h1>
                                        <div class="row">
                                            <div>1. หน่วยงานที่มาเข้ารับบริการ</div>

                                            <div>
                                                <label for="age1">จังหวัด </label>
                                                <select></select>

                                            </div>
                                            <div>
                                                <label for="age1">ที่ทำการปกครองอำเภอ </label>
                                                <select></select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>2. ประเภทงานที่มารับบริการ</div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">งานทะเบียนและบัตรประจำตัวประชาชน (เช่น งานทะเบียนราษฎร 				      งานบัตรประจำตัวประชาชน งานทะเบียนต่าง ๆ เป็นต้น)</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">ศูนย์ดำรงธรรมอำเภอ (เช่น การไกล่เกลี่ย การร้องทุกข์ การปรึกษาข้อกฎหมาย เป็นต้น)</label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">งานปกครอง (เช่น งานอนุมัติอนุญาตทางปกครอง งานอาวุธปืน
                                                    งานโรงแรม งานค้าของเก่า เป็นต้น)
                                                </label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">งานความมั่นคง (เช่น งานรักษาความสงบเรียบร้อย งานยาเสพติด
                                                    งานหนังสือผ่านแดน เป็นต้น)
                                                </label></div>
                                            <div class="col p-4"><input type="radio" id="age1" name="age" value="30">
                                                <label for="age1">งานสำนักงานอำเภอ (เช่น การสอบทายาท การเสนอโครงการ เป็นต้น)</label></div>
                                        </div>
                                    </div>
                                    <div class="container-fluid mt-3">
                                        <h1>  ส่วนที่ 2 ข้อมูลทั่วไปของหน่วยงานให้บริการ</h1>
                                        <div class="row">
                                            <div>1. หน่วยงานที่มาเข้ารับบริการ</div>

                                            <div>
                                                <label for="age1">จังหวัด </label>
                                                <select></select>

                                            </div>
                                            <div>
                                                <label for="age1">ที่ทำการปกครองอำเภอ </label>
                                                <select></select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>3. การสำรวจความพึงพอใจ</div>
                                            <p>ท่านมีความพึงพอใจกับการให้บริการของที่ทำการปกครองอำเภอในระดับใด โปรดทำเครื่องหมาย ✓ ในช่องคะแนนดังนี้</p>
                                            <table class="table table-striped table-bordered table-responsive">
                                                <thead>
                                                    <tr class="">
                                                        <th rowspan="2" class="px-4 py-2 text-center">ประเด็นการสำรวจความพึงพอใจ</th>
                                                        <th colspan="5" class="px-4 py-2 text-center">ระดับความพึงพอใจ</th>
                                                    </tr>
                                                    <tr>
                                                        <th>น้อยที่สุด 1 </th>
                                                        <th>น้อย 2 </th><!-- comment -->
                                                        <th>ปานกลาง 3 </th>
                                                        <th>มาก 4 </th>
                                                        <th>มากที่สุด 5 </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="px-4 py-2" colspan="5">1. ด้านสถานที่ (มีสิ่งอำนวยความสะดวก และความสะอาด) </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">1.1 สถานที่มีสิ่งอำนวยความสะดวก </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">1.2 สถานที่มีความสะอาด</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">1.3 ห้องสุขาสะอาด</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">1.4 ห้องสุขามีอุปกรณ์อำนวยความสะดวก</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">1.5 สภาพภูมิทัศน์สวยงาม/บรรยากาศร่มรื่น</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2" colspan="5">2. ด้านการให้บริการ </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">2.1 มีความรวดเร็วในการให้บริการ </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">2.2 วันและเวลาให้บริการเหมาะสม</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">2.3 ระยะเวลาในการให้บริการ</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">2.4 ความสะดวกในการติดต่ออำเภอ</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2" colspan="5">3. ด้านบุคลากร </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">3.1 การแต่งกายสุภาพเรียบร้อยเหมาะสม </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">3.2 การให้คำแนะนำข้อมูลข่าวสารและคำปรึกษาที่ดี </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-4 py-2">3.3 ความใส่ใจในการให้บริการ </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <textarea id="w3review" name="w3review" rows="4" cols="50">dfgrtgrtsh</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>


<script>
    $(document).ready(function () {
        $('#example').DataTable({
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