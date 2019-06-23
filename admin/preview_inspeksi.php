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
      <hr>
      <div class="row container" style="margin-top:10px;">
        <table width="100%" style="margin-left:10px;">
          <?php
            $kode        = $_REQUEST['kode'];
            $inspeksi    = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `no` = '$kode' ORDER BY `inspeksi`.`no` DESC");
            while ($data = mysqli_fetch_array($inspeksi) ) {
            $id          = $data['inspeksi'];
            $checklist   = json_decode($data['checklist']);
            ?>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $data['nama'];  ?></td>
          </tr>
          <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><?php echo $data['tanggal']; ?></td>
          </tr>
          <tr>
            <td>Inspeksi</td>
            <td>:</td>
            <td><?php echo $data['inspeksi']; ?></td>
          </tr>
          <tr>
            <td>PIC</td>
            <td>:</td>
            <td><?php echo $data['pic']; ?></td>
          </tr>
          <tr>
            <td>Lokasi</td>
            <td>:</td>
            <td><?php echo $data['lokasi']; ?></td>
          </tr>
          <tr>
            <td>Alat</td>
            <td>:</td>
            <td><?php echo $data['alat']; ?></td>
          </tr>
        <?php } ?>
        <table width="100%" style="margin-top:20px;">
          <tr>
            <th>No</th>
            <th>Jenis Pemeriksaan</th>
            <th>Yes</th>
            <th>No</th>
          </tr>
          <?php if ($id == "Overhead Crane") { ?>
            <tr>
              <td>1</td>
              <td>
                <?php if ($checklist[0] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Tali Baja Putus</a>
              <?php } else { ?>
                Tali Baja Putus
              <?php } ?>
              </td>
              <td>
                <?php if ($checklist[0] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[0] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>
              <?php if ($checklist[1] == "0") { ?>
              <a href="detail_fmea.php?kode=tali">Pelumas pada Wire Rope (Tali Baja)</a>
              <?php } else { ?>
                Pelumas pada Wire Rope (Tali Baja)
              <?php } ?>
              </td>
              <td>
                <?php if ($checklist[1] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[1] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>
                <?php if ($checklist[2] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Terdapat kawat yang putus pada pilihan tali baja</a>
                <?php } else { ?>
                  Terdapat kawat yang putus pada pilihan tali baja
                <?php } ?>
              </td>
              <td>
                <?php if ($checklist[2] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[2] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>
              <?php if ($checklist[3] == "1") { ?>
              <a href="detail_fmea.php?kode=tali">Tali Baja Aus</a>
              <?php } else { ?>
                Tali Baja Aus
              <?php } ?>
              </td>
              <td>
                <?php if ($checklist[3] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[3] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>
                <?php if ($checklist[4] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Terdapat Pengunci pada hook</a>
                <?php } else { ?>
                  Terdapat Pengunci pada hook
                <?php } ?>
              </td>
              <td>
                <?php if ($checklist[4] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[4] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>
                <?php if ($checklist[5] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Korslet pada kabel kelitrikan</a>
                <?php } else { ?>
                  Korslet pada kabel kelitrikan
                <?php } ?>
              </td>
              <td>
                <?php if ($checklist[5] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[5] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>7</td>
                <td>
                  <?php if ($checklist[6] == "1") { ?>
                  <a href="detail_fmea.php?kode=tali">Troubleshoot pendant control</a>
                  <?php } else { ?>
                    Troubleshoot pendant control
                  <?php } ?>
                </td>
              <td>
                <?php if ($checklist[6] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[6] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>
              <?php if ($checklist[7] == "1") { ?>
              <a href="detail_fmea.php?kode=tali">Sling Berkarat</a>
              <?php } else { ?>
                Sling Berkarat
              <?php } ?>
              </td>
              <td>
                <?php if ($checklist[7] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[7] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>
                <?php if ($checklist[8] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Sling Putus</a>
                <?php } else { ?>
                  Sling Putus
                <?php } ?>
              </td>
              <td>
                <?php if ($checklist[8] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[8] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>
                <?php if ($checklist[9] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Sling Aus</a>
                <?php } else { ?>
                  Sling Aus
                <?php } ?>

              </td>
              <td>
                <?php if ($checklist[9] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[9] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>
                <?php if ($checklist[10] == "0") { ?>
                <a href="detail_fmea.php?kode=tali">Limit Switch Berfungsi dengan Baik</a>
                <?php } else { ?>
                  Limit Switch Berfungsi dengan Baik
                <?php } ?>
              </td>
              <td>
                <?php if ($checklist[10] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[10] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Terdapat Emergency Stop</td>
              <td>
                <?php if ($checklist[11] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[11] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>Keadaan lengan Spreader Macet</td>
              <td>
                <?php if ($checklist[12] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[12] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>14</td>
              <td>Terdapat Grounding Crane</td>
              <td>
                <?php if ($checklist[13] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[13] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>15</td>
              <td>Terdapat Warning Light</td>
              <td>
                <?php if ($checklist[14] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[14] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>16</td>
              <td>Alarm Menyala</td>
              <td>
                <?php if ($checklist[15] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[15] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>17</td>
              <td>
                <?php if ($checklist[16] == "1") { ?>
                <a href="detail_fmea.php?kode=tali">Karet Bumper Aus</a>
                <?php } else { ?>
                  Karet Bumper Aus
                <?php } ?>
              </td>
              <td>
                <?php if ($checklist[16] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[16] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
          <?php } else if($id == "Gantry Crane"){ ?>
            <tr>
              <td>1</td>
              <td>Tali Baja Putus</td>
              <td>
                <?php if ($checklist[0] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[0] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pelumas pada Wire Rope (Tali Baja)</td>
              <td>
                <?php if ($checklist[1] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[1] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Terdapat kawat yang putus pada pilihan tali baja</td>
              <td>
                <?php if ($checklist[2] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[2] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Tali Baja Aus</td>
              <td>
                <?php if ($checklist[3] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[3] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Terdapat Pengunci pada hook</td>
              <td>
                <?php if ($checklist[4] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[4] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Korslet pada kabel kelitrikan</td>
              <td>
                <?php if ($checklist[5] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[5] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Troubleshoot pendant control</td>
              <td>
                <?php if ($checklist[6] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[6] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Sling Berkarat</td>
              <td>
                <?php if ($checklist[7] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[7] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Sling Putus</td>
              <td>
                <?php if ($checklist[8] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[8] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>10</td>
              <td>Sling Aus</td>
              <td>
                <?php if ($checklist[9] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[9] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>11</td>
              <td>Limit Switch Berfungsi dengan Baik</td>
              <td>
                <?php if ($checklist[10] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[10] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Terdapat Emergency Stop</td>
              <td>
                <?php if ($checklist[11] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[11] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>Korsleting Kabel pada Panel Box</td>
              <td>
                <?php if ($checklist[12] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[12] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>14</td>
              <td>Terdapat Grounding Crane</td>
              <td>
                <?php if ($checklist[13] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[13] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>15</td>
              <td>Terdapat Warning Light</td>
              <td>
                <?php if ($checklist[14] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[14] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>16</td>
              <td>Alarm Menyala</td>
              <td>
                <?php if ($checklist[15] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[15] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>17</td>
              <td>Karet Bumper Aus</td>
              <td>
                <?php if ($checklist[16] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[16] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
            <tr>
              <td>18</td>
              <td>Kabel Power Berfungsi dengan Baik</td>
              <td>
                <?php if ($checklist[17] == "1") { ?>
                  <input type="checkbox" disabled value="1" checked>
                <?php } else { ?>
                  <input type="checkbox" disabled value="0">
                <?php } ?>
               </td>
              <td>
                <?php if ($checklist[17] == "1") { ?>
                  <input type="checkbox" disabled value="1">
                <?php } else { ?>
                  <input type="checkbox" disabled value="0" checked>
                <?php } ?>
              </td>
            </tr>
          <?php } ?>
        </table>
        </table>
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
