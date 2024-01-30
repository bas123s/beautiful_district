<?php
$title = "การจัดอันดับอำเภอสวยงาม 5 อันดับ ";
require '../../require/head_php3.php';
require '../../require/head_html5.php'; //แก้ไข menu ในไฟล์  menuconfig.php
//require '../../require/head_php.php';
//require '../../require/head2.php';
//echo "acode = ".$acode;

$sql = "SELECT * FROM `view_assessment_dopa_all` ;";
$data = $mc->select_1($sql);
//$mc->check_array($data, $sql);
$s1 = $data["dcast"] / 878;
$s2 = $data["svs"] / 878;
$s3 = $data["damrong"] / 878;
$s4 = $data["whitehouse"] / 878;
$s5 = $data["thaiD"] / 878;

$chart = number_format((float) ($s1 * 10), 2, '.', '') . "," . number_format((float) ($s2 * 10), 2, '.', '') . "," . number_format((float) ($s3 * 10), 2, '.', '') . "," . number_format((float) ($s4 * 10), 2, '.', '') . "," . number_format((float) ($s5 * 10), 2, '.', '');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js"></script>

<style>
    * {
        font-size: 62, 5%;
        box-sizing: border-box;
        margin: 0;
    }



    main {
        width: 40rem;
        height: 43rem;
        background-color: #ffffff;
        -webkit-box-shadow: 0px 5px 15px 8px #e4e7fb;
        box-shadow: 0px 5px 15px 8px #e4e7fb;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 0.5rem;
    }

    #header {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2.5rem 2rem;
    }

    .share {
        width: 4.5rem;
        height: 3rem;
        background-color: #f55e77;
        border: 0;
        border-bottom: 0.2rem solid #c0506a;
        border-radius: 2rem;
        cursor: pointer;
    }

    .share:active {
        border-bottom: 0;
    }

    .share i {
        color: #fff;
        font-size: 2rem;
    }

    h1 {
        font-size: 1.7rem;
        color: #141a39;
        text-transform: uppercase;
        cursor: default;
    }

    #leaderboard {
        width: 100%;
        position: relative;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        color: #141a39;
        cursor: default;
    }

    tr {
        transition: all 0.2s ease-in-out;
        border-radius: 0.2rem;
    }

    tr:not(:first-child):hover {
        background-color: #fff;
        transform: scale(1.1);
        -webkit-box-shadow: 0px 5px 15px 8px #e4e7fb;
        box-shadow: 0px 5px 15px 8px #e4e7fb;
    }

    tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    tr:nth-child(1) {
        color: #fff;
    }

    td {
        height: 5rem;

        font-size: 1.4rem;
        padding: 1rem 2rem;
        position: relative;
    }

    .number {
        width: 1rem;
        font-size: 2.2rem;
        font-weight: bold;
        text-align: left;
    }

    .name {
        text-align: left;
        font-size: 1.2rem;
    }

    .points {
        font-weight: bold;
        font-size: 1.3rem;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .points:first-child {
        width: 10rem;
    }

    .gold-medal {
        height: 3rem;
        margin-left: 1.5rem;
    }

    .ribbon {
        width: 42rem;
        height: 5.5rem;
        top: -0.5rem;
        background-color: #5c5be5;
        position: absolute;
        left: -1rem;
        -webkit-box-shadow: 0px 15px 11px -6px #7a7a7d;
        box-shadow: 0px 15px 11px -6px #7a7a7d;
    }

    .ribbon::before {
        content: "";
        height: 1.5rem;
        width: 1.5rem;
        bottom: -0.8rem;
        left: 0.35rem;
        transform: rotate(45deg);
        background-color: #5c5be5;
        position: absolute;
        z-index: -1;
    }

    .ribbon::after {
        content: "";
        height: 1.5rem;
        width: 1.5rem;
        bottom: -0.8rem;
        right: 0.35rem;
        transform: rotate(45deg);
        background-color: #5c5be5;
        position: absolute;
        z-index: -1;
    }

    #buttons {
        width: 100%;
        margin-top: 3rem;
        display: flex;
        justify-content: center;
        gap: 2rem;
    }



</style>

<section class="relative  md:py-24 py-16">
    <div class="container mx-auto px-4  relative">
        <div class="grid grid-cols-2 lg:grid-cols-2 md:grid-cols-2 gap-[30px]">
            <main>
                <div id="header">
                    <h1>การจัดอันดับอำเภอสวยงาม 5 อันดับ</h1>

                </div>
                <div id="leaderboard">
                    <div class="ribbon"></div>
                    <table>
                        <tr>
                            <td class="number">1</td>
                            <td class="name">xxx</td>
                            <td class="points">
                                258.244 <img class="gold-medal"
                                    src="https://github.com/malunaridev/Challenges-iCodeThis/blob/master/4-leaderboard/assets/gold-medal.png?raw=true"
                                    alt="gold medal" />
                            </td>
                        </tr>
                        <tr>
                            <td class="number">2</td>
                            <td class="name">xxx</td>
                            <td class="points">258.242</td>
                        </tr>
                        <tr>
                            <td class="number">3</td>
                            <td class="name">xxx</td>
                            <td class="points">258.223</td>
                        </tr>
                        <tr>
                            <td class="number">4</td>
                            <td class="name">xxx</td>
                            <td class="points">258.212</td>
                        </tr>
                        <tr>
                            <td class="number">5</td>
                            <td class="name">xxx</td>
                            <td class="points">258.208</td>
                        </tr>
                    </table>
                    <div id="buttons">
                        <a href="../../core/user/index.php"
                            class="p-4 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-red-600 hover:bg-red-700 border border-red-600 hover:border-red-700 text-white" >ย้อนกลับ</a>

                    </div>
                </div>
            </main>

            <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=https://reportmoi.dopa.go.th/beautiful_district/dashboard/rpt/rpt_dopa.php" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 128 128"><rect width="118.35" height="118.35" x="4.83" y="4.83" fill="#3d5a98" rx="6.53" ry="6.53"/><path fill="#fff" d="M86.48 123.17V77.34h15.38l2.3-17.86H86.48v-11.4c0-5.17 1.44-8.7 8.85-8.7h9.46v-16A126.56 126.56 0 0 0 91 22.7c-13.62 0-23 8.3-23 23.61v13.17H52.62v17.86H68v45.83z"/></svg> แชร์ลิงก์ไปยัง Facebook</a> -->

        </div>
    </div>
</section>



<?php
require '../../require/footer_content4.php';
?>