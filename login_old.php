<?php
//include("http://". $_SERVER['HTTP_HOST'] . "/parkingSys/include/global.php");
//include("./include/global.php");

echo $PROJECT_FOLDER;
echo "<br>";

include($_SERVER['DOCUMENT_ROOT'] . "/parkingSys/include/global.php");
//or set to php global variable later

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $__DIR__;
echo "<br>";
echo $__FILE__;
echo "<br>";
echo getcwd();
echo "<br>";
echo $_SERVER['PATH_TRANSLATED'];
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo print_r($_SERVER);


include("./include/selectDB.php");


?>

<form action = "checkuser.php" method = "post">

user:<input type = "text" name="user"><br>
pass:<input type = "text" name="pass"><br>
<button type="submit">Login</button>

</form>
<div class = "footer">
<a href="creatuser.php" target="_blank">sign up</a>
</div>