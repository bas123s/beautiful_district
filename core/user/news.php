<?php
require '../../require/partials/main.php';


require '../../require/head_php3.php';

$sql = "SELECT * FROM `beautiful_district`.`news` WHERE id = " . $_REQUEST['id'] . " ;";
$data = $mc->select_1($sql);
?>

<head>




    <!-- Css -->



    <?php
    require '../../require/partials/head-css.php'
        ?>

    <link href="../../require/partials/assets/fonts/googlefont.css" rel="stylesheet">
</head>
<?php
require '../../require/partials/body.php';
require '../../require/partials/navbar/nav-onepage.php'
    ?>

<section
    class="relative table w-full py-36 lg:py-36 bg-[url('../../assets/images/hospital/bg.jpg')] bg-no-repeat bg-center bg-cover">

</section><!--end section-->
<!-- Start -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-12 md:col-span-12">
                <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                    <?php
                    $sql = "SELECT * FROM `beautiful_district`.`news` WHERE id = " . $_REQUEST['id'] . " ;";
                    $data = $mc->select_1($sql);


                    ?>
                    
                    <div id="grid" class="md:flex justify-center mx-auto">

                    <?php if ($data['pic_1'] != ""){
                        ?>
                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                            <div
                                class="group relative block overflow-hidden rounded-md shadow dark:shadow-gray-800 transition-all duration-500">
                                <a href="../../uploads/upload_news/<?= $data['pic_1'] ?>"
                                    class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="../../uploads/upload_news/<?= $data['pic_1'] ?>"
                                        class="shadow dark:shadow-gray-800" >
                                </a>
                            </div>
                        </div>
                        <?php

                    }
                    ?>
                              <?php if ($data['pic_2'] != ""){
                        ?>

                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                            <div
                                class="group relative block overflow-hidden rounded-md shadow dark:shadow-gray-800 transition-all duration-500">
                                <a href="../../uploads/upload_news/<?= $data['pic_2'] ?>"
                                    class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="../../uploads/upload_news/<?= $data['pic_2'] ?>"
                                        class="shadow dark:shadow-gray-800" >
                                </a>
                            </div>
                        </div>
                        <?php

}
?>

                        <?php if ($data['pic_3'] != ""){
                        ?>
                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                            <div
                                class="group relative block overflow-hidden rounded-md shadow dark:shadow-gray-800 transition-all duration-500">
                                <a href="../../uploads/upload_news/<?= $data['pic_3'] ?>"
                                    class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="../../uploads/upload_news/<?= $data['pic_3'] ?>"
                                        class="shadow dark:shadow-gray-800" >
                                </a>
                            </div>
                        </div>
                        <?php

}
?>
                        <?php if ($data['pic_4'] != ""){
                        ?>
                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["branding"]'>
                            <div
                                class="group relative block overflow-hidden rounded-md shadow dark:shadow-gray-800 transition-all duration-500">
                                <a href="../../uploads/upload_news/<?= $data['pic_4'] ?>"
                                    class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="../../uploads/upload_news/<?= $data['pic_4'] ?>"
                                        class="shadow dark:shadow-gray-800" >
                                </a>
                            </div>
                        </div>
                        <?php

}
?>
                        <?php if ($data['pic_5'] != ""){
                        ?>
                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["designing"]'>
                            <div
                                class="group relative block overflow-hidden rounded-md shadow dark:shadow-gray-800 transition-all duration-500">
                                <a href="../../uploads/upload_news/<?= $data['pic_5'] ?>"
                                    class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="../../uploads/upload_news/<?= $data['pic_5'] ?>"
                                        class="shadow dark:shadow-gray-800" >
                                </a>
                            </div>
                        </div>
                        <?php

}
?>
                        <?php if ($data['pic_6'] != ""){
                        ?>
                        <div class="lg:w-1/4 md:w-1/3 p-1 picture-item" data-groups='["photography"]'>
                            <div
                                class="group relative block overflow-hidden rounded-md shadow dark:shadow-gray-800 transition-all duration-500">
                                <a href="../../uploads/upload_news/<?= $data['pic_6'] ?>"
                                    class="lightbox transition-all duration-500 group-hover:scale-105" title="">
                                    <img src="../../uploads/upload_news/<?= $data['pic_6'] ?>"
                                        class="shadow dark:shadow-gray-800" >
                                </a>
                            </div>
                        </div>
                        <?php

}
?>



                    </div>
                    <?php
                    if ($data) {
                        // ตรวจสอบว่าคีย์ "title" มีอยู่ใน $data
                        $title = isset($data["title"]) ? $data["title"] : '';
                        // ตรวจสอบว่าคีย์ "detail" มีอยู่ใน $data
                        $detail = isset($data["detail"]) ? $data["detail"] : '';
                        // ตรวจสอบว่าคีย์ "link" มีอยู่ใน $data
                        $link = isset($data["link"]) ? $data["link"] : '';

                        // ใช้ตัวแปร $title, $detail, $link ในการแสดงผลหรือในการประมวลผลอื่น ๆ
                        echo '<div class="mt-6">';
                        echo '<p class="  border-x-4 text-4xl border-indigo-600 rounded-ss-xl rounded-ee-xl mt-3 p-3">' . $title . '</p>';
                        echo '<p class=" text-base">' . $detail . '</p>';
                        echo '<a href="' . $link . '" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">' . $link . '</a>';
                        echo '<div class="flex justify-start">';
                        echo '<a href="index.php" class="btn btn-success p-2 mt-6"> <i class="uil uil-history text-2xl"></i> กลับหน้าแรก</a>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "ไม่พบข้อมูล";
                    }
                    ?>
                </div>


            </div>


        </div><!--end grid-->
    </div><!--end container-->


</section><!--end section-->
<!-- End -->

<?php
require '../../require/partials/footer/footer.php';
require '../../require/partials/cookies.php';
require '../../require/partials/switcher.php';
?>


<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
    class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
        class="uil uil-arrow-up"></i></a>
<!-- Back to top -->



<!-- JAVASCRIPTS -->

<?php
require '../../require/partials/script-file.php';
?>
<!-- JAVASCRIPTS -->
</body>

</html>