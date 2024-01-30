<?php
require '../../require/partials/main.php'
?>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<head>
  <!-- Css -->
  <?php
  require '../../require/partials/head-css.php'
  ?>
  <link href="../../require/partials/assets/fonts/googlefont.css" rel="stylesheet">
</head>
<?php
require '../../require/partials/body.php';
require '../../require/partials/navbar/nav-onepage.php'
?>
<!-- Start Hero -->
<section id="home"
         class="py-12 relative before:content-[''] before:absolute xl:before:-top-[30%] lg:before:-top-[50%] sm:before:-top-[80%] before:-top-[90%] before:-start-80 before:end-0 before:w-[140rem] before:h-[65rem] ltr:before:-rotate-12 rtl:before:rotate-12 before:bg-indigo-600/5 dark:before:bg-indigo-600/10 before:z-1 items-center overflow-hidden">
  <div class="container relative z-2">
    <div class="grid grid-cols-1 md:mt-44 mt-32 text-center">
      <div class="wow animate__animated animate__fadeIn">
        <!-- <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">หลักเกณฑ์การประกวด -->
        <!-- "โครงการอำเภอสวยงาม"</h4> -->
    <!-- <p class="text-slate-400 text-lg max-w-xl mx-auto">สำนักกิจการความมั่นคงภายใน ส่วนกิจการมวลชน</p> -->

        <!-- <div class="mt-6">
                    <a href="service.php"class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">เข้าสู่ระบบ</a>

                    <p class="text-slate-400 text-sm mt-3">No credit card required. Free 14-days trial</p>
                </div> -->
      </div>
      <div class="relative mt-8 z-3 wow animate__animated animate__fadeIn">
          <!--<img src="../../require/partials/assets/images/saas/classic01.png" alt="" class="mover">-->
      </div>
    </div><!--end grid-->

    <div class="bg-indigo-600 w-8 h-16 z-2 absolute start-2 lg:bottom-28 md:bottom-36 sm:bottom-40 bottom-16"></div>
    <div class="bg-indigo-600/20 w-8 h-16 z-2 absolute start-12 lg:bottom-32 md:bottom-40 sm:bottom-44 bottom-20">
    </div>

    <div
      class="bg-indigo-600/20 w-8 h-16 z-2 absolute end-12 xl:bottom-[420px] lg:bottom-[315px] md:bottom-[285px] sm:bottom-80 bottom-32">
    </div>
    <div
      class="bg-indigo-600 w-8 h-16 z-2 absolute end-2 xl:bottom-[440px] lg:bottom-[335px] md:bottom-[305px] sm:bottom-[340px] bottom-36">
    </div>
  </div><!--end container-->

  <div class="container relative md:mt-24 mt-16">
    <!--        <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">แดชบอร์ดระบบงานสารสนเทศ
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
            </div>-->

    <div class="grid md:grid-cols-2 grid-cols-1 items-center mt-16 gap-[30px]">
      <!--            <div class="relative wow animate__animated animate__fadeInLeft" data-wow-delay=".3s">
                      <img src="../../require/partials/assets/images/saas/classic02.png"
                           class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                      <div
                          class="overflow-hidden absolute lg:h-[400px] h-[320px] lg:w-[400px] w-[320px] bg-indigo-600/5 bottom-0 start-0 rotate-45 -z-1 rounded-3xl">
                      </div>
                  </div>-->

      <!--<div class="lg:ms-8 wow animate__animated animate__fadeInRight" data-wow-delay=".3s">-->
      <div>
        <h4 class="mb-4 text-2xl leading-normal font-medium">ประชาสัมพันธ์</h4>
