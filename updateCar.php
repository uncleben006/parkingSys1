<?php
include("./header.php");
?>

<!DOCTYPE html>
<html>
<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>
<body>

<?php
include("./include/selectDB.php");

$no = $_GET["no"];
//echo $no;

$setSQL = "SELECT * FROM `car` WHERE `no`='" . $no . "'";
//echo $setSQL;
$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);
//print_r($row);
mysql_close($dbLink);
?>

<form action="updateCarEnter.php" method="post">
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
		車輛描述:	
		</td>
		<td>
		<input type="text" name="description" value="<?php echo $row["description"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		車牌圖片:	
		</td>
		<td>
		<!--input type="text" name="picture" value="<?php echo $row["picture"] ?>"/-->
		<?php
		echo "<img src = \"./uploads/" . $row["picture"] . "\"/>";
		?>
		<input type="file" name="picture" />
		</td>
	</tr>
	
		
	<tr>
		<td>
		車牌號碼:	
		</td>
		<td>
		<input type="text" name="carNo" value="<?php echo $row["carNo"] ?>"/>
		</td>
	</tr>

						
</table>
<button type="submit">確定更改</button>
</form>
</body>
