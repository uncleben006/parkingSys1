<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php	
		include('./include/selectDBwithLogin.php');
		include("./header.php");
		$id = $_SESSION['id'];
		echo 'Welcome'.$id.'!<br>';
	?>
</body>
</html>
