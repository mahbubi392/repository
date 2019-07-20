<?php 
include_once("../koneksi/koneksi.php");
$id =$_GET['id_bibilio'];
// echo $id;
// $sql_kat=mysqli_query($db1, "SELECT * FROM `kategori_bibiliografi` kb JOIN kategori k ON kb.id_kategori=k.id_kategori WHERE id_bibilio='$id'");
// $raw=mysqli_fetch_array($sql_kat);

$sql = mysqli_query($db1, "SELECT * FROM `bibiliografi` WHERE id_bibilio=$id");
$data=mysqli_fetch_array($sql);
$id_bib=$data['id_bibilio'];
require_once('header.php'); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit File</title>
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
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit File Tugas Akhir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <textarea rows="3" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?=$data['judul']?>"> 
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="penulis">Penulis</label>
                  <input type="text" class="form-control" id="penulis" placeholder="Penulis" value="<?=$data['penulis']?>">
                </div>                
                <div class="form-group">
                  <label for="penulis">Nim</label>
                  <input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?=$data['nim']?>">
                </div> 
                <div class="form-group">
                  <label for="pembimbing1">Pembimbing 1</label>
                  <input type="text" class="form-control" name="pembimbing1" id="pembimbing1" placeholder="Pembimbing 1" value="<?=$data['pembimbing1']?>">
                </div>                
                <div class="form-group">
                  <label for="pembimbing2">Pembimbing 2</label>
                  <input type="text" class="form-control" name="pembimbing2" id="pembimbing2" placeholder="Pembimbing 2" value="<?=$data['pembimbing2']?>">
                </div>                
                <div class="form-group">
                  <label for="tahun">Tahun Publish</label>
                  <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun Publish" value="<?=$data['thn_publish']?>">
                </div>
                <div class="form-group">
                  <label for="abstrak">Abstrak</label>
                  <textarea cols="60" rows="10" class="form-control" name="abstrak" id="abstrak" placeholder="Abstrak" value="<?=$data['abstrak']?>">
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="prodi">Prodi Penulis</label>
                  <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Prodi Penulis" value="<?=$data['prodi_penulis']?>">
                </div>
                
            <div class="form-group">
               <label for="kategori">Kategori</label>   
               <div class="checkbox-content">
                <?php 
                  $sql_kat=mysqli_query($db1, "SELECT * FROM `kategori_bibiliografi` kb JOIN kategori k ON kb.id_kategori=k.id_kategori WHERE id_bibilio='$id'");
                  while($i = mysqli_fetch_array($sql_kat)){?>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="<?php echo 'check'.$i['id_kategori'];?>" name="<?php echo 'check'.$i['id_kategori'];?>" value="<?php echo $i['id_kategori'];?>" checked>
                      <label class="form-check-label" for="<?php echo 'check'.$i['id_kategori'];?>"><?php echo $i['nama_kategori'];?></label>
                    </div>
                  <?php } ?>
                      <!-- <label class="checkbox-inline">
                  <input type="hidden"  name="kategori" id="kategori" value="">
                  <input type="checkbox"  name="kategori" id="kategori" value="">
                      </label> -->
                 </div> 
            </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Public</label>
                  <br><?=$data['file_mini']?>
                  <input type="file" accept="application/pdf" name="file_mini" id="exampleInputFile" value="<?=$data['file_mini']?>">
                  <p class="help-block">File Publik Dapat Diakses Oleh Semua Orang</p>
                </div>
                 <div class="form-group"> 
                  <label for="exampleInputFile">File Member</label>
                  <br><?=$data['file_full']?>
                  <input type="file" accept="application/pdf" name="file_full" id="exampleInputFile" value="<?=$data['file_full']?>">
                  <p class="help-block">File Member Hanya Dapat Diakses Oleh Member</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
  </div>       
</div>
</section>
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
