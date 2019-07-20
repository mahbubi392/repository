<?php
error_reporting(0);
 
//DATABASE PERTAMA
$db_host1 = 'localhost';
$db_user1 = 'root';
$db_pass1 = '';
$database1 = 'repository';
 
// Buat Koneksinya
$db1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $database1);
 
// Cek koneksi 
// if ($db1->connect_error) { 
// 	die("<b>Yahh! Koneksi Database pertama 'repository' gagal</b> : " . mysqli_connect_error()); 
// } else { 
// 	// echo "<b>Hore! Koneksi Database pertama 'repository' Berhasil</b>"; 
// }
 
// echo "<br><br><br>";
 
// ------------------------------------------------------------------------------- \\
 
//DATABASE KEDUA
$db_host2 = 'localhost';
$db_user2 = 'root';
$db_pass2 = '';
$database2 = 'akademik';
 
// Buat Koneksinya
$db2 = mysqli_connect($db_host2, $db_user2, $db_pass2, $database2);
 // Cek koneksi 
// if ($db2->connect_error) { 
// 	die("<b>Yahh! Koneksi Database pertama 'akademik' gagal</b> : " . mysqli_connect_error()); 
// } else { 
// 	// echo "<b>Hore! Koneksi Database pertama 'akademik' Berhasil</b>"; 
// }
?>