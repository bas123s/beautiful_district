<?php
require '../../require/head_php.php';
require '../../require/head_html.php'; //แก้ไข menu ในไฟล์  menuconfig.php
// $mc ชื่อ class ที่ต้องเรียกใช้  .
//
//$mc->check_array($data, "data");  เอาไว้เช็คตัวแปร data ที่ query มาแล้ว .
//
//$mc->check_array($user, "user");  เอาไว้เช็ค userที่ login เข้ามา .
//
//$mc->check_variable();    //เอาไว้เช็คตัวแปร global $_session , $_post , $_get , $_request .
//$sql = "SELECT * FROM `province` where `pcode` not in ('01','03');";
//$data = $mc->select_3($sql, "pcode", "pname");
//$mc->check_array($data, "data");
//$mc->check_array($user, "user");
?>

<?php
$sql = "SELECT * FROM `log` WHERE `user` = '" . @$_REQUEST["user"] . "' AND `timestamp` like '" . @$_REQUEST["date"] . "%' ORDER BY `timestamp` DESC ;";
//echo "<hr>dashboard1_level => " . $dashboard1_level . "<hr>";
$data = $mc->select_all($sql);
//$mc->check_array($data, $sql);
?>
<div class="w3-row">
  <div class="w3-card-4 w3-animate-bottom">

    <header class="w3-container w3-theme w3-center w3-padding-32">
      <h1>ข้อมูลการประมวลผลของ <?= @$_REQUEST["username"]; ?><br><?= $mc->DateThai4(@$_REQUEST["date"]); ?></h1>
    </header>

    <div class="w3-padding-16 w3-white w3-container">
      <table id="example" class="w3-table-all w3-hoverable s12 display  w3-centered" style="width:100%" border="1">
        <thead>
          <tr>
            <th>ลำดับที่</th>
            <!--<th>วันที่</th>-->
            <th>คำสั่งคิวรี่</th>
            <th>ip จริง</th>
<!--            <th width="20%">request uri</th>
            <th width="20%">script name</th>-->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $value) { ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <!--<td>< ?= $mc->DateThai4($value["timestamp"]); ?></td>-->
              <td class="w3-left-align"><?= $value["sql_command"] ?></td>
              <td><?= $value["http_x_real_ip"] ?></td>
  <!--              <td>< ?= $value["request_uri"] ?></td>
              <td>< ?= $value["script_name"] ?></td>-->
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-animate-opacity w3-card-4">
      <header class="w3-container w3-blue w3-xlarge w3-center w3-padding-64">
        <span onclick="document.getElementById('id01').style.display = 'none'"
              class="w3-button w3-display-topright"><i class="fas fa-times"></i></span>
        <p id="a"></p>
      </header>
    </div>
  </div>
  <!-- ปิดแก้ไขแบบฟอร์มที่นี่ -->

  <?php require '../../require/footer_js.php'; ?>
  <!--เปิดแก้ไข javascript ที่นี่-->

  <script>
    function load_modal(text) {
      document.getElementById('id01').style.display = 'block';
      document.getElementById("a").innerHTML = text;
    }
<?php
if (isset($_REQUEST["a"])) {
  echo "window.onLoad = load_modal(\"" . $_REQUEST["a"] . "\");";
}
?>
  </script>
  <script>
    $(document).ready(function () {
      $("#example").DataTable({
        "lengthMenu": [[50, 100, 300, -1], [50, 100, 300, "All"]],
        "scrollX": true,
        dom: 'Blfrtip',
        buttons: [
          'copy', {extend: 'excel', footer: true}
        ]
      });
    });
  </script>
  <!--ปิดแก้ไข javascript ที่นี่-->

  <!-- footer content -->
  <?php require '../../require/footer_content.php'; ?>
  <!-- /footer content -->