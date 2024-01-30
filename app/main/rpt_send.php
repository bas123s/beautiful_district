<?php
$title = 'เกณฑ์การประเมิน หัวข้อการประเมินหลัก 5. การตรวจประเมินจากหน่วยงานภายนอก (100 คะแนน)"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;




$sql = "SELECT 
pcode,
pname,
acode,
aname,status
FROM inspector
WHERE `pcode` = '" . $_REQUEST["pcode"] . "' AND `status` = '" . $_REQUEST["status"] . "';
";
$data = $mc->select_all($sql);
// echo "sql==" . $sql;
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

                    <table id="example" class="display " style="width : 100%;">
                            <h3 class="text-center text-3xl font-bold">  การตรวจประเมินจากกรองตรวจราชการ</h3>
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2" class="text-center">ที่</th>
                                    <th rowspan="2" class="text-center">จังหวัด</th>
                                    <th rowspan="2" class="text-center">อำเภอ</th>
                                    <th rowspan="2" class="text-center">สถานะ</th>

                                </tr><!-- comment -->
           
                            </thead>

                            <tbody>

                                <?php
                                $i = 1;
                                $css = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";
                                $input_option = ' min="0" max="10" step="1" ';
                                foreach (@$data as $key => $value) {
                       
                                    ?>
                                    <tr>
                                        <td><?= $i++; ?>  </td>
                                        <td class=""><?= @$value['pname']; ?></td>
                                        <td class=""><?= @$value['aname']; ?></td>
                                        <?php 
                                        if ($value['status'] == 2){
?>
                                            <td>มีการรายงานแล้ว</td>
                                            <?php 
                                        }
                                        ?>
                                         <?php 
                                        if ($value['status'] == 1){
?>
                                           <td>ยังไม่มีการรายงาน</td>
                                            <?php 
                                        }
                                        ?>
                                  
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

