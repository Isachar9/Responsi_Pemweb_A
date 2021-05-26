<?php

include "config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Berita Kebakaran Lahan Sawit | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <div class="login-logo">
        <div class="row mb-6">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
            </div>
        </div>
        <a href="javascript:void(0);">LOGIN<b> SISTEM</b></a><br>
            <small>Berita Kebakaran Lahan Sawit</small>
  </div>
  <!-- /.login-logo -->
  <?php
error_reporting(0);

if (isset($_POST['blogin'])){
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);
$login=mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username='$username' and password='$password'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_assoc($login);
// Apabila nama_admin dan password ditemukan
if ($ketemu > 0){
session_start();
$_SESSION['id_admin']     = $r['id_admin'];
$_SESSION['username']     = $r['username'];
$_SESSION['password']     = $r['password'];
$_SESSION['nama_admin']   = $r['nama_admin'];
 echo "<script>alert('Login Sukses!');document.location='index.php' </script> ";
}
else{
    
    ?>
            
      <div class="alert alert-danger alert-dismissible" id="pesan">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-times"></i> Gagal!</h5>
      Username atau Password Salah!.
      </div>
                
<?php
}

if($ketemu > 0){
write_log($_POST['nama_akun']." Sukses login . . ");
}else{
write_log($_POST['nama_akun']." Gagal Login..");
}


}
?>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login Untuk Masuk Ke Sistem</p>

      <form  method="POST">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <button type="submit" name="blogin" class="btn btn-secondary btn-block">Masuk</button>
          </div>
          <div class="col-6">
            <button   class="btn btn-danger btn-block">Batal</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $('#pesan').fadeIn('slow').delay(3000).fadeOut('slow');
</script>


</body>
</html>
