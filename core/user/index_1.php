<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>เข้าสู่ระบบ</title>
    <link rel="apple-touch-icon" href="../../template/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../template/app-assets/images/ico/favicon.ico">
    <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">-->
    <link href="../../require/google_font.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/pages/modal-create-app.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../template/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../template/assets/css/style.css">
    <!-- END: Custom CSS-->


    <!-- Font Awesome Solid + Brands -->
    <link href="../../vendor/components/font-awesome/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome Solid + Brands -->
   
    <meta name="viewport" content="width=device-width" />
 

    <style>
        body {
            height: 2000px;
            background-color: #EEEFEF;
            /* Just for demonstration */
        }

        /* Add some spacing for the target sections */
        section {

            height: 350px;
        }

        .navbar {
            height: 80px;
            border-bottom: 2px #EEE1A5;
            /* Increase the navbar height as desired */
        }

        .navbar.scrolled {
            background-color: #072E72;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-dark .navbar-nav .show>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #ffffff;
        }

        .navbar.scrolled .nav-link {
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .navbar.scrolled .nav-link:hover {
            color: #ff0000;
        }

        .navbar-brand {
            font-size: 24px;
            /* Increase the font size of the navbar brand */
        }

        .navbar-nav .nav-link {
            font-size: 18px;
            /* Increase the font size of the navbar links */
        }

        .custom-navbar-color {
            background-color: #335988;
            /* Replace with your desired color */
        }

        /* Custom style for the login button */
        .login-button {
            border-radius: 50px;
            /* Make the button rounded */
            padding: 10px 25px;
            /* Increase the padding as desired */
            font-size: 18px;
            /* Increase the font size of the button */
            background: linear-gradient(to right, #EEE1A5, #EEE1A5);
            /* Replace with your desired gradient colors */
            border: none;
            color: #FFFFFF;
            transition: all 0.3s ease;
        }

        .login-button:hover {
            transform: scale(1.05);
            /* Add a hover effect */
        }

        /* Custom style for mobile */
        @media (max-width: 767px) {
            .navbar {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 999;
            }

            .navbar-toggler {
                color: #000000;
            }

            .navbar-collapse {
                background-color: #ffff;
                /* Change background color to white */
                padding: 10px;
                width: 100%;
                position: relative;
                /* Change position to relative */
                display: none;
            }

            .navbar-collapse.show {
                display: block;
            }

            .navbar-nav {
                flex-direction: column;
            }

            .navbar-nav .nav-item {
                margin-bottom: 10px;
            }

            .navbar-nav .nav-link,
            .navbar-nav .nav-link:hover,
            .navbar-toggler {
                color: #000000 !important;
                /* Change text color to black */
            }

            .login-button {
                margin: 0 auto;
                /* Center the login button */
                display: block;
            }
        }

        .footer_contentContainer__QbvYW,
        .footer_content__AqYKr {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer_contentContainer__QbvYW {
            background-color: #335988;
            flex-direction: column;
            color: #fff;
        }

        .footer_content__AqYKr {
            max-width: 1150px;
            gap: 86px;
            padding: 0 16px;
            flex-wrap: wrap;
            margin-bottom: -1.5vw;
            z-index: 2;
        }

        .footer_contentContainer__QbvYW,
        .footer_content__AqYKr {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contactText_contactText__FjXhY {
            display: flex;
            gap: 16px;
            justify-content: center;
            align-items: center;
        }

        .footer_contactSection__rCWCd {
            margin: 16px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }

        .footer_contact__VEjMK {
            display: flex;
            flex-wrap: wrap;
            gap: 72px;
            row-gap: 16px;
        }

        .footer_privacyUp__r5ceU {
            font-size: 14px;
            margin: 72px 16px 16px;
            display: none;
            cursor: pointer;
        }

        .footer_bottomText__F_ePe {
            max-width: 1150px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            gap: 72px;
            flex-wrap: wrap;
            margin-top: -3vw;
            font-size: 14px;
            padding: -8px 16px 16px;
        }

        .footer_privacyDown__hpe5a {
            display: unset;
            cursor: pointer;
        }

        .footer_copyrightText__1FvTf {
            opacity: .5;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body style="background-color: #ffff;" data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar-color fixed-top">
        <a class="navbar-brand mr-auto ps-2 pe-2" href="#"><img src="../../require/images/logo_500x500.png" alt="logo"
                width="70" height="70"></a>
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mx-2" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#section1"> หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">ข่าวประชาสัมพันธ์</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#section3">คู่มือ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">ติดต่อเรา</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary login-button" data-bs-toggle="modal"
                        data-bs-target="#addNewCard">เข้าสู่ระบบ</button>
                </li>
            </ul>
        </div>
    </nav>
    <section id="section1" class="" style="background-color: #335988;">


        <div id="carouselExampleFade" class="carousel slide carousel-fade pt-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="decro_logo.png" class=" d-block w-100" style="  height: 320px;" alt="cf-img-1" />
                </div>
                <div class="carousel-item">
                    <img src="../../template/app-assets/images/slider/02.jpg" class=" d-block w-100"
                        style="  height: 320px;" alt="cf-img-2" />
                </div>
                <div class="carousel-item">
                    <img src="../../template/app-assets/images/slider/05.jpg" class=" d-block w-100"
                        style="  height: 320px;" alt="cf-img-3" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>



    </section>

    <section id="section2" class="" style="background-color: #335988;">
    <h1 class="text-3xl font-bold underline text-clifford">
    Hello world!
  </h1>

        <div class="pt-4 row ps-2 pe-2 ">
            <div class="col-md-4 my-1">
                <div class="card h-100">
                    <div class=" card-header"> <span class="badge badge-glow bg-warning">ใหม่</span></div>

                    <div class="card-body">
                        <a class="card-title" target="_blank" href="#">ตรวจสอบข้อมูล เครื่องราชอิสริยาภรณ์</a>
                        <p class="card-text">จากเว็บไซต์สำนักเลขาธิการคณะรัฐมนตรี</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-1">
                <div class="card h-100">
                    <div class=" card-header"> <span class="badge badge-glow bg-warning">ใหม่</span></div>
                    <div class="card-body">
                        <a class="card-title" target="_blank"
                            href="https://hro.wu.ac.th/wp-content/uploads/2022/10/%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%88%E0%B8%B2%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AF64%E0%B8%95%E0%B9%88%E0%B8%B3%E0%B8%81%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%B2%E0%B8%A2%E0%B8%AA%E0%B8%B0%E0%B8%9E%E0%B8%B2%E0%B8%A2-1.pdf">ค้นหารายชื่อ
                            ผู้ได้รับเครื่องราชอิสริยาภรณ์ ปี 2564</a>
                        <p class="card-text">ชั้นต่ำกว่าสายสะพายปี 2564 ค้นหาโดยการกด CTRL+F
                            แล้วพิมพ์ชื่อที่ต้องการค้นหา</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-1">
                <div class="card h-100">
                    <div class=" card-header"> <span class="badge badge-glow bg-warning">ใหม่</span></div>
                    <div class="card-body">
                        <a class="card-title" target="_blank"
                            href="https://hro.wu.ac.th/wp-content/uploads/2021/05/%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%81%E0%B8%B4%E0%B8%88%E0%B8%88%E0%B8%B2%E0%B9%80%E0%B8%84%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AF63%E0%B8%95%E0%B9%88%E0%B8%B3%E0%B8%81%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%AA%E0%B8%B2%E0%B8%A2%E0%B8%AA%E0%B8%B0%E0%B8%9E%E0%B8%B2%E0%B8%A2.pdf">ค้นหารายชื่อ
                            ผู้ได้รับเครื่องราชอิสริยาภรณ์ ปี 2563</a>
                        <p class="card-text">ชั้นต่ำกว่าสายสะพายปี 2563 ค้นหาโดยการกด CTRL+F
                            แล้วพิมพ์ชื่อที่ต้องการค้นหา</p>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <svg width="100%" viewBox="0 0 1920 405" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top: -1px;">
        <path
            d="M361.412 274.916C159.624 277.929 36.3922 165.703 0 109.213V0H1920V252.32C1776.94 395.427 1705.41 489.576 1163.29 293.746C621.176 97.9152 613.647 271.15 361.412 274.916Z"
            fill="#335988"></path>
    </svg>
    <path
        d="M361.412 274.916C159.624 277.929 36.3922 165.703 0 109.213V0H1920V252.32C1776.94 395.427 1705.41 489.576 1163.29 293.746C621.176 97.9152 613.647 271.15 361.412 274.916Z"
        fill="#4151A1"></path>
    <section id="section3" class="">
        <h1> </h1>
    </section>
    <svg width="100%" viewBox="0 0 1960 400" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1460.16 64.7893C1598.7 -13.9252 1851.11 -4.74186 1960 9.68913V401H0V237.961C90.5221 214.347 216.466 344.226 322.731 356.033C428.996 367.84 464.418 332.419 653.333 237.961C842.249 143.504 987.871 226.154 1133.49 214.347C1279.12 202.54 1286.99 163.182 1460.16 64.7893Z"
            fill="#ffff"></path>
    </svg>
    <section id="section4" class="" style="background-color: #ffff;">
        <h1>เกี่ยวกับเรา</h1>
        <div class="container-fluid d-flex justify-content-center">

            <div class="row">
                <div class="col-6 ">
                    <div class="card">
                        <img src=""
                            class="card-img-top rounded-circle" alt="Profile 1">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                scelerisque vestibulum ultrices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img src=""
                            class="card-img-top rounded-circle" alt="Profile 2">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                                scelerisque vestibulum ultrices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg width="100%" viewBox="0 0 1960 400" fill="4151A1" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1460.16 64.7893C1598.7 -13.9252 1851.11 -4.74186 1960 9.68913V401H0V237.961C90.5221 214.347 216.466 344.226 322.731 356.033C428.996 367.84 464.418 332.419 653.333 237.961C842.249 143.504 987.871 226.154 1133.49 214.347C1279.12 202.54 1286.99 163.182 1460.16 64.7893Z"
            fill="#335988"></path>
    </svg>
    <div class="footer_contentContainer__QbvYW py-4">
        <div class="footer_content__AqYKr"><img src="../../require/images/logo_500x500.png" alt="logo" width="110"
                height="110">
            <div class="footer_contact__VEjMK">
                <div class="footer_contactSection__rCWCd">
                    <div class="contactText_contactText__FjXhY contactText_autoAlign__Q1sO_"><i
                            class="fa-brands fa-line" style="font-size: 38px;"></i>

                        <p style="font-size: 14px;">Line@</p>
                    </div>
                    <div class="contactText_contactText__FjXhY contactText_autoAlign__Q1sO_"><i
                            class="fa-solid fa-square-phone" style="font-size: 38px;"></i>
                        <p style="font-size: 14px;">095-xxx-xxxx</p>
                    </div>
                </div>

            </div>
        </div>
        <p class="footer_privacyUp__r5ceU">Privacy Policy</p>
        <div class="footer_bottomText__F_ePe">
            <p class="footer_privacyDown__hpe5a">Privacy Policy</p>
            <p class="footer_copyrightText__1FvTf">© Copyright 2023 : Dopa</p>
        </div>
    </div>

    <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <div align="center"><a href="http://164.115.41.24/0301/decoration/core/user/index.php"><img
                                src="../../require/images/logo_500x500.png" class="mb-2" alt="Avatar"
                                style="width:150%; max-width:150px;"></a></div>

                    </a>

                    <h2 class="text-center fw-bolder mb-1">ระบบงานขอพระราชทาน <br>เครื่องราชอิสริยาภรณ์</h2>
                    <h3 class="text-center mb-2">
                        ยินดีต้อนรับเข้าสู่ระบบ</h3>
                    <script language="JavaScript">
                        function check() {
                            if (document.form1.username.value == "") {
                                alert("กรอกรหัสผู้ใช้");
                                document.form1.username.focus();
                                return false;
                            }
                            else if (document.form1.password.value == "") {
                                alert("กรอกรหัสผ่าน");
                                document.form1.password.focus();
                                return false;
                            }
                            else
                                return true;
                        }
                    </script>


                    <!-- form -->
                    <form id='form1' class="auth-login-form mt-2" action="password.php" method="POST">
                        <div class="mb-1">
                            <label for="username" class="form-label fw-bolder"
                                style="font-size:18">ชื่อผู้ใช้งาน</label>
                            <input type="text" class="form-control" id="username" name="username" maxlength="13"
                                value="" minlength="13" data-error="กรุณากรอกหมายเลขบัตรประชาชน 13 หลัก" required=""
                                onkeyup="keyup(this,event)" onkeypress="return Numbers(event)" style=""
                                placeholder="กรอกเลขบัตรประจำตัวประชาชน 13 หลัก">

                            <!--  <input type="text" class="form-control" id="username" name="username" placeholder="รหัสผู้ใช้งาน"
                                                   aria-describedby="รหัสผู้ใช้งาน" tabindex="1" autofocus />-->
                        </div>

                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-bolder" for="password" style="font-size:18">รหัสผ่าน</label>
                                <!--                        <a href="auth-forgot-password-basic.html">
                                                                            <small>ลืมรหัสผ่าน ?</small>
                                                                          </a>-->
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="password"
                                    name="password" tabindex="2" placeholder="กรอกรหัสผ่าน:dopakey1234"
                                    aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>




                        <button type="submit" class="btn btn-primary w-100" tabindex="4" style="font-size:20"
                            onclick="javascript:check();">เข้าสู่ระบบ</button>
                        <br>
                        <input type="hidden" name="x" value="L">
                        <input type="hidden" name="chx" value="1">


                    </form>

                </div>
            </div>
        </div>
    </div>



    </div>
    <!-- END: Content-->
    <?php if (isset($_REQUEST["a"])) { ?>
        <!-- begin modal -->
        <div class="modal fade" id="shareProject" tabindex="-1" aria-labelledby="shareProjectTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="fa-solid fa-gear"></i> ระบบ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                        <h4>
                            <?= @$_REQUEST["a"] ?>
                        </h4>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                class="fa-regular fa-circle-xmark"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- / end modal -->
    <?php } ?>

    </div>
    </div>
    </div>
    </div>
    <script src="../../template/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../template/app-assets/js/core/app-menu.js"></script>
    <script src="../../template/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../template/app-assets/js/scripts/pages/modal-add-new-cc.js"></script>
    <!-- <script src="../../template/app-assets/js/scripts/pages/page-pricing.js"></script> 
    <script src="../../template/app-assets/js/scripts/pages/modal-add-new-address.js"></script>
    <script src="../../template/app-assets/js/scripts/pages/modal-create-app.js"></script>
    <script src="../../template/app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="../../template/app-assets/js/scripts/pages/modal-edit-user.js"></script> -->
    <script src="../../template/app-assets/js/scripts/pages/modal-share-project.js"></script>
    <script>
        $(document).ready(function () {
            // Smooth scrolling for navbar links
            $("a.nav-link").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });
                }
            });
            // Close mobile navbar on click
            $(".navbar-nav .nav-link").on('click', function () {
                $(".navbar-collapse").collapse('hide');
            });
        });


    </script>
    <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="../../template/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../template/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../template/app-assets/js/core/app-menu.js"></script>
    <script src="../../template/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../template/app-assets/js/scripts/pages/auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>


    <?php if (isset($_REQUEST["a"])) { ?>
        <script type="text/javascript">
            window.onload = () => {
                $('#shareProject').modal('show');
            };
        </script>
    <?php } ?>
</body>


</html>