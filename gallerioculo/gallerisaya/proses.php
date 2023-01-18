<?php
session_start();
include '../../database/galleri.php';
$id = $_POST['id'];
$nama_galleri = $_POST['nama_galleri'];
$keterangan_galleri = $_POST['keterangan_galleri'];
$tipe_keterangan = $_POST['tipe_keterangan'];
$tipe_foto = $_POST['tipe_foto'];
$foto_gallerisaya = $_POST['foto_gallerisaya'];
$tgl_upload = $_POST['tgl_upload'];
$username = $_POST['username'];
$querygalleri = "INSERT INTO gallerisaya VALUES ('$id', '$nama_galleri', '$keterangan_galleri', '$tipe_keterangan', '$tipe_foto', '$foto_gallerisaya', '$tgl_upload', '$username')";
$dataquerygalleri   = mysqli_query($koneksi, $querygalleri);


$id_galleri = $_POST['id_galleri'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$querydetail = "INSERT INTO detail_galleri (id_galleri, keterangan_galleri, tgl_aktivitas, username) VALUES ('$id_galleri', '$keterangan_galleri', '$tgl_aktivitas', '$username')";
$dataquery   = mysqli_query($koneksi, $querydetail);
header("location:/gate/admin/gallerioculo/gallerisaya/?pesan=tambahgalleri");
?>