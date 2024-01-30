<?php
$title = "สรุปผลเกณฑ์การประเมิน   เกณฑ์การประเมิน หัวข้อการประเมินหลัก ข้อ 3 การสำรวจความพึงพอใจ";
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;




$sql = "SELECT * FROM `assessment_services` ;";
$data = $mc->select_all($sql);
$mc->check_array($data, $sql);
?>

<section class="relative  md:py-24 py-16">
  <div class="container mx-auto px-4  relative">
    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
      <div class="card container  " style="  text-align: center;   ">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <!--สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย"-->
        </div>
        <div class="card">
          <div class="card-body md:text-xl text-xl font-medium text-center">
            <!--<form method="post" action="form_query.php">-->
            <table id="example" class="table-bordered table-responsive">
              <h4 class="text-center text-1xl font-bold"> สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก หัวข้อการประเมินหลัก ข้อ 3 การสำรวจความพึงพอใจ</h4><br>
              <thead>
                <tr class="text-center">
                  <th class="text-center">ที่</th>
                  <th class="text-center">รหัสจังหวัด</th>
                  <th class="text-center">จังหวัด</th>
                  <th class="text-center">รหัสอำเภอ</th>
                  <th class="text-center">อำเภอ</th>
                  <th class="text-center">คะแนนเต็ม</th>
                  <th class="text-center">คะแนนที่ได้รับ</th>
                  <th class="text-center">พิมพ์แบบประเมิน</th>
                </tr>
              </thead>

              <tbody>

                <?php
                $i = 1;
                $css = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white";

                foreach (@$data as $key => $value) {
                  @$sum_all = 0;
                  @$sum_all = @$value['ita'] + @$value['gecc'];
                  ?>
                  <tr>
                    <td><?= $i++; ?>  </td>
                    <td><?= @$value['pcode']; ?></td>
                    <td><?= @$value['pname']; ?></td>
                    <td><?= @$value['acode']; ?> </td>
                    <td><?= @$value['aname']; ?><input name="id[<?= @$value['id']; ?>]" hidden value="1"></td>
                    <td>100</td>
                    <td class="px-4 py-2 text-right"> <?= @$value['dopa']; ?></td>
                    <td>  <a href="services_pdf.php?acode=<?= @$value['acode']; ?>&aname=<?= @$value['aname']; ?>&pname=<?= @$value['pname']; ?>"<button type="submit" class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">พิมพ์แบบประเมิน</button></a></td>
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

