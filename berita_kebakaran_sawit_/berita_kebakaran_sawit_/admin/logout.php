<?php
  error_reporting(0);
  session_start();
  include "config.php";
  session_destroy();
  write_log($_SESSION['nama_admin']." Logout dari aplikasi.");
  echo "<script> alert ('Logout Sistem Berhasil!');window.location.href='login.php' </script>
";
?>