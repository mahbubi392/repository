<?php require_once('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambahkan Akun</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper"> 
      <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambahkan Akun</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>                
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                </div>                
                <div class="form-group">
                  <label for="email_admin">Email</label>
                  <input type="email" class="form-control" name="email_admin" id="email_admin" placeholder="Email">
                </div>                
                <div class="form-group">
                  <label for="role">Akses</label>
                  <input type="text" class="form-control" name="role" id="role" placeholder="Akses">
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" class="foto" id="exampleInputFile">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="simpan" class="btn btn-primary">Simpan</button>
              </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
</div>

<?php

    
    if(isset($_POST['simpan'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama_lengkap'];
        $email = $_POST['email_admin'];
        $akses = $_POST['role'];
        $foto = $_POST['foto'];
        include_once("../koneksi/koneksi.php");
        // include database connection file

        // Insert user data into table
        $result = mysqli_query($db1, "INSERT INTO `admin`(`id_admin`, `username`,`password`,`nama_lengkap`,`email_admin`,`role_admin`,`foto`) VALUES (NULL ,'$username','$password','$nama','$email','$akses','$foto')");
        

        // Show message when user added
        echo "user added successfully. <a href='user.php'>View kategori</a>";
    }
?>     

<!-- jQuery 3 -->
<script src="../assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../assets/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
</body>
</html>
