<!DOCTYPE html>
<html>
<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>
<body>

<?php
include("../../include/selectDB.php");

$no = $_GET["no"];
//echo $no;

$setSQL = "SELECT * FROM `orderTable` WHERE `no`='" . $no . "'";
//echo $setSQL;
$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);
//print_r($row);
mysql_close($dbLink);
?>

<form action="updateEnter.php" method="post">
<table border="1">
	<tr>
		<td>
		流水號:
		</td>
		<td>
		<input type="text" name="no" value="<?php echo $row["no"] ?>" disabled/>
		<input type="hidden" name="no" value="<?php echo $row["no"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		會員代號:	
		</td>
		<td>
		<input type="text" name="id" value="<?php echo $row["id"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		下訂日期:	
		</td>
		<td>
		<input type="text" name="date" value="<?php echo $row["date"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		下訂時間:	
		</td>
		<td>
		<input type="text" name="time" value="<?php echo $row["time"] ?>"/>
		</td>
	</tr>
</table>
<button type="submit">確定更改</button>
</form>
</body>
