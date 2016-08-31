<?php

include("../../include/selectDB.php");

$no = $_POST["no"];
$id = $_POST["id"];
$description = $_POST["description"];
$picture = $_POST["picture"];
$carNo = $_POST["carNo"];

$setSQL = "UPDATE `car` SET `no` ='" . $no . "', `id` = '" . $id . "', `description` ='" . $description . "', `picture` ='" . $picture . "', `carNo` ='" . $carNo . "' WHERE `no` = '" . $no . "'";

//echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>