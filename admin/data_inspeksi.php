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

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
    <div class="container">
      <?php
        $id  = $_REQUEST['id'];
       ?>
      <h3 style="text-align:center;margin-top:30px">Data Inspeksi </h3>
      <p style="text-align:center;">Data inspeksi <font style="text-transform:capitalize"><?php echo $id; ?></font> Crane</p>
      <div class="row" style="margin-top:10px; padding:10px">
        <table class="table" width="100%">
          <tr>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Option</th>
          </tr>
          <?php
            $inspeksi    = mysqli_query($connect, "SELECT * FROM `inspeksi` ORDER BY `inspeksi`.`no` DESC");
            while ($data = mysqli_fetch_array($inspeksi) ) {
            ?>
          <tr>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td><a href="preview_inspeksi.php?kode=<?php echo $data['no']; ?>">Preview</a></td>
          </tr>
        <?php } ?>
        </table>
      </div>
      <div class="col-md-12" style="margin-top:20px;">
        <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="color:#fff;width:100%">Tambah Inspeksi</a>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <form class="" action="proses/inspeksi.php?id=insert" method="post">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data Inspeksi</h4>
            </div>
            <div class="modal-body">
              <table cellpadding="5">
                <tr>
                  <td width="30%">Nama </td>
                  <td width="1%">:</td>
                  <td><input type="text" name="nama" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td width="1%">:</td>
                  <td><input type="date" name="tanggal" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="lokasi" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Alat</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="alat" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Inspeksi</td>
                  <td width="1%">:</td>
                  <td>
                    <input type="text" disabled value="<?php echo $id." Crane"; ?>" class="form-control">
                    <input type="hidden" name="inspeksi" value="<?php echo $id." Crane"; ?>" class="form-control">
                  </td>
                </tr>
                <tr>
                  <td>No Seri</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="seri" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>PIC</td>
                  <td width="1%">:</td>
                  <td>
                  <input disabled type="text" value="<?php echo $_SESSION['nama']; ?>" class="form-control">
                  <input type="hidden" name="pic" value="<?php echo $_SESSION['nama']; ?>" class="form-control"></td>
                </tr>
              </table>
              <table width="100%" style="margin-top:20px;">
                <tr>
                  <th>No</th>
                  <th>Jenis Pemeriksaan</th>
                  <th>Yes</th>
                  <th>No</th>
                </tr>
                <?php if ($id == "Overhead") { ?>
                  <tr>
                    <td>1</td>
                    <td>Tali Baja Putus</td>
                    <td> <input type="radio" name="a" value="1"></td>
                    <td><input type="radio" name="a" value="0"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Pelumas pada Wire Rope (Tali Baja)</td>
                    <td> <input type="radio" name="b" value="1"></td>
                    <td><input type="radio" name="b" value="0"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Terdapat kawat yang putus pada pilihan tali baja</td>
                    <td> <input type="radio" name="c" value="1"></td>
                    <td><input type="radio" name="c" value="0"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Tali Baja Aus</td>
                    <td> <input type="radio" name="d" value="1"></td>
                    <td><input type="radio" name="d" value="0"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Terdapat Pengunci pada hook</td>
                    <td> <input type="radio" name="e" value="1"></td>
                    <td><input type="radio" name="e" value="0"></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Korslet pada kabel kelitrikan</td>
                    <td> <input type="radio" name="f" value="1"></td>
                    <td><input type="radio" name="f" value="0"></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Troubleshoot pendant control</td>
                    <td> <input type="radio" name="g" value="1"></td>
                    <td><input type="radio" name="g" value="0"></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Sling Berkarat</td>
                    <td> <input type="radio" name="h" value="1"></td>
                    <td><input type="radio" name="h" value="0"></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Sling Putus</td>
                    <td> <input type="radio" name="i" value="1"></td>
                    <td><input type="radio" name="i" value="0"></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Sling Aus</td>
                    <td> <input type="radio" name="j" value="1"></td>
                    <td><input type="radio" name="j" value="0"></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Limit Switch Berfungsi dengan Baik</td>
                    <td> <input type="radio" name="k" value="1"></td>
                    <td><input type="radio" name="k" value="0"></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Terdapat Emergency Stop</td>
                    <td> <input type="radio" name="l" value="1"></td>
                    <td><input type="radio" name="l" value="0"></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Keadaan lengan Spreader Macet</td>
                    <td> <input type="radio" name="m" value="1"></td>
                    <td><input type="radio" name="m" value="0"></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Terdapat Grounding Crane</td>
                    <td> <input type="radio" name="n" value="1"></td>
                    <td><input type="radio" name="n" value="0"></td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Terdapat Warning Light</td>
                    <td> <input type="radio" name="o" value="1"></td>
                    <td><input type="radio" name="o" value="0"></td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Alarm Menyala</td>
                    <td> <input type="radio" name="p" value="1"></td>
                    <td><input type="radio" name="p" value="0"></td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Karet Bumper Aus</td>
                    <td> <input type="radio" name="q" value="1"></td>
                    <td><input type="radio" name="q" value="0"></td>
                  </tr>
                <?php } else if($id == "Gantry"){ ?>
                  <tr>
                    <td>1</td>
                    <td>Tali Baja Putus</td>
                    <td> <input type="radio" name="a" value="1"></td>
                    <td><input type="radio" name="a" value="0"></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Pelumas pada Wire Rope (Tali Baja)</td>
                    <td> <input type="radio" name="b" value="1"></td>
                    <td><input type="radio" name="b" value="0"></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Terdapat kawat yang putus pada pilihan tali baja</td>
                    <td> <input type="radio" name="c" value="1"></td>
                    <td><input type="radio" name="c" value="0"></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Tali Baja Aus</td>
                    <td> <input type="radio" name="d" value="1"></td>
                    <td><input type="radio" name="d" value="0"></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Terdapat Pengunci pada hook</td>
                    <td> <input type="radio" name="e" value="1"></td>
                    <td><input type="radio" name="e" value="0"></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Korslet pada kabel kelitrikan</td>
                    <td> <input type="radio" name="f" value="1"></td>
                    <td><input type="radio" name="f" value="0"></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Troubleshoot pendant control</td>
                    <td> <input type="radio" name="g" value="1"></td>
                    <td><input type="radio" name="g" value="0"></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Sling Berkarat</td>
                    <td> <input type="radio" name="h" value="1"></td>
                    <td><input type="radio" name="h" value="0"></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Sling Putus</td>
                    <td> <input type="radio" name="i" value="1"></td>
                    <td><input type="radio" name="i" value="0"></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Sling Aus</td>
                    <td> <input type="radio" name="j" value="1"></td>
                    <td><input type="radio" name="j" value="0"></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Limit Switch Berfungsi dengan Baik</td>
                    <td> <input type="radio" name="k" value="1"></td>
                    <td><input type="radio" name="k" value="0"></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Terdapat Emergency Stop</td>
                    <td> <input type="radio" name="l" value="1"></td>
                    <td><input type="radio" name="l" value="0"></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Korsleting Kabel pada Panel Box</td>
                    <td> <input type="radio" name="m" value="1"></td>
                    <td><input type="radio" name="m" value="0"></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Terdapat Grounding Crane</td>
                    <td> <input type="radio" name="n" value="1"></td>
                    <td><input type="radio" name="n" value="0"></td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Terdapat Warning Light</td>
                    <td> <input type="radio" name="o" value="1"></td>
                    <td><input type="radio" name="o" value="0"></td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Alarm Menyala</td>
                    <td> <input type="radio" name="p" value="1"></td>
                    <td><input type="radio" name="p" value="0"></td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Karet Bumper Aus</td>
                    <td> <input type="radio" name="q" value="1"></td>
                    <td><input type="radio" name="q" value="0"></td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Kabel Power Berfungsi dengan Baik</td>
                    <td> <input type="radio" name="q" value="1"></td>
                    <td><input type="radio" name="q" value="0"></td>
                  </tr>
                <?php } ?>
              </table>
              <div class="col-md-12" style="margin-top:20px">
                <button href="#" style="background:green;width:100%;border-radius:10px;padding:10px;color:#fff"> Simpan </button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky">
      <hr>
      <div class="row" style="padding-left:10px;padding-top:10px;margin-top:-10px;text-align:center;background:#fff;">
        <div class="col-1"></div>
        <div class="col-2">
           <img id="user" src="img/user.png" alt="" style="width:35px">
           <font style="font-weight:600;color:#242424;font-size:10px">USER</font>
        </div>
        <div class="col-2">
          <img id="inspeksi" data-target="#add" src="img/test.png" alt="" style="width:35px">
          <font style="font-weight:600;color:#242424;font-size:10px">INSPEKSI</font>
        </div>
        <div class="col-2">
          <img id="cek" src="img/rec.png" alt="" style="width:35px;margin-left: -2px;">
          <font style="font-weight:600;color:#242424;font-size:10px">HOME</font>
        </div>
        <div class="col-2">
          <img id="report" data-target="#report" src="img/warning.png" alt="" style="width:35px">
          <font style="font-weight:600;color:#242424;font-size:10px">REPORT</font>
        </div>
        <div class="col-2">
          <a href="../index.php">
          <img id="report" src="img/log-out.png" alt="" style="width:35px">
            <font style="font-weight:600;color:#242424;font-size:10px">LOGOUT</font></a>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/swiper.min.js"></script>
        <script type="text/javascript">
        var mySwiper = new Swiper ('.swiper-container');
        </script>
        <script>

        $(document).ready(function(){
          $("#user").click(function(){
              $("#div1").load("user.php");
          });
        });

        $(document).ready(function(){
          $("#cek").click(function(){
              $("#div1").load("home.php");
          });
        });

        $(document).ready(function(){
          $("#report").click(function(){
              $("#div1").load("report.php");
          });
        });

        $(document).ready(function(){
          $("#inspeksi").click(function(){
              $("#div1").load("inspeksi.php");
          });
        });
        </script>
      </body>
    </html>
