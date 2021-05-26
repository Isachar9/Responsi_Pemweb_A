<?php
$nws	= $_GET['nws'];

$sql 	= 'DELETE FROM tb_berita WHERE id_berita="'.$nws.'"';
$query	= mysqli_query($koneksi,$sql);

if ($sql) {
               echo "<script>alert('Data Berita Dihapus...');window.location='?p=berita'</script>" ;
             } else {
              echo "<script>alert('Data Berita Gagal Dihapus...');window.location='?p=berita'</script>" ;
             }
?>