<?php


$ini_array = parse_ini_file(INCLUDE_RESOURCES_PATH."database.ini");
/*$ini_array = parse_ini_file("./../classes/database.ini");*/
$mysql_hostname = $ini_array["mysql_hostname"];
$mysql_user = $ini_array["mysql_user"];
$mysql_password = $ini_array["mysql_password"];
$mysql_database = $ini_array["mysql_database"];

$connection = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Unable to connect to MySql");
mysql_select_db($mysql_database, $connection) or die("Unable to connect to database".$mysql_database);

