<?php
include("./header.php");
?>

<?php

include("./include/selectDB.php");

foreach( $_POST["no"] as $item )
{
	$setSQL = "DELETE FROM `car` WHERE `no`='" . $item . "'";
  	mysql_query($setSQL);
}

mysql_close($dbLink);

$url = "addCar.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>