<!--                <p class="text-slate-400">ประชาสัมพันธ์</p>-->
        <ul class="list-none text-slate-400 mt-4">
          <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> ที่มาโครงการอำเภอสวยงาม</li>
          <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> หลักเกณฑ์โครงการอำเภอสวยงาม</li>
          <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Timeline  โครงการอำเภอสวยงาม </li>
          <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> ความคืบหน้าโครงการ/ภาพข่าว/กิจกรรมที่เกี่ยวข้อง </li>
        </ul>

        <div class="text-indigo-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 512 512"><path fill="currentColor" d="M168.2 384.9c-15-5.4-31.7-3.1-44.6 6.4c-8.2 6-22.3 14.8-39.4 22.7c5.6-14.7 9.9-31.3 11.3-49.4c1-12.9-3.3-25.7-11.8-35.5C60.4 302.8 48 272 48 240c0-79.5 83.3-160 208-160s208 80.5 208 160s-83.3 160-208 160c-31.6 0-61.3-5.5-87.8-15.1zM26.3 423.8c-1.6 2.7-3.3 5.4-5.1 8.1l-.3.5l-4.8 6.9c-3.5 4.7-7.3 9.3-11.3 13.5c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c5.1 0 10.2-.3 15.3-.8l.7-.1c4.4-.5 8.8-1.1 13.2-1.9c.8-.1 1.6-.3 2.4-.5c17.8-3.5 34.9-9.5 50.1-16.1c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9zM144 272a32 32 0 1 0 0-64a32 32 0 1 0 0 64zm144-32a32 32 0 1 0-64 0a32 32 0 1 0 64 0zm80 32a32 32 0 1 0 0-64a32 32 0 1 0 0 64z"/></svg> <h4 class="mb-4 text-2xl leading-normal font-medium text-slate-900">ความพึงพอใจของประชาชน</h4>
        </div>
        <!--                <div class="mt-4">
                            <a href="page-aboutus.html"
                               class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ไปที่เว็บไซต์ระบบ
                                <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>-->
      </div>
      <!--<div class="lg:ms-8 wow animate__animated animate__fadeInRight" data-wow-delay=".3s">-->
      <!-- <div>
        <h4 class="mb-4 text-2xl leading-normal font-medium">การประเมิน</h4>
        <div id="accordion-collapseone" data-accordion="collapse">
          <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
            <h2 class="text-base font-semibold" id="accordion-collapse-heading-1">
              <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start bg-gray-50 dark:bg-slate-800 text-indigo-600" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                <span>1. การขับเคลื่อนภารกิจของกระทรวงมหาดไทย</span>
                <svg data-accordion-icon="" class="w-4 h-4 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </h2>
            <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
              <div class="p-5">
                <ul class="list-none text-slate-400 mt-4">
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>1. โครงการบำบัดทุกข์ บำรุงสุข</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>2. หนึ่งตำบล หนึ่งหมู่บ้านยั่งยืน</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>3. ศูนย์ดำรงธรรม</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>4. หมู่บ้านสีขาว</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>5. ThaiD</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
            <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
              <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start text-dark dark:text-white" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                <span>2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย</span>
                <svg data-accordion-icon="" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
              <div class="p-5">
                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
            </div>
          </div>

          <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
            <h2 class="text-base font-semibold" id="accordion-collapse-heading-3">
              <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start text-dark dark:text-white" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                <span>3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)</span>
                <svg data-accordion-icon="" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
              <div class="p-5">
                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
            </div>
          </div>

          <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
            <h2 class="text-base font-semibold" id="accordion-collapse-heading-4">
              <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start text-dark dark:text-white" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                <span>4. การตรวจประเมินจากหน่วยงานภายนอก (7 ภาคีเครือข่าย)</span>
                <svg data-accordion-icon="" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
              <div class="p-5">
                <ul class="list-none text-slate-400 mt-4">
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>1. GECC</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>2. ITA</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>3. อำเภอคุณธรรม</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->


      <div id="accordion-collapse" data-accordion="collapse">
  <h2 id="accordion-collapse-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
      <span>What is Flowbite?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
      <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
    </div>
  </div>
  <h2 id="accordion-collapse-heading-2">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
      <span>Is there a Figma file available?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
      <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
    </div>
  </div>
  <h2 id="accordion-collapse-heading-3">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
      <span>What are the differences between Flowbite and Tailwind UI?</span>
      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
      </svg>
    </button>
  </h2>
  <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
      <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
      <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
      <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
      </ul>
    </div>
  </div>
</div>


      <div>
