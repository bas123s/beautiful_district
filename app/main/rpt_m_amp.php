<?php
$title = "3. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย";
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;


$condition = "";
if (!empty($_REQUEST)) {
  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
}

$sql = "SELECT * FROM `view_assessment_m_a` " . $condition . " ;";
$data = $mc->select_all($sql);
//$mc->check_array($data, $sql);
//exit();
?>

<style>
  table,
  th,
  td {
    text-align: center;
  }
</style>

<section class="relative  md:py-24 py-16">
  <div class="container mx-auto px-4  relative">
    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
      <div class="card  " style="  text-align: center;   ">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <!--สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย"-->
        </div>
        <div class="card">
          <div class="card-body md:text-xl text-xl font-medium text-center">
            <!--<form method="post" action="form_query.php">-->

            <h4 class="text-center text-1xl font-bold">
              <?= $title ?>
            </h4><br>
            <table id="example" class="table-bordered table-responsive" style="text-align: center; border: #000000; ">
              <thead>
                <tr>
                  <th rowspan="2">ที่</th>
                  <!--<th rowspan="2">รหัสจังหวัด</th>-->
                  <th rowspan="2">จังหวัด</th>
                  <!--<th rowspan="2">รหัสอำเภอ</th>-->
                  <th rowspan="2">อำเภอ</th>
                  <th colspan="2">บ้านนี้มีรักฯ</th>

                  <th colspan="2">ส่งเสริมการสร้างสุขอนามัยฯ</th>

                  <th colspan="2">ผ้าไทยใส่ให้สนุกฯ</th>
                  <th colspan="2">ครอบครัวมหาดไทย ใส่ใจสิ่งแวดล้อม</th>
                  <th colspan="2">รถเข็นนั่ง ปันสุข</th>
                  <th rowspan="2">พิมพ์แบบประเมิน</th>
                </tr>

                <tr>
                  <th>คะแนนเต็ม</th>
                  <th>คะแนนที่ได้รับ</th>


                  <th>คะแนนเต็ม</th>
                  <th>คะแนนที่ได้รับ</th>
                  <th>คะแนนเต็ม</th>
                  <th>คะแนนที่ได้รับ</th>
                  <th>คะแนนเต็ม</th>
                  <th>คะแนนที่ได้รับ</th>
                  <th>คะแนนเต็ม</th>
                  <th>คะแนนที่ได้รับ</th>
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
                    <td>
                      <?= $i++; ?>
                    </td>
                    <!--<td>< ?= @$value['pcode']; ?></td>-->
                    <td>
                      <?= @$value['pname']; ?>
                    </td>
                    <!--<td>< ?= @$value['acode']; ?> </td>-->
                    <td>
                      <?= @$value['aname']; ?><input name="id[<?= @$value['id']; ?>]" hidden value="1">
                    </td>
                    <td>100</td>
                    <td class="px-4 py-2 text-right">
                      <?= @$value['food']; ?>
                    </td>
                    <td>100</td>


                    <td class="px-4 py-2 text-right">
                      <?= @$value['clean']; ?>
                    </td>
                    <td>100</td>


                    <td class="px-4 py-2 text-right">
                      <?= @$value['thai']; ?>
                    </td>
                    <td>100</td>
                    <td class="px-4 py-2 text-right">
                      <?= @$value['bin']; ?>
                    </td>
                    <td>100</td>
                    <td class="px-4 py-2 text-right">
                      <?= @$value['homeless']; ?>
                    </td>
                  
                    <td><a
                        href="m_pdf.php?acode=<?= @$value['acode']; ?>&aname=<?= @$value['aname']; ?>&pname=<?= @$value['pname']; ?>">
                        <button type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">พิมพ์แบบประเมิน</button></a>
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

<?php
require '../../require/footer_content4.php';
?>