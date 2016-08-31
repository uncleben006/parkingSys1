<?php
include("./headerBeforeLogin.php");
//below include will cause many path problem when other included file to include it
//include("./table/user/create.php");

include("./include/selectDB.php");

$no = $_POST["no"];
$id = $_POST["id"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$birth = $_POST["birth"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$creditCardNo = $_POST["creditCardNo"];


$setSQL = "INSERT INTO `user` (`no`, `id`, `pass`, `name`, `phone`,`email`,`birth`,`gender`,`city`,`creditCardNo`) VALUES ('". $no ."', '" . $id . "','" . $pass . "', '" . $name . "', '" . $phone . "', '" .$email . "', '" .$birth . "', '" .$gender . "', '" .$city . "', '" .$creditCardNo . "');";

//echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);



?>

<html>
	<head>
		<!--meta charset="utf-8"-->
		<meta charset="utf-8">
		<title></title>

	</head>
<script type='text/javascript'>
function doClick()
{
	window.location.href="index.php";
}
</script>s

<div class="container">
<div class="row main-low-margin text-center">
	<form action = "" method = "post">
	<center>
	<table style="width:30%">
	<tr>
	<td>
	<h1>註冊成功</h1>
	</td>
	</tr>
	<tr>
	<td>	
	<input type="button" value = "確認" onclick="doClick()" />
	</td>
	</tr>
	</table>
	</form>
</div>
</div>
</html>	