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

$setSQL = "SELECT * FROM `orderList` WHERE `no`='" . $no . "'";
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
		訂單代號:	
		</td>
		<td>
		<input type="text" name="orderTable_no" value="<?php echo $row["orderTable_no"] ?>"/>
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
	
	<tr>
		<td>
		車輛流水號:	
		</td>
		<td>
		<input type="text" name="car_no" value="<?php echo $row["car_no"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用車位編號:	
		</td>
		<td>
		<input type="text" name="parking_no" value="<?php echo $row["parking_no"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用開始日期	
		</td>
		<td>
		<input type="text" name="startDate" value="<?php echo $row["startDate"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用結束日期	
		</td>
		<td>
		<input type="text" name="endDate" value="<?php echo $row["endDate"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用開始時間	
		</td>
		<td>
		<input type="text" name="startTime" value="<?php echo $row["startTime"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用結束時間	
		</td>
		<td>
		<input type="text" name="endTime" value="<?php echo $row["endTime"] ?>"/>
		</td>
	</tr>			
	
	<tr>
		<td>
		租用時段	
		</td>
		<td>
		<input type="text" name="session" value="<?php echo $row["session"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		租用方案:	
		</td>
		<td>
		<input type="text" name="caseNo" value="<?php echo $row["caseNo"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		使用的優惠代號:	
		</td>
		<td>
		<input type="text" name="promotionCode" value="<?php echo $row["promotionCode"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		交易狀態:	
		</td>
		<td>
		<input type="text" name="tradeStatus" value="<?php echo $row["tradeStatus"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		通行認證QR碼:	
		</td>
		<td>
		<input type="text" name="certificationCode" value="<?php echo $row["certificationCode"] ?>"/>
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
