<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Kategori</title>
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
              <h3 class="box-title">Kategori Tugas Akhir</h3>
            </div>
          
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
             <div class="box-body">
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori" id="kategori" placeholder="Kategori">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
              </div>
            </form>

<?php

    
    if(isset($_POST['simpan'])) {
        $kategori = $_POST['nama_kategori'];
        include_once("../koneksi/koneksi.php");
        // include database connection file

        // Insert user data into table
        $result = mysqli_query($db1, "INSERT INTO `kategori`(`id_kategori`, `nama_kategori`) VALUES (NULL ,'$kategori')");
        

        // Show message when user added
        echo "Kategori added successfully. <a href='kategori.php'>View kategori</a>";
    }
?>
          </div>
          </div>
        </div>
      </section>
          <!-- /.box -->
  </div>
</div>
<!-- ./wrapper -->

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
