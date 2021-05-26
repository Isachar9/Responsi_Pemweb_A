<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=index" style="color:#6c757d;">Beranda</a></li>
              <li class="breadcrumb-item active">Profil Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-warning card-outline">
              <div class="card-body box-profile">
               
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/foto_admin/<?php echo $t['foto_admin']; ?>"
                       alt="User profile picture">
                </div>

            

                <h3 class="profile-username text-center"><?php echo $t['nama_admin']; ?></h3>

               

                

                <a href="#" class="btn btn-warning btn-block"><b style="text-transform: uppercase;">administrator</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>


          <?php
      
       
    if (isset($_POST['btnSimpan'])) {
    
    $id_admin       = $_SESSION['id_admin'];
    $nama_admin     = $_POST['nama_admin'];
    $username       = $_POST['username']; 
    $password       = $_POST['password']; 
   


            $sql = mysqli_query($koneksi," UPDATE tb_admin set nama_admin='$nama_admin',username='$username',password='$password' WHERE id_admin='$id_admin'  ");
            if ($sql) {
               echo "<script> alert ('Update Data Profil Berhasil!');window.location.href='?p=profil' </script>" ;
             } else {
              echo "<script> alert ('Update Data Profil Gagal!');window.location.href='?p=profil' </script>" ;
             }
      
/* 
}
*/
  }
   
            
       
  ?>


  <?php
    error_reporting(0);
if (isset($_POST['btnfoto'])){
    $id_admin = $_SESSION[ 'id_admin'];
  
    $file = $_FILES[nama_file];
    $foto = $file [name];
    $tmp = $file[tmp_name];
    $tipe = $file[type];
        

    if ($tipe != 'image/jpeg') {
            echo"<script> alert ('Upload Gambar gagal, File bukan JPG');window.location.href='?p=profil' </script>";
        } else {
            move_uploaded_file($tmp, 'dist/img/foto_admin/' . $foto);

            $sql = mysqli_query($koneksi,"UPDATE tb_admin set  
                foto_admin='$foto' where id_admin='$id_admin'");
            if ($sql) {
               echo "<script> alert ('Upload Gambar Berhasil');window.location.href='?p=profil' </script>" ;
             } else {
              echo "<script> alert ('Upload Gambar gagal');window.location.href='?p=profil' </script>" ;
             }
        }
    
}   
?>




          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <h3 class="card-title">Ubah Data Profil Admin</h3>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="">Nama Akun</label>
                        <input type="text" name="nama_admin" class="form-control"  placeholder="Masukkan Nama Lengkap" required value="<?php echo $t['nama_admin']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Username" required value="<?php echo $t['username']; ?>">
                      </div>
                      <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password" required value="<?php echo $t['password']; ?>">
                  </div>
                      
                      <div class="form-group">
                  
                          <button  class="btn btn-danger">Batal</button>
                          <button type="submit" name="btnSimpan" class="btn btn-info">Simpan</button>
                   
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

          <div class="col-md-3"></div>
          <div class="col-md-7">
            <div class="card">
              <div class="card-header p-3">
                <ul class="nav nav-pills">
                  <h3 class="card-title">Ubah Foto Profil Admin</h3>
                </ul>
              </div><!-- /.card-header -->
              <form method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="tab-content">
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File Foto Admin</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="nama_file" required>
                      </div>
                    </div>
                  </div>
                      
                      <div class="form-group">
                  
                          <button  class="btn btn-danger">Batal</button>
                          <button type="submit" name="btnfoto" class="btn btn-info">Simpan</button>
                   
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


  </div>