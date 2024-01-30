<?php
require '../../require/head_php.php';
require '../../require/head_html_2.php'; //แก้ไข menu ในไฟล์  menuconfig.php
// $mc ชื่อ class ที่ต้องเรียกใช้  .
//
//$mc->check_array($data, "data");  เอาไว้เช็คตัวแปร data ที่ query มาแล้ว .
//
//$mc->check_array($user, "user");  เอาไว้เช็ค userที่ login เข้ามา .
//
//$mc->check_variable();    //เอาไว้เช็คตัวแปร global $_session , $_post , $_get , $_request .
//$sql = "SELECT * FROM `drugreport`.`province` where `pcode` not in ('01','03');";
//$data = $mc->select_3($sql, "pcode", "pname");
//$mc->check_array($data, "data");
//$mc->check_array($user, "user");
?>

<?php
$sql = "SELECT * FROM `doc`  ORDER BY `id` DESC LIMIT 0,3;";
$data = $mc->select_all($sql);
//$mc->check_array($data, "data");
?>
<div class="w3-container w3-row">
  <div class="w3-col m2 w3-hide-small">&nbsp;</div>
  <div class="w3-col m8">
    <div class="w3-card-4">

      <header class="w3-container w3-theme-d3 w3-xlarge w3-padding-32 w3-center">
        <h3><i class="fas fa-book fa-2x"></i> หนังสือสั่งการ</h3>
      </header>

      <div class="w3-container">

        <?php foreach ($data as $key => $value) { ?>
          <div class="w3-padding-32 w3-large">
            <a href="../../core/doc/uploads/<?= $value["file"] ?>">
              <i class="fas fa-file-pdf fa-2x"></i> <?= $value["name"] ?>
            </a>
          </div>
        <?php } ?>
      </div>

      <a href="../../core/doc/index.php" class="w3-button w3-block w3-theme-l3 w3-padding-16 w3-large w3-right-align"><i class="fas fa-list-ol fa-2x"></i> ดูหนังสือสั่งการทั้งหมด...</a>

    </div>
  </div>
</div>
<?php
//$mc->check_array($user, "user");
require '../../require/footer2.php';
?>

<!-- /footer content -->