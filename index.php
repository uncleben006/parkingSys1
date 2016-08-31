<?php
	//設session為空值免得一開始系統說它undefined
	if(isset($_SESSION["id"])!="TRUE"){
		session_start();
		$_SESSION["no"]="";
		$_SESSION["id"]="";
		$_SESSION["pass"]="";
	}
	$no = $_SESSION["no"];
	$id = $_SESSION["id"];
	$pass = $_SESSION["pass"];

	if($id != "")//若id不等於空直(有session id)，則轉跳到有畫面的home.php
	{
		include("./home.php");		
	}
	else
	{		
		include("./headerBeforeLogin.php");
		include("./login1.php");
		
	}
?>