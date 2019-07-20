<?php
include_once("../koneksi/koneksi.php");
if(isset($_POST['update'])) {
        $id_admin = $_POST['id_admin'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $email_admin = $_POST['email_admin'];
        $foto = $_POST['foto'];
        echo $username;
        echo $password;
        echo $nama_lengkap;
        echo $email_admin;
        echo $foto;

        $result = mysqli_query($db1, "UPDATE `admin` SET `username`='$username',`password`='$password',`nama_lengkap`='$nama_lengkap',`email_admin`='$email_admin',`foto`='$foto' WHERE id_admin=$id_admin");
        if ($result) {
          echo "sukses";
          # code...
        }else{
          echo "gagal";
        }
        

        // Show message when user added
        echo "User update successfully. <a href='user.php'>View kategori</a>";
    }
?>