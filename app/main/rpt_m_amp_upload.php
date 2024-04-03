<?php
$title = '4. อำเภอมีสภาพในการเป็นศูนย์เรียนรู้ ';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;


$condition = "";
if (!empty ($_REQUEST)) {
  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
}

$sql = "SELECT * FROM `view_assessment_support_a` " . $condition . " ;";
$data = $mc->select_1($sql);
//$mc->check_array($user, $sql);
//exit();
?>
<style>
  table,
  th,
  td {
    text-align: center;
  }
</style>

<section class="relative  md:py-24 py-16">
  <div class="container mx-auto px-4  relative">
    <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
      <div class="card  " style="  text-align: center;   ">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <!--สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย"-->
        </div>
        <div class="card">
          <div class="card-body md:text-xl text-xl font-medium ">
            <!--<form method="post" action="form_query.php">-->

            <h4 class="text-center text-1xl font-bold">
              <?= $title ?> จังหวัด
              <?= $province[@$_REQUEST["pcode"]]; ?> อำเภอ
              <?= @$_REQUEST["aname"] ?>
            </h4><br>
            <table id="example" class="table table-striped table-responsive "
              style="text-align:left; border: #000000; width: 100%;">
              <thead>
                <tr>

                  <th>หัวข้อการประเมิณ</th>
                  <th>เกณฑ์การให้คะแนน</th>

                  <th>รูปภาพก่อนดำเนินการ</th>

                  <th>รูปภาพหลังดำเนินการ</th>
                  <th> อัปโหลดรูปภาพ</th>
                </tr>


              </thead>
              <tbody>
                <tr>

                  <td style="vertical-align: top;">1.
                    บ้านนี้มีรักปลูกผัก กินเอง/ ทางนี้มีผลผู้คนรักกัน</td>
                  <td>

                    1. ผลการปฏิบัติงาน : แปลงผักสวนครัวต้นแบบ
                    อย่างน้อย 10 ชนิด ในพื้นที่ของ
                    ที่ว่าการอำเภอ/ศูนย์ราชการอำเภอ บ้านพักนายอำเภอ/บ้านพักข้าราชการและไม้ผลริมถนนในพื้นที่อำเภอ


                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_1' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_1' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=1_1"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>


                </tr><!-- comment -->
                <tr>
                  <td></td>
                  <td>2. ผลการปฏิบัติงาน :
                    อำเภอมีการสร้างความต่อเนื่องในการปลูกผักสวนครัว
                    อำเภอมีการสร้างความต่อเนื่องในการปลูกผักสวนครัว ได้แก่ การกำหนด
                    ผู้รับผิดชอบหรือจัดตั้งกลุ่มจากภาคีเครือข่าย ในการบำรุงรักษาแปลงผักสวนครัว
                    ที่มีความชัดเจนและต่อเนื่องด้วยความสมัครใจ
                    (ความต่อเนื่อง)

                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_2' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_2' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=1_2"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                  <!-- comment -->
                </tr>

                <tr>
                  <td></td>
                  <td>3. ผลการปฏิบัติงาน :
                    อำเภอมีการขยายผลและมีการถ่ายทอดองค์ความรู้
                    การทำแปลงผักสวนครัว ในพื้นที่ของที่ว่าการอำเภอหรือศูนย์ราชการอำเภอ
                    (การขยายผลและการถ่ายทอดองค์ความรู้)
                    อำเภอมีการจัดตั้งธนาคารเมล็ดพันธุ์พืชเพื่อเก็บเมล็ดพันธุ์จนสามารถนำไปสู่
                    การแบ่งปันภายในพื้นที่อำเภออย่างน้อย 1 แห่ง

                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_3' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_3' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=1_3"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                </tr>

                <tr>
                  <td></td>
                  <td>4. ผลการปฏิบัติงาน :
                    อำเภอมีการแจกจ่ายผลผลิต
                    ที่ได้จากแปลงผักสวนครัวต้นแบบ


                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_4' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/1_4' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=1_4"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                </tr>


                <!-- comment  จบข้อที่ 1-->


                <tr>
                  <td style="vertical-align: top;">2.
                    ผ้าไทยใส่ให้สนุก</td>
                  <td>1. ผลการปฏิบัติงาน : มีการรณรงค์สวมใส่ผ้าไทย 
