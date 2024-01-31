<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$title = 'อัปโหลดอัพเดทข่าวและประชาสัมพันธ์';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php

//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;
//$condition = "";
//if (!empty($_REQUEST)) {
//  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
//}
if(isset($_REQUEST["id"]) && $_REQUEST["id"] != ""){
    $sql = "SELECT * FROM `beautiful_district`.`news`  WHERE `id` = '" . $_REQUEST['id'] . "' ";
    $data = $mc->select_1($sql);
    $action = "UPDATE";   
}
else {
    $action = "INSERT";
}

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

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
    <div class="container relative">
        <div class="lg:flex justify-center">
            <div class="lg:w-full">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <form method="post" action="news_query.php" class="text-start" enctype="multipart/form-data" >
                      

                        <div class="grid grid-cols-12 gap-4 mt-4">
                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="title">หัวข้อข่าว:</label>
                                <input id="title" name="title" type="text" value="<?=@$data['title']; ?>"
                                    class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                    placeholder="หัวข้อข่าว ตัวอักษรไม่เกิน 150 ตัวอักษร"  maxlength="150" required>
                        

                            </div>

                            <div class="col-span-12 text-start">
                                <label for="detail" class="font-semibold">รายละเอียดข่าว :</label>
                                <textarea name="detail" id="detail" 
                                    class="form-input mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                    placeholder="รายละเอียดข่าว ข้อมูลเนื้อหาข่าว"><?= isset($data['detail']) ? $data['detail'] : '';  ?></textarea>
                            </div>

                            <div class="col-span-12 text-start">
                                <label class="font-semibold" for="title">แนบลิงค์:</label>
                                <input id="link" name="link" type="text" value="<?=@$data['link']; ?>"
                                    class="form-input mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                    placeholder="หากต้องการแนบลิงค์กรุณาใส่ลิงค์ URL ให้ถูกต้อง">
                            </div>

                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">อัพโหลดรูปภาพหน้าปกข่าว :</label>
                                <div>
                                    <div id="preview-container" class="mb-4 flex justify-center" hidden>
                                        <?php
                                        $filePath = '../../uploads/upload_news/' . @$data["pic_1"];
                                        if (file_exists($filePath)) {
                                            ?>
                                            <img id="image-preview" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview0" src="<?= $filePath ?>">
                                        <?php } else {
                                            ?>
                                            <img id="image-preview" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview0">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="my-10">
                                        <span> เลือกไฟล์รูปภาพ</span>
                                        <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                        <input type="file" id="image-upload" name="pic_1" class="mt-2 text-gray-600"
                                            accept="image/*" required >

                                    </div>
                                </div>
                            </div>


                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">อัพโหลดไฟล์หรือรูปภาพ เพิ่มเติม (1) :</label>
                                <div>
                                    <div id="preview-container1" class="mb-4 flex justify-center" hidden>
                                        <?php
                                        $filePath = '../../uploads/upload_news/' . @$data["pic_2"];
                                        if (file_exists($filePath)) {
                                            ?>
                                            <img id="image-preview1" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview1" src="<?= $filePath ?>">
                                        <?php } else {
                                            ?>
                                            <img id="image-preview1" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview1">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="my-10">
                                        <span> เลือกไฟล์รูปภาพ</span>
                                        <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                        <input type="file" id="image-upload1" name="pic_2" class="mt-2 text-gray-600"
                                            accept="image/*">

                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">อัพโหลดไฟล์หรือรูปภาพ เพิ่มเติม (2) :</label>
                                <div>
                                    <div id="preview-container2" class="mb-4 flex justify-center" hidden>
                                        <?php
                                        $filePath = '../../uploads/upload_news/' . @$data["pic_3"];
                                        if (file_exists($filePath)) {
                                            ?>
                                            <img id="image-preview2" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview2" src="<?= $filePath ?>">
                                        <?php } else {
                                            ?>
                                            <img id="image-preview2" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview2">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="my-10">
                                        <span> เลือกไฟล์รูปภาพ</span>
                                        <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                        <input type="file" id="image-upload2" name="pic_3" class="mt-2 text-gray-600"
                                            accept="image/*">

                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">อัพโหลดไฟล์หรือรูปภาพ เพิ่มเติม (3) :</label>
                                <div>
                                    <div id="preview-container3" class="mb-4 flex justify-center" hidden>
                                        <?php
                                        $filePath = '../../uploads/upload_news/' . @$data["pic_4"];
                                        if (file_exists($filePath)) {
                                            ?>
                                            <img id="image-preview3" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview3" src="<?= $filePath ?>">
                                        <?php } else {
                                            ?>
                                            <img id="image-preview3" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview3">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="my-10">
                                        <span> เลือกไฟล์รูปภาพ</span>
                                        <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                        <input type="file" id="image-upload3" name="pic_4" class="mt-2 text-gray-600"
                                            accept="image/*">

                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">อัพโหลดไฟล์หรือรูปภาพ เพิ่มเติม (4) :</label>
                                <div>
                                    <div id="preview-container4" class="mb-4 flex justify-center" hidden>
                                        <?php
                                        $filePath = '../../uploads/upload_news/' . @$data["pic_5"];
                                        if (file_exists($filePath)) {
                                            ?>
                                            <img id="image-preview4" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview4" src="<?= $filePath ?>">
                                        <?php } else {
                                            ?>
                                            <img id="image-preview4" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview4">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="my-10">
                                        <span> เลือกไฟล์รูปภาพ</span>
                                        <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                        <input type="file" id="image-upload4" name="pic_5" class="mt-2 text-gray-600"
                                            accept="image/*">

                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-6 col-span-12 text-start">
                                <label class="font-semibold">อัพโหลดไฟล์หรือรูปภาพ เพิ่มเติม (5) :</label>
                                <div>
                                    <div id="preview-container5" class="mb-4 flex justify-center" hidden>
                                        <?php
                                        $filePath = '../../uploads/upload_news/' . @$data["pic_6"];
                                        if (file_exists($filePath)) {
                                            ?>
                                            <img id="image-preview5" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview5" src="<?= $filePath ?>">
                                        <?php } else {
                                            ?>
                                            <img id="image-preview5" class="w-64 h-64 object-contain border border-gray-300"
                                                alt="Image preview5">
                                        <?php }
                                        ?>
                                    </div>
                                    <div class="my-10">
                                        <span> เลือกไฟล์รูปภาพ</span>
                                        <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                                        <input type="file" id="image-upload5" name="pic_6" class="mt-2 text-gray-600"
                                            accept="image/*">

                                    </div>
                                </div>
                            </div>


                            <!-- <input type="hidden" name="id" value="< ?= $_REQUEST["id"] ?>"> -->

                            <br>
                            <div class="col-span-12 text-center">
                            <input type="hidden" name="id" value="<?= @$_REQUEST["id"] ?>">
                            <input type="hidden" name="action" value="<?=  $action ?>">
                            <input type="hidden" name="pid_upload" value="<?= @$user['pid'] ?>">
                            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded ">อัพโหลด</button>
                            </div>
                      


                    </form><!--end form-->
                </div>
            </div>
        </div><!--end flex-->
    </div><!--end container-->
</section><!--end section-->


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
    const imageUpload1 = document.getElementById('image-upload1');
    const imagePreview1 = document.getElementById('image-preview1');
    const previewContainer1 = document.getElementById('preview-container1');

    imageUpload1.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview1.setAttribute('src', this.result);
                previewContainer1.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer1.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload2 = document.getElementById('image-upload2');
    const imagePreview2 = document.getElementById('image-preview2');
    const previewContainer2 = document.getElementById('preview-container2');

    imageUpload2.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview2.setAttribute('src', this.result);
                previewContainer2.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer2.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload3 = document.getElementById('image-upload3');
    const imagePreview3 = document.getElementById('image-preview3');
    const previewContainer3 = document.getElementById('preview-container3');

    imageUpload3.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview3.setAttribute('src', this.result);
                previewContainer3.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer3.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload4 = document.getElementById('image-upload4');
    const imagePreview4 = document.getElementById('image-preview4');
    const previewContainer4 = document.getElementById('preview-container4');

    imageUpload4.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview4.setAttribute('src', this.result);
                previewContainer4.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer4.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload5 = document.getElementById('image-upload5');
    const imagePreview5 = document.getElementById('image-preview5');
    const previewContainer5 = document.getElementById('preview-container5');

    imageUpload5.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview5.setAttribute('src', this.result);
                previewContainer5.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer5.setAttribute('hidden', 'hidden');
        }
    });
</script>
<script>
    const imageUpload6 = document.getElementById('image-upload6');
    const imagePreview6 = document.getElementById('image-preview6');
    const previewContainer6 = document.getElementById('preview-container6');

    imageUpload6.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                imagePreview6.setAttribute('src', this.result);
                previewContainer6.removeAttribute('hidden');
            });
            reader.readAsDataURL(file);
        } else {
            previewContainer6.setAttribute('hidden', 'hidden');
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