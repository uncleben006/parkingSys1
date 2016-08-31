<?php

include("../../include/selectDB.php");

$no = $_POST["no"];
$id = $_POST["id"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$pri = $_POST["pri"];
$email = $_POST["email"];


$setSQL = "INSERT INTO `admin` (`no`, `id`, `pass`, `name`,`pri`,`email`) VALUES ('". $no . "','" . $id . "', '" . $pass . "', '" . $name . "', '" . $pri . "', '" . $email. "');";

echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>