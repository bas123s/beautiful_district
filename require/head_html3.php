<!DOCTYPE html>
<html>
  <title>DOPA E-Report System</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="../../vendor/components/jquery/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../../vendor/datatables/datatables/media/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="../../vendor/datatables/datatables/media/js/jquery.js"></script>
  <script type="text/javascript" src="../../vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="../../vendor/w3css/w3.css">
  <link rel="stylesheet" href="../../vendor/googlefont/css.css?family=Sarabun">
  <link rel="stylesheet" href="../../vendor/fortawesome/font-awesome/css/all.min.css">
  <meta charset="utf-8">
  <title>DOPA Report System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <!--  <link rel="stylesheet" href="../../vendor/css/Chart.min.css" />
    <script type="text/javascript" src="../../vendor/js/Chart.min.js"></script>-->

 <!--  <style>
    /*html,body,h1,h2,h3,h4,h5,h6,hr,div,span,a,button,input {font-family:  'Prompt', sans-serif;}*/
    html,body,h1,h2,h3,h4,h5,h6,hr,div,span,a,button,input {font-family:  'Kanit', sans-serif;}
  </style> -->
    <style>

        *{
            font-family: 'Kanit', sans-serif;
        }
        body {

            background-position: center;
            background-size: cover;
            position: relative;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .box{
            border-radius: 15px;
            box-shadow: 5px 5px 5px #888888;
            width: 100%;
            margin-top: 8%;
        }
        .input-box{
            border-radius: 15px;
            margin: 3%;
            border:1px solid #cccccc;
            border-radius:36px;
            width: 100px;
            text-align: center;
        }
        div.dt-buttons {
            float: right;
            margin-left:10px;
        }
    </style>

  <body class="w3-theme-l4">
    
    <!-- Top container -->

    <div class="w3-top">

      <?php
      /**
       *
       *
       * แก้ไข menu ในไฟล์  menuconfig.php
       *
       *
       *
       * */
      require 'menuconfig.php';
      ?>

      <!-- Top container -->
<!--  <style type="text/css">
		
    /*header area*/
    .top-header{
        /*background: #fff !important;*/
        position: static;
        width: 100%;
        z-index: 99999;
        /* background-image: url('assets/img/topHeaderrgb(143,60,177),rgb(170,97,201).jpg'); */
        height: 25%;
        background-image: linear-gradient(#006400, #FFFFFF)
        
    }
    .footer {
        height: 10%;
        display: block;
        background-color: lightblue;
        text-align: center;
        
        /* background-image: url('assets/img/footerrgb(143,60,177),rgb(170,97,201).jpg'); */
        background-image: linear-gradient(rgb(170,97,201), rgb(143,60,177));
        width:100%; 
        left:0; 
        bottom:0;
    }
    .list-group-item.active, 
    .list-group-item.active:hover, 
    .list-group-item.active:focus {
        z-index: 2;
        color: #fff;
        background-color: #c665d2;
        border-color: #337ab7;
    }
    .menulist .active {
        background: #82288c;
        border: #000000;

    }
    .menulist li:hover{
            background: #c59bca;

    }
    .panel-default > .panel-heading {
        color: #fff;
        background-color: #82288c;
        font-size: 25px;
    /* border: 1px solid ;
        */
    }
    .panel-default > .panel-heading2 {
        color: #FFFFFF;
        background-color: #CC0000;
        font-size: 28px;
    /* border: 1px solid ;
        */
    }


    .imgHead{
        height: 30%;
        width: 30%;
    }

</style>-->
	<body>
		
		<!-- header -->
		<div class="top-header" >
			<div class="container">
				<div class="row">
				
	<div class="form-group" >
		<nav class="navbar fixed-top navbar-expand-xl navbar navbar-light" style="  background-color: #000000;"> 
      <div class="container">
      <a class="navbar-brand" href="http://mis3.dopa.go.th/0308/g_report/core/user/index.php"><img src="../../require/images/logodopa.png" style="width:90%;height:89%px"></a>



     
		 
		  
		  
      <div class="collapse navbar-collapse" id="navbarSupportedContent1" style="padding-left: 0px">
        <ul class="navbar-nav ml-lg-auto ml-xl-auto" style="font-size: 15px; font-weight: 400">
          <!--  <li class="nav-item " style="padding-left: 0.5rem; padding-right: 0.5rem"> <a class="nav-link " href="http://mis3.dopa.go.th/0308/g_report/core/user/index.php" style="color: #FFFFFF">หน้าแรก <span class="sr-only">(current)</span></a></li>-->
  


<!--  <div class="dropdowntest4">
   <button class="dropdowntest4"onclick="document.getElementById('id01').style.display = 'block'" class="w3-button w3-block w3-theme w3-xlarge w3-padding-16 ">
                  <i class="fa fa-key icon"style="font-size:15px;"></i> <font size ="5">เข้าสู่ระบบ</button>
 
</div>-->

          <!--  <li class="nav-item "  style="padding-left: 0.5rem; padding-right: 0.5rem"> <a class="nav-link" href="#" style="color: #FFFFFF">ข้อมูลองค์กร</a></li>-->
          <!--  <li class="nav-item"  style="padding-left: 0.5rem; padding-right: 0.5rem"> <a class="nav-link" href="#" style="color: #FFFFFF">แผนผังระบบงาน</a></li>-->
			<!--  <li class="nav-item"  style="padding-left: 0.5rem; padding-right: 0.5rem"> <a class="nav-link" href="#" style="color: #FFFFFF">ติดต่อสอบถาม</a></li>-->
		  <!--  <li class="nav-item"  style="padding-left: 0.5rem; padding-right: 0.5rem"> </li>
			 <li class="nav-item"  style="padding-left: 0.5rem; padding-right: 0.5rem"> <a class="nav-link" href="http://mis3.dopa.go.th/0308/g_report/core/user/index.php" style="color: #FFFFFF">Login เข้าสู่ระบบ</a></li>-->
			
         <!-- <li class="nav-item"> <a class="nav-link" href="#">
			 			 
<style>
.vl {
  border-left: 1px solid rgba(163,163,163,1.00);
  height: 25px;
  
}
</style>

<div class="vl"> </div></a></li>
          -->
			<li class="nav-item dropdown">
<div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a> </div>
        </li>
        <li class="nav-item"> </li>
        </ul>
</div></div>
  </nav>
	</div>

      

        <!--<img src="../../require/images/logo.png" style="width:100px;" class="w3-display-topmiddle w3-margin-right w3-margin-top">-->
       
       

         
                  </div>
                </div>
               
          <!--<a href="../main/" class="w3-bar-item w3-button w3-large ">แผนที่</a>-->
          
        </div>
       
          <!--<a href="../user/password.php" class="w3-bar-item w3-button w3-large ">ออกจากระบบ</a>-->
        </div>
      </div>

     

