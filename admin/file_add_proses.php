<?php 
include '../koneksi/koneksi.php';

$target_dir = "../files/";
$target_file_m = $target_dir.'mini/'.basename($_FILES["file_mini"]["name"]);
$target_file_f = $target_dir.'full/'.basename($_FILES["file_full"]["name"]);

$file_tmp_m = $_FILES['file_mini']['tmp_name'];
$file_tmp_f = $_FILES['file_full']['tmp_name'];

$name_m = $_FILES["file_mini"]["name"];
$name_f = $_FILES["file_full"]["name"];
move_uploaded_file($file_tmp_m, $target_file_m);
move_uploaded_file($file_tmp_f, $target_file_f);

$save = mysqli_query($db1, "INSERT INTO bibiliografi 
	VALUES('', '$_POST[judul]', '$_POST[penulis]', '$_POST[pembimbing1]', '$_POST[pembimbing2]',
	'$_POST[thn_publis]', '$_POST[abstrak]', '$_POST[prodi_penulis]', '$name_m', '$name_f', '$_POST[nim]')");

// cari id terahir bibilio
$sql_last=mysqli_query($db1, "SELECT MAX(id_bibilio) as id_last FROM `bibiliografi`");
$raw_last=mysqli_fetch_array($sql_last);
$id_last=$raw_last['id_last'];

// insert kategori
$sql_cat=mysqli_query($db1, "SELECT * FROM `kategori`");
// print_r($sql_cat->num_rows);
$raw=mysqli_fetch_array($sql_cat);
foreach ($sql_cat as $key => $value) {
	$id='check'.$value['id_kategori'];
	// echo $id;
	if (isset($_POST[$id])) {
		// echo 
		$id_kat=$_POST[$id];
		$insert_kat=mysqli_query($db1, "INSERT INTO `kategori_bibiliografi`(`id_kb`, `id_kategori`, `id_bibilio`) VALUES (NULL, $id_kat, $id_last)");
		if ($insert_kat) {
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
}
header('location:file.php');