<?php
$title = 'อัปโหลดรูปภาพ';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;
//$condition = "";
//if (!empty($_REQUEST)) {
//  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
//}
$sql = "SELECT * FROM `inspector` WHERE `id` = '" . $_REQUEST['id'] . "' ";
$data = $mc->select_1($sql);

//exit();
?>



<style>
    table,
    th,
    td {
        text-align: center;
    }
</style>
<style>
    .slide-in {
        position: relative;
        animation: slideIn 1s ease-in-out;
    }

    @keyframes slideIn {
        from {
            right: -20%;
        }

        to {
            right: 0;
        }
    }
</style>

<section class="relative  md:py-24 py-16">
    <div class="mb-5"><button onclick="goBack()"
            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-full">
            << กลับ</button>
    </div>
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">

            <div class="card  " style="  text-align: center;   ">

                <div class="card-body md:text-xl text-xl font-medium text-center">
                </div>
                <div class="card">
                    <div class="card-body md:text-xl text-xl font-medium text-center">
                        <!--<form method="post" action="form_query.php">-->

                        <h4 class="text-center text-1xl font-bold">
                            <?= $title ?>
                        </h4><br>

                        <?php if (isset($a)) { ?>
                            <div class=" text-center py-4 lg:px-4 slide-in">
                                <div class="p-2 bg-indigo-300 items-center text-indigo-800 leading-none lg:rounded-full flex lg:inline-flex"
                                    role="alert">
                                    <svg class="mx-5" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M18.944 11.112C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5h11c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888zM13 14v3h-2v-3H8l4-5l4 5h-3z" />
                                    </svg>
                                    <span class="font-semibold mr-2 text-left flex-auto">
                                        <?= $a ?>
                                    </span>
                                </div>
                            </div>
                        <?php } ?>




                        <div id="accordion-collapse" data-accordion="collapse">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>โครงการที่ 1 โครงการเสริมสร้างความมั่นคงทางด้านอาหาร น้อมนำแนวพระราชดำริสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดาฯสยามบรมราชกุมารี “บ้านนี้มีรัก ปลูกผักกินเอง” และขยายผลโครงการ “ทางนี้มีผล ผู้คนรักกัน”</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden"
                                aria-labelledby="accordion-collapse-heading-1">
                                <div
                                    class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <span class="text-red-500"> มุมกว้างเห็นภาพที่ว่าการอำเภอทั้งหลัง</span>
                                    <div
                                        class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                        <div>
                                            <div id="preview-container" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_1"];
                                                if ($data["pic1_1"] != "" ) {
                                                    ?>
                                                           <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>
                                            

                                                <?php } else {
                                                    ?>
                                                        <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview0">
                                                 
                                                <?php }
                                                ?>
                                            </div>

                                        </div>
                                        <div>
                                            <div id="preview-container1" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_2"];
                                                if ($data["pic1_2"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview1">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>

                                    </div>
                                    <span class="text-red-500">มุมกว้างเห็นภาพที่ว่าการอำเภอทั้งหลัง</span>
                                    <div
                                        class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                        <div>
                                            <div id="preview-container3" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_3"];
                                                if ($data["pic1_3"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview3">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>
                                        <div>
                                            <div id="preview-container4" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_4"];
                                                if ($data["pic1_4"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview4">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>

                                    </div>



                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-2">
                                    <span>โครงการที่ 2 โครงการน้อมนำแนวพระราชดำริสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี ในการส่งเสริมการสร้างสุขอนามัยให้แก่เด็กและแม่เติบโตอย่างถูกต้องตามเกณฑ์มาตรฐานสุขลักษณะ</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden"
                                aria-labelledby="accordion-collapse-heading-2">

                                <div
                                    class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                    <span class="text-red-500">  ด้านหลังที่ว่าการอำเภอ โดยถ่ายในมุมกว้างเห็นภาพที่ว่าการอำเภอทั้งหลัง</span>
                                    <div
                                        class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                        <div>
                                            <div id="preview-container5" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_5"];
                                                if ($data["pic1_5"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview5">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>
                                        <div>
                                            <div id="preview-container6" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_6"];
                                                if ($data["pic1_6"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview6">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>

                                    </div>




                                </div>

                            </div>
                            <h2 id="accordion-collapse-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-3">
                                    <span>โครงการที่ 3 โครงการส่งเสริมการใช้ผ้าไทย น้อมนำแนวพระราชดำริสมเด็จพระเจ้าลูกเธอ เจ้าฟ้าสิริวัณณวรี นารีรัตนราชกัญญา “ผ้าไทยใส่ให้สนุก” เพื่อพัฒนาการสวมใส่ผ้าไทยทุกช่วงวัย ทุกโอกาส</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden"
                                aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <span class="text-red-500">  บริเวณโดยรอบที่ว่าการอำเภอ</span>
                                    <div
                                        class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                        <div>
                                            <div id="preview-container7" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_7"];
                                                if ($data["pic1_7"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview7">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>
                                        <div>
                                            <div id="preview-container8" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_8"];
                                                if ($data["pic1_8"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview8">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-4">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-4">
                                    <span>โครงการที่ 4 โครงการ “ครอบครัวมหาดไทย ใส่ใจสิ่งแวดล้อม” โดยการจัดทำ ถังขยะเปียก ลดโลกร้อน</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden"
                                aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <span class="text-red-500">  ห้องน้ำประชาชนและเจ้าหน้าที่</span>
                                    <div
                                        class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                        <div>
                                            <div id="preview-container9" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_9"];
                                                if ($data["pic1_9"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview9">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>
                                        <div>
                                            <div id="preview-container10" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_10"];
                                                if ($data["pic1_10"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview10">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <h2 id="accordion-collapse-heading-5">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-5">
                                    <span>โครงการที่ 5 โครงการให้ความช่วยเหลือผู้ยากไร้ อาทิ โครงการ “รถเข็นนั่ง ปันสุข” การซ่อมแซมบ้านเรือนผู้ยากไร้ การมอบทุนการศึกษาแก่นักเรียนผู้ยากไร้ การมอบสิ่งของอุปโภค บริโภคแก่ผู้ยากไร้ เป็นต้น</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-5" class="hidden"
                                aria-labelledby="accordion-collapse-heading-5">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                <span class="text-red-500">  มุมกว้างเห็นภาพภายในทั้งสำนักทะเบียน และ  ป้ายต่าง ๆ ภายในสำนักทะเบียน อาทิเช่น ป้ายประชาสัมพันธ์ ป้ายขั้นตอนการให้บริการและ
ค่าธรรมเนียม แผนผังสำนักงาน และอื่น ๆ
</span>
                                    
                                    <div
                                        class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                        <div>
                                            <div id="preview-container11" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_11"];
                                                if ($data["pic1_11"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview11">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>
                                        <div>
                                            <div id="preview-container12" class="mb-4 flex justify-center" hidden>
                                                <?php
                                                $filePath = '../../uploads/upload_pic/' . @$data["pic1_12"];
                                                if ($data["pic1_2"] != "" ) {
                                                    ?>
                                                    <a href="<?= $filePath ?>"
                                                        class="rounded-lg shadow-md dark:shadow-gray-800 lightbox transition-all duration-500 group-hover:scale-105 tobii-zoom"
                                                        title="">
                                                        <img src="<?= $filePath ?>" class="" width="400" height="200">
                                                        <div class="tobii-zoom__icon"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                                                <path d="M21 16v5h-5"></path>
                                                                <path d="M8 21H3v-5"></path>
                                                                <path d="M16 3h5v5"></path>
                                                                <path d="M3 8V3h5"></path>
                                                            </svg></div>
                                                    </a>

                                                <?php } else {
                                                    ?>
                                                    <img class="w-64 h-64 object-contain border border-gray-300"
                                                        alt="Image preview12">
                                                <?php }
                                                ?>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                         
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const imageUpload = document.getElementById('image-upload');
    const imagePreview = document.getElementById('image-preview');
    const previewContainer = document.getElementById('preview-container');

    imageUpload.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview.setAttribute('src', this.result);
                previewContainer.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload1 = document.getElementById('image-upload1');
    const imagePreview1 = document.getElementById('image-preview1');
    const previewContainer1 = document.getElementById('preview-container1');

    imageUpload1.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview1.setAttribute('src', this.result);
                previewContainer1.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer1.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload3 = document.getElementById('image-upload3');
    const imagePreview3 = document.getElementById('image-preview3');
    const previewContainer3 = document.getElementById('preview-container3');

    imageUpload3.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview3.setAttribute('src', this.result);
                previewContainer3.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer3.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload4 = document.getElementById('image-upload4');
    const imagePreview4 = document.getElementById('image-preview4');
    const previewContainer4 = document.getElementById('preview-container4');

    imageUpload4.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview4.setAttribute('src', this.result);
                previewContainer4.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer4.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload5 = document.getElementById('image-upload5');
    const imagePreview5 = document.getElementById('image-preview5');
    const previewContainer5 = document.getElementById('preview-container5');

    imageUpload5.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview5.setAttribute('src', this.result);
                previewContainer5.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer5.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload6 = document.getElementById('image-upload6');
    const imagePreview6 = document.getElementById('image-preview6');
    const previewContainer6 = document.getElementById('preview-container6');

    imageUpload6.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview6.setAttribute('src', this.result);
                previewContainer6.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer6.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload7 = document.getElementById('image-upload7');
    const imagePreview7 = document.getElementById('image-preview7');
    const previewContainer7 = document.getElementById('preview-container7');

    imageUpload7.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview7.setAttribute('src', this.result);
                previewContainer7.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer7.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload8 = document.getElementById('image-upload8');
    const imagePreview8 = document.getElementById('image-preview8');
    const previewContainer8 = document.getElementById('preview-container8');

    imageUpload8.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview8.setAttribute('src', this.result);
                previewContainer8.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer8.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload9 = document.getElementById('image-upload9');
    const imagePreview9 = document.getElementById('image-preview9');
    const previewContainer9 = document.getElementById('preview-container9');

    imageUpload9.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview9.setAttribute('src', this.result);
                previewContainer9.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer9.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload10 = document.getElementById('image-upload10');
    const imagePreview10 = document.getElementById('image-preview10');
    const previewContainer10 = document.getElementById('preview-container10');

    imageUpload10.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview10.setAttribute('src', this.result);
                previewContainer10.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer10.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload11 = document.getElementById('image-upload11');
    const imagePreview11 = document.getElementById('image-preview11');
    const previewContainer11 = document.getElementById('preview-container11');

    imageUpload11.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview11.setAttribute('src', this.result);
                previewContainer11.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer11.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload12 = document.getElementById('image-upload12');
    const imagePreview12 = document.getElementById('image-preview12');
    const previewContainer12 = document.getElementById('preview-container12');

    imageUpload12.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview12.setAttribute('src', this.result);
                previewContainer12.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer12.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload13 = document.getElementById('image-upload13');
    const imagePreview13 = document.getElementById('image-preview13');
    const previewContainer13 = document.getElementById('preview-container13');

    imageUpload13.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview13.setAttribute('src', this.result);
                previewContainer13.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer13.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload14 = document.getElementById('image-upload14');
    const imagePreview14 = document.getElementById('image-preview14');
    const previewContainer14 = document.getElementById('preview-container14');

    imageUpload14.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview14.setAttribute('src', this.result);
                previewContainer14.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer14.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload15 = document.getElementById('image-upload15');
    const imagePreview15 = document.getElementById('image-preview15');
    const previewContainer15 = document.getElementById('preview-container15');

    imageUpload15.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview15.setAttribute('src', this.result);
                previewContainer15.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer15.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload16 = document.getElementById('image-upload16');
    const imagePreview16 = document.getElementById('image-preview16');
    const previewContainer16 = document.getElementById('preview-container16');

    imageUpload16.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview16.setAttribute('src', this.result);
                previewContainer16.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer16.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload17 = document.getElementById('image-upload17');
    const imagePreview17 = document.getElementById('image-preview17');
    const previewContainer17 = document.getElementById('preview-container17');

    imageUpload17.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview17.setAttribute('src', this.result);
                previewContainer17.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer17.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload18 = document.getElementById('image-upload18');
    const imagePreview18 = document.getElementById('image-preview18');
    const previewContainer18 = document.getElementById('preview-container18');

    imageUpload18.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview18.setAttribute('src', this.result);
                previewContainer18.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer18.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload19 = document.getElementById('image-upload19');
    const imagePreview19 = document.getElementById('image-preview19');
    const previewContainer19 = document.getElementById('preview-container19');

    imageUpload19.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview19.setAttribute('src', this.result);
                previewContainer19.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer19.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload20 = document.getElementById('image-upload20');
    const imagePreview20 = document.getElementById('image-preview20');
    const previewContainer20 = document.getElementById('preview-container20');

    imageUpload20.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview20.setAttribute('src', this.result);
                previewContainer20.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer20.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload21 = document.getElementById('image-upload21');
    const imagePreview21 = document.getElementById('image-preview21');
    const previewContainer21 = document.getElementById('preview-container21');

    imageUpload21.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview21.setAttribute('src', this.result);
                previewContainer21.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer21.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload22 = document.getElementById('image-upload22');
    const imagePreview22 = document.getElementById('image-preview22');
    const previewContainer22 = document.getElementById('preview-container22');

    imageUpload22.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview22.setAttribute('src', this.result);
                previewContainer22.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer22.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload23 = document.getElementById('image-upload23');
    const imagePreview23 = document.getElementById('image-preview23');
    const previewContainer23 = document.getElementById('preview-container23');

    imageUpload23.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview23.setAttribute('src', this.result);
                previewContainer23.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer23.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<?php
require '../../require/footer_content4.php';
?>