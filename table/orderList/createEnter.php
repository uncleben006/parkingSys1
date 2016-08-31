<?php

include("../../include/selectDB.php");

$no = $_POST["no"];
$orderTable_no = $_POST["orderTable_no"];
$id = $_POST["id"];
$date = $_POST["date"];
$time = $_POST["time"];
$car_no = $_POST["car_no"];
$parking_no = $_POST["parking_no"];
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];
$startTime = $_POST["startTime"];
$endTime = $_POST["endTime"];
$session = $_POST["session"];
$caseNo = $_POST["caseNo"];
$promotionCode = $_POST["promotionCode"];
$tradeStatus = $_POST["tradeStatus"];
$certificationCode = $_POST["certificationCode"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];

$setSQL = "INSERT INTO `orderList` (`no`, `orderTable_no`, `id`, `date`, `time`,`car_no`,`parking_no`,`startDate`,`endDate`,`startTime`,`endTime`,`session`,`caseNo`,`promotionCode`,`tradeStatus`,`certificationCode`,`longitude`,`latitude`) VALUES ('". $no ."', '" . $orderTable_no . "','" . $id . "', '" . $date . "', '" . $time . "', '" . $car_no . "', '" . $parking_no . "', '" . $startDate . "', '" . $endDate . "', '" . $startTime . "', '" . $endTime . "', '" . $session . "', '" . $caseNo . "', '" . $promotionCode . "', '" . $tradeStatus . "', '" . $certificationCode . "', '" . $longitude . "', '" . $latitude . "');";

echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>