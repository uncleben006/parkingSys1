
<?php

include("../../include/selectDB.php");

$setSQL = "SELECT * FROM `admin` ORDER BY `no` DESC";
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
<body onload="pageLoad()">

<script type='text/javascript'>
function pageLoad()
{
	document.getElementById("pri").selectedIndex = 0;
}
</script>

<form action="createEnter.php" method="post">
<center>
	<table border="1">
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
			管理員代號
			</td>
			<td>
				<input type="text" name="id" value = "<?php echo $id ?>" placeholder = "XXXXAA" disabled required/>
				<input type="hidden" name="id" value = "<?php echo $id ?>" />	
			</td>
		</tr>
		
		<tr>
			<td>
			管理員密碼
			</td>
			<td>
			<input type="text" name="pass" value = ""  placeholder = "輸入管理員密碼" required />
			</td>
		</tr>
		
		<tr>
			<td>
			管理員姓名
			</td>
			<td>
			<input type="text" name="name" value = ""  placeholder = "輸入管理員姓名" required />
			</td>
		</tr>
		
		<tr>
			<td>
			管理員權限
			</td>
			<td>
			<!--input type="text" name="pri" value = ""  placeholder = "數字1~3" required /-->
			
			<select id = "pri" name="pri" required>
			  <option value="0">高</option>
			  <option value="1">中</option>
			  <option value="2">低</option>
			</select>				
			</td>
		</tr>				

		<tr>
			<td>
			管理員信箱
			</td>
			<td>
			<input type="text" name="email" value = ""  placeholder = "1234" required />
			</td>
		</tr>	
				
	</table>
	<tr>
	<td colspan="3">
	<button type="submit">新增</button>	
	</td>
	</tr>
	
	</center>            	

</form>
</body>
</html>