<?php
//https://www.phpkita.me
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

//menampilkan data
$hasil = $koneksi->query("select * from tabel_data where clausa1 = 'filter1'");

while($baris = $hasil->fetch_row()){
	print $baris[0].",".$baris[1]."\n";
}

//mematikan result set
$hasil->free_result();

//insert
$koneksi->query("INSERT INTO tabel_user VALUES(NULL,'usersatu','passwordsatu','namasatu','emailsatu','entahapalagi')");

//update
$koneksi->query("UPDATE tabel_user set password = 'passwordbaru' where username ='saya'");

//memutus koneksi
$koneksi->close();
?>