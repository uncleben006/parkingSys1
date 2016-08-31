<?php
//include($INCLUDE_FOLDER. "global.php");
//do not include other php in included file...
//include("./global.php");
//or set to session or set to environment variable?
//or included php used include should use global variables

include($_SERVER['DOCUMENT_ROOT'] . "/parkingSys1/include/global.php");//路徑有改(parkingSys1)

$dbLink = mysql_connect($dbHost, $dbUser, $dbPass);

if(!$dbLink)
{
	die('Can not connect to MYSQL, errno = ' . mysql_errno());
}

//echo "OK to connec to MySQL!!";

$dbSelect = mysql_select_db($database);

if(!$dbSelect)
{
	die('Can not select DB, database,errno = ' . $database. ' ' . mysql_errno());
}
?>