<?php
require '../../require/partials/main.php';


require '../../require/head_php3.php';


$sql = "SELECT * FROM `beautiful_district`.`news` ORDER BY id DESC ;";
$data = $mc->select_all($sql);
//echo "sql==" . $sql;
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

<section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <?php
                                foreach (@$data as $key => $value) {
                                    ?>
                    <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                        <img src="../../uploads/upload_news/<?= $value['pic_1'];?>" alt="">

                        <div class="content p-6">
                            <a href="news.php?id=<?=$value['id'];?>" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out"><?= @$value['title']; ?> </a>
                            <p class="text-slate-400 mt-3">ลงวันที่  <?= @$value['created_date']; ?></p>
                            
                            <div class="mt-4">
                                <a href="news.php?id=<?=$value['id'];?>" class="relative inline-block tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">อ่านต่อ <i class="uil uil-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--blog end-->
               
                            <?php } ?>


                </div><!--end grid-->

            </div><!--end container-->

         
        </section><!--end section-->
<?php
require '../../require/partials/footer/footer.php';
require '../../require/partials/cookies.php';
require '../../require/partials/switcher.php';
?>



<a href="#" onclick="topFunction()" id="back-to-top"
    class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
        class="uil uil-arrow-up"></i></a>





<script>
    $(document).ready(function () {
        $('#example').DataTable({
            dom: '<"top"lf">rt<"bottom"ip><"clear">',
            buttons: [
                //       'copy', 'excel'
            ],
            "paging": true,
            "searching": true, // Enable searching
            "ordering": true,
            "info": true
        });
    });
</script>

<?php
require '../../require/footer_content4.php';
?>
<!-- JAVASCRIPTS -->
</body>

</html>