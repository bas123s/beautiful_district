<?php
$title = "สรุปผลเกณฑ์การประเมิน 3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.) (100 คะแนน)";
require '../../require/head_php3.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;

$sql = "SELECT * FROM `view_assessment_5s_all` ;";
$data = $mc->select_1($sql);
//$mc->check_array($data, $sql);
$s1 = $data["s1"] / 878;
$s2 = $data["s2"] / 878;
$s3 = $data["s3"] / 878;
$s4 = $data["s4"] / 878;
$s5 = $data["s5"] / 878;

$chart = number_format((float) ($s1 * 5), 2, '.', '') . "," . number_format((float) ($s2 * 5), 2, '.', '') . "," . number_format((float) ($s3 * 5), 2, '.', '') . "," . number_format((float) ($s4 * 5), 2, '.', '') . "," . number_format((float) ($s5 * 5), 2, '.', '');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"></script>
<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-1 lg:grid-cols-1 md:grid-cols-1 gap-[30px]">
            <div class="card container  " style="  text-align: center;   ">
                <div class="card-body md:text-xl text-xl font-medium text-center">
                    <!--สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย"-->
                </div>
                <div class="card">
                    <div class="card-body md:text-xl text-xl font-medium text-center">
                        <!--<form method="post" action="form_query.php">-->
                        <h4 class="text-center text-1xl font-bold"><?= $title ?></h4><br>
                            <div class="grid grid-cols-6 mb-5">
                                <div id="chart" class="col-start-1 col-span-6 "></div>
                            </div>
                            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-[30px]">


                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="M21 11c0 5.55-3.84 10.74-9 12c-5.16-1.26-9-6.45-9-12V5l9-4l9 4v6m-9 10c3.75-1 7-5.46 7-9.78V6.3l-7-3.12L5 6.3v4.92C5 15.54 8.25 20 12 21m-1-7h2v3h3v-5h2l-6-5l-6 5h2v5h3v-3"/></svg>
                                    </span>

                                    <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                                        <span class="text-slate-400 font-semibold block" style="text-align: left"> 1. “การสะสาง” ความเรียบร้อยของที่ทำการปกครองอำเภอ</span>

                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                                            <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s1, 2, '.', '') ?></span>
                                        </span>
                                    </div>
                                </div>


                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32"><path fill="currentColor" d="M27 10h-6a3.003 3.003 0 0 0-3 3v6a2.002 2.002 0 0 0 2 2v7a2.002 2.002 0 0 0 2 2h4a2.002 2.002 0 0 0 2-2v-7a2.002 2.002 0 0 0 2-2v-6a3.003 3.003 0 0 0-3-3zm1 9h-2v9h-4v-9h-2v-6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1zM20 5a4 4 0 1 1 4 4a4.004 4.004 0 0 1-4-4zm2 0a2 2 0 1 0 2-2a2.002 2.002 0 0 0-2 2zm-8 11v-3a3.003 3.003 0 0 0-3-3H5a3.003 3.003 0 0 0-3 3v3H0v2h16v-2zM4 13a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3H4zm0-8a4 4 0 1 1 4 4a4.004 4.004 0 0 1-4-4zm2 0a2 2 0 1 0 2-2a2.002 2.002 0 0 0-2 2z"/></svg>
                                    </span>

                                    <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                                        <span class="text-slate-400 font-semibold block" style="text-align: left"> 2. สิ่งอำนวย “ความสะดวก” ในการเข้ารับบริการที่ทำการปกครองอำเภอ</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                                            <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s2, 2, '.', '') ?></span>
                                        </span>
                                    </div>
                                </div>


                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32"><path fill="currentColor" d="M26 20h-6v-2h6zm4 8h-6v-2h6zm-2-4h-6v-2h6z"/><path fill="currentColor" d="M17.003 20a4.895 4.895 0 0 0-2.404-4.173L22 3l-1.73-1l-7.577 13.126a5.699 5.699 0 0 0-5.243 1.503C3.706 20.24 3.996 28.682 4.01 29.04a1 1 0 0 0 1 .96h14.991a1 1 0 0 0 .6-1.8c-3.54-2.656-3.598-8.146-3.598-8.2Zm-5.073-3.003A3.11 3.11 0 0 1 15.004 20c0 .038.002.208.017.469l-5.9-2.624a3.8 3.8 0 0 1 2.809-.848ZM15.45 28A5.2 5.2 0 0 1 14 25h-2a6.5 6.5 0 0 0 .968 3h-2.223A16.617 16.617 0 0 1 10 24H8a17.342 17.342 0 0 0 .665 4H6c.031-1.836.29-5.892 1.803-8.553l7.533 3.35A13.025 13.025 0 0 0 17.596 28Z"/></svg>
                                    </span>
                                    <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                                        <span class="text-slate-400 font-semibold block" style="text-align: left">3. การรักษา “ความสะอาด” ของที่ทำการปกครองอำเภอ</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                                            <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s3, 2, '.', '') ?></span>
                                        </span>
                                    </div>
                                </div>


                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 256 256"><path fill="currentColor" d="M228 128a12 12 0 0 1-12 12h-88a12 12 0 0 1 0-24h88a12 12 0 0 1 12 12ZM128 76h88a12 12 0 0 0 0-24h-88a12 12 0 0 0 0 24Zm88 104h-88a12 12 0 0 0 0 24h88a12 12 0 0 0 0-24ZM79.51 39.51L56 63l-7.51-7.52a12 12 0 0 0-17 17l16 16a12 12 0 0 0 17 0l32-32a12 12 0 0 0-17-17Zm0 64L56 127l-7.51-7.52a12 12 0 1 0-17 17l16 16a12 12 0 0 0 17 0l32-32a12 12 0 0 0-17-17Zm0 64L56 191l-7.51-7.52a12 12 0 1 0-17 17l16 16a12 12 0 0 0 17 0l32-32a12 12 0 0 0-17-17Z"/></svg>
                                    </span>

                                    <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                                        <span class="text-slate-400 font-semibold block" style="text-align: left"> 4. “การสร้างมาตรฐาน” ในการให้บริการของที่ทำการปกครองอำเภอ</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                                            <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s4, 2, '.', '') ?></span>
                                        </span>
                                    </div>
                                </div>


                                <div class="p-5 flex items-center">
                                    <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 36 36"><circle cx="17.99" cy="10.36" r="6.81" fill="currentColor" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M12 26.65a2.8 2.8 0 0 1 4.85-1.8L20.71 29l6.84-7.63A16.81 16.81 0 0 0 18 18.55A16.13 16.13 0 0 0 5.5 24a1 1 0 0 0-.2.61V30a2 2 0 0 0 1.94 2h8.57l-3.07-3.3a2.81 2.81 0 0 1-.74-2.05Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="M28.76 32a2 2 0 0 0 1.94-2v-3.76L25.57 32Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="currentColor" d="M33.77 18.62a1 1 0 0 0-1.42.08l-11.62 13l-5.2-5.59a1 1 0 0 0-1.41-.11a1 1 0 0 0 0 1.42l6.68 7.2L33.84 20a1 1 0 0 0-.07-1.38Z" class="clr-i-solid clr-i-solid-path-4"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                                    </span>

                                    <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                                        <span class="text-slate-400 font-semibold block" style="text-align: left"> 5. “การสร้างวินัย” ความเรียบร้อยของที่ทำการปกครองอำเภอ</span>
                                        <span class="flex items-center justify-between mt-1">
                                            <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                                            <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s5, 2, '.', '') ?></span>
                                        </span>
                                    </div>
                                </div>


                            </div>

                            <!--<div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-12 gap-[30px] mt-5">-->
              <!--              <a href="rpt_5s_province.php" class="mt-5 py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md" style="text-align: center"><span>ดูรายละเอียด</span></a>-->
                            <!--</div>-->





                    </div>

                </div>
            </div>
        </div>
</section>



<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: '<"top"lfB">rt<"bottom"ip><"clear">',
            buttons: [
                'copy', 'excel'
            ],
            "paging": true,
            "searching": true, // Enable searching
            "ordering": true,
            "info": true,
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#example2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel'
            ],
            "oLanguage": {
                "sSearch": "ค้นหา"
            },
        });
    });
</script>


<script>
    var options = {
        series: [{
                name: 'การจัดการความเรียบร้อย',
                data: [<?= (string) $chart ?>]
            }],
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                columnWidth: '40%',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 2
        },

        grid: {
            row: {
                colors: ['#fff', '#f2f2f2']
            }
        },
        xaxis: {
            labels: {
                rotate: -45
            },
            categories: ['การสะสาง', 'ความสะดวก', 'ความสะอาด', 'การสร้างมาตรฐาน', 'การสร้างวินัย'],
            tickPlacement: 'on'
        },
        yaxis: {
            title: {
                text: 'การจัดการความเรียบร้อย',
            },
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'light',
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 0.85,
                opacityTo: 0.85,
                stops: [50, 0, 100]
            },
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
<?php
require '../../require/footer_content4.php';
?>

