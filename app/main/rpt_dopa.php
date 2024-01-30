<?php
$title = 'เกณฑ์การประเมิน หัวข้อการประเมินหลัก 1. การขับเคลื่อนภารกิจของ มท. "บำบัดทุกข์ บำรุงสุข" (100 คะแนน)"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php

$sql = "SELECT * FROM `assessment_dopa` ;";
$data = $mc->select_all($sql);
//echo "sql==" . $sql;
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
            <div class="card container  " style="  text-align: center;   ">
                <form id ="search_dopa" name="search_dopa" action="form_dopa.php">
                    <div class="card-body md:text-xl text-xl font-medium text-center">
                        เกณฑ์การประเมินการประกวด “อำเภอสวยงาม”
                        ตามโครงการ “อำเภอสวยงาม” ประจำปี พ.ศ. 2566

                    </div>
                </form>
            </div>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">
                    <form method="post" action="form_query.php">

                        <table id="example" class="table-bordered table-responsive">
                            <h3 class="text-center text-3xl font-bold"> หัวข้อการประเมินหลัก 1. การขับเคลื่อนภารกิจของ มท.</h3>
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2" class="text-center">ที่</th>
                                    <th rowspan="2" class="text-center">รหัสจังหวัด</th>
                                    <th rowspan="2" class="text-center">จังหวัด</th>
                                    <th rowspan="2" class="text-center">รหัสอำเภอ</th>
                                    <th rowspan="2" class="text-center">อำเภอ</th>
                                    <th colspan="2" class="text-center">อำเภอบำบัดทุกข์ บำรุงสุข</th>
                                    <th colspan="2" class="text-center">หนึ่งตำบล หนึ่งหมู่บ้านยั่งยืน</th>
                                    <th colspan="2" class="text-center">ศูนย์ดำรงธรรม </th>
                                    <th colspan="2" class="text-center">หมู่บ้านสีขาว </th>
                                    <th colspan="2" class="text-center">ThaiD </th>
                                    <th colspan="2" class="text-center">รวม </th>
                                </tr><!-- comment -->
                                <tr>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>
                                    <th class="text-center">คะแนนเต็ม</th>
                                    <th class="text-center">คะแนนที่ได้รับ</th>
                                    <th class="text-center">รวม</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $i = 1;
                                $css = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";
                                $input_option = ' min="0" max="10" step="1" ';
                                foreach (@$data as $key => $value) {
                                    @$sum_all = 0;
                                    @$sum_all = @$value['dcast'] + @$value['svs'] + @$value['damrong'] + @$value['whitehouse'] + @$value['thaiD'];
                                    ?>
                                    <tr>
                                        <td><?= $i++; ?>  </td>
                                        <td><?= @$value['pcode']; ?></td>
                                        <td><?= @$value['pname']; ?></td>
                                        <td><?= @$value['acode']; ?> </td>
                                        <td><?= @$value['aname']; ?><input name="id[<?= @$value['id']; ?>]" hidden value="1"></td>
                                        <td>20</td>
                                        <td class="px-4 py-2 text-right"> <?= @$value['dcast']; ?></td>
                                        <td>20</td>
                                        <td class="px-4 py-2 text-right"><?= @$value['svs']; ?></td>
                                        <td>15</td>
                                        <td class="px-4 py-2 text-right"> <?= @$value['damrong']; ?></td>
                                        <td>15</td>
                                        <td class="px-4 py-2 text-right"><?= @$value['whitehouse']; ?></td>
                                        <td>30</td>
                                        <td class="px-4 py-2 text-right"><?= @$value['thaiD']; ?></td>
                                        <td class="px-4 py-2 text-right"><?= @$sum_all; ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <input type="hidden" name="rec_pid" value="<?= $user['pid']; ?>">
                        <input type="hidden" name="rec_name" value="<?= $user['username']; ?>">
                        <input type="hidden" name="action" value="<?= $action; ?>">

                        </div>

                        </div>
                        </div>
                        </div>
                        </section>



                        <script>
                            $(document).ready(function () {
                                $('#example').DataTable({
                                    dom: '<"top"lfB">rt<"bottom"ip><"clear">',
                                    buttons: [
                                        'copy', 'excel'
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
