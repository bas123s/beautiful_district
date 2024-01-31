<?php
require '../../require/partials/main.php';


require '../../require/head_php3.php';

$sql = "SELECT * FROM `beautiful_district`.`news` ORDER BY id DESC ;";
$data = $mc->select_all($sql);
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
              <!-- Start -->
              <section class="relative md:py-16 py-16">
       
            <div class="container mx-auto px-4 relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">ข่าวสาร ประชาสัมพันธ์</h3>
                    <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                        <!-- <a href="news_list.php" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อ่านเพิ่มเติม<i class="uil uil-arrow-right align-middle"></i></a> -->
                    </div>
                    <p class="text-slate-400 max-w-xl mx-auto"></p>
                </div><!--end grid-->
     
                <div class="grid grid-cols-1 mt-2 md:mt-6 relative">
                    <div class="tiny-three-item">
                        <!-- Slide -->
                        <?php foreach ($data as $news) { ?>      
                        <div class="tiny-slide">
                        <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
            <img src="../../uploads/upload_news/<?= $news['pic_1']; ?>" alt="">
            <div class="content p-6">
                <a href="news.php?id=<?= $news['id']; ?>" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out"><?= $news['title']; ?></a>
                <p class="text-slate-400 mt-3 overflow-hidden max-h-12 leading-6"><?= $news['detail']; ?></p>



                <div class="mt-4">
                    <a href="news.php?id=<?= $news['id']; ?>" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อ่านเพิ่มเติม <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
 
                        </div>
                        <?php } ?>
                        <!-- Slide -->

                      
                    </div>
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 md:hidden ">
                    <div class="md:col-span-12 text-center">
                        <a href="nft-creators.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">See More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
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