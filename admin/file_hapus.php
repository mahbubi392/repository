<?php

include("../koneksi/koneksi.php");


    // ambil id dari query string
    $id_bibilio = $_GET['id_bibilio'];
    echo $id_bibilio;
    // buat query hapus
    $sql = "DELETE FROM bibiliografi WHERE id_bibilio=$id_bibilio";
    $query = mysqli_query($db1, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: file.php');
    } else {
        die("gagal menghapus...");
    }


?>