<?php
include_once("../koneksi/koneksi.php");
if(isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $kategori = $_POST['nama_kategori'];
        echo $kategori;
        $result = mysqli_query($db1, "UPDATE `kategori` SET nama_kategori='$kategori' WHERE id_kategori=$id");
        if ($result) {
          echo "sukses";
          # code...
        }else{
          echo "gagal";
        }
        

        // Show message when user added
        echo "Kategori update successfully. <a href='kategori.php'>View kategori</a>";
    }
?>