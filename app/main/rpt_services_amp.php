<?php
$title = 'เกณฑ์การประเมิน หัวข้อการประเมินหลัก ข้อ 3 การสำรวจความพึงพอใจ';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php

$sql = "SELECT * FROM `assessment_services` ;";
$data = $mc->select_1($sql);
//echo "sql==" . $sql;
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
            <div class="card container  mx-auto text-center " >

                <div class="card-body text-center text-3xl mx-auto ">
                    ที่ทำการปกครองอำเภอ<?= @$user['aname']; ?> จังหวัด<?= @$user['pname']; ?>
                </div>

            </div>
            <div class="card mx-auto">
                <div class="card-body md:text-xl text-xl font-medium ">
                    <!--<div class="card-body md:text-xl text-xl font-medium text-center">-->
                    <form name="rpt_services_amp" action="services_pdf.php" >
                        <button type="submit"
                                class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">พิมพ์แบบประเมิน</button>

                        <br>

                        <table id="example" class="table-bordered table-responsive table-middle ">
                            <h3 class="text-center text-xl font-bold"> หัวข้อการประเมินหลัก ข้อ 3 การสำรวจความพึงพอใจ</h3>
                            <br>
                            <thead>
                                <tr>
                                    <th rowspan="2" class="text-center">ที่</th>
                                    <th rowspan="2" class="text-center">หัวข้อการประเมินย่อย</th>
                                    <th rowspan="2" class="text-center">คะแนนที่ได้รับ</th>
                                </tr><!-- comment -->
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $css = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";
                                    @$sum_all = 0;
                                    @$sum_all = @$value['s1'] + @$value['s2'] + @$value['s3'] + @$value['s4'] + @$value['s5'];
                                    ?>

                                    <td>1</td>
                                    <td class="text-left">ด้านสถานที่</td>
                                    <td class="px-4 py-2 text-right"> <?= @$value['s1']; ?></td>
                                </tr>
                                <tr>
                                    <td>2 </td>
                                    <td class="text-left">ด้านการให้บริการ</td>
                                    <td class="px-4 py-2 text-right"> <?= @$value['s2']; ?></td>
                                </tr>
                                <tr>
                                    <td>3 </td>
                                    <td class="text-left">บุคลากร</td>

                                    <td class="px-4 py-2 text-right"> <?= @$value['s3']; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">รวม</td>
                                    <td>100</td>

                                    <td class="px-4 py-2 text-right"><?= @$sum_all; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="acode" value="<?= $user['acode']; ?>">
                        <input type="hidden" name="aname" value="<?= $user['aname']; ?>">
                        <input type="hidden" name="pname" value="<?= $user['pname']; ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'pdf'
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
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel'
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

