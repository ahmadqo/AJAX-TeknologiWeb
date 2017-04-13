<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase = "kecamatan";

//koneksikan ke database

$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("tidak dapat menemukan database: " . mysql_error());
mysql_select_db("$dbDatabase", $db) or die ("salah '$dbname' " . mysql_error());
?>