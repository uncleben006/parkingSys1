<?php

include("../../include/selectDB.php");

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


$setSQL = "UPDATE `user` SET `no` ='" . $no . "', `id` ='" . $id . "', `pass` = '" . $pass . "', `name` ='" . $name . "', `phone` ='" . $phone . "', `email` ='" . $email . "', `birth` ='" . $birth . "', `gender` ='" . $gender . "', `city` ='" . $city . "', `creditCardNo` ='" . $creditCardNo . "' WHERE `no` = '" . $no . "'";

echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);

$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>