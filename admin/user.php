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
        <div class="col-md-8 header-text">
          <h3>MANAGE USER</h3>
          <p> Sistem Manajemen User</p>
        </div>
      </div>
      <div class="row" style="margin-top:30px; padding:10px;font-size:12px;">
        <div class="col-md-12">
        <table class="table" width="100%">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
          </tr>
          <tr>
            <td>1</td>
            <td><a data-toggle="modal" data-target="#myModal">Chalusta Pratama</a></td>
            <td>Admin K3L</td>
          </tr>
          <tr>
            <td>2</td>
            <td><a data-toggle="modal" data-target="#myModal">Derajat Ari W</a></td>
            <td>Kasie K3L Plant</td>
          </tr>
          <tr>
            <td>3</td>
            <td><a data-toggle="modal" data-target="#myModal">Hari</a></td>
            <td>K3 Lapangan</td>
          </tr>
          <tr>
            <td>4</td>
            <td><a data-toggle="modal" data-target="#myModal">Muhammad Yuliansha</a></td>
            <td>K3L WBP Pusat</td>
          </tr>
        </table>
      </div>
      <div class="col-md-12" style="margin-top:20px">
        <button type="button" class="btn btn-success" name="button" style="width:100%">Tambah User</button>
      </div>
      <div class="col-md-12" style="margin-top:10px;">
        <button type="button" class="btn btn-danger" name="button" style="width:100%">Kembali</button>
      </div>
      </div>
    </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail User</h4>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td width="50%">Nama </td>
              <td>: Hari Sugiarto</td>
            </tr>
            <tr>
              <td>Jabatan</td>
              <td>: K3 Lapangan</td>
            </tr>
            <tr>
              <td>Nomor Telpon</td>
              <td>: 085784566522</td>
            </tr>
            <tr>
              <td>Plant</td>
              <td>: Prambon</td>
            </tr>
            <tr>
              <td>Username </td>
              <td>: Harik3lapangan</td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>

    </div>
  </div>
  </body>
  <script src="js/vendor/bootstrap.min.js"></script>
</html>
