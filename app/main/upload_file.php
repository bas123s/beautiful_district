<?php

require '../../require/head_php.php';
require '../../require/head_html.php'; //แก้ไข menu ในไฟล์  menuconfig.php

$i = 1;

?>
<div class="w3-container">
  <div class="w3-white">
    <div class="w3-center  w3-card-4">
      <header class="w3-theme w3-padding-32 w3-xlarge">
        ผู้ยืมปืน<br><br>
        <a href="borrower.php" class="w3-button w3-bar-block w3-green w3-padding-16 w3-medium"><i class="fas fa-plus"></i> เพิ่มผู้ยืมปืน</a>
      </header>

      <div class="w3-padding-16 w3-container">
        <table id="example" class="display " style="width:100%">
          <thead>
            <tr>
              <th style="width: 100px;">จัดการ</th>
              <th style="width: 100px;">ที่</th>
              <th>จังหวัด</th>
              <th>อำเภอ</th>
              <th>ตำบล</th>
              <th>หมู่บ้าน</th>
              <th>ชื่อผู้ยืม</th>
              <th>ตำแหน่ง</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>จัดการ</th>
              <th>ที่</th>
              <th>จังหวัด</th>
              <th>อำเภอ</th>
              <th>ตำบล</th>
              <th>หมู่บ้าน</th>
              <th>ชื่อผู้ยืม</th>
              <th>ตำแหน่ง</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <?php
              if ($user["privilege"] < 8) {
                if ($user["privilege"] < 4) {
                  $condition = "WHERE `acode` = '".$user["acode"]."'";
                } else {
                  $condition = "WHERE `pcode` = '".$user["pcode"]."'";
                }
              } else {
                $condition = "";
              }
              $sql2 = "SELECT * FROM `borrower` ".$condition." ORDER BY `id` DESC; ";
              $data2 = $mc->select_all_2($sql2);
              //$mc->check_array($data, "data");

              foreach ($data2 as $key => $value) { ?>
                <td>
                  <a class="w3-button w3-bar-block w3-blue " style="width: 100px;" href="borrower.php?id=<?=$key;?>"><i class="far fa-edit"></i> แก้ไข</a>
                  <?php if ($user["privilege"] > "4") { ?>
                    <a class="w3-button w3-bar-block w3-red " style="width: 100px;" onclick="return confirm('ยืนยันการลบ <?= $value["name"] ?>');" href="delete_query.php?id=<?=$key;?>"><i class="far fa-trash-alt"></i> ลบ</a>
                  <?php } ?>
                </td>
                <td class="w3-center-align"><?= $i++; ?></td>
                <td class="w3-left-align"><?= $province[$value["pcode"]]; ?></td>
                <td class="w3-left-align"><?= $amphoe[$value["pcode"]][$value["acode"]]; ?></td>
                <td class="w3-left-align"><?= $value["tname"]; ?></td>
                <td class="w3-left-align"><?= $value["mname"]; ?></td>
                <td class="w3-left-align"><?= $value["name"]; ?></td>
                <td class="w3-left-align"><?= $value["position"]; ?></td>
              </tr>
            <?php } ?>

          </tbody>

        </table>

        <script>$(document).ready(function () {
            $('#example').DataTable();
          });
        </script>
      </div>
    </div>
  </div>
</div>
<?php
require '../../require/footer_content.php';
?>

<!-- /footer content -->