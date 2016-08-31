<?php
    session_start();
	$no = $_SESSION["no"];
	$id = $_SESSION["id"];
	$pass = $_SESSION["pass"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="big5">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>parkingSys</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="./lib/style/assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <!--link href="./lib/style/assets/css/font-awesome.min.css" rel="stylesheet" /-->
    <!--SLIDER CSS CLASES -->
    <!--link href="./lib/style/assets/Slides-SlidesJS-3/examples/playing/css/slider.css" rel="stylesheet" /-->
    <!--CUSTOM STYLE -->
    <link href="./lib/style/assets/css/style.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!--END HEAD SECTION -->
<body>
    <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">YOUR LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">首頁</a></li>
                    <?php 
                    	if($id == "")//never login
                    	{
							echo '<li><a href="index.php">登入</a></li>';
						}
						else
						{
							echo '<li><a href="order.php">租車位</a></li>';
                    		echo '<li><a href="rent.php">出租車位</a></li>';
							echo '<li><a href="addCar.php">登錄車輛</a></li>';
							echo '<li><a href="logout.php">登出</a></li>';
						}
                    ?>

                    <li><a href="signUp.php">註冊</a></li>
                    <?php 
                    	if($id == "")//never login
                    	{
							echo '<li><a href="adminLogin.php">管理者登入</a></li>';
						}
						else if($pri != "")
						{
							echo '<li><a href="adminLogin.php">管理者登出</a></li>';
						}
                    ?>                     
                    
                                       
                </ul>
            </div>

        </div>
    </div>
    <!--END NAV SECTION -->
    <!-- HOME SECTION -->

    <!-- SLIDER SECTION -->
    <div style="background-color:#cceeff">
        <div class="container">
            <div class="row main-low-margin">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h1>車位出租網</h1>
                    <h5>這是一個出租車位的網站
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- END SLIDER SECTION -->
