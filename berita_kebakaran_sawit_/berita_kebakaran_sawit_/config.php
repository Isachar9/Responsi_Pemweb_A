<?php  
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_beritasawit";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo "<script>alert('Database not connected'); </script>".mysqli_connect_error();
}

//sebutkan tcharset untuk menampilkan data yang besar sampai puluhan ribu
mysqli_set_charset($koneksi,"utf8");


date_default_timezone_set('Asia/Jakarta');

define('LOG','log');
function write_log($log){  
 $time = @date('[Y-m-d:H:i:s]');
 $op=$time.'	'.'Aksi  '.$log."\n".PHP_EOL;
 $fp = @fopen(LOG, 'a');
 $write = @fwrite($fp, $op);
 @fclose($fp);
}

$timeout = 30; // Set timeout menit
$logout_redirect_url = "login.php"; // Set logout URL
$timeout = $timeout * 60; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
		
  write_log($_SESSION['nama_akun']."	Session Habis...");
        echo "<script>window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();


function TanggalIndo($date){
	$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
 
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl   = substr($date, 8, 2);
 
	$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
	return($result);
}


function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tahun
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tanggal

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}




function tgl_indo2($string){
    // contoh : 2019-01-30
    
    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];
 
    $tanggal = explode("-", $string)[2];
    $bulan = explode("-", $string)[1];
    $tahun = explode("-", $string)[0];
 
    return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
}


function DateToIndo($date) {
    $BulanIndo = array("Januari", "Februari", "Maret",
        "April", "Mei", "Juni",
        "Juli", "Agustus", "September",
        "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
    $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
    $tgl = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring

    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return($result);
}









?>
