<!DOCTYPE html>
<html>
<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>

<script type="text/javascript">

    function do_this_all()
    {
    	var checkboxes = document.getElementsByName('no[]');
        var button = document.getElementById('deleteAll');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = 'TRUE';
		}
    }
    function undo_this_all()
    {
    	var checkboxes = document.getElementsByName('no[]');
        var button = document.getElementById('undeleteAll');
        
		for (var i in checkboxes)
		{
			checkboxes[i].checked = '';
		}
    }
</script>
</head>
<body>
<form action="deleteEnter.php" method="post">
<table border="1">
<tr>
	<th>選擇</th>
	<th>流水號</th>	
	<th>會員代號</th>
	<th>車位地址</th>
	<th>車位描述</th>
	<th>車位圖片</th>
	<th>開放租用開始日期</th>
	<th>開放租用結束日期</th>
	<th>開放租用開始時間</th>
	<th>開放租用結束時間</th>
	<th>允許租用時段</th>	
	<th>允許租用方案</th>
	<th>租用每小時費用</th>	
	<th>出租者車位證明文件</th>	
	<th>出租者身分證明</th>
	<th>車位認證QR碼</th>	
	<th>經度</th>
	<th>緯度</th>	
	<th>更新資料</th>			
</tr>

<?php
include("../../include/selectDB.php");

$setSQL = "SELECT * FROM `parking` ORDER BY `no` ASC";
$result = mysql_query($setSQL);

while( $row = mysql_fetch_assoc($result) )
{
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"no[]\" value=\"" . $row["no"] . "\"/></td>";
	echo "<td>" . $row["no"] . "</td>";	
	echo "<td>" . $row["id"] . "</td>";
	echo "<td>" . $row["address"] . "</td>";
	echo "<td>" . $row["description"] . "</td>";
	echo "<td>" . $row["picture"] . "</td>";
	echo "<td>" . $row["startDate"] . "</td>";
	echo "<td>" . $row["endDate"] . "</td>";
	echo "<td>" . $row["startTime"] . "</td>";
	echo "<td>" . $row["endTime"] . "</td>";
	echo "<td>" . $row["session"] . "</td>";
	echo "<td>" . $row["caseNo"] . "</td>";
	echo "<td>" . $row["price"] . "</td>";
	echo "<td>" . $row["parkingDoc"] . "</td>";
	echo "<td>" . $row["userDoc"] . "</td>";
	echo "<td>" . $row["QRCode"] . "</td>";	
	echo "<td>" . ($row["longitude"]/1000000) . "</td>";
	echo "<td>" . ($row["latitude"]/1000000) . "</td>";								
	echo "<td><a href=\"./update.php?no=" . $row["no"] . "\">更新資料</a></td>"; 
	echo "</tr>";
	
}

mysql_close($dbLink);
?>

</table>
<button type="submit">刪除資料</button>
<input type="button" id="deleteAll" value="全選" onClick = "do_this_all()" />
<input type="button" id="undeleteAll" value="全不選" onClick = "undo_this_all()" />
</form>

</body>
</html>