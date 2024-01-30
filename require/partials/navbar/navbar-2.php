<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="../../app/main/index.php">
            <img src="../../require/partials/assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
            <img src="../../require/partials/assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <ul class="buy-button list-none mb-0">
            <!-- <li class="sm:inline-block hidden mb-0"> -->
 
           

            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" type="button">
                    <img src="../../require/partials/assets/images/client/05.jpg" class="rounded-full" alt="">
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <div class="relative">
                        <div class="py-8 bg-gradient-to-tr from-indigo-600 to-red-600"></div>
                        <div class="absolute px-4 -bottom-7 start-0">
                            <div class="flex items-end">
                                <img src="../../require/partials/assets/images/client/05.jpg" class="rounded-full w-10 h-w-10 shadow dark:shadow-gray-700" alt="">

                                <span class="font-semibold text-[15px] ms-1"><?= @$user["username"] ?> </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 px-4">
                        <h5 class="font-semibold text-[13px]"><?= @$app_privilege[@$user["privilege"]] ?>  :    <?= @$user["division"]; ?></h5>
                    
                    </div>

                   
                    <ul class="py-2 text-start">
                    <?php if ($user["privilege"] === "9") { ?>
                        <li> 
                            <a href="../../core/user/user_manage.php" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-user text-[16px] align-middle me-1"></i>  จัดการผู้ใช้งาน</a>
                        </li>
                        <?php } ?>
                            <?php if ($user["privilege"] !== "3") { ?>
                        <li>
                            <a  href="../../core/user/update_profile.php" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-setting text-[16px] align-middle me-1"></i>  แก้ไขข้อมูลส่วนตัว</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="../../core/user/password_change.php" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-key-skeleton text-[16px] align-middle me-1"></i>  เปลี่ยนรหัสผ่าน</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="../../core/user/password.php" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-sign-out-alt text-[16px] align-middle me-1"></i> ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-light">
                <li><a href="index.html" class="sub-menu-item">หน้าหลัก</a></li>
                
                <!-- <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">จัดการคลังอาวุธ</a><span class="menu-arrow"></span>

                    <ul class="submenu ">
                        <li>
                            <ul>
                                <li><a href="index-saas.html" class="sub-menu-item">คลังปืน <span class="bg-emerald-600 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">Animation</span></a></li>
                                <li><a href="index-classic-saas.html" class="sub-menu-item">ผู้ยืมปืน </a></li>
                                <li><a href="index-modern-saas.html" class="sub-menu-item">การยืมปืน </a></li>
                                <li><a href="index-apps.html" class="sub-menu-item">คลังกระสุนปืน</a></li>
                                
                            </ul>
                        </li>

                     
                    </ul>
                </li> -->
                <?php if (in_array($uap->app_2, ["9","8","6","3","2","1"], TRUE)) { ?>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">ระบบ</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                    
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> รายงาน</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="property-listing.html" class="sub-menu-item">รายงานสรุป G-report จังหวัด</a></li>
                                <li><a href="property-detail.html" class="sub-menu-item">ผู้ยืม</a></li>
                                <li><a href="property-detail.html" class="sub-menu-item">การยืม</a></li>
                                <li><a href="property-detail.html" class="sub-menu-item">รายงานจำนวนอาวุธปืน</a></li>
                            </ul> 
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Dashboard </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="course-listing.html" class="sub-menu-item">Dashboard 1</a></li>
                                <li><a href="course-detail.html" class="sub-menu-item">Dashboard 2</a></li>
                            </ul> 
                        </li>
                  
                    </ul>
                </li>
                <?php } ?>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">เครื่องมือผู้ดูแลระบบ</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="documentation.html" class="sub-menu-item">จัดการหนังสือสั่งการ</a></li>
                        <li><a href="changelog.html" class="sub-menu-item">ลงทะเบียนผู้เข้าใช้ระบบ</a></li>
                        <li><a href="widget.html" class="sub-menu-item">ตรวจสอบ Log ทั้งหมด</a></li>

                    </ul>
                </li>
           
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
<div id="ContactUs" tabindex="-1" class="fixed z-50 hidden overflow-hidden inset-0 m-auto">
    <div class="relative w-full h-auto max-w-lg p-4">
        <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800">
            <button type="button" class="absolute -top-4 -end-4 text-gray-400 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hover:text-gray-900 rounded-full text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="ContactUs">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
            </button>
            <div class="p-6 py-10 text-center">

                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-red-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-indigo-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-user"></i>
                    </div>
                </div>
                <form class="text-start">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginEmail">ชื่อผู้ใช้งาน :</label>
                                    <input id="LoginEmail" type="email" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="ชื่อผู้ใช้งาน : ">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="LoginPassword">รหัสผ่าน :</label>
                                    <input id="LoginPassword" type="password" class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0" placeholder="รหัสผ่าน :">
                                </div>

                                <div class="flex justify-between mb-4">
                                    <div class="flex items-center mb-0">
                                        <input class="form-checkbox rounded border-gray-200 dark:border-gray-800 text-indigo-600 focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="RememberMe">
                                        <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember me</label>
                                    </div>
                              
                                </div>

                                <div class="mb-4">
                                    <input type="submit" class="py-2 px-5 inline-block tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="เข้าสู่ระบบ">
                                </div>

                                <!-- <div class="text-center">
                                    <span class="text-slate-400 me-2">Don't have an account ?</span> <a href="auth-signup.html" class="text-black dark:text-white font-bold inline-block">Sign Up</a>
                                </div> -->
                            </div>
                        </form>

                <!-- <a href="" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create a new wishlist</a> -->
            </div>
        </div>
    </div>
</div>