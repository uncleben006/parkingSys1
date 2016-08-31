<?php

include("../../include/selectDB.php");

$no = $_POST["no"];
$id = $_POST["id"];
$address = $_POST["address"];
$description = $_POST["description"];
$picture = $_POST["picture"];
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$startTime = $_POST["startTime"];
$endTime = $_POST["endTime"];
$session = $_POST["session"];
$caseNo = $_POST["caseNo"];
$price = $_POST["price"];
$parkingDoc = $_POST["parkingDoc"];
$userDoc = $_POST["userDoc"];
$QRCode = $_POST["QRCode"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];


$setSQL = "UPDATE `parking` SET `no` ='" . $no . "', `id` = '" . $id . "', `address` ='" . $address . "', `description` ='" . $description . "', `picture` ='" . $picture . "', `startDate` ='" . $startDate . "', `endDate` ='" . $endDate . "', `startTime` ='" . $startTime . "', `endTime` ='" . $endTime . "', `session` ='" . $session . "', `caseNo` ='" . $caseNo . "', `price` ='" . $price . "', `parkingDoc` ='" . $parkingDoc . "', `userDoc` ='" . $userDoc . "', `QRCode` ='" . $QRCode . "', `longitude` ='" . $longitude . "', `latitude` ='" . $latitude . "' WHERE `no` = '" . $no . "'";

//echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>