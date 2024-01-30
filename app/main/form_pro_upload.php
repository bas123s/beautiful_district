<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$title = 'อัปโหลดไฟล์';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;
//$condition = "";
//if (!empty($_REQUEST)) {
//  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
//}
$sql = "SELECT * FROM `pro_uploads` WHERE `id` = '" . $_REQUEST['id'] . "' ";
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

                        <?php if (isset($a)) { ?>
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


                        <form class="mb-3" action="pro_upload_query.php" method="post" enctype="multipart/form-data">

                            <div id="accordion-collapse" data-accordion="collapse">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                        <span>อัพโหลดไฟล์</span>
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
                                        class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    

                                        <div
                                            class="col-span-full text-center text-xl  grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">


                                            <div>
                                       
                                                <div class="my-10">
                                                    <span> เลือกไฟล์ที่ต้องการอัพโหลด</span>
                                                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                                    <input type="file" id="image-upload" name="file"
                                                        class="mt-2 text-gray-600" accept=".doc, .docx, .pdf, .xls">
                                                </div>
                                            </div>
 

                                        </div>




                                    </div>
                                </div>
                          
                               
                            </div>
                            <input type="hidden" name="id" value="<?= $_REQUEST["id"] ?>">
                            <input type="hidden" name="pcode" value="<?= $_REQUEST["pcode"] ?>">
                            <input type="hidden" name="pname" value="<?= $_REQUEST["pname"] ?>">
                            <input type="hidden" name="acode" value="<?= $_REQUEST["acode"] ?>">
                            <input type="hidden" name="aname" value="<?= $_REQUEST["aname"] ?>">
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
    function goBack() {
        window.history.back();
    }
</script>
<?php
require '../../require/footer_content4.php';
?>