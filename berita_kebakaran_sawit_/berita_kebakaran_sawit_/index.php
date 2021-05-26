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

<script pagespeed_no_defer>//<![CDATA[
            (function() {
                var d = function(b) {
                    var a = window;
                    if (a.addEventListener)
                        a.addEventListener("load", b, !1);
                    else if (a.attachEvent)
                        a.attachEvent("onload", b);
                    else {
                        var c = a.onload;
                        a.onload = function() {
                            b.call(this);
                            c && c.call(this)
                        }
                    }
                };
                window.pagespeed = window.pagespeed || {};
                var p = window.pagespeed, q = function() {
                    this.a = !0
                };
                q.prototype.c = function(b) {
                    b = parseInt(b.substring(0, b.indexOf(" ")), 10);
                    return!isNaN(b) && b <= Date.now()
                };
                q.prototype.hasExpired = q.prototype.c;
                q.prototype.b = function(b) {
                    return b.substring(b.indexOf(" ", b.indexOf(" ") + 1) + 1)
                };
                q.prototype.getData = q.prototype.b;
                q.prototype.d = function(b) {
                    var a = document.getElementsByTagName("script"), a = a[a.length - 1];
                    a.parentNode.replaceChild(b, a)
                };
                q.prototype.replaceLastScript = q.prototype.d;
                q.prototype.e = function(b) {
                    var a = window.localStorage.getItem("pagespeed_lsc_url:" + b), c = document.createElement(a ? "style" : "link");
                    a && !this.c(a) ? (c.type = "text/css", c.appendChild(document.createTextNode(this.b(a)))) : (c.rel = "stylesheet", c.href = b, this.a = !0);
                    this.d(c)
                };
                q.prototype.inlineCss = q.prototype.e;
                q.prototype.f = function(b, a) {
                    var c = window.localStorage.getItem("pagespeed_lsc_url:" + b + " pagespeed_lsc_hash:" + a), f = document.createElement("img");
                    c && !this.c(c) ? f.src = this.b(c) : (f.src = b, this.a = !0);
                    for (var c = 2, k = arguments.length; c < k; ++c) {
                        var g = arguments[c].indexOf("=");
                        f.setAttribute(arguments[c].substring(0, g), arguments[c].substring(g + 1))
                    }
                    this.d(f)
                };
                q.prototype.inlineImg = q.prototype.f;
                var r = function(b, a, c, f) {
                    a = document.getElementsByTagName(a);
                    for (var k = 0, g = a.length; k < g; ++k) {
                        var e = a[k], m = e.getAttribute("pagespeed_lsc_hash"), h = e.getAttribute("pagespeed_lsc_url");
                        if (m && h) {
                            h = "pagespeed_lsc_url:" + h;
                            c && (h += " pagespeed_lsc_hash:" + m);
                            var l = e.getAttribute("pagespeed_lsc_expiry"), l = l ? (new Date(l)).getTime() : "", e = f(e);
                            if (!e) {
                                var n = window.localStorage.getItem(h);
                                n && (e = b.b(n))
                            }
                            e && (window.localStorage.setItem(h, l + " " + m + " " + e), b.a = !0)
                        }
                    }
                }, s = function(b) {
                    r(b, "img", !0, function(a) {
                        return a.src
                    });
                    r(b, "style", !1, function(a) {
                        return a.firstChild ? a.firstChild.nodeValue : null
                    })
                };
                p.g = function() {
                    if (window.localStorage) {
                        var b = new q;
                        p.localStorageCache = b;
                        d(function() {
                            s(b)
                        });
                        d(function() {
                            if (b.a) {
                                for (var a = [], c = [], f = 0, k = Date.now(), g = 0, e = window.localStorage.length; g < e; ++g) {
                                    var m = window.localStorage.key(g);
                                    if (!m.indexOf("pagespeed_lsc_url:")) {
                                        var h = window.localStorage.getItem(m), l = h.indexOf(" "), n = parseInt(h.substring(0, l), 10);
                                        if (!isNaN(n))
                                            if (n <= k) {
                                                a.push(m);
                                                continue
                                            } else if (n < f || 0 == f)
                                                f = n;
                                        c.push(h.substring(l + 1, h.indexOf(" ", l + 1)))
                                    }
                                }
                                k = "";
                                f && (k = "; expires=" + (new Date(f)).toUTCString());
                                document.cookie = "_GPSLSC=" + c.join("!") + k;
                                g = 0;
                                for (e = a.length; g < e; ++g)
                                    window.localStorage.removeItem(a[g]);
                                b.a = !1
                            }
                        })
                    }
                };
                p.localStorageCacheInit = p.g;
            })();
            pagespeed.localStorageCacheInit();
            //]]></script>