<!--                <p class="text-slate-400">ประชาสัมพันธ์</p>-->
        <!--        <ul class="list-none text-slate-400 mt-4">
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> 1. การขับเคลื่อนภารกิจของกระทรวงมหาดไทย</li>

                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-bs-toggle="dropdown" data-i18n="Invoice"><i data-feather="file-text"></i><span data-i18n="Invoice">Invoice</span></a>
                    <ul class="dropdown-menu" data-bs-popper="none">
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-list.html" data-bs-toggle="" data-i18n="List"><i data-feather="circle"></i><span data-i18n="List">List</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-preview.html" data-bs-toggle="" data-i18n="Preview"><i data-feather="circle"></i><span data-i18n="Preview">Preview</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-edit.html" data-bs-toggle="" data-i18n="Edit"><i data-feather="circle"></i><span data-i18n="Edit">Edit</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="app-invoice-add.html" data-bs-toggle="" data-i18n="Add"><i data-feather="circle"></i><span data-i18n="Add">Add</span></a>
                      </li>
                    </ul>
                  </li>







                  <ul class="list-none text-slate-400 mt-4">
                    <a href="login.php"
                       class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ไปที่เว็บไซต์ระบบ<i  class="uil uil-angle-right-b align-middle"></i></a>
                    <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i>
                      1. โครงการบำบัดทุกข์ บำรุงสุข

                    </li>
                  </ul>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> 2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย</li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> 3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5ส.) </li>
                  <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> 4. การตรวจประเมินจากหน่วยงานภายอนก (7 ภาคีเครือข่าย) </li>
                </ul>-->



        <!--                <div class="mt-4">
                            <a href="page-aboutus.html"
                               class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ไปที่เว็บไซต์ระบบ
                                <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>-->
      </div>
    </div>
  </div>

  <div class="container relative md:mt-24 mt-16">
    <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
      <!--<div class="relative order-1 md:order-2 wow animate__animated animate__fadeInRight" data-wow-delay=".5s">-->
      <div>
     <!--<img src="../../require/partials/assets/images/saas/classic03.png"-->
        <!--class="rounded-lg shadow-md dark:shadow-gray-800" alt="">-->
        <h4 class="mb-4 text-2xl leading-normal font-medium">สรุปผล</h4>
        <p class="text-slate-400">สรุปผล</p>
        <!--                <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital
                                ความพึงพอใจของประชาชน</li>
                        </ul>-->
        <div
          class="overflow-hidden absolute lg:h-[400px] h-[320px] lg:w-[400px] w-[320px] bg-indigo-600/5 bottom-0 end-0 rotate-45 -z-1 rounded-3xl">
        </div>
        <div class="mt-4">
          <a href="login.php"
             class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ไปที่เว็บไซต์ระบบ<i
              class="uil uil-angle-right-b align-middle"></i></a>
        </div>
      </div>

      <!--<div class="lg:me-8 order-2 md:order-1 wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">-->
      <div>
        <h4 class="mb-4 text-2xl leading-normal font-medium">ความพึงพอใจของประชาชน</h4>
        <p class="text-slate-400">ความพึงพอใจของประชาชน</p>
        <!--                <ul class="list-none text-slate-400 mt-4">
                            <li class="mb-1 flex"><i class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital
                                ความพึงพอใจของประชาชน</li>

                        </ul>-->

        <div class="mt-4">
          <a href="services.php"
             class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">ไปที่เว็บไซต์ระบบ<i
              class="uil uil-angle-right-b align-middle"></i></a>
        </div>
      </div>
    </div>
  </div><!--end container-->



</section>
<!-- End Hero -->

<!-- Business Partner -->
<!-- <section  id="features" class="py-6">
            <div class="container relative">
                <divend class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <img src="../../require/partials/assets/images/client/amazon.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <img src="../../require/partials/assets/images/client/google.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <img src="../../require/partials/assets/images/client/lenovo.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".7s">
                        <img src="../../require/partials/assets/images/client/paypal.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay=".9s">
                        <img src="../../require/partials/assets/images/client/shopify.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto py-4 wow animate__animated animate__fadeInUp" data-wow-delay="1.1s">
                        <img src="../../require/partials/assets/images/client/spotify.svg" class="h-6" alt="">
                    </div>
                </divend grid
            </div> end container
        </section> -->
