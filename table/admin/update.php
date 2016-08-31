<!DOCTYPE html>
<html>
<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>
<?php
include("../../include/selectDB.php");

$no = $_GET["no"];
//echo $no;

$setSQL = "SELECT * FROM `admin` WHERE `no`='" . $no . "'";
//echo $setSQL;
$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);
//print_r($row);
mysql_close($dbLink);
?>
		
<body onload="pageLoad()">

<script type='text/javascript'>
function pageLoad()
{
	document.getElementById("pri").selectedIndex = <?php echo $row["pri"]; ?>;
}
</script>



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
		管理員代號:	
		</td>
		<td>
		<input type="text" name="id" value="<?php echo $row["id"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		管理員密碼:	
		</td>
		<td>
		<input type="text" name="pass" value="<?php echo $row["pass"] ?>"/>
		</td>
	</tr>
	<tr>
		<td>
		管理員姓名:	
		</td>
		<td>
		<input type="text" name="name" value="<?php echo $row["name"] ?>"/>
		</td>
	</tr>
	
	<tr>
		<td>
		管理權限:	
		</td>
		<td>
		<!--input type="text" name="pri" value="<?php echo $row["pri"] ?>"/-->
			<select id = "pri" name="pri" required>
			  <option value="0">高</option>
			  <option value="1">中</option>
			  <option value="2">低</option>
			</select>			
		</td>
	</tr>
	
	<tr>
		<td>
		管理員信箱:	
		</td>
		<td>
		<input type="text" name="email" value="<?php echo $row["email"] ?>"/>
		</td>
	</tr>
						
</table>
<button type="submit">確定更改</button>
</form>
</body>
