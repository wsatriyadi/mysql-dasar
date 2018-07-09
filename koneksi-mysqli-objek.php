<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "php_kita";

//membangun koneksi
$koneksi = new mysqli($host, $user, $password, $db);

if($koneksi->connect_error){
	print "Koneksi GAGAL";
	exit(1);
}else{
	print "Koneksi BERHASIL";
}

$koneksi->close();
?>