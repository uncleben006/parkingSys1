<?php

include("./include/selectDB.php");

$id = $_POST["id"];
$pass = $_POST["pass"];

//echo id . "<br>";
//echo $pass . "<br>";

$setSQL = "SELECT * FROM `user` WHERE `id` = '" . $id . "' and `pass` = '" . $pass . "'";

$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);
$no = $row["no"];




if( $no != "" )
{
	session_set_cookie_params(600);
	session_start();
	$_SESSION["no"] = $row["no"];
	$_SESSION["id"] = $id;
	$_SESSION["pass"] = $pass;
	$_SESSION["pri"] = $pri;
	session_write_close(); 
	$url = "home.php?id=". $_SESSION["id"]; 
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
	//echo "login in ok!!";
}
else
{
	$url = "index.php?wrong=1";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}

?>