<!--end section-->
<!-- Business Partner -->

<!-- Start Section-->




<!-- <section id="features" class="relative md:py-24 py-16">


    <div class="container relative md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center wow animate__animated animate__fadeInUp"
            data-wow-delay=".1s">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">หัวข้อข่าวสารและ
                    <br> ประชาสัมพันธ์ </h3>
            </div>

            <div class="md:col-span-6">
                <p class="text-slate-400 max-w-xl"></p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden wow animate__animated animate__fadeInUp"
                data-wow-delay=".3s">
                <img src="../../require/partials/assets/images/blog/01.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html"
                        class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">ผู้อำนวยสำนักกิจการความมั่นคงภายใน
                        และคณะฯ ลงพื้นที่ตรวจติดตามงานที่อยู่ในความรับผิดชอบของกระทรวงมหาดไทย</a>
                    <p class="text-slate-400 mt-3">วันที่ 11 กรกฎาคม 2566 เวลา 08.30 น. นายพัชระ สิมะเสถียร
                        ผู้อำนวยสำนักกิจการความมั่นคงภายใน นายบัณฑูร สุนทรสมบัติ
                        ผู้อำนวยการส่วนประสานราชการ นายเสรี กัณฑ์โรจน์ </p>

                    <div class="mt-4">
                        <a href="blog-detail.html"
                            class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อ่านต่อ<i
                                class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden wow animate__animated animate__fadeInUp"
                data-wow-delay=".5s">
                <img src="../../require/partials/assets/images/blog/02.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html"
                        class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">ผู้อำนวยสำนักกิจการความมั่นคงภายในลงพื้นที่ตรวจติดตามงานที่อยู่ในความรับผิดชอบของกระทรวงมหาดไทย</a>
                    <p class="text-slate-400 mt-3">นายพัชระ สิมะเสถียร ผู้อำนวยสำนักกิจการความมั่นคงภายใน
                        นายบัณฑูร สุนทรสมบัติ ผู้อำนวยการส่วนประสานราชการ นายเสรี กัณฑ์โรจน์ ผู้อำนวยการส่วนกิจการมวลชน
                        และคณะฯ </p>

                    <div class="mt-4">
                        <a href="blog-detail.html"
                            class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อ่านต่อ
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden wow animate__animated animate__fadeInUp"
                data-wow-delay=".7s">
                <img src="../../require/partials/assets/images/blog/03.jpg" alt="">

                <div class="content p-6">
                    <a href="blog-detail.html"
                        class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">พิธีมอบประกาศนียบัตรให้แก่บุคลากรสังกัด
                        สน.มน. และหน่วยงาน</a>
                    <p class="text-slate-400 mt-3">ได้รับการประกาศเกียรติคุณให้เป็นองค์กรต้นแบบในด้านจิตอาสาตาม
                        "กิจกรรมยกย่องคนดีมีคุณธรรมและจริยธรรม สน.มน. ประจำปีงบประมาณ พ.ศ. 2566</p>

                    <div class="mt-4">
                        <a href="blog-detail.html"
                            class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อ่านต่อ
                            <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <div class="container relative md:mt-24 mt-16">
    <div class="grid grid-cols-1 pb-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

        <p class="text-slate-400 max-w-xl mx-auto">Start working with Tailwind CSS that can provide everything you
            need to generate awareness, drive traffic, connect.</p>
    </div> -->

