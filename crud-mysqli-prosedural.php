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

//menampilkan (select)
$sql = "select * from tabel_user";
$hasil = mysqli_query($koneksi, $sql);
while($baris = mysqli_fetch_row($baris)){
	print $baris[0].",".$baris[1]."\n";
}

// melepaskan set result
mysqli_free_result($hasil);

//insert data
mysqli_query($koneksi, "INSERT INTO tabel_user VALUES(NULL,'usersatu','passwordsatu','namasatu','emailsatu','entahapalagi')");

//update data
mysqli_query($koneksi, "UPDATE tabel_user set password = 'passwordbaru' where username ='saya'");

//memutus koneksi
mysqli_close($koneksi);
?>