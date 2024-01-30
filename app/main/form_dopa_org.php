<?php
$title = 'หัวข้อการประเมินหลัก 1. การขับเคลื่อนภารกิจของ มท. "บำบัดทุกข์ บำรุงสุข" (100 คะแนน)"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;


$title = "แก้ไข";

//$sql_p = "SELECT * FROM `province`; ";
//$data_p = $mc->select_all($sql_p);
$action = "UPDATE";
require_once ("../../require/response3.php");
unset($province["03"]);
unset($province["99"]);
unset($province["10"]);

if (!isset($_REQUEST["pcode"])) {
    $_REQUEST["pcode"] = "11";
}

//if (isset($_REQUEST["pcode"]) && ($_REQUEST["pcode"] !== "")) {
//    $sql = "SELECT * FROM `assessment_dopa` where `pcode` =" . "'" . $_REQUEST["pcode"] . "'";
//
////$mc->check_array($data, "data");
//} else {
//
//    $sql = "SELECT * FROM `assessment_dopa` where `pcode` ='11'";
//}
$sql = "SELECT * FROM `assessment_org` where `pcode` ='" . $_REQUEST["pcode"] . "' ;";
$data = $mc->select_all($sql);
//echo "sql==" . $sql;
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
            <div class="card container  " style="  text-align: center;   ">
                <form id ="search_dopa" name="search_dopa" action="form_dopa.php">
                    <div class="card-body md:text-xl text-xl font-medium text-center">
                        <label for="countries"
                               class="block mb-2 md:text-xl text-xl font-medium text-gray-900 dark:text-white">เลือกจังหวัด</label>
                        <select id="pcode" name='pcode'
                                class="bg-gray-50 border  md:text-xl text-xl border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="padding: 10px;">
                                    <?php foreach ($province as $pcode => $pname) { ?>
                                <option value="<?= $pcode; ?>" <?= ($_REQUEST["pcode"] == $pcode) ? "selected" : "" ?>><?= $pname; ?></option>

                            <?php } ?>
                        </select>
                        <button type="submit" class="btn btn-success mt-6 md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded"> ค้นหา</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">
                    <form method="post" action="form_org_query.php">

                        <table id="example" class="table-bordered table-responsive">
                            <h3 class="text-center text-3xl font-bold"> แบบประเมิน หัวข้อการประเมินหลัก 5. การตรวจประเมินจากภายนอกหน่วยงาน" </h3>
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2" class="text-center">ที่</th>
                                    <th rowspan="2" class="text-center">รหัสจังหวัด</th>
                                    <th rowspan="2" class="text-center">จังหวัด</th>
                                    <th rowspan="2" class="text-center">รหัสอำเภอ</th>
                                    <th rowspan="2" class="text-center">อำเภอ</th>

                                    <?php if ($user['pid'] == "0305") { ?>

                                        <th colspan="2" class="text-center">GECC</th>

                                    <?php } else if ($user['pid'] == "0302") { ?>
                                        <th colspan="2" class="text-center">ITA </th>
                                        <th colspan="2" class="text-center">อำเภอคุณธรรม </th>

                                    <?php } ?>
                                </tr><!-- comment -->
                                <tr>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $i = 1;
                                    $css = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";
                                    $input_option = ' min="0" max="10" step="1" ';
                                    foreach (@$data as $key => $value) {
                                        ?>
                                        <td><?= $i++; ?>  </td>
                                        <td><?= @$value['pcode']; ?></td>
                                        <td><?= @$value['pname']; ?></td>
                                        <td><?= @$value['acode']; ?> </td>
                                        <td><?= @$value['aname']; ?><input name="id[<?= @$value['id']; ?>]" hidden value="1"></td>
                                        <?php if ($user['pid'] == "0305") { ?>
                                            <td>40</td>
                                            <td class="px-4 py-2 text-right"><input name="gecc[<?= @$value['id']; ?>]" class="<?= $css; ?>" <?= $input_option ?> type='number' value='<?= @$value['gecc']; ?>'></td>
                                        <?php } else if ($user['pid'] == "0302") { ?>
                                            <td>30</td>
                                            <td class="px-4 py-2 text-right"><input name="ita[<?= @$value['id']; ?>]" class="<?= $css; ?>" <?= $input_option ?> type='number' value='<?= @$value['ita']; ?>'></td>
                                            <td>30</td>
                                            <td class="px-4 py-2 text-right"><input name="moral[<?= @$value['id']; ?>]" class="<?= $css; ?>" <?= $input_option ?> type='number' value='<?= @$value['moral']; ?>'></td>

                                        <?php } ?>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <input type="hidden" name="rec_pid" value="<?= $user['pid']; ?>">
                        <input type="hidden" name="rec_name" value="<?= $user['username']; ?>">
                        <input type="hidden" name="action" value="<?= $action; ?>">
                        <button type="submit" class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">ปรับปรุงข้อมูล</button>
                    </form>
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
<script>
    $(document).ready(function () {
        $('#example2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                //      'copy', 'excel'
            ],
            "oLanguage": {
                "sSearch": "ค้นหา"
            },
        });
    });
</script>
<?php
require '../../require/footer_content4.php';
?>

<!-- /footer content -->