<!-- <div class="grid grid-cols-1 mt-8">
    <div class="tiny-three-item wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
        <div class="tiny-slide text-center">
            <div class="cursor-e-resize">
                <div
                    class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                    <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                    <p class="text-slate-400">" It seems that only fragments of the original text remain in the
                        Lorem Ipsum texts used today. "</p>
                    <ul class="list-none mb-0 text-amber-400 mt-3">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <img src="../../require/partials/assets/images/client/01.jpg"
                        class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                    <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                    <span class="text-slate-400 text-sm">Manager</span>
                </div>
            </div>
        </div>




        <div class="tiny-slide text-center">
            <div class="cursor-e-resize">
                <div
                    class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                    <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                    <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is
                        said to have originated in the 16th century. "</p>
                    <ul class="list-none mb-0 text-amber-400 mt-3">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <img src="../../require/partials/assets/images/client/02.jpg"
                        class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                    <h6 class="mt-2 font-semibold">Christa Smith</h6>
                    <span class="text-slate-400 text-sm">Manager</span>
                </div>
            </div>
        </div>

        <div class="tiny-slide text-center">
            <div class="cursor-e-resize">
                <div
                    class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                    <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                    <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters
                        appear more frequently than others. "</p>
                    <ul class="list-none mb-0 text-amber-400 mt-3">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <img src="../../require/partials/assets/images/client/03.jpg"
                        class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                    <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                    <span class="text-slate-400 text-sm">Manager</span>
                </div>
            </div>
        </div>

        <div class="tiny-slide text-center">
            <div class="cursor-e-resize">
                <div
                    class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                    <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                    <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual
                        filler for German texts. "</p>
                    <ul class="list-none mb-0 text-amber-400 mt-3">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <img src="../../require/partials/assets/images/client/04.jpg"
                        class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                    <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                    <span class="text-slate-400 text-sm">Manager</span>
                </div>
            </div>
        </div>

        <div class="tiny-slide text-center">
            <div class="cursor-e-resize">
                <div
                    class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                    <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                    <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are
                        usually used when a text is required. "</p>
                    <ul class="list-none mb-0 text-amber-400 mt-3">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <img src="../../require/partials/assets/images/client/05.jpg"
                        class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                    <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                    <span class="text-slate-400 text-sm">Manager</span>
                </div>
            </div>
        </div>

        <div class="tiny-slide text-center">
            <div class="cursor-e-resize">
                <div
                    class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                    <i class="mdi mdi-format-quote-open mdi-48px text-indigo-600"></i>
                    <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a
                        text composed by Cicero. "</p>
                    <ul class="list-none mb-0 text-amber-400 mt-3">
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                        <li class="inline"><i class="mdi mdi-star"></i></li>
                    </ul>
                </div>

                <div class="text-center mt-5">
                    <img src="../../require/partials/assets/images/client/06.jpg"
                        class="h-14 w-14 rounded-full shadow-md mx-auto" alt="">
                    <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                    <span class="text-slate-400 text-sm">Manager</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section> -->
<!-- End -->




<!-- End Section-->

<!-- Start -->
<!-- <section id="pricing" class="relative md:py-24 py-16 md:pt-0 pt-0">
            <divend class="container relative">
                <divend class="grid grid-cols-1 justify-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <div class="relative z-1">
                        <div class="grid grid-cols-1 md:text-start text-center justify-center">
                            <div class="relative">
                                <img src="../../require/partials/assets/images/saas/home.png" alt="">
                                <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                    <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                        class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 dark:text-white">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content md:mt-8">
                            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                                <div class="lg:col-start-2 lg:col-span-10">
                                    <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                        <div class="mt-8">
                                            <div class="section-title text-md-start">
                                                <h6 class="text-white/50 text-lg font-semibold">How to ?</h6>
                                                <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white mt-2">คู่มือระบบ <br> และวิธีการใช้งานระบบ</h3>
                                            </div>
                                        </div>

                                        <div class="mt-8">
                                            <div class="section-title text-md-start">
                                                <p class="text-white/50 max-w-xl mx-auto mb-2">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                                <a href="" class="text-white">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div >
</div>

            <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600"></div>
        </section> -->

<!--end section-->
<!-- End -->

<!-- Start -->


<?php
//require '../../require/partials/footer/footer.php';
require '../../require/partials/cookies.php';
require '../../require/partials/switcher.php';
?>


<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
   class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
    class="uil uil-arrow-up"></i></a>
<!-- Back to top -->



<!-- JAVASCRIPTS -->

<?php
require '../../require/partials/script-file.php';
?>
<!-- JAVASCRIPTS -->
<script>
  
</script>
</body>

</html>