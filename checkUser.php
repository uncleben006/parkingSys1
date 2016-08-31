<?php 

include('link.php');

$userNo = $_POST["user"];
$pass = $_POST["pass"];

$setSQL = "SELECT * FROM `userdata` WHERE `userNo` = '" . $userNo . "' and `userPassword` = '" . $pass . "'";
echo $setSQL;
$result = mysql_query($setSQL);
/*if(!$result)
{
	$_SESSION["flag"]=2;
	$url = "login.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}*/
$row = mysql_fetch_assoc($result);
$pri = $row["pri"];
echo $pri;

if( $pri=="1"||$pri=="2")
{
	session_set_cookie_params(600);
	session_start();
	$_SESSION["userNo"] = $userNo;
	$_SESSION["userPassword"] = $pass;
	$_SESSION["pri"] = $pri;
	$_SESSION["userBirth"] = $row["userBirth"];
	$_SESSION["userName"] = $row["userName"];
	$_SESSION["userSex"] = $row["userSex"];
	$_SESSION["userPhone"] = $row["userPhone"];
	$_SESSION["userEmail"] = $row["userEmail"];
	$_SESSION["carNo"] = $row["carNo"];
	$_SESSION["userCity"] = $row["userCity"];
	$_SESSION["creditCardNo"] = $row["creditCardNo"];
	session_write_close();
	$url = "home.php?user=" . $_SESSION["userName"];
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
}
else
{
	$url = "login.php?wrong=1";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	$wrong = 1;
}
 ?>