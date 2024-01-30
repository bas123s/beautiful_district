<?php
require '../../require/partials/main.php'
?>

<head>




    <!-- Css -->



    <?php
    require '../../require/partials/head-css.php'
    ?>

    <link href="../../require/partials/assets/fonts/googlefont.css" rel="stylesheet">
</head>
<?php
require '../../require/partials/body.php';
require '../../require/partials/navbar/nav-onepage.php'
?>

<section class="relative table w-full py-36 lg:py-64 bg-[url('../../assets/images/hospital/bg.jpg')] bg-no-repeat bg-center bg-cover">
 
        </section><!--end section-->
<section id="features" class="relative  md:pb-24 pb-16 ">


    <!--end container-->
    <div class="container relative md:mt-24 mt-16">
    <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
      <div class="relative">
      <a href="assets/images/saas/classic02.jpg" class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom" title="">
                                        <img src="assets/images/saas/classic02.jpg" class="" width="900"
          height="600">
                                    <div class="tobii-zoom__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M21 16v5h-5"></path><path d="M8 21H3v-5"></path><path d="M16 3h5v5"></path><path d="M3 8V3h5"></path></svg></div></a>

          
        <div
          class="overflow-hidden absolute lg:h-[400px] h-[320px] lg:w-[400px] w-[320px] bg-indigo-600/5 bottom-0 start-0 rotate-45 -z-1 rounded-3xl">
        </div>
      </div>

      <div class="lg:ms-8">
        <div class="grid grid-cols-1 gap-[30px]">
          <a
            href="" class="group flex items-center relative overflow-hidden p-6 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
            <span
              class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
              <i class="uil uil-list-ol"></i>
            </span>
            <div class="flex-1 ms-3">
              <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">การจัดลำดับคะแนนรอบที่ 1</h5>
              <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">การจัดลำดับตามเกณฑ์คะแนน จำนวน 100 อำเภอ</p>
            </div>
            <div
              class="absolute start-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
              <i class="uil uil-list-ol"></i>
            </div>
          </a>

          <a href="" 
            class="group flex items-center relative overflow-hidden p-6 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
            <span
              class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
              <i class="uil uil-list-ol-alt"></i>
            </span>
            <div class="flex-1 ms-3">
              <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">การจัดลำดับคะแนนรอบที่ 2</h5>
              <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">การจัดลำดับตามเกณฑ์คะแนน จำนวน 50 อำเภอ</p>
            </div>
            <div
              class="absolute start-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
              <i class="uil uil-list-ol-alt"></i>
            </div>
          </a>

          <a href="../../dashboard/rpt/ranking.php"
            class="group flex items-center relative overflow-hidden p-6 rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 hover:bg-indigo-600 dark:hover:bg-indigo-600 transition-all duration-500 ease-in-out">
            <span
              class="text-indigo-600 group-hover:text-white text-5xl font-semibold transition-all duration-500 ease-in-out">
              <i class="uil uil-award"></i>
            </span>
            <div class="flex-1 ms-3">
              <h5 class="group-hover:text-white text-xl font-semibold transition-all duration-500 ease-in-out">
              การจัดลำดับคะแนนรอบสุดท้าย</h5>
              <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">การจัดลำดับตามเกณฑ์คะแนน จำนวน 17 อำเภอ</p>
            </div>
            <div
              class="absolute start-1 top-5 text-dark/[0.03] dark:text-white/[0.03] text-8xl group-hover:text-white/[0.04] transition-all duration-500 ease-in-out">
              <i class="uil uil-award"></i>
            </div>
          </a>
        </div>
      </div>
    </div><!--end grid-->
  </div><!--end container-->

</section><!--end section-->

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
<!-- JAVASCRIPTS -->
</body>

</html>