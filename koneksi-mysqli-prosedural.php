<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "php_kita";

//membangun koneksi
$koneksi = mysqli_connect()$host, $user, $password, $db;
if(!koneksi){
	print "Koneksi GAGAL";
	exit(1);
}else{
	print "Koneksi BERHASIL";
}
?>