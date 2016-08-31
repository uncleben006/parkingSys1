<?php
include($INCLUDE_FOLDER. "global.php");
//include("./global.php");

session_start();
$adminid = $_SESSION["id"];
$adminpri = $_SESSION["pri"];

if($adminid == "" )
{
	$url = "./index.php";
	echo "<script type ='text/javascript'>";
	echo "window.location.href='". $url. "'";
	echo "</script>";	
}
else
{
	include("selectDB.php");
}


?>