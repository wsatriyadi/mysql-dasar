<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "php_kita";
$con= mysql_connect($host, $user, $password);
mysql_select_db($db);

$query = mysql_query(“SELECT * FROM tabel_user”);
$hasil= mysql_fetch_assoc($query);

print_r($hasil);
?>