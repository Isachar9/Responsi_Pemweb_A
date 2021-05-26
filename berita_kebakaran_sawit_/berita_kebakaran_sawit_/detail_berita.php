<?php
error_reporting(0);
include'config.php';



?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Berita Kebakaran Hutan</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>
<body class="single" onload="startclock()">
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                        class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;<span id="date"></span>, <span id="clock"></span> WIB</span></a>
                    <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Detail Berita</a>
                        <div class="fh5co_treding_position_absolute"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 fh5co_padding_menu">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span>
            </button>
            <br>
            <a class="navbar-brand" href="#"><img src="images/logo-1.png" alt="img" class="fh5co_logo_width"/></a>
            <a class="navbar-brand" href="#"><img src="images/logo-1.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tentang.php">Tentang Kami <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">

            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <?php
                $id = $_GET[id];
                $tampil = mysqli_query($koneksi,"SELECT * FROM tb_berita  WHERE id_berita='$id'");
                if (mysqli_num_rows($tampil) == 0) {
                    echo "berita tidak ada";
                } else {
                    $data = mysqli_fetch_assoc($tampil);

                    $t = strtotime($data['tanggal_posting']);


                    ?>

                <img src="admin/<?php echo $data['foto_berita']; ?>" style="width: 400px;">
                <br>
                <br>
                <h1><?php echo $data['judul_berita']; ?></h1>
                <h5 style="color: gray;"><i class="fa fa-calendar"></i> <?php echo tgl_indo(date('yy-m-d',$t)); ?>&nbsp;|&nbsp;<?php echo date('H:i:s',$t),' WIB'; ?></h5>
                <p>
                    <?php echo $data['isi_berita']; ?>
                </p>
                
            <?php } ?>
            </div>


           <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-1 py-2 mb-4">Terbaru</div>
                </div>

                <?php
                   
                        $link = mysqli_query($koneksi,"SELECT * FROM tb_berita  ORDER BY tanggal_posting DESC limit 4");
                                  
                    while ($data = mysqli_fetch_assoc($link)) {
                        $t = strtotime($data['tanggal_posting']);
                        $num_char = 20;
                        $text = $data['isi_berita'];
                    
                        ?>
                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <img src="admin/<?php echo $data['foto_berita']; ?>" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font" > <a href="detail_berita.php?id=<?php echo $data[id_berita] ?>" style="color:black;"><?php echo $data['judul_berita']; ?></a></div>
                        <div class="most_fh5co_treding_font_123"><i class="fa fa-clock-o"></i> <?php echo date('d/m/yy | H:i:s',$t),' WIB'; ?></div>
                    </div>
                </div>
                <?php } ?>
                
                
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <?php  
            include'footer.php';
            ?>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
<script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>

<script src="js/jam.js" ></script>
<script >
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
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
</script>

</body>
</html>