<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
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

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="dropdown inline-block relative me-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle text-[20px]" type="button">
                    <i class="uil uil-search align-middle"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-4 z-10 w-52 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <div class="relative">
                        <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                        <input type="text" class="form-input h-9 pe-10 sm:w-44 w-36 border-0 focus:ring-0" name="s" id="searchItem" placeholder="Search...">
                    </div>
                </div>
            </li>

            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" type="button">
                    <i class="mdi mdi-cart"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s1.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">T-shirt (M)</span>
                                        <span class="block text-sm text-slate-400">$320 X 2</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$640</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s2.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Bag</span>
                                        <span class="block text-sm text-slate-400">$50 X 5</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$250</span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                <span class="flex items-center">
                                    <img src="../../assets/images/shop/items/s3.jpg" class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                    <span class="ms-3">
                                        <span class="block font-semibold">Watch (Men)</span>
                                        <span class="block text-sm text-slate-400">$800 X 1</span>
                                    </span>
                                </span>

                                <span class="font-semibold">$800</span>
                            </a>
                        </li>

                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                        <li class="flex items-center justify-between py-1.5 px-4">
                            <h6 class="font-semibold mb-0">Total($):</h6>
                            <h6 class="font-semibold mb-0">$1690</h6>
                        </li>

                        <li class="py-1.5 px-4">
                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">View Cart</a>
                            <a href="javascript:void(0)" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">Checkout</a>
                            <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li class="inline-block">
                <a href="javascript:void(0)" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" data-modal-toggle="ContactUs">
                    <i class="mdi mdi-heart"></i>
                </a>
            </li>
            
            <li class="dropdown inline-block relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" type="button">
                    <i class="mdi mdi-account"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                        <li>
                            <a href="shop-account.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-user align-middle me-1"></i> Account</a>
                        </li>
                        <li>
                            <a href="shop-cart.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>
                        </li>
                        <li>
                            <a href="shop-checkout.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-arrow-circle-down align-middle me-1"></i> Download</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="auth-login.html" class="block py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-sign-out-alt align-middle me-1"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li><a href="index-shop.html" class="sub-menu-item">Home</a></li>

                <li><a href="shop-about.html" class="sub-menu-item">About Us</a></li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Shop</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                        <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                        <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                        <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                        <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                        <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                        <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                        <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                        <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                        <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                        <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                        <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                        <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Blog</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                        <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                    </ul>
                </li>
                
                <li><a href="contact-two.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->



<!-- Start Modal -->
<div id="ContactUs" tabindex="-1" class="fixed z-50 hidden overflow-hidden inset-0 m-auto">
    <div class="relative w-full h-auto max-w-lg p-4">
        <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800">
            <button type="button" class="absolute -top-4 -end-4 text-gray-400 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hover:text-gray-900 rounded-full text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="ContactUs">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
            </button>
            <div class="p-6 py-10 text-center">

                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-red-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-red-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="uil uil-heart-break"></i>
                    </div>
                </div>
                
                <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
                <p class="text-slate-400 my-3">Create your first wishlist request...</p>

                <a href="" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create a new wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->