<?php

//Folder
//$PROJECT_FOLDER = "http://" . $_SERVER['HTTP_HOST'] . "/parkingSys/";//cannot include http://
$PROJECT_FOLDER = $_SERVER['DOCUMENT_ROOT'] . "/parkingSys1/";//路徑有改(parkingSys1)
$INCLUDE_FOLDER = $PROJECT_FOLDER . "/include/";
$IMAGES_FOLDER = $PROJECT_FOLDER . "/images/";
$LIB_FOLDER = $PROJECT_FOLDER . "/lib/";
$TABLE_FOLDER = $PROJECT_FOLDER . "/table/";

//Variables
$dbHost = 'localhost';
$dbUser = 'testphp';
//$dbPass = 'test12345';
$dbPass = 'ken0426';
$database = 'parkingsys';

?>