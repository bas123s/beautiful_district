<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="">
            <img src="../../require/partials/assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
            <img src="../../require/partials/assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <!-- <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a> -->
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <ul class="buy-button list-none mb-0">
            <!-- <li class="sm:inline-block hidden mb-0"> -->
 
           

      
        </ul>

        
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