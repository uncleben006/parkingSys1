<?php
include("./header.php");
?>


<?php

include("./include/selectDB.php");

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
$price = ($_POST["price"]+1)*5;
$parkingDoc = $_POST["parkingDoc"];
$userDoc = $_POST["userDoc"];
$QRCode = $_POST["QRCode"];
$longitude = $_POST["longitude"]*1000000;
$latitude = $_POST["latitude"]*1000000;

$setSQL = "INSERT INTO `parking` (`no`, `id`, `address`, `description`,`picture`,`startDate`,`endDate`,`startTime`,`endTime`,`session`,`caseNo`,`price`,`parkingDoc`,`userDoc`,`QRCode`,`longitude`,`latitude`) VALUES ('". $no ."', '" . $id . "', '" . $address . "', '" . $description . "', '" . $picture . "', '" . $startDate . "', '" . $endDate . "', '" . $startTime . "', '" . $endTime . "', '" . $session . "', '" . $caseNo . "', '" . $price . "', '" . $parkingDoc . "', '" . $userDoc . "', '" . $QRCode . "', '" . $longitude . "', '" . $latitude . "');";

echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "./rent.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>