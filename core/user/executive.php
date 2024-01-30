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

<!-- Start Hero -->
<section id="home"
         class="py-12 relative before:content-[''] before:absolute xl:before:-top-[30%] lg:before:-top-[50%] sm:before:-top-[80%] before:-top-[90%] before:-start-80 before:end-0 before:w-[140rem] before:h-[65rem] ltr:before:-rotate-12 rtl:before:rotate-12 before:bg-indigo-600/5 dark:before:bg-indigo-600/10 before:z-1 items-center overflow-hidden">
    <div class="container relative z-2">
        <div class="grid grid-cols-1 md:mt-44 mt-32 text-center">
            <div class="wow animate__animated animate__fadeIn">
                <!-- <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">หลักเกณฑ์การประกวด -->
                <!-- "โครงการอำเภอสวยงาม"</h4> -->
            <!-- <p class="text-slate-400 text-lg max-w-xl mx-auto">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน</p> -->

                <!-- <div class="mt-6">
                            <a href="service.php"class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">เข้าสู่ระบบ</a>

                            <p class="text-slate-400 text-sm mt-3">No credit card required. Free 14-days trial</p>
                        </div> -->
            </div>
            <div class="relative mt-8 z-3 wow animate__animated animate__fadeIn">
                <img src="../../require/partials/assets/images/saas/classic01.png" alt="" class="mover">
            </div>
        </div><!--end grid-->

        <div class="bg-indigo-600 w-8 h-16 z-2 absolute start-2 lg:bottom-28 md:bottom-36 sm:bottom-40 bottom-16"></div>
        <div class="bg-indigo-600/20 w-8 h-16 z-2 absolute start-12 lg:bottom-32 md:bottom-40 sm:bottom-44 bottom-20">
        </div>

        <div
            class="bg-indigo-600/20 w-8 h-16 z-2 absolute end-12 xl:bottom-[420px] lg:bottom-[315px] md:bottom-[285px] sm:bottom-80 bottom-32">
        </div>
        <div
            class="bg-indigo-600 w-8 h-16 z-2 absolute end-2 xl:bottom-[440px] lg:bottom-[335px] md:bottom-[305px] sm:bottom-[340px] bottom-36">
        </div>
    </div><!--end container-->
</section>
<section id="features" class="relative  md:pb-24 pb-16 ">

    <div class="container relative md:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">แดชบอร์ดข้อมูลสรุปผลเกณฑ์การประเมิน</h3>


        </div><!--end grid-->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="assets/images/charity/cause01.png" alt="">

                    <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                        <a href="../../dashboard/rpt/rpt_dopa.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ดูรายละเอียด</a>
                    </div>
                </div>

                <div class="p-6">
                    <a href="../../dashboard/rpt/rpt_dopa.php" class="hover:text-indigo-600 font-semibold text-xl">แดชบอร์ดสรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 1. การขับเคลื่อนภารกิจของ มท.</a>

                </div>
            </div><!--end content-->

            <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="assets/images/charity/cause02.png" alt="">

                    <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                        <a href="../../dashboard/rpt/rpt_support.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ดูรายละเอียด</a>
                    </div>
                </div>

                <div class="p-6">
                    <a href="../../dashboard/rpt/rpt_support.php" class="hover:text-indigo-600 font-semibold text-xl">แดชบอร์ดสรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. "การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย"</a>

                </div>
            </div><!--end content-->

            <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="assets/images/charity/cause03.png" alt="">

                    <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                        <a href="../../dashboard/rpt/rpt_5s.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ดูรายละเอียด</a>
                    </div>
                </div>

                <div class="p-6">
                    <a href="../../dashboard/rpt/rpt_5s.php" class="hover:text-indigo-600 font-semibold text-xl">แดชบอร์ดสรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)</a>


                </div>
            </div><!--end content-->



            <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="assets/images/charity/cause05.png" alt="">

                    <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                        <a href="../../dashboard/rpt/rpt_support.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ดูรายละเอียด</a>
                    </div>
                </div>

                <div class="p-6">
                    <a href="../../dashboard/rpt/rpt_services.php" class="hover:text-indigo-600 font-semibold text-xl">แดชบอร์ดสรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 4. การให้บริการประชาชนและเป็นที่พึ่งให้ประชาชน</a>



                </div>
            </div><!--end content-->
            <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="assets/images/charity/cause04.png" alt="">

                    <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                        <a href="../../dashboard/rpt/rpt_org.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ดูรายละเอียด</a>
                    </div>
                </div>

                <div class="p-6">
                    <a href="../../dashboard/rpt/rpt_org.php" class="hover:text-indigo-600 font-semibold text-xl">แดชบอร์ดสรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 5. การตรวจประเมินจากหน่วยงานภายนอก</a>



                </div>
            </div><!--end content-->
            <div class="group relative rounded hover:-mt-1 shadow hover:shadow-md dark:shadow-gray-800 overflow-hidden transition-all duration-300">
                <div class="relative overflow-hidden">
                    <img src="assets/images/charity/cause06.png" alt="">

                    <div class="absolute p-4 start-0 end-0 text-center bg-slate-900/80 -bottom-24 group-hover:bottom-0 transition-all duration-300">
                        <a href="../../dashboard/rpt/rpt_all.php" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">ดูรายละเอียด</a>
                    </div>
                </div>

                <div class="p-6">
                    <a href="../../dashboard/rpt/rpt_all.php" class="hover:text-indigo-600 font-semibold text-xl">รวมแดชบอร์ดสรุปผลเกณฑ์การประเมิน</a>



                </div>
            </div><!--end content-->




        </div><!--end grid-->
    </div><!--end container-->
    <div class="container relative md:mt-24 mt-16">
    <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
      <div class="relative">
        <img src="assets/images/saas/classic02.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt=""  width="900"
          height="600">
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
              <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">การจัดลำดับตามเกณฑ์คะแนน จำนวน 878 อำเภอ</p>
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
                ผลการแข่งขัน</h5>
              <p class="text-slate-400 group-hover:text-white/50 transition-all duration-500 ease-in-out mt-2">ผลสรุปการแข่งขันทั่วประเทศ (REWARD) </p>
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