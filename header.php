<?php 
    $no = $_SESSION["no"];
    $id = $_SESSION["id"];
    $pass = $_SESSION["pass"];
    $pri = $_SESSION["pri"];
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
    <!--CUSTOM STYLE -->
    <link href="./lib/style/assets/css/style.css" rel="stylesheet" />
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


    <div class="container">
        <div class="row main-low-margin text-center">
            <div class="col-md-4 col-sm-4">
                <div class="circle-body">
                <a href="userData.php">
                <img src="./lib/style/pic/admin.png" alt="會員資料" style=" width:80px; height: 90px; position: relative; margin-top: 20px;"></div>
                <!--input type="button" name="" value="會員資料"-->
                </a>
                <h3>
                    查看會員資料。
                </h3>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="circle-body">
                <a href="order.php">
                <img src="./lib/style/pic/parking.png" alt="租車位" usemap="#parkingMap" style=" width:80px; height: 90px; position: relative; margin-top: 20px;">
                </a>            
                </div>
                <!--a href="orderv.php">            
                <input type="button" name="" value="租車位">
                </a-->
                <h3>
                    租車位功能。
                </h3>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="circle-body">
                <a href="rent.php">
                <img src="./lib/style/pic/rent.png" alt="出租車位" style=" width:80px; height: 90px; position: relative;
    margin-top: 20px;">
                </a>
                </div>
                <!--input type="button" name="" value="出租車位"-->
                <h3>
                    出租車位功能。
                </h3>
            </div>

        </div>
</body>
</html>