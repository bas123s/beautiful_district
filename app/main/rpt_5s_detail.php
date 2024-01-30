<?php
$title = 'เกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.) และการอำนวยความสะดวกแก่ประชาชน"';
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;


$condition = "";
if (!empty($_REQUEST)) {
  $condition = " WHERE `pcode` = '" . @$_REQUEST["pcode"] . "' ";
}

$sql = "SELECT * FROM `view_assessment_5s_a` " . $condition . " ;";
$data = $mc->select_all($sql);
//$mc->check_array($data, $sql);
//exit();
?>
<style>
  table,th,td{
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
          <div class="card-body md:text-xl text-xl font-medium text-center">
            <!--<form method="post" action="form_query.php">-->

            <h4 class="text-center text-1xl font-bold"><?= $title ?> จังหวัด<?= $province[@$_REQUEST["pcode"]]; ?></h4><br>
            <table id="example" class="table-bordered " style="text-align: center; border: #000000; width: 100%;">
              <thead>
              <tr>
               
                  <th >ที่</th>

                  <th >อำเภอ</th>
                  <th >รูปภาพก่อนดำเนินการ</th>

                  <th>รูปภาพหลังดำเนินการ</th>
                  <th> อัปโหลดรูปภาพ</th>
                </tr>


              </thead>

              <tbody>
                                <tr>
                              

                                    <td class=" " style="vertical-align: top;" >1.สะสาง

                                    </td>
                                    <td class="">
                                        1. มีการจัดเก็บอุปกรณ์และสิ่งของต่างๆ เป็นระเบียบเรียบร้อย


                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/1_1'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/1_1'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=1_1"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                  <td></td>
                                    <td class="">2.
                                        ข้อมูลผังสำนักงานของส่วนราชการและป้ายประชาสัมพันธ์เป็นปัจจุบัน



                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/1_2'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/1_2'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=1_2"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    
                                    <!-- comment -->
                                </tr>
                            <!-- comment  จบข้อที่ 1-->
                            <!-- comment  ข้อที่ 2-->
                        
                                <tr>
                               

                                    <td class=" " style="vertical-align: top;" >2.สะดวก
                                    </td>
                                    <td class="">1.มีสิ่งอำนวยความสะดวกทางกายภาพที่คำนึงถึงผู้พิการและผู้สูงอาุ เช่น
                                        ที่จอดรถ ทางลาด ประตู ห้องน้ำ รถเข็น และสถานที่ติดต่อหรือประชาสัมพันธ์เป็นต้น


                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/2_1'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/2_1'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=2_1"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                  <td></td>
                                    <td class="">2. มีการแสดงแผนผังขั้นตอนการให้บริการ


                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/2_2'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/2_2'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=2_2"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    
                                    <!-- comment -->
                                </tr>

                                <tr>
                                  <td></td>
                                    <td class="">3. มีการแสดงแผนผังอำเภอและป้ายบอกทางภายในอาคาร


                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/2_3'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/2_3'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=2_3"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    
                                    <!-- comment -->
                                </tr>



                         
                        
                                <tr>
                                

                                    <td class=" " style="vertical-align: top;" >3.สะอาด
                                    </td>
                                    <td class="">1.มีการบำรุงดูแลรักษาตัวอาคารที่ว่าการอำเภอให้สะอาดเรียบร้อย สวยงาม
                                        และอยู่ในสภาพพร้อมใช้งาน
                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/3_1'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/3_1'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_1"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    <!-- comment -->
                                </tr><!-- comment -->
                                <tr>
                                  <td></td>
                                    <td class="">2.มีการปรับปรุงรักษาสิ่งก่อสร้างหรือถาวรวัตถุ
                                        จัดระเบียบและรักษาความสะอาดเรียบร้อยบริเวณสภาพแวดล้อมโดบรอบที่ทำการปกครองอำเภอ



                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/3_2'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/3_2'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=3_2"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    
                                    <!-- comment -->
                                </tr>


                          
                           
                                <tr>
                           

                                    <td class=" " style="vertical-align: top;" >4.สุขลักษณะ
                                    </td>
                                    <td class="">1. กำหนดให้มีการปฏิบัติกิจกรรมโดยเฉพาะ สะสาง สะดวก สะอาดอย่างต่อเนื่อง



                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/4_1'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/4_1'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=4_1"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                </tr><!-- comment -->
                                <tr>
                                  <td></td>
                                    <td class="">2. แต่งตั้งคณะกรรมการติดตามผลการดำเนินกิจกรรม 5ส เพื่อรักษามาตรฐาน


                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/4_2'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/4_2'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=4_2"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    
                                    <!-- comment -->
                                </tr>




                     
                         
                                <tr>
                               

                                    <td class=" " style="vertical-align: top;" >5. สร้างวินัย
                                    </td>
                                    <td class="">1.จัดกิจกรรมส่งเสริมกิจกรรม 5ส เช่น การประกวดพื้นที่และมอบรางวัล




                                    </td>
                                    <td>
                      <?php
                      $filePath = '../../uploads/upload_5s/5_1'.@$user["acode"] . "before.jpg";
                      if (file_exists($filePath)) {
                        ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                      $filePath = '../../uploads/upload_5s/5_1'.@$user["acode"] . "after.jpg";
                    if (file_exists($filePath)) {
                      ?>
                                                  <div class="grid md:grid-cols-1 grid-cols-1 justify-center mx-auto mt-8">
                                <div class="group relative block overflow-hidden transition-all duration-500">
                                    <a href="<?= $filePath ?>" class="lightbox transition-all duration-500 group-hover:scale-105" title="">
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
                    <td><a href="5s_upload5s.php?pcode=<?= @$user['pcode']; ?>&acode=<?= @$user['acode']; ?>&aname=<?= @$user['aname']; ?>&pname=<?= @$user['pname']; ?>&assessment=5_1"><button type="submit" class="btn btn-primary  md:text-xl text-xl text-white  py-2 px-4 border-b-4rounded">อัพโหลด</button></a></td>

                                    <!-- comment -->
                                </tr><!-- comment -->



                            </tbody>
            </table>

          </div>

        </div>
      </div>
    </div>
</section>



<script>
$(document).ready(function() {
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

