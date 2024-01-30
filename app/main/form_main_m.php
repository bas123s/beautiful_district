<?php
$title = "แบบประเมินการประกวด “อำเภอสวยงาม” ตามโครงการ
“อำเภอสวยงาม” ประจำปี พ.ศ. 2566";
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//require_once ("../../require/response3.php");
require_once("../../require/response4.php");
unset($province["03"]);
unset($province["99"]);
unset($province["10"]);

$sql = "SELECT * from amphoe where pcode='" . @$user['pcode'] . "'";
$data = $mc->select_all($sql);
//echo "sql amphoe=" . $sql;
//$mc->check_array($data, $sql);
?>


<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <!--<div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-3">-->
        <div class="card-body md:text-xl text-xl font-medium text-center">
            <h2 class=" text-center md:text-xl text-xl font-medium ">ที่ทำการปกครองจังหวัด
                <?= @$user['pname']; ?>
            </h2>
            <h2 class=" text-center md:text-xl text-xl font-medium ">หัวข้อที่ 3 การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย
            </h2>
            <br>
            <div class="flex justify-end ">
                <a href="#"
                    class="btn btn-warning  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">แบบฟอร์มการประเมิณ
                </a>
            </div>

            <table class="table table-striped table-responsive" id="example">
                <thead>
                    <tr class="text-center">
                        <th class="text-center">ที่</th>
                        <th class="text-center">รหัสอำเภอ</th>
                        <th class="text-center">อำเภอ</th>
                        <th class="text-center">ประเมินอำเภอ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;

                    foreach (@$data as $key => $value) {
                        ?>
                        <tr>

                            <td>
                                <?= $i++; ?>
                            </td>
                            <td>
                                <?= $value['acode']; ?>
                            </td>
                            <td>
                                <?= $value['aname']; ?>
                            </td>
                            <td>
                                <form id="form_main_m_<?= $i; ?>" method="post" name="form_main_m" action="form_m.php">
                                    <button type="submit"
                                        class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">กรอกแบบประเมิน
                                        <input type="hidden" name="pcode" value="<?= $value['pcode']; ?>">
                                        <input type="hidden" name="pname" value="<?= $value['pname']; ?>">
                                        <input type="hidden" name="acode" value="<?= $value['acode']; ?>">
                                        <input type="hidden" name="aname" value="<?= $value['aname']; ?>"></button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>
    <!--</div>-->

</section>
<script language=Javascript>
    function Inint_AJAX() {
        try {
            return new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        } //IE
        try {
            return new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
        } //IE
        try {
            return new XMLHttpRequest();
        } catch (e) {
        } //Native Javascript
        alert("XMLHttpRequest not supported");
        return null;
    }


    function dochange(src, val, selected) {
        var req = Inint_AJAX();
        req.onreadystatechange = function () {
            if (req.readyState == 4) {
                if (req.status == 200) {
                    document.getElementById(src).innerHTML = req.responseText; //รับค่ากลับมา
                }
            }
        };
        console.log("../../require/get_select4.php?data_type=" + src + "&data_value=" + val + "&selected=" + selected);
        req.open("GET", "../../require/get_select4.php?data_type=" + src + "&data_value=" + val + "&selected=" + selected); //สร้าง connection
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
        req.send(null); //ส่งค่า
    }

    window.onLoad = dochange('province', '<?= $prov ?>', '<?= $prov ?>');
    window.onLoad = dochange('amphoe', '<?= $prov ?>', '<?= $amp ?>');
</script>

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