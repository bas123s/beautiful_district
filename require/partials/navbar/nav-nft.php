

<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <!-- Logo container-->
        <a class="logo ps-0" href="index.html">
            <img src="assets/images/logo-icon-30.png" class="inline-block sm:hidden"  alt="">
            <div class="sm:block hidden">
                <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
            </div>
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
            <!-- <li class="sm:inline-block hidden mb-0"> -->
            <li class="inline-block mb-0">
                <div class="form-icon relative">
                    <i class="uil uil-search text-lg absolute top-1/2 -translate-y-1/2 start-3"></i>
                    <input type="text" class="form-input sm:w-44 w-28 ps-10 py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-3xl outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 bg-white" name="s" id="searchItem" placeholder="Search...">
                </div>
            </li>
            
            <li class="inline-block ps-1 mb-0">
                <a id="connectWallet" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i class="uil uil-wallet"></i></a>
            </li>

            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white" type="button">
                    <img src="assets/images/client/05.jpg" class="rounded-full" alt="">
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                    <div class="relative">
                        <div class="py-8 bg-gradient-to-tr from-indigo-600 to-red-600"></div>
                        <div class="absolute px-4 -bottom-7 start-0">
                            <div class="flex items-end">
                                <img src="assets/images/client/05.jpg" class="rounded-full w-10 h-w-10 shadow dark:shadow-gray-700" alt="">
                      
                                <span class="font-semibold text-[15px] ms-1"> <?= @$user["username"] ?> </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 px-4">
                        <h5 class="font-semibold text-[15px]"> <?= @$app_privilege[@$user["privilege"]] ?>:    <?= @$user["division"]; ?></h5>
                        <div class="flex items-center justify-between">
                            <span class="text-[13px] text-slate-400">qhut0...hfteh45</span>
                            <a href="" class="text-indigo-600"><i class="uil uil-copy"></i></a>
                        </div>
                    </div>

                    <div class="mt-4 px-4">
                        <h5 class="text-[15px]">Balance: <span class="text-indigo-600 font-semibold">0.00045ETH</span></h5>
                    </div>

                    <ul class="py-2 text-start">
                        <li>
                            <a href="nft-creator-profile.html" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-user text-[16px] align-middle me-1"></i> Profile</a>
                        </li>
                        <li>
                            <a href="nft-creator-profile-edit.html" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-setting text-[16px] align-middle me-1"></i> Settings</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="auth-login.html" class="block text-[14px] font-semibold py-1.5 px-4 hover:text-indigo-600"><i class="uil uil-sign-out-alt text-[16px] align-middle me-1"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu justify-start">
                <li><a href="index-nft.html" class="sub-menu-item">Home</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">NFTs</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                        <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                        <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Creator  </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="nft-creators.html" class="sub-menu-item"> Creators</a></li>
                                <li><a href="nft-creator-profile.html" class="sub-menu-item"> Creator Profile </a></li>
                                <li><a href="nft-creator-profile-edit.html" class="sub-menu-item"> Profile Edit </a></li>
                            </ul>  
                        </li>
                        <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                        <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                    </ul>
                </li>

                <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="contact-one.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->