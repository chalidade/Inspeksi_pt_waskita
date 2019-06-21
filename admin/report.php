<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-8 pb-10 header-text">
      <h3>LAPORAN KECELAKAAN</h3>
      <p> Data Laporan Kecelakaan</p>
    </div>
  </div>
  <div class="container">
    <div class="row" style="margin-top:30px; padding:10px">
      <table class="table" width="100%">
        <tr>
          <th>Pelapor</th>
          <th>Tanggal</th>
          <th>Option</th>
        </tr>
        <tr>
          <td>Chalid</td>
          <td>05 Mei 2019</td>
          <td><a href="preview_kecelakaan.php">Preview </a></td>
        </tr>
        <tr>
          <td>Ade</td>
          <td>06 Mei 2019</td>
          <td><a href="preview_kecelakaan.php">Preview </a></td>
        </tr>
        <tr>
          <td>Rahman</td>
          <td>07 Mei 2019</td>
          <td><a href="preview_kecelakaan.php">Preview </a></td>
        </tr>
        <tr>
          <td>Dinda</td>
          <td>08 Mei 2019</td>
          <td><a href="preview_kecelakaan.php">Preview </a></td>
        </tr>
      </table>
    </div>
    <div class="col-md-12" style="margin-top:20px;">
      <a class="btn btn-success" data-toggle="modal" data-target="#myModal" style="color:#fff;width:100%">Tambah Laporan Kecelakaan</a>
    </div>
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
              <td width="50%">Pelapor </td>
              <td><input type="text" name="" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td><input type="date" name="" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Lokasi</td>
              <td><input type="text" name="" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Data Kecelakaan</td>
              <td><input type="text" name="" value="" class="form-control"></td>
            </tr>
            <tr>
              <td>Data Kerusakan </td>
              <td><input type="text" name="" value="" class="form-control"></td>
            </tr>
          </table>
          <table width="100%" style="margin-top:20px;">
            <tr>
              <td><button class="btn btn-primary" style="width:100%"> Upload Dokumentasi</button></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
