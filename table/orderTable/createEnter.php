<?php

include("../../include/selectDB.php");

$no = $_POST["no"];
$id = $_POST["id"];
$date = $_POST["date"];
$time = $_POST["time"];

//echo $no;
//echo $id;
//echo $date;
//echo $time;

$setSQL = "INSERT INTO `orderTable` (`no`, `id`, `date`, `time`) VALUES ('". $no ."', '" . $id . "','" . $date . "', '" . $time . "');";

//echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>