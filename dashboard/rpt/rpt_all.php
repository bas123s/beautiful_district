<?php
$title = "สรุปผลเกณฑ์การประเมินทั้งหมด";
require '../../require/head_php3.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;

$asize = ["1" => "302", "2" => "340", "3" => "236",];

$sql = "SELECT * FROM `view_assessment_dopa_all` ;";
$data = $mc->select_1($sql);

//
$dopa = [
    number_format((float) (($data["dcast"] / 878) * 10), 2, '.', ''),
    number_format((float) (($data["svs"] / 878) * 10), 2, '.', ''),
    number_format((float) (($data["damrong"] / 878) * 10), 2, '.', ''),
    number_format((float) (($data["whitehouse"] / 878) * 10), 2, '.', ''),
    number_format((float) (($data["thaiD"] / 878) * 10), 2, '.', ''),
];

$sql2 = "SELECT * FROM `view_assessment_support_all` ;";
$data2 = $mc->select_1($sql2);

//
$support = [
    number_format((float) ((($data2["home"] / 6) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data2["hygiene"] / 5) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data2["clothes"] / 5) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data2["family"] / 7) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data2["support"] / 5) / 878) * 25), 2, '.', ''),
];

$sql3 = "SELECT * FROM `view_assessment_5s_all` ;";
$data3 = $mc->select_1($sql3);

//
$s5 = [
    number_format((float) ((($data3["s1"] / 3) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data3["s2"] / 5) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data3["s3"] / 5) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data3["s4"] / 4) / 878) * 25), 2, '.', ''),
    number_format((float) ((($data3["s5"] / 2) / 878) * 25), 2, '.', ''),
];

$sql4 = "SELECT * FROM `view_assessment_services_all` ;";
$data4 = $mc->select_1($sql4);

//
$services = [
    number_format((float) ((($data4["s1"] / 8) / 878) * 20), 2, '.', ''),
    number_format((float) ((($data4["s2"] / 8) / 878) * 20), 2, '.', ''),
    number_format((float) ((($data4["s3"] / 4) / 878) * 20), 2, '.', ''),
];

$sql5 = "SELECT * FROM `view_assessment_org_all` ;";
$data5 = $mc->select_1($sql5);

//
$org = [
    number_format((float) (($data5["ita"] / 898) * 10), 2, '.', ''),
    number_format((float) (($data5["gecc"] / 898) * 10), 2, '.', ''),
    number_format((float) (($data5["moral"] / 898) * 10), 2, '.', ''),
];

$sql6 = "SELECT * FROM `view_all_asize_dopa` ;";
$data6 = $mc->select_5($sql6, 'asize');

//

$group_keys = ["1", "2", "3"];
$sub_keys = ["dcast", "svs", "damrong", "whitehouse", "thaiD"];
$dopa_a6 = [];

foreach ($group_keys as $group_key) {
  foreach ($sub_keys as $sub_key) {
    if (isset($data6[$group_key][$sub_key])) {
      $dopa_a6[] = number_format((float) $data6[$group_key][$sub_key], 2, '.', '');
    } else {
      $dopa_a6[] = 0;  // หรือค่าอื่นที่คุณต้องการใส่เมื่อไม่มีข้อมูล
    }
  }
}


