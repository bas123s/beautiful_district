<?php
$title = '"อัปโหลดอัพเดทข่าวและประชาสัมพันธ์"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php



$title = "แก้ไข";



$sql = "SELECT * FROM `beautiful_district`.`news` ;";
$data = $mc->select_all($sql);
//echo "sql==" . $sql;
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
            <div class="card container  " style="  text-align: center;   ">

            </div>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">


                    <table id="example" class="table table-striped table-responsive" style="width : 100%;">
                        <h3 class="text-center text-3xl font-bold"> แบบบันทึกข้อมูล อัปโหลดรูปภาพ</h3>
                        <div class="flex justify-end">
                        <a href="news_reported.php" class="btn btn-success p-2 mt-6"> <i
                                class="uil uil-plus-circle text-2xl"></i> เพิ่มหัวข้อข่าว</a>
                        </div>
                       
                        <thead>
                            <tr class="text-center">
                                <th rowspan="2" class="text-center">ที่</th>
                                <th rowspan="2" class="text-center">หัวข้อข่าว</th>
                                <th rowspan="2" class="text-center">รายละเอียด</th>
                                <th rowspan="2" class="text-center">วันที่อัปโหลด(ปี/เดือน/วัน)</th>
                                <th colspan="2" class="text-center">จัดการ </th>

                            </tr><!-- comment -->
                            <tr>
                                <th class="text-center">แก้ไข</th>
                                <th class="text-center">ลบ</th>
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
                                foreach (@$data as $key => $value) {
                                    ?>
                                    <td>
                                        <?= $i++; ?>
                                    </td>
                                    <td>
                                        <?= @$value['title']; ?>
                                    </td>
                                    <td>
                                        <?= @$value['detail']; ?>
                                    </td>
                                    <td>
                                        <?= @$value['created_date']; ?>
                                    </td>


                                    <td> <a href="news_reported.php?id=<?= @$value['id']; ?>" class="btn btn-warning p-1">
                                            <i class="uil uil-edit text-2xl"></i></a>
                                    </td>


                                    <td>
    <a href="#" class="btn btn-danger p-1 delete-btn" data-id="<?= @$value['id']; ?>">
        <i class="uil uil-trash-alt text-2xl"></i>
    </a>
</td>



                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // รับคลิกที่ปุ่มลบ
        var deleteButtons = document.querySelectorAll('.delete-btn');
        
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();

                // แสดง SweetAlert2 สำหรับการยืนยันลบ
                Swal.fire({
                    title: 'คุณต้องการลบหรือไม่?',
                    text: "การลบนี้ไม่สามารถกู้ข้อมูลกลับมาได้!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'ใช่, ลบ!',
                    cancelButtonText: 'ไม่'
                }).then((result) => {
                    // ถ้าผู้ใช้คลิก "ใช่, ลบ!"
                    if (result.isConfirmed) {
                        // ดำเนินการลบโดยเรียกไปยัง URL ที่กำหนด
                        window.location.href = 'news_delete_query.php?id=' + button.getAttribute('data-id');
                    }
                });
            });
        });
    });
</script>
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