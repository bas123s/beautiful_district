<?php
$title = 'อัพโหลดรูปภาพ เกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.) และการอำนวยความสะดวกแก่ประชาชน';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;
//$condition = "";
//if (!empty($_REQUEST)) {
//  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
//}
//$sql = "SELECT * FROM `view_assessment_5s_a` " . $condition . " ;";
//$data = $mc->select_all($sql);
//$mc->check_array($data, $sql);
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
          <!--สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย"-->
        </div>
        <div class="card">
          <div class="card-body md:text-xl text-xl font-medium text-center">
            <!--<form method="post" action="form_query.php">-->

            <h4 class="text-center text-1xl font-bold">
              <?= $title ?>
            </h4><br>

            <?php if (isset($a)) { ?>
              <div class=" text-center py-4 lg:px-4 slide-in">
                <div
                  class="p-2 bg-indigo-300 items-center text-indigo-800 leading-none lg:rounded-full flex lg:inline-flex"
                  role="alert">
                  <svg class="mx-5" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M18.944 11.112C18.507 7.67 15.56 5 12 5C9.244 5 6.85 6.611 5.757 9.15C3.609 9.792 2 11.82 2 14c0 2.757 2.243 5 5 5h11c2.206 0 4-1.794 4-4a4.01 4.01 0 0 0-3.056-3.888zM13 14v3h-2v-3H8l4-5l4 5h-3z" />
                  </svg>
                  <span class="font-semibold mr-2 text-left flex-auto">
                    <?= $a ?>
                  </span>
                </div>
              </div>
            <?php } ?>


            <form action="5s_upload_query.php" method="post" enctype="multipart/form-data">


              <div
                class="col-span-full text-center text-xl  grid md:grid-cols-2 grid-cols-2 justify-center mx-auto mt-8">
                <div> <h3 class="text-red-500 text-2xl">ภาพก่อน (Before)</h3></div>
                <div><h3 class="text-red-500 text-2xl">ภาพหลัง (After)</h3></div>
                <div>
                  <div id="preview-container" class="mb-4 flex justify-center" hidden>
                    <?php
                    $filePath = '../../uploads/upload_5s/'. @$_REQUEST["assessment"] .@$_REQUEST["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <img id="image-preview" class="w-64 h-64 object-contain border border-gray-300" alt="Image preview"
                        src="<?= $filePath ?>">
                    <?php } else {
                      ?>
                      <img id="image-preview" class="w-64 h-64 object-contain border border-gray-300" alt="Image preview">
                    <?php }
                    ?>
                  </div>
                  <div class="my-10">
                    <span>เลือกไฟล์แบบประเมิน</span>
                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                    <input type="file" id="image-upload" name="before" class="mt-2 text-gray-600" accept="image/jpeg">
                  </div>

                </div>
                <div>
                  <div id="preview-container1" class="mb-4 flex justify-center" hidden>
                    <?php
                    $filePath = '../../uploads/upload_5s/' . @$_REQUEST["assessment"] . @$_REQUEST["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <img id="image-preview1" class="w-64 h-64 object-contain border border-gray-300" alt="Image preview"
                        src="<?= $filePath ?>">
                    <?php } else {
                      ?>
                      <img id="image-preview1" class="w-64 h-64 object-contain border border-gray-300"
                        alt="Image preview">
                    <?php }
                    ?>
                  </div>
                  <div class="my-10">
                    <span>เลือกไฟล์แบบประเมิน</span>
                    <!--<input id="file-upload" name="file-upload" type="file" class="sr-only">-->
                    <input type="file" id="image-upload1" name="after" class="mt-2 text-gray-600" accept="image/jpeg">
                  </div>

                </div>

              </div>
              <input type="hidden" name="pcode" value="<?= $_REQUEST["pcode"] ?>">
              <input type="hidden" name="pname" value="<?= $_REQUEST["pname"] ?>">
              <input type="hidden" name="acode" value="<?= $_REQUEST["acode"] ?>">
              <input type="hidden" name="aname" value="<?= $_REQUEST["aname"] ?>">
              <input type="hidden" name="assessment" value="<?= $_REQUEST["assessment"] ?>">
              <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded">อัพโหลด</button>

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
  function goBack() {
    window.history.back();
  }
</script>
<?php
require '../../require/footer_content4.php';
?>