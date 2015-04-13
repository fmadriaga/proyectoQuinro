<?php
$dbhost = 'localhost';
$dbuser = 'admin';
$dbpass = 'NandoM88';
$dbname = 'CMS_Quinro';
$conn = mysql_connect($dbhost,$dbuser,$dbpass)
    or die('Error connecting to mysql');
mysql_select_db($dbname);
?>