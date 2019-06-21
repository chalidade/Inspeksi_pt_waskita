<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-8 pb-10 header-text">
          <h3>INSPEKSI</h3>
          <p> Inspeksi Laporan</p>
        </div>
      </div>
      <div class="row" style="margin-top:30px; padding:10px">
        <table class="table" width="100%">
          <tr>
            <th>No Laporan</th>
            <th>Tanggal</th>
            <th>Option</th>
          </tr>
          <tr>
            <td>001/x/05052019</td>
            <td>05 Mei 2019</td>
            <td>Preview</td>
          </tr>
          <tr>
            <td>001/x/06052019</td>
            <td>06 Mei 2019</td>
            <td>Preview</td>
          </tr>
          <tr>
            <td>001/x/07052019</td>
            <td>07 Mei 2019</td>
            <td>Preview</td>
          </tr>
          <tr>
            <td>001/x/08052019</td>
            <td>08 Mei 2019</td>
            <td>Preview</td>
          </tr>
        </table>
      </div>
      <div class="col-md-12" style="margin-top:20px;">
        <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="color:#fff;width:100%">Tambah Inspeksi</a>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Data Kecelakaan</h4>
            </div>
            <div class="modal-body">
              <table>
                <tr>
                  <td width="30%">Nama </td>
                  <td width="1%">:</td>
                  <td><input type="text" name="" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td width="1%">:</td>
                  <td><input type="date" name="" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Alat</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>Inspeksi</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>No Seri</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="" value="" class="form-control"></td>
                </tr>
                <tr>
                  <td>PIC</td>
                  <td width="1%">:</td>
                  <td><input type="text" name="" value="" class="form-control"></td>
                </tr>
              </table>
              <table width="100%" style="margin-top:20px;" border="1">
                <tr>
                  <td>No</td>
                  <td>Jenis Pemeriksaan</td>
                  <td>Yes</td>
                  <td>No</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Tali Baja Putus</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pelumas pada Wire Rope (Tali Baja)</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Terdapat kawat yang putus pada pilihan tali baja</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Tali Baja Aus</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Terdapat Pengunci pada hook</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Korslet pada kabel kelitrikan</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Troubleshoot pendant control</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Sling Berkarat</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Sling Putus</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Sling Aus</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>Limit Switch Berfungsi dengan Baik</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>Terdapat Emergency Stop</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>Keadaan lengan Spreader Macet</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>14</td>
                  <td>Terdapat Grounding Crane</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>Terdapat Warning Light</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>16</td>
                  <td>Alarm Menyala</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
                <tr>
                  <td>17</td>
                  <td>Karet Bumper Aus</td>
                  <td> <input type="checkbox" name="" value=""></td>
                  <td><input type="checkbox" name="" value=""></td>
                </tr>
              </table>
              <div class="col-md-12" style="margin-top:20px">
                <button href="#" style="background:green;width:100%;border-radius:10px;padding:10px;color:#fff"> Simpan </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/vendor/bootstrap.min.js"></script>
</html>
