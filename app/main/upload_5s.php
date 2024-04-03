<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
$sql = "SELECT * FROM `files_5s` WHERE `pcode` = '" . $_REQUEST['pcode'] . "' AND `acode` = '" . $_REQUEST['acode'] . "'  ";
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

                        <?php if (isset ($a)) { ?>
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


                        <form class="mb-3" action="upload_5s_query.php" method="post" enctype="multipart/form-data">

                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span>1 สะสาง : การแยกของที่ไม่ต้องการ /ไม่จำเป็นต้องใช้ ออกจากสิ่งที่ต้องการ
                                            /จำเป็นต้องใช้ </span>
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
                                        class="p-5 border border-b-0 text-left border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <span class="text-red-500 "> ภาพถ่ายพร้อมคำบรรยายการดำเนินการที่เกี่ยวข้อง เช่น<br>
                                            - ตู้เก็บเอกสารที่จัดพื้นที่ไว้อย่างเป็นสัดส่วน<br>
                                            - แฟ้มงานที่มีการจัดเรียงและมีป้ายบอกหมวดหมู่อย่างชัดเจน<br>
                                            - บัญชีการทำลายเอกสาร/หนังสือทำลายหนังสือประจำปี/การจำหน่ายครุภัณฑ์<br>
                                            - บอร์ดประชาสัมพันธ์ที่มีการแสดงข้อมูล บุคลากรของส่วนราชการต่างๆ ครบถ้วนชัดเจนเป็นปัจจุบันมีการจัดวางรูปแบบที่เป็นระเบียบ สวยงาม มีการระบุวันเดือนปีที่ปรับปรุงข้อมูลล่าสุด
                                        </span>

                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                            <div>
                                                <div id="preview-container" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_1"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview0" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview0">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload" name="pic1_1"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>
                                            <div>
                                                <div id="preview-container1" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_2"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview1"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview1" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview1"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview1">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ
                                                    </span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload1" name="pic1_2"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>

                                        </div>
                                        <span
                                            class="text-red-500"></span>
                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                            <div>
                                                <div id="preview-container3" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_3"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview3"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview3" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview3"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview3">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload3" name="pic1_3"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>
                                            <div>
                                                <div id="preview-container4" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_4"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview4"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview4" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview4"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview4">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ
                                                    </span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload4" name="pic1_4"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
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
                                        <span>2.สะดวก : การจัดแบ่งหมวดหมู่และการจัดสถานที่ โดยมีป้ายชี้บอกเพื่อให้ทราบข้อมูลหรือขั้นตอนที่สำคัญในการทำงาน รวมถึงอำนวยความสะดวกให้ผู้มาใช้บริการ</span>
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
                                        class="p-5 border border-b-0 text-left border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                        <span class="text-red-500"> ภาพถ่ายพร้อมคำบรรยายการดำเนินการที่เกี่ยวข้อง เช่น <br>
-	สถานที่หรือสิ่งอำนวยความสะดวกสำหรับผู้รับบริการโดยเฉพาะผู้พิการและผู้สูงอายุ(อ้างอิงตามมาตรฐาน GECC) <br>
-	ป้ายที่ระบุถึงขั้นตอนการให้บริการที่ชัดเจนแสดงอยู่ในจุดที่สามารถมองเห็นได้อย่างชัดเจนมีความสวยงาม
</span>
                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                            <div>
                                                <div id="preview-container5" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_5"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview5"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview5" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview5"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview5">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload5" name="pic1_5"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>
                                            <div>
                                                <div id="preview-container6" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_6"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                      
                                                        <img id="image-preview6"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview6" src="<?= $filePath ?>">
                                                    <?php } } else {
                                                        ?>
                                                        <img id="image-preview6"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview6">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ
                                                    </span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload6" name="pic1_6"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
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
                                        <span>3. สะอาด : การดูแลรักษาความสะอาดของพื้นที่ทำงานทั้งหมดอย่างสม่ำเสมอ รวมถึง การบำรุงรักษา เครื่องใช้อุปกรณ์ให้อยู่ในสภาพที่ใช้งานได้ตลอดเวลา </span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-5 border border-t-0 text-left border-gray-200 dark:border-gray-700">
                                        <span class="text-red-500"> ภาพถ่ายพร้อมคำบรรยายการดำเนินการที่เกี่ยวข้อง เช่น <br>
-	ตัวอาคาร ทปค.อ.ทั้งภายในและภายนอก <br>
- 	บันทึกตารางเวลาทำความสะอาด <br>
-	สิ่งก่อสร้างถาวรวัตถุและสภาพแวดล้อมบริเวณพื้นที่โดยรอบทปค.อ. <br>
</span>

                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                            <div>
                                                <div id="preview-container7" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_7"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                       
                                                        <img id="image-preview7"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview7" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview7"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview7">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload7" name="pic1_7"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>
                                            <div>
                                                <div id="preview-container8" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_8"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview8"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview8" src="<?= $filePath ?>">
                                                    <?php } } else {
                                                        ?>
                                                        <img id="image-preview8"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview8">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ
                                                    </span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload8" name="pic1_8"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
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
                                        <span>4 สุขลักษณะ : การดูแลสถานที่ทำงานให้มีสภาพแวดล้อมที่ดี มีบรรยากาศน่าทำงาน และรักษามาตรฐานที่ดี</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-4" class="hidden"
                                    aria-labelledby="accordion-collapse-heading-4">
                                    <div class="p-5 border text-left border-b-0 border-gray-200 dark:border-gray-700">
                                        <span class="text-red-500"> ภาพถ่ายพร้อมคำบรรยายการดำเนินการที่เกี่ยวข้อง เช่น <br>
-	การดำเนินการที่แสดงถึงการทำกิจกรรม สะสาง สะดวก สะอาด อย่างต่อเนื่อง เช่น มีการประเมินจากผู้บังคับบัญชาหรือผู้ที่เกี่ยวข้องอย่างต่อเนื่อง<br>
-	คำสั่งอำเภอที่แต่งตั้งคณะกรรมการหรือผู้รับผิดชอบการติดตามผลการดำเนินกิจกรรม ๕ส.  <br>
-	รายงานผลการติดตามการดำเนินกิจกรรม ๕ส. ของคณะกรรมการหรือผู้รับผิดชอบข้างต้น 
</span>
                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                            <div>
                                                <div id="preview-container9" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_9"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview9"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview9" src="<?= $filePath ?>">
                                                    <?php }} else {
                                                        ?>
                                                        <img id="image-preview9"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview9">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload9" name="pic1_9"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>
                                            <div>
                                                <div id="preview-container10" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_10"];
                                                    if (file_exists($filePath)) {
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                    
                                                        <img id="image-preview10"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview10" src="<?= $filePath ?>">
                                                    <?php } } else {
                                                        ?>
                                                        <img id="image-preview10"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview10">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ
                                                    </span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload10" name="pic1_10"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
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
                                        <span>5.สร้างวินัย : การดำเนินกิจกรรม 5ส อย่างต่อเนื่องเป็นปกติจนกลาย เป็นนิสัย </span>
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
                                        <span class="text-red-500"> ภาพถ่ายพร้อมคำบรรยายการดำเนินการที่เกี่ยวข้อง เช่น <br>
                                        -	ภาพการจัดกิจกรรมส่งเสริมกิจกรรม 5ส.

                                        </span>
                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">


                                            <div>
                                                <div id="preview-container11" class="mb-4 flex justify-center" hidden>
                                                    <?php
                                                    $filePath = '../../uploads/upload_5s/' . @$data["pic1_11"];
                                                    if (file_exists($filePath)) {
                                                        
                                                        if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                                                            ?>
                                                         
                                                            <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                                                            <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
                                                        <?php } else { ?>
                                                        <img id="image-preview11"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview11" src="<?= $filePath ?>">
                                                    <?php } } else {
                                                        ?>
                                                        <img id="image-preview11"
                                                            class="w-64 h-64 object-contain border border-gray-300"
                                                            alt="Image preview11">
                                                    <?php }
                                                    ?>
                                                </div>
                                                <div class="my-10">
                                                    <span> เลือกไฟล์รูปภาพ</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload11" name="pic1_11"
                                                        class="mt-2 text-gray-600" accept="image/*,application/pdf">
                                                </div>
                                            </div>
                                           <div>
    <div id="preview-container12" class="mb-4 flex justify-center" hidden>
        <?php
        $filePath = '../../uploads/upload_5s/' . @$data["pic1_12"];
        if (file_exists($filePath)) {
            if (pathinfo($filePath, PATHINFO_EXTENSION) === 'pdf') {
                ?>
             
                <a class="btn btn-success" id="download-link" href="<?= $filePath ?>" download>ดาวน์โหลด PDF
                <embed id="image-preview12" src="<?= $filePath ?>" type="application/pdf" width="300" height="200"></a>
            <?php } else { ?>
                <img id="image-preview12" class="w-64 h-64 object-contain border border-gray-300" alt="Image preview12" src="<?= $filePath ?>">
            <?php }
        } else {
            ?>
            <img id="image-preview12" class="w-64 h-64 object-contain border border-gray-300" alt="Image preview12">
        <?php }
        ?>
    </div>
    <div class="my-10">
        <span> เลือกไฟล์รูปภาพหรือ PDF </span>
        <input type="file" id="image-upload12" name="pic1_12" class="mt-2 text-gray-600" accept="image/*,application/pdf">
    </div>
</div>


                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <input type="hidden" name="id" value="<?= $data["id"] ?>">
                            <input type="hidden" name="pcode" value="<?= $data["pcode"] ?>">
                            <input type="hidden" name="pname" value="<?= $data["pname"] ?>">
                            <input type="hidden" name="acode" value="<?= $data["acode"] ?>">
                            <input type="hidden" name="aname" value="<?= $data["aname"] ?>">
                            <br>
                            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded ">อัพโหลด</button>
                        </form>
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
    function goBack() {
        window.history.back();
    }
</script>
<?php
require '../../require/footer_content4.php';
?>