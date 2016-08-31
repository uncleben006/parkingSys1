<?php
include("./header.php");
?>


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
    
    function randomCreateClicked()
    {
    	//alert("test");
    	var url = "randomCreate.php?size=3";
		window.location.href = url;
	}
</script>
</head>
<body>
<form action="deleteCarEnter.php" method="post">
<table border="1">
<tr>
	<th>選擇</th>
	<th>流水號</th>	
	<th>會員代號</th>
	<th>車輛描述</th>
	<th>車輛圖片</th>
	<th>車牌號碼</th>	
	<th>更新資料</th>			
</tr>

<?php
include("./include/selectDB.php");

session_start();
$id = $_SESSION["id"];

$setSQL = "SELECT * FROM `car` WHERE `id`='" . $id . "' ORDER BY `no` ASC";
$result = mysql_query($setSQL);

while( $row = mysql_fetch_assoc($result) )
{
	echo "<tr>";
	echo "<td><input type=\"checkbox\" name=\"no[]\" value=\"" . $row["no"] . "\"/></td>";
	echo "<td>" . $row["no"] . "</td>";	
	echo "<td>" . $row["id"] . "</td>";
	echo "<td>" . $row["description"] . "</td>";
	echo "<td> <img src = \"./uploads/" . $row["picture"] . "\"/></td>";
	echo "<td>" . $row["carNo"] . "</td>";
								
	echo "<td><a href=\"./updateCar.php?no=" . $row["no"] . "\">更新資料</a></td>"; 
	echo "</tr>";
	
}

mysql_close($dbLink);
?>

</table>
<button type="submit">刪除資料</button>
<input type="button" id="deleteAll" value="全選" onClick = "do_this_all()" />
<input type="button" id="undeleteAll" value="全不選" onClick = "undo_this_all()" />
<input type="button" id="createCar" value="新增車輛" onClick = "window.location.href='createCar.php'" />
</form>

</body>
</html>