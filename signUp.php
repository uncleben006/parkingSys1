<?php
include("./headerBeforeLogin.php");
//below include will cause many path problem when other included file to include it
//include("./table/user/create.php");


//include("../../include/selectDB.php");
include("./include/selectDB.php");

$setSQL = "SELECT * FROM `user` ORDER BY `no` DESC";
$result = mysql_query($setSQL);
//$row = mysql_fetch_array($result);
$row = mysql_fetch_assoc($result);
//echo $row["no"];
$nextNo = $row["no"] + 1;

$id = $nextNo . "AA";
mysql_close($dbLink);
require './tools/pageControl.php';
$pageCtr = new pageControl;
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title></title>

	</head>
<body onload="pageLoad()">
<!--looks jquery doesnt work here, why?
<script type='text/javascript'>

$('#myForm').submit(function() {
  alert('Handler for .submit() called.');
  return false;
});
-->


</script>

<script type='text/javascript'>

function beforeSubmit(){
   // Do your stuff here
   //return true; // submit the form
	//alert('Handler for .submit() called.');
   //return false; // don't submit the form
}

function pageLoad()
{
	//document.getElementById("New_York").selected = true;
	//document.getElementsByTagName("city").value = 4;
	//should be id
	document.getElementById("city").selectedIndex = 0;

	<?php
		session_start();
		$checkCode = $_SESSION["checkCode"];
		echo 'document.getElementById("checkCode").value = ' . $checkCode. ";";
	?>
	
}
</script>
		
<form id = "myForm" action="signUpEnter.php" method="post" onsubmit="return beforeSubmit();">
	<table border = "1">
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
				<input type="text" name="id" value = "<?php echo $id ?>" placeholder = "XXXXAA" disabled required/>
				<input type="hidden" name="id" value = "<?php echo $id ?>" />	
			</td>
		</tr>
		<tr>
			<td>
			會員密碼
			</td>
			<td>
			<input type="password" name="pass" value = "12345678"  placeholder = "輸入八位數密碼" required />
			</td>
		</tr>
		
		<tr>
			<td>
			再次輸入密碼
			</td>
			<td>
			<input type="password" name="passAgain" value = "12345678"  placeholder = "輸入八位數密碼" required />
			</td>
		</tr>
				
		<tr>
			<td>
			會員姓名
			</td>
			<td>
			<input type="text" name="name" value = "李小花"  placeholder = "輸入姓名" required />
			</td>
		</tr>
		
		<tr>
			<td>
			會員電話
			</td>
			<td>
			<input type="text" name="phone" value = "0912345678"  placeholder = "0912345678" required />
			</td>
		</tr>
		
		<tr>
			<td>
			會員信箱
			</td>
			<td>
			<input type="text" name="email" value = "a@b.com"  placeholder = "a@b.com" required />
			</td>
		</tr>				

		<tr>
			<td>
			會員生日
			</td>
			<td>
			<input type="date" name="birth" value = "2016-08-03" placeholder = "2016-08-03" required >		
			</td>
		</tr>	
	
	
		<tr>
			<td>
			會員性別
			</td>
			<td>
		  <input type="radio" name="gender" value="0" checked required>男<br>
		  <input type="radio" name="gender" value="1" required>女<br>
		  <input type="radio" name="gender" value="2" required>其他<br>	
			</td>
		</tr>	
		
		
		<tr>
			<td>
			會員城市/國家
			</td>
			<td>

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
			交易信用卡編號
			</td>
			<td>
			<input type="text" name="creditCardNo" value = "1234-5678-4321-8765"  placeholder = "1234-5678-4321-8765" required />
			<!--
	<section>
		<form>
			<fieldset class="credit-card-group">
				<legend>Credit Card Information</legend>
				<label for="card-number">Credit Card Number</label>
				<input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="card-number" id="card-number">
				<label for="card-number">Expiration Date</label>
				<input placeholder="MM/YY" pattern="[0-9]*" type="text" class="card-expiration" id="card-expiration">
				<label for="card-number">CVV Number</label>
				<input placeholder="CVV" pattern="[0-9]*" type="text" class="card-cvv" id="card-cvv">
				<label for="card-number">Billing Zip Code</label>
				<input placeholder="ZIP" pattern="[0-9]*" type="text" class="card-zip" id="card-zip">								
			</fieldset>
		</form>
	</section>
	<script src="../../lib/creditCardInput/scripts/libs/modernizr.js"></script>
	<script src="../../lib/creditCardInput/scripts/libs/jquery.js"></script>
	<script src="../../lib/creditCardInput/scripts/libs/jquery.inputmask.js"></script>
	<script src="../../lib/creditCardInput/scripts/libs/jquery.inputmask.date.extensions.js"></script>
	<script src="../../lib/creditCardInput/scripts/app.js"></script>
		-->
			</td>
		</tr>
		
	<tr>
	<td>
	輸入認證碼
	</td>
	<td>
	<?php 
	echo '<img src="./tools/showRandImg.php" id="showRandImg"><br>';
	?>
	<input type="text" value = "" id = "checkCode" name = "checkCode">
	</td>
	
	
	
	</tr>	
						
	</table>            					
	<button type="submit">新增</button>
</form>
</body>
</html>
