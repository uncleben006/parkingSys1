<?php
include("./include/selectDBwithLogin.php");
include("./header.php");
?>


<!DOCTYPE html>
<html>
<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title></title>
		
<?php


//$no = $_GET["no"];
//echo $no;

$setSQL = "SELECT * FROM `user` WHERE `id`='" . $id . "' ORDER BY `no` ASC";
//echo $setSQL;
$result = mysql_query($setSQL);
$row = mysql_fetch_assoc($result);
//print_r($row);
//$id = $_SESSION["id"];

mysql_close($dbLink);
?>
		
<body onload="pageLoad()">

<script type='text/javascript'>
function pageLoad()
{
	//document.getElementById("New_York").selected = true;
	//document.getElementsByTagName("city").value = 4;
	//should be id
	document.getElementById("city").selectedIndex = <?php echo $row["city"]; ?>;
}
</script>



<form action="updateUserEnter.php" method="post">
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
		<input type="text" name="id" value = "<?php echo $id ?>" placeholder = "XXXXAA" disabled required/>
		<input type="hidden" name="id" value = "<?php echo $id ?>" />	
		</td>
	</tr>
	<tr>
		<td>
		會員密碼:	
		</td>
		<td>
		<input type="text" name="pass" value="<?php echo $row["pass"] ?>" placeholder = "輸入八位數密碼" required />
		</td>
	</tr>
	<tr>
		<td>
		會員姓名:	
		</td>
		<td>
		<input type="text" name="name" value="<?php echo $row["name"] ?>" placeholder = "輸入姓名" required />
		</td>
	</tr>
	
	<tr>
		<td>
		會員電話:	
		</td>
		<td>
		<input type="text" name="phone" value="<?php echo $row["phone"] ?>" placeholder = "0912345678" required />
		</td>
	</tr>
	
	<tr>
		<td>
		會員信箱:	
		</td>
		<td>
		<input type="text" name="email" value="<?php echo $row["email"] ?>" placeholder = "a@b.com" required />
		</td>
	</tr>
	
	<tr>
		<td>
		會員生日:	
		</td>
		<td>
		<input type="date" name="birth" value="<?php echo $row["birth"] ?>" placeholder = "2016/8/3" required/>
		</td>
	</tr>
	
	<tr>
		<td>
		會員性別:	
		</td>
		<td>
		<?php
		switch($row["gender"])
		{
			case "0":
			  echo '<input type="radio" name="gender" value="0" checked required>男<br>';
			  echo '<input type="radio" name="gender" value="1" required>女<br>';
			  echo '<input type="radio" name="gender" value="2" required>其他<br>';			
			break;
			case "1":
			  echo '<input type="radio" name="gender" value="0" required>男<br>';
			  echo '<input type="radio" name="gender" value="1" checked required>女<br>';
			  echo '<input type="radio" name="gender" value="2" required>其他<br>';			
			break;
			case "2":
			  echo '<input type="radio" name="gender" value="0" required>男<br>';
			  echo '<input type="radio" name="gender" value="1" required>女<br>';
			  echo '<input type="radio" name="gender" value="2" checked required>其他<br>';			
			break;
			default:
			break;					
		}
		?>
		</td>
	</tr>
	
	<tr>
		<td>
		會員城市/國家:	
		</td>
		<td>
		<!--input type="text" name="city" value="<?php echo $row["city"] ?>"/-->

			<select id = "city" name="city" required>
			  <option id = "Taipei" value="0">Taipei</option>
			  <option id = "Tokyo" value="1">Tokyo</option>
			  <option id = "Beijing" value="2">Beijing</option>
			  <option id = "New_York" value="3">New York</option>
			  <option id = "Others" value="4">其他</option>
			</select>
					
		</td>
	</tr>
	
	<tr>
		<td>
		交易信用卡編號:	
		</td>
		<td>
		<input type="text" name="creditCardNo" value="<?php echo $row["creditCardNo"] ?>"/>
		</td>
	</tr>
							
</table>
<button type="submit">確定更改</button>
</form>
</body>
