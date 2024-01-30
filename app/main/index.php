<?php
$title = 'แบบประเมินการประกวด "อำเภอสวยงาม"  ประจำปี พ.ศ. 2566';
require '../../require/head_php.php';
require '../../require/head2.php';
//require '../../require/head2.php';
?>
<!-- เริ่มแก้ข้อมูลไฟล์ลงไป-->
<?php if (in_array($uap->app_1, ["7", "9"], TRUE)) { ?>
    <?php if (@$user['pid'] == '0310' || @$user['pid'] == '0307' || @$user['pid'] == '0311' || @$user['pid'] == '0309' || @$user['pid'] == '0317') { ?>
        <div
            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
            <div
                class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                <a href="../main/form_dopa.php"> <img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                        src="../../require/partials/assets/images/b-icon.jpg" alt="" width="384" height="512"> </a>
            </div>
            <div class="content mt-7">
                <a href="../main/form_dopa.php" class="title h5 text-lg font-medium hover:text-indigo-600">1.
                    การขับเคลื่อนภารกิจของ มท.</a>
                <p class="text-slate-400 mt-3">"บำบัดทุกข์ บำรุงสุข"</p>
                <div class="mt-5">
                    <a href="../main/form_dopa.php"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ทำแบบประเมิน
                        <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <?php
    }
}
?>


<?php if (in_array($uap->app_1, ["5", "9"], TRUE)) { ?>

    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/form_main_m.php"> <img
                    class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                    src="../../require/partials/assets/images/m-icon.jpg" alt="" width="384" height="512"> </a>
        </div>
        <div class="content mt-7">
            <a href="../main/form_main_m.php" class="title h5 text-lg font-medium hover:text-indigo-600">3.
            การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย</a>
            <p class="text-slate-400 mt-3">"สมาคมแม่บ้านมหาดไทย"</p>
            <div class="mt-5">
                <a href="../main/form_main_m.php"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ทำแบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
            <div class="mt-5">
                <a href="../main/rpt_m_amp.php?pcode=<?php echo @$user['pcode']; ?>"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">พิมพ์แบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
            <!-- <div class="mt-5">
                <a href="../main/rpt_support_amp_upload.php?pcode=< ?php echo @$user['pcode']; ?>"
                   class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อัปโหลดไฟล์
                    <i class="uil uil-arrow-right"></i></a>
            </div> -->
        </div>
    </div>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/form_main_support.php"> <img
                    class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                    src="../../require/partials/assets/images/m-icon.jpg" alt="" width="384" height="512"> </a>
        </div>
        <div class="content mt-7">
            <a href="../main/form_main_support.php" class="title h5 text-lg font-medium hover:text-indigo-600">4.
                อำเภอมีสภาพในการเป็นศูนย์การเรียนรู้</a>
            <p class="text-slate-400 mt-3">"สมาคมแม่บ้านมหาดไทย"</p>
            <div class="mt-5">
                <a href="../main/form_main_support.php"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ทำแบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
            <div class="mt-5">
                <a href="../main/rpt_support_amp.php?pcode=<?php echo @$user['pcode']; ?>"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">พิมพ์แบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
            <!-- <div class="mt-5">
                <a href="../main/rpt_support_amp_upload.php?pcode=< ?php echo @$user['pcode']; ?>"
                   class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อัปโหลดไฟล์
                    <i class="uil uil-arrow-right"></i></a>
            </div> -->
        </div>
    </div>
    <!-- <div
            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
            <div
                class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                <a href="../main/ins_m.php"> <img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                        src="logo_500x500.png" alt="" width="384" height="512"> </a>
            </div>
            <div class="content mt-7">
                <a href="../main/ins_m.php" class="title h5 text-lg font-medium hover:text-indigo-600">
                ตรวจสอบรูปภาพกองตรวจราชการ</a>
                <p class="text-slate-400 mt-3">" กองตรวจราชการและเรื่องราวร้องทุกข์"</p>
                <div class="mt-5">
                    <a href="../main/ins_m.php"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ตรวจสอบ
                        <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div> -->
<?php } ?>


