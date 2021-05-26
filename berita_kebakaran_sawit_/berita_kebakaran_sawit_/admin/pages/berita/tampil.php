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

    

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Berita</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>

              <?php
      
       
    if (isset($_POST['BtnSmpanBerita'])) {
    
   
    $judul_berita     = $_POST['judul_berita'];
    $isi_berita       = $_POST['isi_berita'];
    $tanggal_posting  = $_POST['tanggal_posting'];
    $namafolder       ="dist/img/foto_berita/";

if (!empty($_FILES["nama_file"]["tmp_name"])) {   
    $jenis_gambar=$_FILES['nama_file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")     {      
     $gambar = $namafolder .date('mYd-hi'). basename($_FILES['nama_file']['name']);               
    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
    
            $sql = mysqli_query($koneksi," INSERT INTO tb_berita (judul_berita,isi_berita,tanggal_posting,foto_berita) 
            VALUES ('$judul_berita','$isi_berita','$tanggal_posting','$gambar')  ");


            if ($sql) {
               echo "<script> alert ('Tambah Data Berita Berhasil!');window.location.href='?p=berita' </script>" ;
             } else {
              echo "<script> alert ('Tambah Data Berita Gagal!');window.location.href='?p=berita' </script>" ;
             }
      

  } else {
    ?>        
    <script> alert ('Upload Foto Gagal!');window.location.href='?p=berita' </script>

    <?php
} 
    }
    else {    
     ?>
     <script> alert ('Upload Foto Gagal!,File bukan JPG');window.location.href='?p=berita' </script>

      <?php
 } 
    }

  }
  
       
  ?>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-2">
                    <a type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default" style="color:white;"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                    <div class="col-sm-2">
                    <a href="?p=index" class="btn btn-block btn-warning" style="color:grey;">Kembali</a>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Isi Berita</th>
                    <th>Tanggal Posting</th>
                    <th>Foto Berita</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                  $no = 1;
$query = mysqli_query($koneksi,"SELECT * FROM tb_berita GROUP BY id_berita DESC");
while($data  = mysqli_fetch_assoc($query)){
?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['judul_berita']; ?></td>
                    <td><?php echo $data['isi_berita']; ?></td>
                    <td><?php echo $data['tanggal_posting']; ?></td>
                    <td><img style="height:150px;" src="<?php echo $data['foto_berita']; ?>"></td>
                    <td>
                  
                      <a href="?p=uberita&nws=<?php echo $data['id_berita']; ?>" class="btn btn-block btn-info" ><i class="fas fa-pen" style="color:white;"></i></a>
                 
                  
                      <a href="?p=hberita&nws=<?php echo $data['id_berita']; ?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-block btn-danger" ><i class="fas fa-trash" style="color:white;"></i></a>
                
                    </td>
                  </tr>
                <?php $no++; } ?>
                  </tbody>
                </table>

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

 </div>
  <!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Judul Berita</label>
                    <input type="text" name="judul_berita" class="form-control"  placeholder="Ketik judul berita" required>
                  </div>
                  <div class="form-group">
                    <label for="">Isi Berita</label>
                    <textarea type="text" name="isi_berita" class="form-control"  placeholder="Ketik isi berita" required></textarea>
                  </div>
                  <!-- Date -->
                    <div class="form-group">
                      <label>Tanggal Upload</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" name="tanggal_posting" class="form-control datetimepicker-input" data-target="#reservationdate" required/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form group -->
                  <div class="form-group">
                    <label for="exampleInputFile">File Foto Berita</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="nama_file" required>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button type="submit" name="BtnSmpanBerita" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<script>
  // Get this reference, just once outside of the function that it will be needed in
// instead of on each invocation of the function.
let clock = document.getElementById('waktu');
let timer = null;  // The timer variable is null until the clock initializes

// This is the modern way to set up events
clock.addEventListener("click", function(){
  // If the clock is ticking, pause it. If not, start it
  if(timer !== null){
    clearInterval(timer);  // Cancel the timer
    timer = null;  // Reset the timer because the clock is now not ticking.
  } else {
    timer = setInterval(runClock, 1000);
  }
});

// Get a reference to the timer and start the clock
timer = setInterval(runClock, 1000);

function runClock() {
    // .innerText is non-standard. Use .textContent instead.
    // .toLocaleTimeString() gets you the locale format of the time.
    clock.textContent = new Date().toLocaleTimeString();            
}
</script>