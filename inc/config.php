<?php
// include ('error.php');
//mysql connect
$host = "localhost";
$user = "root";
$pass = "";
$base = "lsiinforinter";
$port = "3306";

mysql_connect($host, $user, $pass);
mysql_select_db($base);

$rootsite = "http://localhost/GCIO/";


//versionning

$sql_version = mysql_query("SELECT version_latest FROM maj");
$donnee_version = mysql_fetch_array($sql_version);

$version = $donnee_version['version_latest'];
?>