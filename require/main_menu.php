<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function medal(pid1, type) {
        $.ajax
                ({
                    url: '../coin/get_pid.php',
                    data: {pid: pid1, type: "type1"},
                    type: 'get',
                    dataType: "JSON",
                    success: function (result)
                    {
                        if (result["pid"].length === 13) {


                            Swal.fire({
                                title: 'ระบบ',
                                text: "พบข้อมูล",
                                icon: 'success',
                                confirmButtonText: 'ตกลง'

                            }).then((result) => {
                                window.location.href = "../coin/index.php";
                            })

                        } else
                            Swal.fire(
                                    'ระบบ',
                                    'ไม่พบข้อมูล',
                                    'error'
                                    );
                    }

                });
    }
</script>

<!-- BEGIN: Header-->

<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow ">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle is-active" href="../../app/main/"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                          width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                                                          stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </li>
            </ul>
            <img class="rounded float-start" src="../../require/images/logo_mini.png" alt="avatar" height="60" width="60">
                <span ><h4 class="text-secondary ms-2"><b><?= $app_name ?></b></h4></span>

        </div><br><br>

                <ul class="nav navbar-nav align-items-center ms-auto">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

                    <li class="nav-item dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name fw-bolder">
                                    <?= @$user["username"] ?>
                                </span>
                                <span class="user-status">
                                    <?= @$app_privilege[@$user["privilege"]] ?>
                                </span>
                                <span class="user-status">
                                    <?= @$user["division"]; ?>
                                </span>
                            </div>


                            <span class="text-secondary"><i class="fa-solid fa-user-secret fa-2x"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                            <?php if ($user["privilege"] === "9") { ?>
                                <a class="dropdown-item" href="../../core/user/user_manage.php"><i class="fa-solid fa-users-gear fa-2x"></i> จัดการผู้ใช้งาน</a>
                            <?php } ?>
                            <?php if ($user["privilege"] !== "3") { ?>
                                <a class="dropdown-item" href="../../core/user/update_profile.php"><i class="fa-solid fa-user-secret fa-2x"></i> แก้ไขข้อมูลส่วนตัว</a>
                            <?php } ?>
                            <a class="dropdown-item" href="../../core/user/password_change.php"><i class="fa-solid fa-key fa-2x"></i> เปลี่ยนรหัสผ่าน</a>
                            <a class="dropdown-item" href="../../core/user/password.php"><i class="fa-solid fa-power-off fa-2x"></i>
                                ออกจากระบบ</a>
                        </div>
                    </li>
                </ul>
                </div>
                </nav>
                <!-- END: Header-->


                <!-- BEGIN: Main Menu-->
        


                <!-- BEGIN: Content-->
                <div class="app-content content ">
                    <div class="content-overlay"></div>
                   
                    <div class="content-wrapper container-xxl p-0">
                        <div class="content-header row">
                        </div>
                        <div class="content-body">

                            <!--start content-->

                            <div class="content-wrapper container-xxl p-0">
                                <div class="content-header row">

                                    <div class="content-header-left col-md-9 col-12 mb-2 mt-2">
                                        <div class="row breadcrumbs-top">
                                            <div class="col-12">
                                                <div class="breadcrumb-wrapper">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="../../app/main/index.php"><b>หน้าหลัก</b></a></li>
                                                        <?php
// /2023_template/app/main/index.php
                                                        $dir = getcwd();

                                                        if ($dir !== "/usr/share/nginx/html/0308/arrest/app/main") {
                                                            if (!isset($module_name)) {
                                                                $module_name = "หน้าหลักโมดูล";
                                                            }
                                                            echo "<li class='breadcrumb-item'><a href='index.php'>$module_name</a></li>";
                                                            if (basename($_SERVER["PHP_SELF"]) !== "index.php") {
                                                                if (!isset($title)) {
                                                                    $title = "หน้าปัจจุบัน";
                                                                }
                                                                echo "<li class='breadcrumb-item active'><b>" . $title . "</b></li>";
                                                            }
                                                        }
                                                        ?>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="content-body">
<!--                                    <script>
                                        function get_pid(budget_year, type, pid) {
                                            var xhttp = new XMLHttpRequest();
                                            xhttp.onreadystatechange = function () {
                                                if (this.readyState == 4 && this.status == 200) {
                                                    document.getElementById("example").innerHTML = this.responseText;
                                                }
                                            };
                                            xhttp.open("GET", "../get_pid.php?type=" + type + "&pid=" + pid, true);
                                            xhttp.send();
                                        }

                                    </script>-->