เพื่อเป็นต้นแบบ

                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/2_1' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/2_1' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=2_1"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>
                  <td>
                </tr><!-- comment -->



                <tr>


                  <td style="vertical-align: top;">3.
                    การให้ความช่วยเหลือ
                    ผู้ยากไร</td>
                  <td>1. ผลการปฏิบัติงาน : การบันทึกและปรับปรุงข้อมูลจากฐานข้อมูลของ มท.
                    อย่างสม่ำเสมอ (ปรับปรุงข้อมูลสม่ำเสมอ)
                    อำเภอมีการบันทึกและปรับปรุงข้อมูลจากฐานข้อมูลผู้ยากไร้ตามที่ มท. กำหนด
                    ครอบคลุมทั่วถึงในพื้นที่อย่างสม่ำเสมอ

                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_1' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_1' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_1"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>
                  <td>
                </tr>
                <tr>
                  <td></td>
                  <td>2. ผลการปฏิบัติงาน : มีการแต่งตั้งคณะกรรมการ/คณะทำงาน ที่เกี่ยวข้องกับการ
                    ช่วยเหลือผู้ยากไร้ (แต่งตั้งคณะกรรมการ/คณะทำงานจาก 7 ภาคีเครือข่าย)
                    อำเภอมีการแต่งตั้งคณะกรรมการ/คณะทำงาน ที่เกี่ยวข้องกับการช่วยเหลือ
                    ผู้ยากไร้มีองค์ประกอบจาก 7 ภาคีเครือข่าย และมีการมอบหมายภารกิจ
                    และอำนาจหน้าที่ที่ชัดเจน


                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_2' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_2' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_2"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                  <!-- comment -->
                </tr>

                <tr>
                  <td></td>
                  <td>3. ผลการปฏิบัติงาน : มีเครือข่ายความร่วมมือที่เข้มแข็งในการสนับสนุน
                    พัฒนาในการสร้างโอกาสและความเสมอภาค (เพิ่มโอกาสการเข้าถึงบริการภาครัฐ)
                    อำเภอมีเครือข่ายความร่วมมือที่เข้มแข็ง มีการบูรณาการผ่านกลไกภาคีเครือข่าย
                    ที่สนับสนุนดูแลและค้นหาผู้ยากไร้ในพื้นที่อย่างต่อเนื่อง มีกระบวนการส่งต่อการ
                    ช่วยเหลือผู้ยากไร้ให้สามารถเข้าถึงบริการพื้นฐานทางสังคมของหน่วยงานภาครัฐ
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_3' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_3' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_3"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                  <!-- comment -->
                </tr>

                <tr>
                  <td></td>
                  <td>4. ผลการปฏิบัติงาน :การจัดกิจกรรมส่งเสริมทักษะการใช้ชีวิตและการประกอบ
                    อาชีพ (สร้างทักษะ/ส่งเสริมอาชีพ)
                    อำเภอมีการบูรณาการร่วมกับภาคีเครือข่ายทั้ง 7 ภาคี จัดกิจกรรมส่งเสริมทักษะ
                    การใช้ชีวิตและทักษะการประกอบอาชีพให้กับผู้ยากไร้ในพื้นที่อย่างต่อเนื่อง
                    และสามารถแสดงผลสัมฤทธิ์เชิงประจักษ์ อย่างน้อย 2 บุคคล/ครัวเรือน

                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_4' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_4' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_4"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                  <!-- comment -->
                </tr>
                <tr>
                  <td></td>
                  <td>5. . ผลการปฏิบัติงาน : มีผลสัมฤทธิ์จากการช่วยเหลือผู้ยากไร้ให้มีคุณภาพชีวิต
                    ที่ดีขึ้นในเชิงประจักษ์ (การช่วยเหลืออย่างยั่งยืน)
                    อำเภอสามารถแสดงผลสัมฤทธิ์เชิงประจักษ์ จากการช่วยเหลือผู้ยากไร้ให้มีคุณภาพชีวิต
                    ที่ดีอย่างยั่งยืน (ต้องเป็นมากกว่าการสงเคราะห์) อย่างน้อย 2 บุคคล/ครัวเรือน

                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_5' . @$user["acode"] . "before.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td>
                    <?php
                    $filePath = '../../uploads/upload_sup/3_5' . @$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                      <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                        <div class="group relative block overflow-hidden transition-all duration-500">
                          <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105"
                            title="">
                            <img src="<?= $filePath ?>" class="" width="300" height="300">
                          </a>

                        </div>
                      </div>
                      <!-- <img id="image-preview" class="object-contain border border-gray-300" alt="Image preview" src="< ?= $filePath ?>"> -->
                      <?php
                    } else {
                      ?>


                      <?php
                    }
                    ?>
                  </td>
                  <td><a
                      href="5s_upload.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_5"><button
                        type="submit"
                        class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a>
                  </td>

                  <!-- comment -->
                </tr>


              </tbody>


            </table>

          </div>

        </div>
      </div>
    </div>
</section>



<script>
  $(document).ready(function () {
    $('#example').DataTable({
      "ordering": false,
      "paging": false,


      "language": {
        "sEmptyTable": "ไม่มีข้อมูลในตาราง",
        "sInfo": "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
        "sInfoEmpty": "แสดง 0 ถึง 0 จากทั้งหมด 0 รายการ",
        "sInfoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
        "sInfoPostFix": "",
        "sInfoThousands": ",",
        "sLengthMenu": "แสดง _MENU_ รายการ",
        "sLoadingRecords": "กำลังโหลด...",
        "sProcessing": "กำลังประมวลผล...",
        "sSearch": "ค้นหา:",
        "sZeroRecords": "ไม่พบรายการที่ตรงกับการค้นหา",
        "oPaginate": {
          "sFirst": "หน้าแรก",
          "sPrevious": "ก่อนหน้า",
          "sNext": "ถัดไป",
          "sLast": "หน้าสุดท้าย"
        },
        "oAria": {
          "sSortAscending": ": เรียงลำดับจากน้อยไปมาก",
          "sSortDescending": ": เรียงลำดับจากมากไปน้อย"
        },

        "buttons": [
          'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      }
    });
  });
</script>

<?php
require '../../require/footer_content4.php';
?>