
<?php

include("../../include/selectDB.php");

$setSQL = "SELECT * FROM `orderList` ORDER BY `no` DESC";
$result = mysql_query($setSQL);
//$row = mysql_fetch_array($result);
$row = mysql_fetch_assoc($result);
//echo $row["no"];
$nextNo = $row["no"] + 1;

date_default_timezone_set("Asia/Taipei");
//echo "Today is " . date("Y-m-d") . "<br>";
//$time = date("h:i:sa");
$date = date("Y-m-d");
$time = date("H:i:s");

mysql_close($dbLink);

?>

<!DOCTYPE html>

<html>
	<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>
	</head>
<body>

<form action="createEnter.php" method="post">
	<table>
		<tr>
			<td>
				流水號							
			</td>
			<td>
				<input type="text" name="no" value = "<?php echo $nextNo ?>" disabled/>
				<input type="hidden" name="no" value = "<?php echo $nextNo ?>" />
			</td>
		</tr>
		<tr>
			<td>
				訂單代號
			</td>
			<td>
				<input type="text" name="orderTable_no" value="" placeholder = "輸入訂單代號" required />
			</td>
		</tr>
		<tr>
			<td>
			會員代號
			</td>
			<td>
			<input type="text" name="id" value = ""  placeholder = "輸入會員代號" required />
			</td>
		</tr>
		
		<tr>
			<td>
			下訂日期
			</td>
			<td>
			<input type="text" name="date" value = "<?php echo $date ?>" disabled/>
			<input type="hidden" name="date" value = "<?php echo $date ?>"/>
			</td>
		</tr>
		
		<tr>
			<td>
			下訂時間
			</td>
			<td>
			<input type="text" name="time" value = "<?php echo $time ?>" disabled/>
			<input type="hidden" name="time" value = "<?php echo $time ?>"/>
			</td>
		</tr>
		
		<tr>
			<td>
			車輛流水號
			</td>
			<td>
			<input type="text" name="car_no" value = ""  placeholder = "1234" required />
			</td>
		</tr>				

		<tr>
			<td>
			租用車位編號
			</td>
			<td>
			<input type="text" name="parking_no" value = ""  placeholder = "1234" required />
			</td>
		</tr>	
	
	
		<tr>
			<td>
			租用開始日期(年月日)
			</td>
			<td>
			<input type="text" name="startDate" value = ""  placeholder = "2016/8/3" required />
			</td>
		</tr>	
		
		<tr>
			<td>
			租用結束日期(年月日)
			</td>
			<td>
			<input type="text" name="endDate" value = ""  placeholder = "2016/8/3" required />
			</td>
		</tr>		
		
		<tr>
			<td>
			租用開始時間(時)
			</td>
			<td>
			<input type="text" name="startTime" value = ""  placeholder = "13:00:00" required />
			</td>
		</tr>
		
		<tr>
			<td>
			租用結束時間(時)
			</td>
			<td>
			<input type="text" name="endTime" value = ""  placeholder = "13:00:00" required />
			</td>
		</tr>
		
		<tr>
			<td>
			租用時段
			</td>
			<td>
		<input type="radio" name="caseNo" value = "" required />小時
		<input type="radio" name="caseNo" value = "" required />白天
		<input type="radio" name="caseNo" value = "" required />晚上
		<input type="radio" name="caseNo" value = "" required />全天			
			</td>
		</tr>			
			
		<tr>
			<td>
			租用方案
			</td>
			<td>
		<input type="radio" name="caseNo" value = "" required />時租
		<input type="radio" name="caseNo" value = "" required />日租
		<input type="radio" name="caseNo" value = "" required />周租
		<input type="radio" name="caseNo" value = "" required />月租			
			</td>
		</tr>	
					
		<tr>
			<td>
			使用的優惠代號
			</td>
			<td>
			<input type="text" name="promotionCode" value = ""  placeholder = "123456" required />
			</td>
		</tr>
		
		<tr>
			<td>
			交易狀態
			</td>
			<td>
		<input type="radio" name="caseNo" value = "" required />預約
		<input type="radio" name="caseNo" value = "" required />使用中
		<input type="radio" name="caseNo" value = "" required />退租
		<input type="radio" name="caseNo" value = "" required />完成			
			</td>
		</tr>							
		
		<tr>
			<td>
			通行認證QR碼
			</td>
			<td>
			<input type="text" name="certificationCode" value = ""  placeholder = "./xxx.jpg" required />
			</td>
		</tr>
		
		<tr>
			<td>
			經度
			</td>
			<td>
			<input type="text" name="longitude" value = ""  placeholder = "25.019908" required />
			</td>
		</tr>
		
		<tr>
			<td>
			緯度
			</td>
			<td>
			<input type="text" name="latitude" value = ""  placeholder = "121.544791" required />
			</td>
		</tr>
							
																	
	</table>            	
<button type="submit">新增</button>
</form>
</body>
</html>