<?php if (in_array($uap->app_1, ["6", "9"], TRUE)) { ?>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/form_main_5s.php"><img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                    src="../../require/partials/assets/images/5s-icon-01.png" alt="" width="384" height="512"> </a>
        </div>
        <div class="content mt-7">
            <a href="../main/form_main_5s.php" class="title h5 text-lg font-medium hover:text-indigo-600">2.
                การจัดการความเรียบร้อย</a>
            <p class="text-slate-400 mt-3">"การจัดการความเรียบร้อยของที่ทำการปกครอง (5 ส.)"</p>
            <div class="mt-5">
                <a href="../main/form_main_5s.php"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ทำแบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
            <div class="mt-5">
                <a href="../main/rpt_5s_amp.php?pcode=<?php echo @$user['pcode']; ?>"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">พิมพ์แบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
            <div class="mt-5">
                <a href="../main/pro_uploads.php"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อัปโหลดไฟล์
                    <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (in_array($uap->app_1, ["3"], TRUE)) { ?>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/inspector.php"><img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                    src="logo_500x500.png" alt="" width="384" height="512"> </a>
        </div>
        <div class="content mt-7">
            <a href="../main/inspector.php" class="title h5 text-lg font-medium hover:text-indigo-600">ลงพื้นที่ตรวจสอบและอัปโหลดรูปภาพ</a>
            <p class="text-slate-400 mt-3">"กองตรวจราชการและเรื่องราวร้องทุกข์"</p>

            <div class="mt-5">
                <a href="../main/inspector.php"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อัปโหลดไฟล์
                    <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (in_array($uap->app_1, ["1"], TRUE)) { ?>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_5s_amp_upload.php?pcode=<?php echo @$user['pcode']; ?>&aname=<?php echo @$user['aname']; ?>"><img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                    src="../../require/partials/assets/images/5s-icon-01.png" alt="" width="384" height="512"> </a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_5s_amp_upload.php?pcode=<?php echo @$user['pcode']; ?>&aname=<?php echo @$user['aname']; ?>" class="title h5 text-lg font-medium hover:text-indigo-600">2.
                การจัดการความเรียบร้อย</a>
            <p class="text-slate-400 mt-3">"การจัดการความเรียบร้อยของที่ทำการปกครอง (5 ส.)"</p>

            <div class="mt-5">
                <a href="../main/rpt_5s_amp_upload.php?pcode=<?php echo @$user['pcode']; ?>&aname=<?php echo @$user['aname']; ?>"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อัปโหลดไฟล์
                    <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (in_array($uap->app_1, ["1"], TRUE)) { ?>

<div
    class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
    <div
        class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
        <a href="../main/rpt_support_amp_upload.php?pcode=<?php echo @$user['pcode']; ?>&aname=<?php echo @$user['aname']; ?>"> <img
                class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                src="../../require/partials/assets/images/m-icon.jpg" alt="" width="384" height="512"> </a>
    </div>
    <div class="content mt-7">
        <a href="../main/rpt_support_amp_upload.php?pcode=<?php echo @$user['pcode']; ?>&aname=<?php echo @$user['aname']; ?>" class="title h5 text-lg font-medium hover:text-indigo-600">4.
            อำเภอมีสภาพในการเป็นศูนย์การเรียนรู้</a>
        <p class="text-slate-400 mt-3">"สมาคมแม่บ้านมหาดไทย"</p>

        <div class="mt-5">
            <a href="../main/rpt_support_amp_upload.php?pcode=<?php echo @$user['pcode']; ?>&aname=<?php echo @$user['aname']; ?>"
                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อัปโหลดไฟล์
                <i class="uil uil-arrow-right"></i></a>
        </div>
    </div>
</div>
<?php } ?>

<?php if (in_array($uap->app_1, ["7", "9"], TRUE)) { ?>
    <?php if (@$user['pid'] == '0305' || @$user['pid'] == '0322' || @$user['pid'] == '0317') { ?>
        <div
            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
            <div
                class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                <a href="../main/inspector_check.php"> <img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                        src="logo_500x500.png" alt="" width="384" height="512"> </a>
            </div>
            <div class="content mt-7">
                <a href="../main/inspector_check.php" class="title h5 text-lg font-medium hover:text-indigo-600">
                ตรวจสอบรูปภาพกองตรวจราชการ</a>
                <p class="text-slate-400 mt-3">" กองตรวจราชการและเรื่องราวร้องทุกข์"</p>
                <div class="mt-5">
                    <a href="../main/inspector_check.php"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ตรวจสอบ
                        <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<?php if (in_array($uap->app_1, ["6", "9"], TRUE)) { ?>
    <!--  <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
          class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
          <a href="../main/"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
          <a href="../main/" class="title h5 text-lg font-medium hover:text-indigo-600">พิมพ์แบบประเมิน</a>
          <p class="text-slate-400 mt-3">" พิมพ์แบบประเมิน"</p>
          <div class="mt-5">
            <a href="../main/"
               class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ส่งแบบประเมิน
              <i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
      </div>-->
<?php } ?>
<?php if (in_array($uap->app_1, ["8", "9"], TRUE)) { ?>
    <!-- <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_dopa.php"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_dopa.php" class="title h5 text-lg font-medium hover:text-indigo-600">สรุปผลเกณฑ์การประเมิน
            </a>
            <p class="text-slate-400 mt-3">1. การขับเคลื่อนภารกิจของ มท. "บำบัดทุกข์ บำรุงสุข"</p>

        </div>
    </div>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_support.php"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_support.php"
                class="title h5 text-lg font-medium hover:text-indigo-600">สรุปผลเกณฑ์การประเมิน</a>
            <p class="text-slate-400 mt-3">2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย</p>

        </div>
    </div>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_5s.php"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_5s.php" class="title h5 text-lg font-medium hover:text-indigo-600">สรุปผลเกณฑ์การประเมิน
            </a>
            <p class="text-slate-400 mt-3">2. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)</p>

        </div>
    </div>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_services.php"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_services.php"
                class="title h5 text-lg font-medium hover:text-indigo-600">สรุปผลเกณฑ์การประเมิน</a>
            <p class="text-slate-400 mt-3">4.การให้บริการประชาชนและเป็นที่พึ่งให้ประชาชน</p>

        </div>
    </div>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_org.php"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_org.php"
                class="title h5 text-lg font-medium hover:text-indigo-600">สรุปผลเกณฑ์การประเมิน</a>
            <p class="text-slate-400 mt-3">5. การตรวจประเมินจากหน่วยงานภายนอก</p>

        </div>
    </div>
    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../main/rpt_all.php"> <i class="uil uil-crosshairs"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../main/rpt_all.php"
                class="title h5 text-lg font-medium hover:text-indigo-600">สรุปผลเกณฑ์การประเมิน</a>
            <p class="text-slate-400 mt-3">สรุปผลเกณฑ์การประเมิน </p>

        </div>
    </div> -->

<?php } ?>
<?php if (in_array($uap->app_1, ["7","8" ,"9"], TRUE)) { ?>
    <?php if (@$user['pid'] == '0300') { ?>

        <div
            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
            <div
                class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                <a href="../main/inspector_rpt.php"> <img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                        src="logo_500x500.png" alt="" width="384" height="512"> </a>
            </div>
            <div class="content mt-7">
                <a href="../main/inspector_rpt.php" class="title h5 text-lg font-medium hover:text-indigo-600">
                รายงานกองตรวจราชการ</a>
                <p class="text-slate-400 mt-3">" กองตรวจราชการและเรื่องราวร้องทุกข์"</p>
                <div class="mt-5">
                    <a href="../main/inspector_rpt.php"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ตรวจสอบ
                        <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div
            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
            <div
                class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                <a href="../main/inspector_check.php"> <img class="w-48 h-48 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                        src="logo_500x500.png" alt="" width="384" height="512"> </a>
            </div>
            <div class="content mt-7">
                <a href="../main/inspector_check.php" class="title h5 text-lg font-medium hover:text-indigo-600">
                ตรวจสอบรูปภาพกองตรวจราชการ</a>
                <p class="text-slate-400 mt-3">" กองตรวจราชการและเรื่องราวร้องทุกข์"</p>
                <div class="mt-5">
                    <a href="../main/inspector_check.php"
                        class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ตรวจสอบ
                        <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<?php
if (in_array($uap->app_2, [""], TRUE)) {
    ?>

    <div
        class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
        <div
            class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
            <a href="../../app/main/"><i class="uil uil-document-info"></i></a>
        </div>
        <div class="content mt-7">
            <a href="../../app/main/" class="title h5 text-lg font-medium hover:text-indigo-600">2.การสนับสนุนนโยบาย</a>
            <p class="text-slate-400 mt-3">สมาคมแม่บ้านมหาดไทย</p>
            <div class="mt-5">
                <a href="../../app/main/"
                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ทำแบบประเมิน
                    <i class="uil uil-arrow-right"></i></a>
            </div>
        </div>
    </div>
<?php } ?>
<?php if (in_array($uap->app_1, ["8", "9"], TRUE)) { ?>
    <!-- <div class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6 text-center">
                        <div class="w-48 h-48 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                            <i class="uil uil-camera-plus"></i>
                        </div>

                        <div class="content mt-7">
                            <a href="#" class="title h5 text-lg font-medium hover:text-indigo-600">Photography</a>
                            <p class="text-slate-400 mt-3">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน ระบบงานในอนาคต</p>

                            <div class="mt-5">
                                <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-red-400 hover:text-red-400 after:bg-red-400 duration-500 ease-in-out">เร็วๆนี้ <i class="uil  uil-ban"></i></a>
                            </div>
                        </div>
                    </div> -->
<?php } ?>

<?php
require '../../require/footer2.php';
?>