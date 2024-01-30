
<?php
require '../../require/head_php.php';
require '../../require/partials/main.php'
    ?>

    <head>
    <?php
    require '../../require/partials/main.php'
        ?>


        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="assets/libs/animate.css/animate.min.css" rel="stylesheet">

       
        <?php
        require '../../require/partials/head-css.php'
            ?> 
     
<link href="assets/fonts/googlefont.css" rel="stylesheet">
    </head>
    <?php
    require '../../require/partials/body.php';
    require '../../require/partials/navbar/nav-service.php'
        ?> 



        <!-- Start Hero -->
        <section class="relative table w-full py-36 lg:py-44 bg-[url('../../assets/images/services.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-75"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h5 class="text-white/50 text-lg font-medium">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน</h5>
                    <h3 class="mt-2 md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">เมนูหลัก</h3>
                </div><!--end grid-->
            </div><!--end container-->
            
            <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                   <!-- <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white hover:text-white"><a href="index.php">หน้าหลัก</a></li> -->
                   <!-- <li class="inline text-base text-white/50 mx-0.5"><i class="uil uil-angle-right-b"></i></li>
                    <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white" aria-current="page">ระบบ</li> -->
                </ul>
            </div>



        </section><!--end section-->




        <div class="relative">
            <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
                <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start Section-->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                    
                <?php if (in_array($uap->app_1, ["9"], TRUE)) { ?>
                <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-airplay"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Gun Report</a>
                            <p class="text-slate-400 mt-3">ระบบอาวุธปืนลูกซอง และเครื่องกระสุนปืนลูกซองตามโครงการอาสาพัฒนาและป้องกันตนเองแห่งชาติ (อพป.)</p>
                            
                            <div class="mt-5">
                                <a href="page-services.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">เข้าสู่ระบบ <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
    <?php
    if (in_array($uap->app_2, ["9"], TRUE)) {
        ?>

                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-shutter"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">G REPORT</a>
                            <p class="text-slate-400 mt-3">ระบบรายงานผลการดำเนินการตามนโยบายรัฐบาลและกระทรวงมหาดไทย</p>
                            
                            <div class="mt-5">
                                <a href="page-services.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">เข้าสู่ระบบ <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
    <?php } ?>
    <?php if (in_array($uap->app_1, ["8", "9"], TRUE)) { ?>
                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-camera-plus"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Photography</a>
                            <p class="text-slate-400 mt-3">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน ระบบงานในอนาคต</p>
                            
                            <div class="mt-5">
                                <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-red-400 hover:text-red-400 after:bg-red-400 duration-500 ease-in-out">เร็วๆนี้ <i class="uil  uil-ban"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-flower"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Graphic Designer</a>
                            <p class="text-slate-400 mt-3">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน ระบบงานในอนาคต</p>
                            
                            <div class="mt-5">
                                <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-red-400 hover:text-red-400 after:bg-red-400 duration-500 ease-in-out">เร็วๆนี้ <i class="uil  uil-ban"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-cog"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Web Security</a>
                            <p class="text-slate-400 mt-3">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน ระบบงานในอนาคต</p>
                            
                            <div class="mt-5">
                                <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-red-400 hover:text-red-400 after:bg-red-400 duration-500 ease-in-out">เร็วๆนี้ <i class="uil  uil-ban"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-comment"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                            <p class="text-slate-400 mt-3">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน ระบบงานในอนาคต</p>
                            
                            <div class="mt-5">
                                <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-red-400 hover:text-red-400 after:bg-red-400 duration-500 ease-in-out">เร็วๆนี้ <i class="uil  uil-ban"></i></a>
                            </div>
                        </div>
                    </div>



                </div><!--end grid-->
            </div><!--end container-->

 
        </section><!--end section-->
        <!-- End Section-->




<?php
require '../../require/partials/footer/footer.php';
require '../../require/partials/cookies.php';
require '../../require/partials/switcher.php';




    ?>
       

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->



        <!-- JAVASCRIPTS -->
        <script src="assets/libs/wow.js/wow.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/gumshoejs/gumshoe.min.js"></script>
        <script src="assets/libs/jarallax/jarallax.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
<?php
        require '../../require/partials/script-file.php';
        ?>
        <!-- JAVASCRIPTS -->
    </body>
</html>