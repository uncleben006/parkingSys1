
<?php

include("../../include/selectDB.php");

$setSQL = "SELECT * FROM `car` ORDER BY `no` DESC";
$result = mysql_query($setSQL);
//$row = mysql_fetch_array($result);
$row = mysql_fetch_assoc($result);
//echo $row["no"];
$nextNo = $row["no"] + 1;

$id = $nextNo . "AA";

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
<!-- form  enctype="multipart/form-data is important for image upload -->
<form  enctype="multipart/form-data" action="createEnter.php" method="post">
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
			會員代號
			</td>
			<td>
			<input type="text" name="id" value = "<?php echo $id ?>"  placeholder = "輸入會員代號" required />
			<input type="hidden" name="id" value = "<?php echo $id ?>" />			
			</td>
		</tr>
		
		<tr>
			<td>
			車輛描述
			</td>
			<td>
			<input type="text" name="description" value = "紅色, 法拉利"  placeholder = "輸入車輛顏色, 車款" required />
			</td>
		</tr>
		
		<tr>
			<td>
			車輛圖片
			</td>
			<td>
			<!--input type="text" name="picture" value = ""  placeholder = "輸入車輛圖片" required /-->
			<input type="file" name="picture" />
			</td>
		</tr>
		
		<tr>
			<td>
			車牌號碼
			</td>
			<td>
			<input type="text" name="carNo" value = "1234-AA"  placeholder = "請輸入車牌號碼" required />
			</td>
		</tr>				

		<tr>
				
	</table>            	
<button type="submit">新增</button>
</form>
</body>
</html>