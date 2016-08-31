
<?php

include("../../include/selectDB.php");

$setSQL = "SELECT * FROM `orderTable` ORDER BY `no` DESC";
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
//echo $time;

//try to use javascript to enable input before action
/*var inputs=document.getElementsByTagName('input');
for(i=0;i<inputs.length;i++){
    inputs[i].disabled=true;
}  
*/
//http://www.w3schools.com/tags/att_input_disabled.asp
//Disabled <input> elements in a form will not be submitted

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
				會員代號
			</td>
			<td>
				<input type="text" name="id" value="" placeholder = "會員代號: XXXXAA" required />
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
							
	</table>            	
<button type="submit">新增</button>
</form>
</body>
</html>