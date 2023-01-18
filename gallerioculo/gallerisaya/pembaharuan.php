<?php
session_start();
include '../../database/galleri.php';
$id = $_POST['id'];
$nama_galleri = $_POST['nama_galleri'];
$keterangan_galleri = $_POST['keterangan_galleri'];
$tipe_keterangan = $_POST['tipe_keterangan'];
$tipe_foto = $_POST['tipe_foto'];
$tgl_upload = $_POST['tgl_upload'];
$username = $_POST['username'];
$query = mysqli_query($koneksi,"UPDATE gallerisaya SET nama_galleri='$nama_galleri', keterangan_galleri='$keterangan_galleri', tipe_keterangan='$tipe_keterangan', tipe_foto='$tipe_foto',tgl_upload='$tgl_upload', username='$username' where id='$id'");





$keterangan_log = $_POST['keterangan_log'];
date_default_timezone_set("Asia/Jakarta");
$dateLog    = date("Y-m-d H:i:s");
$sqlLog     = "INSERT INTO log_userdata4 (namleng, gender, email, username, foto, tgl, keterangan_log) VALUES ('$namleng', '$gender', '$email', '$username', '$namafoto', '$dateLog', '$keterangan_log')";
$logQuery   = mysqli_query($koneksi, $sqlLog);
header("location:/gate/admin/gallerioculo/gallerisaya/?pesan=perbaharuigalleri");
?>