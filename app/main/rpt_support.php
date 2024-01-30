<?php
$title = "สรุปผลเกณฑ์การประเมิน   2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย (100 คะแนน)";
require '../../require/head_php.php';
require '../../require/head_html4.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;

$sql = "SELECT * FROM `view_assessment_support_all` ;";
$data = $mc->select_1($sql);
//$mc->check_array($data, $sql);
$home = $data["home"] / 878;
$clothes = $data["clothes"] / 878;
$support = $data["support"] / 878;

$chart = number_format((float) ($home * 5), 2, '.', '') . "," . number_format((float) ($clothes * 5), 2, '.', '') . "," . number_format((float) ($support * 5), 2, '.', '');
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
            <h4 class="text-center text-1xl font-bold"> สรุปผลเกณฑ์การประเมิน หัวข้อการประเมินหลัก 2.
              การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย 100 คะแนน"</h4><br>
            <div class="grid grid-cols-6 ">
              <div id="chart" class="col-start-2 col-span-4 "></div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-[30px]">


              <div class="p-5 flex items-center">
                <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="m12.223 11.641l-.223.22l-.224-.22a2.224 2.224 0 0 0-3.125 0a2.13 2.13 0 0 0 0 3.07L12 18l3.349-3.289a2.13 2.13 0 0 0 0-3.07a2.225 2.225 0 0 0-3.126 0z" />
                    <path fill="currentColor"
                      d="m21.707 11.293l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707zM18.001 20H6v-9.585l6-6l6 6V15l.001 5z" />
                  </svg>
                </span>

                <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                  <span class="text-slate-400 font-semibold block" style="text-align: left"> 1.
                    บ้านนี้มีรักปลูกผักกินเอง/ทางนี้มีผล ผู้คนรักกัน</span>

                  <span class="flex items-center justify-between mt-1">
                    <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                    <span class="text-xl font-semibold  text-indigo-600">
                      <?= number_format((float) $home, 2, '.', '') ?>
                    </span>
                  </span>
                </div>
              </div>




              <div class="p-5 flex items-center">
                <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 48 48">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="4"
                      d="M37 17v20m-26 0v7h26v-7m-26 0H4V17c0-3 2-6.5 5-9s7-4 7-4h16s4 1.5 7 4s5 6 5 9v20h-7m-26 0V17m13 0v27m0-27L16 4m16 0l-8 13" />
                  </svg>
                </span>
                <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                  <span class="text-slate-400 font-semibold block" style="text-align: left">3. ผ้าไทยใส่ให้สนุก</span>
                  <span class="flex items-center justify-between mt-1">
                    <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                    <span class="text-xl font-semibold  text-indigo-600">
                      <?= number_format((float) $clothes, 2, '.', '') ?>
                    </span>
                  </span>
                </div>
              </div>





              <div class="p-5 flex items-center">
                <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                    <path fill="currentColor"
                      d="M13.952 5.71a3.357 3.357 0 1 0-4.747 4.747l.793.793h3.127a2.875 2.875 0 0 1 2.862 3.152l1.124-.259l3.686-3.685A3.357 3.357 0 0 0 16.05 5.71L15 6.758L13.953 5.71Zm6.605 7.816l.123.02a2.558 2.558 0 0 1 1.688 3.854c-.25.404-.607.73-1.032.942l-.027.014l-3.74 1.595l-6.196 1.549H0v-7.25h4.086l2.052-2.052a3.25 3.25 0 0 1 1.251-.776a5.358 5.358 0 0 1 7.613-7.46a5.357 5.357 0 0 1 7.21 7.91l-1.655 1.654ZM3.5 16.25H2v3.25h1.5v-3.25Zm2 3.25h5.627l5.804-1.45l3.531-1.508a.555.555 0 0 0-.416-1.022l-.02.005L13.614 17H10v-2h3.125a.874.874 0 1 0 0-1.75h-4.69a1.25 1.25 0 0 0-.885.364l-2.05 2.05V19.5Z" />
                  </svg>
                </span>

                <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                  <span class="text-slate-400 font-semibold block" style="text-align: left"> 5.
                    การให้ความช่วยเหลือผู้ยากไร้</span>
                  <span class="flex items-center justify-between mt-1">
                    <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                    <span class="text-xl font-semibold  text-indigo-600">
                      <?= number_format((float) $support, 2, '.', '') ?>
                    </span>
                  </span>
                </div>
              </div>


            </div>

            <!--<div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-12 gap-[30px] mt-5">-->
            <a href="rpt_support_province.php"
              class="mt-5 py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"
              style="text-align: center"><span>ดูรายละเอียด</span></a>
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
    series: [<?= (string) $chart ?>],
    chart: {
      type: 'radialBar',
      offsetY: -20,
      sparkline: {
        enabled: true
      }
    },
    plotOptions: {
      radialBar: {
        startAngle: -90,
        endAngle: 90,
        track: {
          background: "#e7e7e7",
          strokeWidth: '97%',
          margin: 5, // margin is in pixels
          dropShadow: {
            enabled: true,
            top: 2,
            left: 0,
            color: '#999',
            opacity: 1,
            blur: 2
          }
        },
        dataLabels: {
          name: {
            show: true,
            fontSize: '16px',
            offsetY: 10,
            color: '#333'
          },
          value: {
            offsetY: -2,
            fontSize: '22px'
          }
        }
      }
    },
    grid: {
      padding: {
        top: -10
      }
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'light',
        shadeIntensity: 0.4,
        inverseColors: false,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 50, 53, 91]
      },
    },
    labels: ['ปลูกผักกินเอง', 'เด็กและแม่', 'ผ้าไทย', 'สิ่งแวดล้อม', 'ผู้ยากไร้'],
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>
<?php
require '../../require/footer_content4.php';
?>