$sql7 = "SELECT * FROM `view_all_asize_dopa` ;";
$data7 = $mc->select_5($sql7, 'asize');
$dopa_a7 = [];
foreach ($group_keys as $group_key) {
  foreach ($sub_keys as $sub_key) {
    if (isset($data7[$group_key][$sub_key])) {
      $dopa_a7[] = number_format((float) $data7[$group_key][$sub_key], 2, '.', '');
    } else {
      $dopa_a7[] = 0;  // หรือค่าอื่นที่คุณต้องการใส่เมื่อไม่มีข้อมูล
    }
  }
}
?>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"></script>-->
<script src="apexcharts.min.js"></script>
<section class="relative  md:py-36 py-24 px-24">

  <div class=" px-4  relative">
    <div class="grid grid-cols-12 ">

      <div class="card mx-5  sm:col-span-12  lg:col-start-2 lg:col-span-5">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <div id="chart2" ></div>
        </div>
      </div>

      <div class="card mx-5  sm:col-span-12 lg:col-span-5">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <div id="chart3" ></div>
        </div>
      </div>

    </div>
  </div>

  <div class=" px-4  relative mt-5">
    <div class="grid grid-cols-12 ">

      <div class="card mx-5 sm:col-span-12 lg:col-span-4">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <div id="chart4" ></div>
        </div>
      </div>

      <div class="card mx-5 sm:col-span-12 lg:col-span-8">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <div id="chart" ></div>
        </div>
      </div>

    </div>
  </div>


  <div class=" px-4  relative mt-5">
    <div class="grid grid-cols-12 ">

      <div class="card mx-5 sm:col-span-12 lg:col-span-12">
        <div class="card-body md:text-xl text-xl font-medium text-center">
          <div id="chart5" ></div>
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
        name: 'กลุ่ม 1',
        data: [<?= $dopa[0] ?>, <?= $support[0] ?>, <?= $s5[0] ?>]
      }, {
        name: 'กลุ่ม 2',
        data: [<?= $dopa[1] ?>, <?= $support[1] ?>, <?= $s5[1] ?>]
      }, {
        name: 'กลุ่ม 3',
        data: [<?= $dopa[2] ?>, <?= $support[2] ?>, <?= $s5[2] ?>]
      }, {
        name: 'กลุ่ม 4',
        data: [<?= $dopa[3] ?>, <?= $support[3] ?>, <?= $s5[3] ?>]
      }, {
        name: 'กลุ่ม 5',
        data: [<?= $dopa[4] ?>, <?= $support[4] ?>, <?= $s5[4] ?>]
      }],
    chart: {
      type: 'bar',
      height: 350,
      stacked: false,
    },
    legend: {
      show: false // ซ่อน legend
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '75%',
        endingShape: 'rounded'
      },
    },
    colors: ['#b0bef0', '#6564bf', '#2c2776', '#5a3693', '#9b96cb'], // ตั้งค่าสี
    xaxis: {
      categories: ['1. การขับเคลื่อนภารกิจของ มท.', '2. การสนับสนุนนโยบายสมาคมแม่บ้านมหาดไทย', '3. การจัดการความเรียบร้อยของที่ทำการปกครองอำเภอ (5 ส.)'],
    },
    yaxis: {
      title: {
        text: 'ข้อมูล'
      }
    }
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>


<script>
  var options2 = {
    series: [{
        name: 'อำเภอขนาดเล็ก',
        data: [<?= ($dopa_a6[0] / $asize["1"]) . " , " . ($dopa_a6[1] / $asize["1"]) . " , " . ($dopa_a6[2] / $asize["1"]) . " , " . ($dopa_a6[3] / $asize["1"]) . " , " . ($dopa_a6[4] / $asize["1"]) ?>],
      },
      {
        name: 'อำเภอขนาดกลาง',
        data: [<?= ($dopa_a6[5] / $asize["2"]) . " , " . ($dopa_a6[6] / $asize["2"]) . " , " . ($dopa_a6[7] / $asize["2"]) . " , " . ($dopa_a6[8] / $asize["2"]) . " , " . ($dopa_a6[9] / $asize["2"]) ?>],
      },
      {
        name: 'อำเภอขนาดใหญ่',
        data: [<?= ($dopa_a6[10] / $asize["3"]) . " , " . ($dopa_a6[11] / $asize["3"]) . " , " . ($dopa_a6[12] / $asize["3"]) . " , " . ($dopa_a6[13] / $asize["3"]) . " , " . ($dopa_a6[14] / $asize["3"]) ?>],
      }
    ],
    chart: {
      height: 350,
      type: 'radar',
    },
    colors: ['#FF5733', '#33FF57', '#3357FF'], // ตั้งค่าสี
    xaxis: {
      categories: ['dcast', 'svs', 'damrong', 'whitehouse', 'thaiD'],
    },
    legend: {
      show: true // ตั้งค่านี้เป็น false ถ้าคุณไม่ต้องการแสดงชื่อของ series
    }
  };

  var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
  chart2.render();
</script>


