<?php
// Intialize and Clasified by Id
include "koneksi.php";
$id        = $_REQUEST['id'];

if ($id == "insert") {
  // Get data from Inspeksi
  $nama      = $_POST['nama'];
  $tanggal   = date("d/m/Y", strtotime($_POST['tanggal']));
  $inspeksi  = $_POST['inspeksi'];
  $pic       = $_POST['pic'];
  $lokasi    = $_POST['lokasi'];
  $alat      = $_POST['alat'];

  // Get Data From Checklist
  $a1 = $_POST['a'];
  $a2 = $_POST['b'];
  $a3 = $_POST['c'];
  $a4 = $_POST['d'];
  $a5 = $_POST['e'];
  $a6 = $_POST['f'];
  $a7 = $_POST['g'];
  $a8 = $_POST['h'];
  $a9 = $_POST['i'];
  $a10 = $_POST['j'];
  $a11 = $_POST['k'];
  $a12 = $_POST['l'];
  $a13 = $_POST['m'];
  $a14 = $_POST['n'];
  $a15 = $_POST['o'];
  $a16 = $_POST['p'];
  $a17 = $_POST['q'];
  $a18 = $_POST['r'];

  // Make Array From $checklist
  $a18 = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18 ];

  // Convert into Json
  $checklist  = json_encode($a18);

  // Insert Database
  $ins        = mysqli_query($connect, "INSERT INTO `inspeksi` (`no`, `nama`, `tanggal`, `inspeksi`, `pic`, `lokasi`, `alat`, `checklist`) VALUES (NULL, '$nama', '$tanggal', '$inspeksi', '$pic', '$lokasi', '$alat', '$checklist');");
  echo "<script>window.location = '../index.php';</script>";
} else {

}



 ?>
