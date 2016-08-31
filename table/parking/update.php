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

$setSQL = "SELECT * FROM `parking` WHERE `no`='" . $no . "'";
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
		<td>
		會員代號:	
		</td>
		<td>
		<input type="text" name="id" value="<?php echo $row["id"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		車位地址:	
		</td>
		<td>
		<input type="text" name="address" value="<?php echo $row["address"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		車位描述:	
		</td>
		<td>
		<input type="text" name="description" value="<?php echo $row["description"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		車位圖片:	
		</td>
		<td>
		<input type="text" name="picture" value="<?php echo $row["picture"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		開放租用開始日期	
		</td>
		<td>
		<input type="text" name="startDate" value="<?php echo $row["startDate"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		開放租用結束日期	
		</td>
		<td>
		<input type="text" name="endDate" value="<?php echo $row["endDate"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		開放租用開始時間	
		</td>
		<td>
		<input type="text" name="startTime" value="<?php echo $row["startTime"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		開放租用結束時間	
		</td>
		<td>
		<input type="text" name="endTime" value="<?php echo $row["endTime"] ?>"/>
		</td>
	</tr>			
	
	<tr>
		<td>
		允許租用時段	
		</td>
		<td>
		<input type="text" name="session" value="<?php echo $row["session"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		允許租用方案:	
		</td>
		<td>
		<input type="text" name="caseNo" value="<?php echo $row["caseNo"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用每小時費用:	
		</td>
		<td>
		<input type="text" name="price" value="<?php echo $row["price"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		出租者車位證明文件:	
		</td>
		<td>
		<input type="text" name="parkingDoc" value="<?php echo $row["parkingDoc"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		出租者身分證明:	
		</td>
		<td>
		<input type="text" name="userDoc" value="<?php echo $row["userDoc"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		車位認證QR碼:	
		</td>
		<td>
		<input type="text" name="QRCode" value="<?php echo $row["QRCode"] ?>"/>
		</td>
	</tr>	
	
	<tr>
		<td>
		經度:	
		</td>
		<td>
		<input type="text" name="longitude" value="<?php echo $row["longitude"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		緯度:	
		</td>
		<td>
		<input type="text" name="latitude" value="<?php echo $row["latitude"] ?>"/>
		</td>
	</tr>					
							
</table>
<button type="submit">確定更改</button>
</form>
</body>
