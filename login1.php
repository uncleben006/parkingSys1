<?php
include("./include/selectDB.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<!--meta charset="utf-8"-->
		<meta charset="big5">
		<title>login</title>
	</head>
<body>

<div class="container">
<div class="row main-low-margin text-center">            
 	<h1>登錄</h1>
	<form action = "loginEnter.php" method = "post">
		<center><!--table border = "1" style="width:200px"-->
			<table border = "1" style="width:30%">
				<tr>
					<td>
						<div style="margin-left:2.5%">帳號:</div>
						<input type = "text" name="id" style="margin-left:2.5%">
					</td>
				</tr>
					<tr>
						<td>
							<div style="margin-left:2.5%">密碼:</div>
							<input type = "text" name="pass" style="margin-left:2.5%"><br>
						</td>
					</tr>
				<tr>
					<td>
						<button type = "submit" style="margin-left:2.5%">登錄</button>
					</td>
				</tr>
				<?php
					if(isset($_GET["wrong"])==TRUE&&$_GET["wrong"]==1)//判定帳密正確與否
			        {
			            echo "<tr><font color=\"red\">Account doesn't exist .</font></tr>";
				    }
                ?>
			</table>
		</center>
	</form>
	<a href="SignUp.php">
		<div><h3 style="margin-bottom:5%;">註冊一個新帳號</h3></div>
	</a>
</div>
<div>
		
</body>
</html>