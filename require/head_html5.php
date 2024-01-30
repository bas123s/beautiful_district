<?php
$app_name = "โครงการอำเภอสวยงาม";


require_once("../../require/response3.php");

require '../../require/partials/main.php'
  ?>


<!-- END: Vendor CSS-->
<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/table.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="../../template/app-assets/css/components.css">


<head>
  <?php
  require '../../require/partials/head-css.php'
    ?>

  <link href="../../require/partials/assets/fonts/googlefont.css" rel="stylesheet">
  <script src="../../require/partials/assets/js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../require/partials/data_table/datatables.css">
  <script type="text/javascript" language="javascript"
    src="../../require/partials/data_table/assets/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript"
    src="../../require/partials/assets/table/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="../../require/partials/assets/table/buttons.html5.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="../../require/partials/assets/table/jszip.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="../../require/partials/assets/table/pdfmake.min.js"></script>
  <script type="text/javascript" language="javascript"
    src="../../require/partials/assets/table/vfs_fonts.js"></script>
  <link rel="stylesheet" type="text/css"
    href="../../require/partials/assets/table/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<?php
require '../../require/partials/body.php';
require '../../require/partials/navbar/nav-service5.php'
  ?>
<!-- Start Hero -->
<section class="relative  w-full py-28 lg:py-28  bg-no-repeat bg-center bg-cover"
  style="background-image: url('../../require/partials/assets/images/user_manage.jpg') !important;">
  <div class="absolute inset-0 bg-black opacity-75"></div>
  <div class="container relative">
    <div class="grid grid-cols-1 pb-8 text-center mt-10">
      <!-- <h5 class="text-white/50 text-lg font-medium">
        < ?= @$app_name ?>
      </h5> -->
      <h3 class="mt-2 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
        <?= @$title ?>
      </h3>
    </div><!--end grid-->
  </div><!--end container-->

  <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
  
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