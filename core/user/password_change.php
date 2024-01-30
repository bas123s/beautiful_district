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

<link rel="stylesheet" type="text/css" href="../../template/app-assets/vendors/css/extensions/toastr.min.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/vendors/css/forms/select/select2.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/table.css">

<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/components.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/ dataTables.min.css">
<script href="jquery.dataTables.min.js"></script>

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
<section
  class="relative  w-full py-36 lg:py-44 bg-no-repeat bg-center bg-cover" style ="background-image: url('../../require/partials/assets/images/change_password.jpg') !important;">>
  <div class="absolute inset-0 bg-black opacity-75"></div>
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center mt-10">
      <h5 class="text-white/50 text-lg font-medium">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน</h5>
      <h3 class="mt-2 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
        เปลี่ยนรหัสผ่าน
      </h3>
    </div><!--end grid-->
  </div><!--end container-->

  <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
    <ul class="tracking-[0.5px] mb-0 inline-block">
      <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white"><a
          href="../../app/main/index.php">หน้าหลัก</a></li>
      <li class="inline text-base text-white/50 mx-0.5"><i class="uil uil-angle-right-b"></i></li>
      <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">
      เปลี่ยนรหัสผ่าน</li>
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
  <div class="container   relative">
    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
      <!-- แก้ไขแบบฟอร์มที่นี่ -->
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="card">

            <div class="card-header">
              <h2>เปลี่ยนรหัสผ่าน</h2>
            </div>

            <div class="card-body">
              <!--        <form action="password.php"  method="POST">
                  <input type="hidden" name="x" value="h" >
                    <input type="text" name="password" id="password" value="" class="w3-input w3-margin-bottom w3-xlarge" placeholder="กรุณากรอกรหัสผ่าน" onkeypress="btn(this.value);" onchange="btn(this.value);">
                      <button class="w3-button w3-block w3-theme-d1 w3-xlarge w3-margin-bottom" id="btn1" disabled>ยืนยันการเปลี่ยนรหัสผ่าน</button>
                      </form>-->


              <form class="auth-reset-password-form mt-2" action="password.php" method="POST" novalidate="novalidate">
                <input type="hidden" name="x" value="h">
                <div class="mb-1">
                  <!--< ?= $_SESSION[session_id()][$mc->app_id]['mem_id'] ?>-->
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="reset-password-new">รหัสผ่านใหม่</label>
                  </div>
                  <div class="input-group input-group-merge form-password-toggle">
                    <input type="password" class="form-control form-control-merge" id="reset-password-new"
                      name="password" placeholder="············" aria-describedby="reset-password-new" tabindex="1"
                      autofocus="">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg></span>
                  </div>
                </div>
                <div class="mb-1">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="reset-password-confirm">ยืนยันรหัสผ่านใหม่</label>
                  </div>
                  <div class="input-group input-group-merge form-password-toggle">
                    <input type="password" class="form-control form-control-merge" id="reset-password-confirm"
                      name="reset-password-confirm" placeholder="············" aria-describedby="reset-password-confirm"
                      tabindex="2">
                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                        height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg></span>
                  </div>
                </div>
                <button class="btn btn-primary w-100 waves-effect waves-float waves-light mt-3" tabindex="3"
                  id="btn1">เปลี่ยนรหัสผ่าน</button>
              </form>
            </div>

            <!--      <footer class="w3-container w3-blue">
              <h5>Footer</h5>
            </footer>-->

          </div>
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
<?php
require '../../require/partials/script-file.php';
?>


<?php require '../../require/footer_js.php'; ?>
<!--เปิดแก้ไข javascript ที่นี่-->
<!--<script>
  function btn(val) {
    if (val.length > 0) {
      document.getElementById("btn1").disabled = false;
    } else {
      document.getElementById("btn1").disabled = true;
    }
  }
</script>-->
<!--ปิดแก้ไข javascript ที่นี่-->


<script src="../../template/app-assets/js/scripts/pages/auth-reset-password.js"></script>

<!-- JAVASCRIPTS -->
</body>

</html>