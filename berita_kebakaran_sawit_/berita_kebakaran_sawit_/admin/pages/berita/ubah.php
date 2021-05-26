<!-- Content Wrapper. Contains page content -->

   <div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kelola Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?p=index" style="color:#6c757d;">Beranda</a></li>
              <li class="breadcrumb-item active">Kelola Berita</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php 

if (isset($_GET['nws'])) {
  $nws=$_GET['nws'];
            $sql = mysqli_query($koneksi,"SELECT * FROM tb_berita where id_berita='$nws' ");
            $t = mysqli_fetch_assoc($sql);
            
            $nomor = $t['id_berita'];
  
             ?> 
    

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-7">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Berita</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanBerita'])) {
    
    $nws              = $_GET[ 'nws'];
    $judul_berita     = $_POST['judul_berita'];
    $isi_berita       = $_POST['isi_berita'];
    $tanggal_posting  = $_POST['tanggal_posting'];
    
            $sql = mysqli_query($koneksi," UPDATE tb_berita set judul_berita='$judul_berita',isi_berita='$isi_berita',tanggal_posting='$tanggal_posting' WHERE id_berita='$nws'  ");


            if ($sql) {
               echo '<script> alert ("Ubah Data Berita Berhasil!");window.location.href="?p=uberita&nws='.$nomor.'" </script>' ;
             } else {
              echo '<script> alert ("Ubah Data Berita Gagal!");window.location.href="?p=uberita&nws='.$nomor.'" </script>' ;
             }
      

  

  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                
                <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control"  placeholder="Ketik judul berita" value="<?php echo $t['judul_berita']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Berita</label>
                    <textarea type="text" name="isi_berita" class="form-control"  placeholder="Ketik isi berita" required><?php echo $t['isi_berita']; ?></textarea>
                  </div>
                  <!-- Date -->
                    <div class="form-group">
                      <label>Tanggal Upload</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="tanggal_posting" class="form-control datetimepicker-input" data-target="#reservationdate" required  />
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger" >Batal</button>
                  <a href="?p=berita" type="button" class="btn btn-warning" >Kembali</a>
                  <button type="submit" name="BtnSmpanBerita" class="btn btn-primary">Simpan</button>
                </div>
              </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ubah Foto Berita</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
<!-- UBAH FOTO -->
    <?php
if (isset($_POST['btnfoto'])){
    $nws =$_GET[ 'nws'];
    $namafolder="dist/img/foto_berita/";
        
if (!empty($_FILES["nama_file_berita"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['nama_file_berita']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $gambar = $namafolder .date('mYd-hi'). basename($_FILES['nama_file_berita']['name']);               
    if (move_uploaded_file($_FILES['nama_file_berita']['tmp_name'], $gambar)) {             
 
$query = mysqli_query($koneksi," UPDATE tb_berita set foto_berita='$gambar' where id_berita='$nws' ") or die(mysql_error());

  if (!mysqli_query($koneksi,$query)){
 echo '<script language="javascript">alert("Foto Berhasil Dirubah");window.location.href="?p=uberita&nws='.$nomor.'"</script> ';
} 
  else {          
   echo'
   <script language="javascript">alert("Foto Gagal Dirubah");window.location.href="?p=uberita&nws='.$nomor.'"</script>';       
   }    
    } else {
    ?>        
    <script> alert ('Upload Foto Gagal!');window.location.href='?p=uberita&nws=<?php echo $t['id_berita']; ?>' </script>

    <?php
} 
    }
    else {    
     ?>
     <script> alert ('File Foto Bukan JPG!');window.location.href='?p=uberita&nws=<?php echo $t['id_berita']; ?>' </script>

      <?php
 } 
    }
    
}   
?>
              <!-- /.card-header -->
              <div class="card-body">
                
                <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="image">
                  <center><img style="width:250px;height: 250px;" class="img-circle elevation-2" src="<?php echo $t['foto_berita']; ?>"></center>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Foto Berita</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="nama_file_berita" required>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer ">
                  <button type="button" class="btn btn-danger" >Batal</button>
                  <a href="?p=berita" type="button" class="btn btn-warning" >Kembali</a>
                  <button type="submit" name="btnfoto" class="btn btn-primary">Simpan</button>
                </div>
              </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

       <?php }
else {
              echo '<div class="alert alert-danger alert-dismissible" >
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-times"></i> Maaf!</h5>
                    Data Tidak Ditemukan.
                    </div>' ;
             }
       ?>

 </div>
  <!-- /.content-wrapper -->

