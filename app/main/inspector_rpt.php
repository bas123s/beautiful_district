<?php
$title = 'ลงพื้นที่ตรวจสอบและอัปโหลดรูปภาพ"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;




$sql = "SELECT 
pcode,
pname,
acode,
aname,
SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS count_1,
SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS count_2
FROM inspector
WHERE status IN (1, 2)
GROUP BY pcode;
";
$data = $mc->select_all($sql);
$sql1 = "SELECT 
SUM(CASE WHEN status = 1 THEN 1 ELSE 0 END) AS count_1,
SUM(CASE WHEN status = 2 THEN 1 ELSE 0 END) AS count_2
FROM inspector
WHERE status IN (1, 2)
";
$data1 = $mc->select_1($sql1);
//echo "sql==" . $sql;
?>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
            <div class="card container  " style="  text-align: center;   ">
              
                    <div class="card-body md:text-xl text-xl font-medium text-center">
                        เกณฑ์การประเมินการประกวด “อำเภอสวยงาม”
                        ตามโครงการ “อำเภอสวยงาม” ประจำปี พ.ศ. 2566

                    </div>
             
            </div>
            <div class="card">
                <div class="card-body md:text-xl text-xl font-medium text-center">
                    
               
                  
                    
                    <table id="example" class="display " style="width : 100%;">
                            <h3 class="text-center text-3xl font-bold"> การตรวจประเมินจากกรองตรวจราชการ</h3>
                            <div class=" md:text-2xl text-2xl font-medium text-center">
                     มีการรายงานแล้ว <span class="text-emerald-600"><?= $data1['count_2']; ?> </span>  อำเภอ || ยังไม่มีการรายงาน  <span class="text-red-600"><?= $data1['count_1']; ?> </span> อำเภอ

                    </div>
                    <br>
                            <thead>
                                <tr class="text-center">
                                    <th rowspan="2" class="text-center">ที่</th>
                                    <th rowspan="2" class="text-center">จังหวัด</th>
                                    <th rowspan="2" class="text-center">ยังไม่รายงาน</th>
                                    <th rowspan="2" class="text-center">รายงานแล้ว</th>

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
                                        <td>
                                            <?= $i++; ?>
                                        </td>
                                        <td class="text-left">
                                            <?= @$value['pname']; ?>
                                        </td>
                                        <td><a class="text-red-600"
                                                href="rpt_send.php?pcode=<?= $value["pcode"]; ?>&status=1">
                                                <?= @$value['count_1']; ?>
                                            </a> </td>
                                        <td><a class="text-emerald-600"
                                                href="rpt_send.php?pcode=<?= $value["pcode"]; ?>&status=2">
                                                <?= @$value['count_2']; ?>
                                            </a></td>
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