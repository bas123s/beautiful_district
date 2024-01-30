<?php
require '../../require/head_php.php';
//แก้ไข menu ในไฟล์  menuconfig.php
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
require_once("../../require/response3.php");
require '../add_user/response.php';
require '../../require/partials/main.php'
  ?>



<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/table.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/components.css">

<head>
  <?php
  require '../../require/partials/head-css.php'
    ?>

  <link href="../../require/partials/assets/fonts/googlefont.css" rel="stylesheet">
</head>
<?php
require '../../require/partials/body.php';
require '../../require/partials/navbar/nav-service.php'
  ?>

<!-- Start Hero -->
<section class="relative  w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover"
  style="background-image: url('../../require/partials/assets/images/update_profile.jpg') !important;">
  <div class="absolute inset-0 bg-black opacity-75"></div>
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center mt-10">
      <h5 class="text-white/50 text-lg font-medium">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน</h5>
      <h3 class="mt-2 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
        แก้ไขข้อมูลส่วนตัว
      </h3>
    </div><!--end grid-->
  </div><!--end container-->

  <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
    <ul class="tracking-[0.5px] mb-0 inline-block">
      <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a
          href="../../app/main/index.php">หน้าหลัก</a></li>
      <li class="inline text-base text-white/50 mx-0.5"><i class="uil uil-angle-right-b"></i></li>
      <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">
        แก้ไขข้อมูลส่วนตัว</li>
    </ul>
  </div>
</section><!--end section-->
<div class="relative">
  <div
    class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
    <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
    </svg>
  </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
  <div class="container  relative">
    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">

      <div class="section row mt-5 mb-5">
        <div class="col col-md-6 offset-md-3">
          <form action="update_profile_query.php" method="POST">
            <div class="card">

              <div class="card-body p-3 pt-0">


                <?php
                $name = "username";
                $label = "ชื่อ นามสกุล";
                ?>
                <div class="mb-2 ">
                  <label for="<?= $name ?>" class="form-label"><b>
                      <?= $label ?>
                    </b></label>
                  <input type="text" class="form-control form-control-lg" id="<?= $name ?>" name="<?= $name ?>"
                    placeholder="กรุณากรอก <?= $label ?>" value="<?= $user[$name] ?>">
                </div>

                <?php
                $name = "position";
                $label = "ตำแหน่ง";
                ?>
                <div class="mb-2 ">
                  <label for="<?= $name ?>" class="form-label"><b>
                      <?= $label ?>
                    </b></label>
                  <input type="text" class="form-control form-control-lg" id="<?= $name ?>" name="<?= $name ?>"
                    placeholder="กรุณากรอก <?= $label ?>" value="<?= $user[$name] ?>">
                </div>



                <?php

                // if ($user["ministry_id"] == "15") {
                
                //     ?>
                <div class="mb-2 ">
                  <label class="form-label"><b>จังหวัด</b></label>
                  <div id='pcode'>
                    <?php
                    $mc->list_option5($province, "pcode", " form-select form-control-lg ps-1 ", $user["pcode"], " onChange=\"dochange('amphoe', this.value);\" ", "จังหวัด");
                    ?>
                  </div>
                </div>
                <!-- < ?php } ?> -->






                <input type="hidden" name="mem_id" value="<?= $user["mem_id"] ?>">
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-success btn-lg waves-effect waves-float waves-light p-1"><i
                    class="fa-regular fa-floppy-disk"></i> ยืนยันการแก้ไขประวัติ</button>
              </div>




            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
require '../../require/partials/footer/footer.php';
require '../../require/partials/cookies.php';
require '../../require/partials/switcher.php';




?>


<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
  class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
    class="uil uil-arrow-up"></i></a>
<!-- Back to top -->



<!-- JAVASCRIPTS -->

<?php
require '../../require/partials/script-file.php';
?>
<?php require '../../require/footer_js.php'; ?>
<!--เปิดแก้ไข javascript ที่นี่-->
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

  function dochange(src, val) {
    console.log(src, val);
    var req = Inint_AJAX();
    req.onreadystatechange = function () {
      if (req.readyState == 4) {
        if (req.status == 200) {
          document.getElementById(src).innerHTML = req.responseText; //รับค่ากลับมา
        }
      }
    };
    //alert("get_select.php?data=" + src + "&val=" + val);
    req.open("GET", "../../require/get_select.php?data_type=" + src + "&data_value=" + val); //สร้าง connection
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    req.send(null); //ส่งค่า
  }
  //  window.onLoad = dochange('pcode', "< ?= $user["pcode"] ?>");
  //  window.onLoad = dochange('acode', "< ?= $user["acode"] ?>");
  <?php
  if (isset($_REQUEST["a"])) {
    echo "document.getElementById('id03').style.display = 'block';";
  }
  ?>


</script>

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
<!-- JAVASCRIPTS -->
</body>

</html>