<script>
  var options3 = {
    series: [<?= $org[0] ?>,<?= $org[1] ?>,<?= $org[2] ?>],
    chart: {
      height: 350,
      type: 'radialBar',
    },
    plotOptions: {
      radialBar: {
        offsetY: 0,
        startAngle: 0,
        endAngle: 270,
        hollow: {
          margin: 5,
          size: '30%',
          background: 'transparent',
          image: undefined,
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: false,
          }
        }
      }
    },
    colors: ['#6564bf', '#2c2776', '#5a3693'],
    labels: ['GECC', 'หนึ่งตำบล ITA', 'อำเภอคุณครรม'],
    legend: {
      show: true,
      floating: true,
      fontSize: '16px',
      position: 'left',
      offsetX: 20,
      offsetY: 20,
      labels: {
        useSeriesColors: true,
      },
      markers: {
        size: 0
      },
      formatter: function (seriesName, opts) {
        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
      },
      itemMargin: {
        vertical: 3
      }
    },
    responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            show: false
          }
        }
      }]
  };

  var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
  chart3.render();
</script>


<script>
  var options4 = {
    series: [<?= $services[0] ?>,<?= $services[1] ?>,<?= $services[2] ?>],
    chart: {
      height: 350,
      type: 'radialBar',
    },
    plotOptions: {
      radialBar: {
        offsetY: 0,
        startAngle: -90,
        endAngle: 180,
        hollow: {
          margin: 5,
          size: '30%',
          background: 'transparent',
          image: undefined,
        },
        dataLabels: {
          name: {
            show: false,
          },
          value: {
            show: false,
          }
        }
      }
    },
    colors: ['#6564bf', '#2c2776', '#5a3693'],
    labels: ['ด้านสถานที่', 'ด้านการให้บริการ', 'ด้านบุคลากร'],
    legend: {
      show: true,
      floating: true,
      fontSize: '16px',
      position: 'left',
      offsetX: 0,
      offsetY: 150,
      labels: {
        useSeriesColors: true,
      },
      markers: {
        size: 0
      },
      formatter: function (seriesName, opts) {
        return seriesName + ":  " + opts.w.globals.series[opts.seriesIndex]
      },
      itemMargin: {
        vertical: 3
      }
    },
    responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            show: false
          }
        }
      }]
  };

  var chart4 = new ApexCharts(document.querySelector("#chart4"), options4);
  chart4.render();
</script>


<script>
  const data5 = [
    {asize: "อำเภอขนาดเล็ก", avg_dcast: <?= $dopa_a7[0] ?>, avg_svs: <?= $dopa_a7[1] ?>, avg_damrong: <?= $dopa_a7[2] ?>, avg_whitehouse: <?= $dopa_a7[3] ?>, avg_thaiD: <?= $dopa_a7[4] ?>},
    {asize: "อำเภอขนาดกลาง", avg_dcast: <?= $dopa_a7[5] ?>, avg_svs: <?= $dopa_a7[6] ?>, avg_damrong: <?= $dopa_a7[7] ?>, avg_whitehouse: <?= $dopa_a7[8] ?>, avg_thaiD: <?= $dopa_a7[9] ?>},
    {asize: "อำเภอขนาดใหญ่", avg_dcast: <?= $dopa_a7[10] ?>, avg_svs: <?= $dopa_a7[11] ?>, avg_damrong: <?= $dopa_a7[12] ?>, avg_whitehouse: <?= $dopa_a7[13] ?>, avg_thaiD: <?= $dopa_a7[14] ?>}
  ];

  const categories5 = ['avg_dcast', 'avg_svs', 'avg_damrong', 'avg_whitehouse', 'avg_thaiD'];
  const series5 = data5.map(row => {
    return {
      name: row.asize,
      data: categories5.map(category => row[category])
    };
  });

// สร้าง Heatmap
  var options5 = {
    chart: {
      height: 350,
      type: 'heatmap',
    },
    dataLabels: {
      enabled: false
    },
    colors: ['#2c2776'],
    series: series5,
    xaxis: {
      categories: categories5,
      title: {
        text: 'ค่าเฉลี่ยของอำเภอตามขนาด'
      }
    },
    yaxis: {
      title: {
        text: 'ค่าเฉลี่ยของอำเภอตามขนาด'
      }
    },
  };

  var chart5 = new ApexCharts(document.querySelector("#chart5"), options5);
  chart5.render();
</script>
<?php
require '../../require/footer_content4.php';
?>

