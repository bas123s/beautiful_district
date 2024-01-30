<?php
$title = 'สรุปผลเกณฑ์การประเมิน 4. การให้การบริการประชาชนและเป็นที่พึ่งให้ประชาชน"';
require '../../require/head_php3.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;


$sql = "SELECT * FROM `view_assessment_services_p` ;";
$data = $mc->select_all($sql);
//$mc->check_array($data, $sql);
//exit();
?>

<style>
  table,th,td{
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
        <div class="card mx-20">
          <div class="card-body md:text-xl text-xl font-medium text-center">
            <!--<form method="post" action="form_query.php">-->
            <h4 class="text-center text-1xl font-bold"><?= $title ?></h4><br>
            <table id="example" class=" " style="width: 100%;text-align: center; border: #000000;">
              <thead>
                <tr>
                  <th>ที่</th>
                  <!--<th>รหัสจังหวัด</th>-->
                  <th>จังหวัด</th>
                  <!--<th>รหัสอำเภอ</th>-->
                  <!--<th>อำเภอ</th>-->
                  <th>ด้านสถานที่</th>
                  <th>ด้านการให้บริการ</th>
                  <th>ด้านบุคลากร</th>
                  <th>พิมพ์แบบประเมิน</th>
                </tr>

<!--                <tr>
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
                </tr>-->
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
                    <!--<td>< ?= @$value['pcode']; ?></td>-->
                    <td><a href="rpt_services_amp.php?pcode=<?= $value['pcode']; ?>" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded" style="width: 100%"><?= @$value['pname']; ?></a><input name="id[<?= @$value['id']; ?>]" hidden value="1"></td>
                    <!--<td>< ?= @$value['acode']; ?> </td>-->
                    <!--<td>< ?= @$value['aname']; ?><input name="id[< ?= @$value['id']; ?>]" hidden value="1"></td>-->
                    <!--<td>10</td>-->
                    <td class="px-4 py-2 text-right"><?= @$value['s1']; ?></td>
                    <!--<td>10</td>-->
                    <td class="px-4 py-2 text-right"><?= @$value['s2']; ?></td>
                    <!--<td>10</td>-->
                    <td class="px-4 py-2 text-right"><?= @$value['s3']; ?></td>
                    <td><a href="services_pdf.php?acode=<?= @$value['acode']; ?>&aname=<?= @$value['aname']; ?>&pname=<?= @$value['pname']; ?>"<button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">พิมพ์แบบประเมิน</button></a></td>
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

