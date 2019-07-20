<?php

include("../koneksi/koneksi.php");


    // ambil id dari query string
    $id_admin = $_GET['id_admin'];
    echo $id_admin;
    // buat query hapus
    $sql = "DELETE FROM admin WHERE id_admin=$id_admin";
    $query = mysqli_query($db1, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: user.php');
    } else {
        die("gagal menghapus...");
    }


?>