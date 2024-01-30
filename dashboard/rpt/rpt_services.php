<?php
$title = "สรุปผลเกณฑ์การประเมิน 4. การให้การบริการประชาชนและเป็นที่พึ่งให้ประชาชน ";
require '../../require/head_php3.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;

$sql = "SELECT * FROM `view_assessment_services_all` ;";
$data = $mc->select_1($sql);
//$mc->check_array($data, $sql);
$s1 = $data["s1"] / 878;
$s2 = $data["s2"] / 878;


$chart = number_format((float) ($s1 * 5), 2, '.', '') . "," . number_format((float) ($s2 * 5), 2, '.', '') ;
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
                <div id="chart" class="col-start-1 col-span-6  "></div>
              </div>
              <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 gap-[30px]">





                <div class="p-5 flex items-center">
                  <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32"><path fill="currentColor" d="M27 10h-6a3.003 3.003 0 0 0-3 3v6a2.002 2.002 0 0 0 2 2v7a2.002 2.002 0 0 0 2 2h4a2.002 2.002 0 0 0 2-2v-7a2.002 2.002 0 0 0 2-2v-6a3.003 3.003 0 0 0-3-3zm1 9h-2v9h-4v-9h-2v-6a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1zM20 5a4 4 0 1 1 4 4a4.004 4.004 0 0 1-4-4zm2 0a2 2 0 1 0 2-2a2.002 2.002 0 0 0-2 2zm-8 11v-3a3.003 3.003 0 0 0-3-3H5a3.003 3.003 0 0 0-3 3v3H0v2h16v-2zM4 13a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3H4zm0-8a4 4 0 1 1 4 4a4.004 4.004 0 0 1-4-4zm2 0a2 2 0 1 0 2-2a2.002 2.002 0 0 0-2 2z"/></svg>
                  </span>

                  <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                    <span class="text-slate-400 font-semibold block" style="text-align: left"> 1. ด้านการให้บริการ</span>
                    <span class="flex items-center justify-between mt-1">
                      <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                      <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s1, 2, '.', '') ?></span>
                    </span>
                  </div>
                </div>


                <div class="p-5 flex items-center">
                  <span class="flex justify-center items-center rounded-md h-14 w-14 min-w-[56px] text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32"><path fill="currentColor" d="M26 20h-6v-2h6zm4 8h-6v-2h6zm-2-4h-6v-2h6z"/><path fill="currentColor" d="M17.003 20a4.895 4.895 0 0 0-2.404-4.173L22 3l-1.73-1l-7.577 13.126a5.699 5.699 0 0 0-5.243 1.503C3.706 20.24 3.996 28.682 4.01 29.04a1 1 0 0 0 1 .96h14.991a1 1 0 0 0 .6-1.8c-3.54-2.656-3.598-8.146-3.598-8.2Zm-5.073-3.003A3.11 3.11 0 0 1 15.004 20c0 .038.002.208.017.469l-5.9-2.624a3.8 3.8 0 0 1 2.809-.848ZM15.45 28A5.2 5.2 0 0 1 14 25h-2a6.5 6.5 0 0 0 .968 3h-2.223A16.617 16.617 0 0 1 10 24H8a17.342 17.342 0 0 0 .665 4H6c.031-1.836.29-5.892 1.803-8.553l7.533 3.35A13.025 13.025 0 0 0 17.596 28Z"/></svg>
                  </span>
                  <div class="ms-3bg-indigo-600  ps-5 " style="width:100%;">
                    <span class="text-slate-400 font-semibold block" style="text-align: left">2. ด้านบุคลากร</span>
                    <span class="flex items-center justify-between mt-1">
                      <span class="text-slate-400 ">เฉลี่ยทั้งประเทศ</span>
                      <span class="text-xl font-semibold  text-indigo-600"><?= number_format((float) $s2, 2, '.', '') ?></span>
                    </span>
                  </div>
                </div>


              </div>

              <!--<div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-12 gap-[30px] mt-5">-->
              <!--<a href="rpt_services_province.php" class="mt-5 py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md" style="text-align: center"><span>ดูรายละเอียด</span></a>-->
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
        name: 'การให้การบริการประชาชน',
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
      categories: [ 'ด้านการให้บริการ', 'ด้านบุคลากร'],
      tickPlacement: 'on'
    },
    yaxis: {
      title: {
        text: 'การให้การบริการประชาชน',
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

