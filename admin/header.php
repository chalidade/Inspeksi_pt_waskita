<?php
session_start();
include "proses/koneksi.php";
 ?>

<!DOCTYPE html>
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="Colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Logo</title>

  <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> -->
    <!--
    CSS
    ============================================= -->
    <script src="js/Chart.js"></script>
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
    <style media="screen" type="text/css">
      .gambar:hover {
        width:500px;
      }
    </style>
    <style type="text/css">
      div.sticky {
        position: sticky;
        width: 90%;
        border-radius:5px;
        margin:auto;
        bottom: 0px;
        background: #fff;
      }

    </style>
  </head>
  <body>

    <!-- Start Header Area -->
    <header class="default-header">
      <div class="container">
        <div class="header-wrap">
          <div class="header-top d-flex justify-content-between align-items-center">
            <div class="logo">
              <a href="index.php">
                <!-- <h2>Logo</h2> -->
                <img src="../images/logo.png" alt="" style="width:80px;">
                <!-- <h3 class="logo" style="float:right;margin-top:19px;margin-left:10px;">
                  <font style="color:#085f63">PG</font><font style="color:#085f63"> Ngadiredjo</font></h3> -->
              </a>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="" style="background:red;text-align:center;width:25px;position: absolute;z-index: 9;top: -6px;left: 20px;border-radius: 200px;font-size: 11px;font-weight: 800;color: #fff;padding: 2px;height: 25px;">
                  2
              </div>
              <div class="col-6">
                  <img src="img/bell.png" data-toggle="modal" data-target="#notif" alt="" style="width:25px;float:right;margin-top:10px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home" style="height: 250px;">
      <div class="modal fade" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Notifikasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table width="100%">
                <tr>
                  <td width="10%">
                    <img style="vertical-align: baseline;width:20px;" src="img/exclamation-mark.png" alt="">
                  </td>
                  <td>
                    <p style="color:#242424;font-size:12px;"><b style="color:#242424;font-weight:800;">Bambang Herianto</b> Laporan Kecelakaan di <i style="color:#242424;">Surabaya</i> Pukul <?php echo date('h:m:sa'); ?></p>
                  </td>
                </tr>
                <tr>
                  <td width="10%">
                    <img style="vertical-align: baseline;width:20px;" src="img/construction-and-tools.png" alt="">
                  </td>
                  <td>
                    <p style="color:#242424;font-size:12px;"><b style="color:#242424;font-weight:800;">Dedik</b> Inspeksi Crane Nomor <i style="color:#242424;">12/xx/123441/AB</i> Pukul <?php echo date('h:m:sa'); ?></p>
                  </td>
                </tr>
              </table>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </form>
      </div>
      <div class="overlay"></div>
      <div class="container">
      </div>
    </section>

    <!-- End banner Area -->
    <!-- <div class="container-flex" style="background: #242424;color: #fff;">
      <marquee scrollamount="2">Rute Keberangkatan Kantor Kecamatan Rungkut Hingga SMPN 1 Surabaya -  Kantor Kecamatan Rungkut (5.30) -> Jl Raya Kali Rungkut (5.35) -> Jl Prapen (5.45) -> SMPN 39 Surabaya -> (5.46)</marquee>
    </div> -->
