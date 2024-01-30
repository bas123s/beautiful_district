<?php
$title = "แบบประเมินความพึงพอใจการให้บริการประชาชน ตามโครงการ
“อำเภอสวยงาม” <br>ประจำปี พ.ศ. 2566";
// require '../../require/head_php.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
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
    <form method="post" action="form_query.php">
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
                                    <input type="radio" class="form-radio" name="age" value="<20">
                                    <span class="ml-2">ต่ำกว่า 20 ปี</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="age" value="20-30">
                                    <span class="ml-2">20-30 ปี</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="age" value="31-40">
                                    <span class="ml-2">31-40 ปี</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="age" value="41-50">
                                    <span class="ml-2">41-50 ปี</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="age" value="51-60">
                                    <span class="ml-2">51-60 ปี</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="age" value=">60">
                                    <span class="ml-2">60 ปีขึ้นไป</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="text-xl my-2">2. เงื่อนไขของผู้เข้ารับบริการ:</p>
                            <div class="space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="General">
                                    <span class="ml-2">ทั่วไป</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Disabled">
                                    <span class="ml-2">ผู้พิการ</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Senior">
                                    <span class="ml-2">ผู้สูงอายุ</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions"
                                           value="Religious Practitioner">
                                    <span class="ml-2">นักบวช/นักพรต</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Pregnant" id="Pregnant">
                                    <span class="ml-2">สตรีมีครรภ์</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Other" id="Other">
                                    <span class="ml-2">อื่น ๆ</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-4" id="other-condition">
                            <input type="text" name="other_condition"
                                   class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                   placeholder="โปรดระบุ...">
                        </div>
                        <script>
                            // JavaScript to show/hide the "Other Condition" input field when "Other" is selected
                            const otherConditionRadio = document.querySelector('input[name="conditions"][value="Other"]');
                            const otherConditionRadio1 = document.querySelector('input[name="conditions"][value="Pregnant"]');

                            const otherConditionInput = document.getElementById('other-condition');
                            // Hide the input field initially
                            otherConditionInput.classList.add('hidden');

                            otherConditionRadio.addEventListener('change', () => {
                                if (otherConditionRadio.checked) {
                                    otherConditionInput.classList.remove('hidden');
                                } else {
                                    otherConditionInput.classList.add('hidden');
                                }
                            });

                            otherConditionRadio1.addEventListener('change', () => {
                                if (otherConditionRadio1.checked) {
                                    otherConditionInput.classList.add('hidden');
                                } else {
                                    otherConditionInput.classList.remove('hidden');
                                }
                            });
                        </script>

                        <h5> <b>ส่วนที่ 2 ข้อมูลทั่วไปของหน่วยงานให้บริการ</b></h5>


                        <!-- Question 1: Age -->
                        <div class="">
                            <label for="unit_name" class="text-xl ">2. หน่วยงานที่มาเข้ารับบริการ </label>
                        </div>

                        <div class="grid grid-cols-2 gap-4"><!-- District and Province -->

                            <div class="mb-4">
                                <label for="province" class="text-xl my-2">2.2 จังหวัด :</label>
                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="place_pcode" id="place_pcode"
                                        value="<?= @$tmp["pname"]; ?>">
                                    <option value="" disabled selected>---- ----</option>
                                </select>
                            </div><div class="mb-4">
                                <label for="district" class="text-xl my-2">2.1 ทำการปกครองอำเภอ :</label>
                                <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="place_pcode" id="place_pcode"
                                        value="<?= @$tmp["pname"]; ?>">
                                    <option value="" disabled selected>---- ----</option>
                                </select>
                            </div>


                        </div>
                        <div class="mb-4">
                            <p class="text-xl my-2">2. เงื่อนไขของผู้เข้ารับบริการ:</p>
                            <div class=" vertical-labels">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="General">
                                    <span class="ml-2">งานทะเบียนและบัตรประจำตัวประชาชน (เช่น งานทะเบียนราษฎร
                                        งานบัตรประจำตัวประชาชน งานทะเบียนทั่วไป ฯลฯ)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Disabled">
                                    <span class="ml-2">ศูนย์ดำรงธรรมอำเภอ (เช่น การไกล่เกลี่ย การร้องทุกข์
                                        การปรึกษาข้อกฎหมาย เป็นต้น)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Senior">
                                    <span class="ml-2">งานปกครอง (เช่น งานอนุมัติอนุญาตทางปกครอง งานอาวุธปืน งานโรงแรม
                                        งานค้าของเก่า เป็นต้น)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions"
                                           value="Religious Practitioner">
                                    <span class="ml-2">งานความมั่นคง (เช่น งานรักษาความสงบเรียบร้อย งานยาเสพติด
                                        งานหนังสือผ่านแดน เป็นต้น)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="conditions" value="Pregnant">
                                    <span class="ml-2">งานสำนักงานอำเภอ (เช่น การสอบทายาท การเสนอโครงการ เป็นต้น)</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body md:text-xl text-xl font-medium ">




                        <input type="hidden" name="pcode" value="<?= $user["pcode"]; ?>">
                        <input type="hidden" name="pname" value="<?= $user["pname"]; ?>">
                        <input type="hidden" name="acode" value="<?= $user["acode"]; ?>">
                        <input type="hidden" name="aname" value="<?= $user["aname"]; ?>">

                        <table class="table table-striped table-responsive" id="example">
                            <thead>
                                <tr class="text-center">
                                    <th style="width: 40%;" class="text-center" rowspan="2">ประเด็นการสำรวจความพึงพอใจ
                                    </th>
                                    <th style="width: 60%;" class="text-center" colspan="5">ระดับความพึงพอใจ</th>
                                </tr>
                                <tr class="text-center">
                                    <th>น้อยที่สุด 1 คะแนน</th>
                                    <th>น้อย 2 คะแนน</th>
                                    <th>ปานกลาง 3 คะแนน</th>
                                    <th>มาก 4 คะแนน</th>
                                    <th>มากที่สุด 5 คะแนน</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><b>1. ด้านสถานที่ (มีสิ่งอำนวยความสะดวก
                                            และความสะอาด)</b></td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.1 สถานที่มีสิ่งอำนวยความสะดวก</td>
                                    <td class="text-center"> <input type="radio" name="rating_1_1" value="1" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_1" value="2" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_1" value="3" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_1" value="4" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_1" value="5" class="mr-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.2 สถานที่มีความสะอาด</td>
                                    <td class="text-center"> <input type="radio" name="rating_1_2" value="1" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_2" value="2" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_2" value="3" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_2" value="4" class="mr-1">
                                    </td>
                                    <td class="text-center"> <input type="radio" name="rating_1_2" value="5" class="mr-1">
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.3 ห้องสุขาสะอาด</td>
                                    <td class="text-center"><input type="radio" name="rating_1_3" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_3" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_3" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_3" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_3" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>1.4 ห้องสุขามีอุปกรณ์อำนวยความสะดวก</td>
                                    <td class="text-center"><input type="radio" name="rating_1_4" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_4" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_4" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_4" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_4" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>1.5 สภาพภูมิทัศน์สวยงาม/บรรยากาศร่มรื่น</td>
                                    <td class="text-center"><input type="radio" name="rating_1_5" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_5" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_5" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_5" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_5" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>1.6 สิ่งอำนวยความสะดวกสำหรับสตรีมีครรภ์/คนชรา/ผู้พิการ</td>
                                    <td class="text-center"><input type="radio" name="rating_1_6" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_6" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_6" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_6" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_6" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>1.7 ป้ายแสดงจุดรับบริการ และขั้นตอนการบริการที่ชัดเจน</td>
                                    <td class="text-center"><input type="radio" name="rating_1_7" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_7" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_7" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_7" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_7" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>1.8 ป้ายแสดงอัตราค่าธรรมเนียมถูกต้อง ชัดเจน และเป็นปัจจุบัน</td>
                                    <td class="text-center"><input type="radio" name="rating_1_8" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_8" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_8" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_8" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_1_8" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td><b>2. ด้านการให้บริการ</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.1 มีความรวดเร็วในการให้บริการ</td>
                                    <td class="text-center"><input type="radio" name="rating_2_1" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_1" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_1" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_1" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_1" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.2 วันและเวลาให้บริการเหมาะสม</td>
                                    <td class="text-center"><input type="radio" name="rating_2_2" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_2" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_2" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_2" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_2" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.3 จุดประชาสัมพันธ์ให้คำแนะนำการให้บริการ</td>
                                    <td class="text-center"><input type="radio" name="rating_2_3" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_3" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_3" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_3" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_3" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.4 ป้ายแสดงชื่อ และช่องทางติดต่อเจ้าหน้าที่ผู้ให้บริการ</td>
                                    <td class="text-center"><input type="radio" name="rating_2_4" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_4" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_4" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_4" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_4" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.5 ช่องทางการให้บริการสำหรับสตรีมีครรภ์/คนชรา/ผู้พิการ</td>
                                    <td class="text-center"><input type="radio" name="rating_2_5" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_5" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_5" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_5" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_5" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.6 จุดบริการรับเรื่องราวร้องเรียน/ร้องทุกข์</td>
                                    <td class="text-center"><input type="radio" name="rating_2_6" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_6" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_6" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_6" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_6" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.7 ช่องทางการให้บริการออนไลน์</td>
                                    <td class="text-center"><input type="radio" name="rating_2_7" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_7" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_7" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_7" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_7" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>2.8 ช่องทางการให้คำปรึกษาออนไลน์</td>
                                    <td class="text-center"><input type="radio" name="rating_2_8" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_8" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_8" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_8" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_2_8" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td><B>3. ด้านบุคลากร </B></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3.1 การแต่งกายสุภาพเรียบร้อยเหมาะสม</td>
                                    <td class="text-center"><input type="radio" name="rating_3_1" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_1" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_1" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_1" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_1" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>3.2 การให้คำแนะนำข้อมูลข่าวสารและคำปรึกษาที่ดี</td>
                                    <td class="text-center"><input type="radio" name="rating_3_2" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_2" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_2" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_2" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_2" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>3.3 ความใส่ใจในการให้บริการ</td>
                                    <td class="text-center"><input type="radio" name="rating_3_3" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_3" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_3" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_3" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_3" value="5" class="mr-1"></td>
                                </tr>
                                <tr>
                                    <td>3.4 เจ้าหน้าที่เพียงพอต่อการให้บริการ</td>
                                    <td class="text-center"><input type="radio" name="rating_3_4" value="1" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_4" value="2" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_4" value="3" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_4" value="4" class="mr-1"></td>
                                    <td class="text-center"><input type="radio" name="rating_3_4" value="5" class="mr-1"></td>
                                </tr>




                            </tbody>
                        </table>

                        <?php if ($action == "UPDATE") { ?>
                            <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                        <?php } ?>
                        <input type="hidden" name="rec_pid" value="<?= $user['pid']; ?>">
                        <input type="hidden" name="rec_name" value="<?= $user['username']; ?>">
                        <input type="hidden" name="action" value="<?= $action; ?>">
                        <div class="text-center mt-8">
                            <button type="submit"
                                    class="btn btn-primary  md:text-2xl text-2xl text-white font-bold py-2 px-4 border-b-4rounded">ตอบแบบสอบถาม</button>
                        </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
</section>

<script language=Javascript>
    function Inint_AJAX() {
        try {
            return new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        } //IE
        try {
            return new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
        } //IE
        try {
            return new XMLHttpRequest();
        } catch (e) {
        } //Native Javascript
        alert("XMLHttpRequest not supported");
        return null;
    }

    function dochange(data_type, data_value) {
        var req = Inint_AJAX();
        req.onreadystatechange = function () {
            if (req.readyState == 4) {
                if (req.status == 200) {
                    document.getElementById(data_type).innerHTML = req.responseText; //รับค่ากลับมา
                    //          console.log(req.responseText);
                }
            }
        };
        console.log("get_select.php?data_type=" + data_type + "&data_value=" + data_value);
        req.open("GET", "../../require/get_select.php?data_type=" + data_type + "&data_value=" + data_value); //สร้าง connection
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
        req.send(null); //ส่งค่า

        if (data_type === "province") {
            dochange('amphoe', document.getElementById('pcode').value);
            dochange('tambol', '');
        }

        if (data_type === "amphoe") {
            dochange('tambol', document.getElementById('acode').value);
        }
    }

    window.onLoad = dochange('province', -1, 1);
</script>

<!-- <script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: 'rt',


        });
    });
</script> -->
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