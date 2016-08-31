<?php
	session_set_cookie_params(600);
	session_start();
	$_SESSION["no"] = "";
	$_SESSION["id"] = "";
	$_SESSION["pass"] = "";

	$url = "index.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>"; 
	//echo "login in ok!!";
?>