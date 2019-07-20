<?php

include("../koneksi/koneksi.php");


    // ambil id dari query string
    $id = $_GET['id'];
    echo $id;
    // buat query hapus
    $sql = "DELETE FROM kategori WHERE id_kategori=$id";
    $query = mysqli_query($db1, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: kategori.php');
    } else {
        die("gagal menghapus...");
    }


?>