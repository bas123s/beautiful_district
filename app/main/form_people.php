<?php
$title = "แบบประเมินความพึงพอใจการให้บริการประชาชน ตามโครงการ
“อำเภอสวยงาม” <br>ประจำปี พ.ศ. 2566";
require '../../require/head_php3.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php

$action = "INSERT";
unset($province["03"]);
unset($province["99"]);
unset($province["10"]);
?>
<style>
  /* Custom CSS to change the layout to a vertical column */
  .vertical-labels {
    display: flex;
    flex-direction: column;
  }

  .vertical-labels label {
    margin-bottom: 0.5rem;
    /* Adjust the spacing between labels as needed */
  }
</style>

<section class="relative  md:py-24 py-16">
  <form method="post" action="form_people_query.php">
    <div class="container mx-auto px-4  relative">
      <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-3">

        <!-- <h2 class="text-center  md:text-2xl text-3xl font-medium"></h2> -->

        <h2 class=" text-center md:text-xl text-xl font-medium ">แบบประเมินความพึงพอใจการให้บริการประชาชน</h2>
        <h5 class=" text-center font-medium "> คำชี้แจง :
          แบบสอบถามนี้จัดทำขึ้นเพื่อเป็นข้อมูลในการปรับปรุงและพัฒนาการให้บริการของที่ทำการปกครองอำเภอ</h5>
        <div class="card">
          <div class="card-body md:text-xl text-xl font-medium">

            <br>
            <h5> <b>ส่วนที่ 1 ข้อมูลทั่วไปของผู้เข้ารับบริการ</b> <br>
              เพื่อนำข้อมูลที่ได้รับไปปรับปรุงและพัฒนาการให้บริการของที่ทำการปกครองอำเภอ ให้สอดคล้อง
              กับกลุ่มเป้าหมาย โปรดเลือกความเป็นจริง </h5>


            <!-- Question 1: Age -->
            <div class="mb-4">
              <p class="text-xl my-2">1. อายุของผู้เข้ารับบริการ:</p>
              <div class="space-x-4">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="age" value="0">
                  <span class="ml-2">ต่ำกว่า 20 ปี</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="age" value="1">
                  <span class="ml-2">20-30 ปี</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="age" value="2">
                  <span class="ml-2">31-40 ปี</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="age" value="3">
                  <span class="ml-2">41-50 ปี</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="age" value="4">
                  <span class="ml-2">51-60 ปี</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="age" value="5">
                  <span class="ml-2">60 ปีขึ้นไป</span>
                </label>
              </div>
            </div>

            <div class="mb-4">
              <p class="text-xl my-2">2. เงื่อนไขของผู้เข้ารับบริการ:</p>
              <div class="space-x-4">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="conditions" value="1" checked>
                  <span class="ml-2">ทั่วไป</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="conditions" value="2">
                  <span class="ml-2">ผู้พิการ</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="conditions" value="3">
                  <span class="ml-2">ผู้สูงอายุ</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="conditions" value="4">
                  <span class="ml-2">นักบวช/นักพรต</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="conditions" value="5">
                  <span class="ml-2">สตรีมีครรภ์</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="conditions" value="6">
                  <span class="ml-2">อื่น ๆ</span>
                </label>
              </div>
            </div>

            <div class="mb-4 hidden" id="other-condition" >
              <input type="text" name="other_condition"
                     class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                     placeholder="โปรดระบุ...">
            </div>


            <script>
              // รับ element ของ radio buttons และ input field ที่จะถูกแสดง/ซ่อน
              const radioButtons = document.querySelectorAll('input[name="conditions"]');
              const otherConditionInput = document.getElementById('other-condition');

              // ฟังก์ชั่นสำหรับการแสดง/ซ่อน input field
              const toggleOtherCondition = (show) => {
                if (show) {
                  otherConditionInput.classList.remove('hidden');
                } else {
                  otherConditionInput.classList.add('hidden');
                }
              };

              // ซ่อน input field ในตอนเริ่มต้น
              toggleOtherCondition(false);

              // ใช้ loop ในการเพิ่ม event listener สำหรับแต่ละ radio button
              radioButtons.forEach((radio) => {
                radio.addEventListener('change', () => {
                  toggleOtherCondition(radio.value === "6");
                });
              });

              // เช็ค radio6 และแสดง input field ในตอนเริ่มต้น
              const radio6 = document.querySelector('input[name="conditions"][value="6"]');
              radio6.checked = true;
              toggleOtherCondition(true);
            </script>



            <h5 class="pt-5"> <b>ส่วนที่ 2 ข้อมูลทั่วไปของหน่วยงานให้บริการ</b></h5>


            <!-- Question 1: Age -->
            <div class="">
              <label for="unit_name" class="text-xl ">2. หน่วยงานที่มาเข้ารับบริการ </label>
            </div>

            <div class="grid grid-cols-2 gap-4"><!-- District and Province -->

              <div class="mb-4">
                <label for="province" class="text-xl my-2">2.2 จังหวัด :</label>
                <div class="input-wrapper " id="province">
                  <?php
                  $select_name = "pcode";
                  $css_class_name = "form-select  my-1";
                  $selected = @$data["pcode"];
                  $js_function = " onchange=\"dochange('amphoe', this.value);\" ";
                  $text = "--- กรุณาเลือกจังหวัดที่ท่านเข้ารับบริการ ---";
                  $mc->list_option5($province, $select_name, $css_class_name, $selected, $js_function, $text);
                  ?>
                </div>
              </div><div class="mb-4">
                <label for="district" class="text-xl my-2">2.1 ทำการปกครองอำเภอ :</label>
                <div class="input-wrapper " id="amphoe">
                  <?php
                  $select_name = "acode";
                  $css_class_name = "form-select  my-1";
                  $selected = @$data["place_acode"];
                  $js_function = "";
                  $text = "--- กรุณาเลือกหน่วยงานที่ท่านเข้ารับบริการ ---";
                 // $mc->list_option5($amphoe["11"], $select_name, $css_class_name, $selected, $js_function, $text);
                  ?>
                </div>
              </div>


            </div>

            <div class="mb-4">
              <p class="text-xl my-2">2. เงื่อนไขของผู้เข้ารับบริการ:</p>
              <div class=" vertical-labels">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="type_services" value="1">
                  <span class="ml-2">งานทะเบียนและบัตรประจำตัวประชาชน (เช่น งานทะเบียนราษฎร งานบัตรประจำตัวประชาชน งานทะเบียนทั่วไป ฯลฯ)</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="type_services" value="2">
                  <span class="ml-2">ศูนย์ดำรงธรรมอำเภอ (เช่น การไกล่เกลี่ย การร้องทุกข์ การปรึกษาข้อกฎหมาย เป็นต้น)</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="type_services" value="3">
                  <span class="ml-2">งานปกครอง (เช่น งานอนุมัติอนุญาตทางปกครอง งานอาวุธปืน งานโรงแรม งานค้าของเก่า เป็นต้น)</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="type_services" value="4">
                  <span class="ml-2">งานความมั่นคง (เช่น งานรักษาความสงบเรียบร้อย งานยาเสพติด งานหนังสือผ่านแดน เป็นต้น)</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" required name="type_services" value="5">
                  <span class="ml-2">งานสำนักงานอำเภอ (เช่น การสอบทายาท การเสนอโครงการ เป็นต้น)</span>
                </label>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body md:text-xl text-xl font-medium ">

              <table class="table table-striped table-responsive" id="example">
                <thead>
                  <tr class="text-center">
                    <th style="width: 40%;" class="text-center" rowspan="2">ประเด็นการสำรวจความพึงพอใจ
                    </th>
                    <th style="width: 60%;" class="text-center" colspan="5">คะแนนและค่าเกณฑ์วัด</th>
                  </tr>
                  <tr class="text-center">
                    <th>น้อยที่สุด</th>
                    <th>น้อย</th>
                    <th>ปานกลาง</th>
                    <th>มาก</th>
                    <th>มากที่สุด</th>
                  </tr>
                </thead>
                <tbody>


                  <tr>
                    <td><b>1. ด้านการให้บริการ</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </td>
                  </tr>
                  <tr>
                    <td>1.1 มีความรวดเร็วในการให้บริการ</td>
                    <td class="text-center"><input type="radio" required name="s1_1" value="4" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_1" value="8" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_1" value="12" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_1" value="16" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_1" value="20" class="mr-1" ></td>
                  </tr>
                  <tr>
                    <td>1.2 วันและเวลาให้บริการเหมาะสม</td>
                    <td class="text-center"><input type="radio" required name="s1_2" value="4" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_2" value="8" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_2" value="12" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_2" value="16" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_2" value="20" class="mr-1" ></td>
                  </tr>
                  <tr>
                    <td>1.3 ความสะดวกในการติดต่ออำเภอ</td>
                    <td class="text-center"><input type="radio" required name="s1_3" value="4" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_3" value="8" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_3" value="12" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_3" value="16" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s1_3" value="20" class="mr-1" ></td>
                  </tr>

                  <tr>
                    <td><B>2. ด้านบุคลากร </B></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2.1 การแต่งกายสุภาพเรียบร้อยเหมาะสม</td>
                    <td class="text-center"><input type="radio" required name="s2_1" value="4" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_1" value="8" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_1" value="12" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_1" value="16" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_1" value="20" class="mr-1" ></td>
                  </tr>
                  <tr>
                    <td>2.2 การให้คำแนะนำข้อมูลข่าวสารและคำปรึกษาที่ดี</td>
                    <td class="text-center"><input type="radio" required name="s2_2" value="4" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_2" value="8" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_2" value="12" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_2" value="16" class="mr-1"></td>
                    <td class="text-center"><input type="radio" required name="s2_2" value="20" class="mr-1" ></td>
                  </tr>
                




                </tbody>
              </table>

              <div class="col-span-full mt-5 text-xl my-2">
                <label for="about" class="block leading-6 ">ข้อเสนอแนะ</label>
                <div class="mt-2">
                  <textarea id="suggestion" name="suggestion" rows="3" class="block w-full rounded-md border-0 p-5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
                <p class="mt-3 text-sm leading-6 text-gray-600">กรุณากรอกข้อเสนอแนะ (ถ้ามี)</p>
              </div>

              <input type="hidden" name="action" value="<?= @$action; ?>">
              <div class="text-center mt-8">
                <button type="submit" class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">ตอบแบบสอบถาม</button>
              </div>


            </div>

          </div>
        </div>
      </div>

    </div>
  </form>
</section>


<script>
  async function dochange(data_type, data_value) {
    try {
      const response = await fetch(`../../require/get_select7.php?data_type=${data_type}&data_value=${data_value}`, {
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8',
        },
      });

      if (response.status === 200) {
        const data = await response.text();
        document.getElementById(data_type).innerHTML = data;
      } else {
        console.error(`Error: ${response.status}`);
      }
    } catch (error) {
      console.error(`Fetch failed: ${error}`);
    }
  }
</script>


<script>
  $(document).ready(function () {
    $('#example').DataTable({
      dom: 'rt',
      searching: false, // Hide the search box
      pageLength: -1, // Display all entries (use -1 for all entries)
    });
  });
</script>

<?php
require '../../require/footer_content4.php';
?>

<!-- /footer content -->