</head>
<body onload="startclock()">

<?php


$q = $_GET[cari];

if ($_GET[cari]) {
    $dataperpage = mysqli_query($koneksi,"SELECT * FROM tb_berita where judul_berita like '%$q%'");
} else {
    $dataperpage = mysqli_query($koneksi,"SELECT * FROM tb_berita");
}
$page = "index.php";
$numpage = mysqli_num_rows($dataperpage);
$start = $_GET['start'];
$eu = $start - 0;
$limit = 3;
$thisp = $eu + $limit;
$back = $eu - $limit;
$next = $eu + $limit;

 ?>


<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;<span id="date"></span>, <span id="clock"></span> WIB</span></a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Beranda</a>
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
                    <li class="nav-item active">
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
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
       
            
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 400px;" src="images/slide-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 400px;" src="images/slide-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 400px;" src="images/slide-3.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  

    </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Berita</div>
                </div>
                <?php
                    if ($_GET[cari]) {
                        $link = mysqli_query($koneksi,"SELECT * FROM tb_berita  where judul_berita like '%$q%' order by id_berita ASC limit $eu, $limit");
                    } else {
                        $link = mysqli_query($koneksi,"SELECT * FROM tb_berita  order by id_berita ASC limit $eu, $limit");
                    }

                    while ($data = mysqli_fetch_assoc($link)) {

                        $t = strtotime($data['tanggal_posting']);
                        $num_char = 50;
                        $text = $data['isi_berita'];
                        ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="admin/<?php echo $data['foto_berita']; ?>" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="detail_berita.php?id=<?php echo $data[id_berita] ?>" class="fh5co_magna py-2"> <?php echo $data['judul_berita']; ?></a><br>
                        <a href="detail_berita.php?id=<?php echo $data[id_berita] ?>" class="fh5co_mini_time py-3"> <i class="fa fa-calendar"></i> <?php echo date('d/m/Y | H:i:s',$t),' WIB'; ?> </a>
                        <div class="fh5co_consectetur">
                            <?php echo substr($text, 0, $num_char) . '...'; ?> 
                        </div>
                        <div class="fh5co_consectetur">
                            <a href="detail_berita.php?id=<?php echo $data[id_berita] ?>" class="fh5co_mini_time py-3">Baca Selengkapnya >></a>
                        </div>
                    </div>
                </div>

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
        

        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
                <div class="col-12 text-center pb-4 pt-4">
                            <?php
                            if ($back >= 0) {
                                echo "<a href=$page?start=$back class='btn_mange_pagging'><i class='fa fa-long-arrow-left'></i>&nbsp;&nbsp; Previous</a>";
                            }
                            $l = 1;

                            for ($i = 0; $i < $numpage; $i = $i + $limit) {
                                if ($i <> $eu) {
                                    echo "<a href=$page?start=$i class='btn_pagging'>$l</a>";
                                } else {
                                    echo "<a  class='btn_pagging active'>$l</a>";
                                }
                                $l = $l + 1;
                            }
                            if ($thisp < $numpage) {
                                echo "<a href=$page?start=$next class='btn_mange_pagging'>Next <i class='fa fa-long-arrow-right'></i>&nbsp;&nbsp; </a>";
                            }
                            ?>
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
<!-- Main -->
<script src="js/main.js"></script>

<script src="js/jam.js" ></script>

</body>
</html>