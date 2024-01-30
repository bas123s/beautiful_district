<?php
$title = '"ลงพื้นที่ตรวจสอบและอัปโหลดรูปภาพ"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;


$title = "แก้ไข";

//$sql_p = "SELECT * FROM `province`; ";
//$data_p = $mc->select_all($sql_p);
$action = "UPDATE";
require_once("../../require/response3.php");
unset($province["03"]);
unset($province["99"]);
unset($province["10"]);





if(!isset($_REQUEST["pcode"])) {
    $_REQUEST["pcode"] = $user["pcode"];
}
$ins1 = ["14", "15", "16", "17", "18", "19"];
$ins2 = ["11", "12", "13", "73"];
$ins3 = ["70", "71", "72"];
$ins4 = ["74", "75", "76", "77"];
$ins5 = ["80", "84", "86", "90", "93"];
$ins6 = ["81", "82", "83", "85", "91", "92"];
$ins7 = ["94", "95", "96"];
$ins8 = ["20", "21", "24"];
$ins9 = ["22", "23", "25", "26", "27"];
$ins10 = ["38", "39", "41", "42", "43"];
$ins11 = ["47", "48", "49"];
$ins12 = ["40", "44", "45", "46"];
$ins13 = ["30", "31", "32", "36"];
$ins14 = ["33", "34", "35", "37"];
$ins15 = ["50", "51", "52", "58"];
$ins16 = ["54", "55", "56", "57"];
$ins17 = ["53", "63", "64", "65", "67"];
$ins18 = ["60", "61", "62", "66"];


$sql = "SELECT * FROM `inspector` where `pcode` ='".$_REQUEST["pcode"]."' ;";
$data = $mc->select_all($sql);
//echo "sql==" . $sql;
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
       
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">


                    <table id="example" class="display " style="width : 100%;">
                        <h3 class="text-center text-3xl font-bold"> แบบบันทึกข้อมูล อัปโหลดรูปภาพ</h3>
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" class="text-center">ที่</th>
                                <th rowspan="2" class="text-center">รหัสจังหวัด</th>
                                <th rowspan="2" class="text-center">จังหวัด</th>
                                <th rowspan="2" class="text-center">รหัสอำเภอ</th>
                                <th rowspan="2" class="text-center">อำเภอ</th>
                                <th colspan="1" class="text-center">การอัปโหลด </th>

                            </tr><!-- comment -->
                            <tr>
                                <th class="text-center">สถานะ</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $i = 1;
                                $css = "appearance-none block w-full bg-white text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";
                                $input_option = ' min="0" max="20" step="1" ';
                                $input_option2 = ' min="0" max="15" step="1" ';
                                $input_option3 = ' min="0" max="30" step="1" ';
                                foreach(@$data as $key => $value) {
                                    ?>
                                    <td>
                                        <?= $i++; ?>
                                    </td>
                                    <td>
                                        <?= @$value['pcode']; ?>
                                    </td>
                                    <td>
                                        <?= @$value['pname']; ?>
                                    </td>
                                    <td>
                                        <?= @$value['acode']; ?>
                                    </td>
                                    <td>
                                        <?= @$value['aname']; ?><input name="id[<?= @$value['id']; ?>]" hidden value="1">
                                    </td>
                                    <?php if($value['status'] == "2") { ?>
                                        <td>มีการอัปโหลดแล้ว <a
                                                href="inspector_view.php?id=<?= @$value['id']; ?>&pcode=<?= @$value['pcode']; ?>&acode=<?= @$value['acode']; ?>&aname=<?= @$value['aname']; ?>&pname=<?= @$value['pname']; ?>"
                                                class="btn btn-primary p-1"> ดูรายละเอียด</a> </td>

                                    <?php } else if($value['status'] == "1") { ?>
                                            <td>ยังไม่มีการอัปโหลด</td>

                                    <?php }

                                    ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
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
            dom: '<"top"lf">rt<"bottom"ip><"clear">',
            buttons: [
                //       'copy', 'excel'
            ],
            "paging": true,
            "searching": true, // Enable searching
            "ordering": true,
            "info": true
        });
    });
</script>

<?php
require '../../require/footer_content4.php';
?>

<!-- /footer content -->