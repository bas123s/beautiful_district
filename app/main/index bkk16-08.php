<?php
$title = "หน้าหลัก";
require '../../require/head_php.php';
require '../../require/head_html.php';
?>
<BR><BR>
<div class="row mb-5">


    <?php if (in_array($uap->app_1, ["1"], TRUE)) { ?>
        <!-- <div class="col-md-2">
            <a  href="../../app/user_decor/cer.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-crown"></i></h1>
                        <h6 class=" lead fw-bolder   ">ขอพระราชทานเครื่องราชย์</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a   href="http://164.115.41.24/0301/decoration/app/coin/req_modal.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 ">     <i class="fa-solid fa-medal"></i></h1>
                        <h6 class=" lead fw-bolder   ">เหรียญจักรพรรดิมาลา</h6>
                    </div>
                </div>
            </a>
        </div> -->

    <?php } ?>
    <?php
    if (in_array($uap->app_1, ["6"], TRUE)) {
        ?>
        <!-- <div class="col-md-2">
            <a  href="../../app/coin/freedom.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">เหรียญพิทักษ์เสรีชน</h6>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-2">
            <a href="../../app/coin/list_freedom.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">แบบ
                            สช.1</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="../../app/coin/report_freedom.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">แบบ
                            สช.2</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a  href="../../app/coin/print_freedom.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">แบบ
                            สช.3</h6>
                    </div>
                </div>
            </a>
        </div>
     -->
        <?php } ?>
    <?php if (in_array($uap->app_1, ["8", "9"], TRUE)) { ?>
        <!-- <div class="col-md-2">
            <a href="../../app/main/">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">นำเข้าไฟล์</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a  href="../../app/decor/decor.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">ประมวลรายชื่อ</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-2">
            <a href="../../app/coin/list_freedom_center.php">
                <div class="card  shadow bg-pm text-pm border-secondary py-2">
                    <div class="card-body text-center">
                        <h1 class=" display-3 "><i class="fa-solid fa-keyboard"></i></h1>
                        <h6 class=" lead fw-bolder   ">รายงานเหรียญพิทักษ์ชน</h6>
                    </div>
                </div>
            </a>
        </div> -->
    <?php } ?>
    <div class="col-md-4">
        <a href="../offense_form/">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class="fa-solid fa-file"></i> </h1>
                    <h6 class=" lead fw-bolder   ">1.บันทึกข้อมูลการปรับเป็นพินัย</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="../offense_check/">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class="fa-solid fa-eye"></i></h1>
                    <h6 class=" lead fw-bolder   ">2.ตรวจสอบข้อเท็จจริง</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="../result/">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class="fa-solid fa-shield"></i></h1>
                    <h6 class=" lead fw-bolder   ">3.ผลพิจารณาของเจ้าหน้าที่</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="../offense_send/">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class=" fa-solid fa-building"></i></h1>
                    <h6 class=" lead fw-bolder   ">4.ส่งข้อมูลให้หน่วยงาน</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a href="contact.php">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class="fa-solid fa-circle-question"></i> </h1>
                    <h6 class=" lead fw-bolder   ">ติดต่อสอบถาม</h6>
                </div>
            </div>
        </a>
    </div> 



   
	<!-- <div class="col-md-2">
        <a href="../../app/report/testpdf.php">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class="far fa-clock" style="font-size:120px;color:#2196F3"></i></h1>
                    <h6 class=" lead fw-bolder   ">PDF หนังสือแจ้งข้อกล่าวหากระทำความผิด</h6>
                </div>
            </div>
        </a>
    </div>

<div class="col-md-2">
        <a href="../../app/report/reportpdf.php">
            <div class="card  shadow bg-pm text-pm border-secondary py-2 h-75">
                <div class="card-body text-center">
                    <h1 class=" display-3 "><i class="fas fa-bell" style="font-size:120px;color:green"></i></h1>
                    <h6 class=" lead fw-bolder   ">PDF คำสั่งปรับเป็นพินัย</h6>
                </div>
            </div>
        </a>
    </div> -->

</div>
<?php
require '../../require/footer_content.php';
?>