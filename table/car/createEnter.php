<?php

include("../../include/selectDB.php");

$no = $_POST["no"];
$id = $_POST["id"];
$description = $_POST["description"];
//$picture = $_POST["picture"];
//$picture = $no . "." . substr($_FILES["picture"]["type"],6);
$picture = $no . ".jpg";
$carNo = $_POST["carNo"];

//upload image
if($_FILES["picture"]["error"] > 0)
{
	echo "Error: " . $_FILES["picture"]["error"];
	$picture = "";
}
else
{
	echo "檔案名稱: " . $_FILES["picture"]["name"]."<br/>";
	echo "檔案類型: " . $_FILES["picture"]["type"]."<br/>";
	echo "檔案大小: " . ($_FILES["picture"]["size"] / 1024)." Kb<br />";
	echo "暫存名稱: " . $_FILES["picture"]["tmp_name"];
	/*
	if(file_exists("../../uploads/" . $_FILES["picture"]["name"]))
	{
		echo "檔案已經存在，請勿重覆上傳相同檔案";
	}
	else
	{
		move_uploaded_file($_FILES["picture"]["tmp_name"],"../../uploads/".$_FILES["picture"]["name"]);
	}
	*/
	move_uploaded_file($_FILES["picture"]["tmp_name"],"../../uploads/".$picture);
}
//upload image end


$setSQL = "INSERT INTO `car` (`no`, `id`, `description`, `picture`,`carNo`) VALUES ('". $no . "','" . $id . "', '" . $description . "', '" . $picture . "', '" . $carNo . "');";

echo $setSQL;

mysql_query($setSQL);

mysql_close($dbLink);


$url = "showAllData.php";

echo "<script type='text/javascript'>";
echo "window.location.href='" . $url . "'";
echo "</script>";

?>