<?php
session_start();
include '../database/beranda.php';
$namafoto = $_FILES['gambar']['name'];
if($namafoto != null){
    $namafoto = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];	
    $terupload = move_uploaded_file($file_tmp, 'assets/paket_3/'.$namafoto);
}else{
    $namafoto = $_POST['fotolama'];
}

$id = $_POST['id'];
$tgl_uploadfoto = $_POST['tgl_uploadfoto'];
$username = $_POST['username'];
$query = mysqli_query($koneksi,"UPDATE paket3 SET tgl_uploadfoto='$tgl_uploadfoto', username='$username', foto_paket3='$namafoto' where id='$id'");





$keterangan_log = $_POST['keterangan_log'];
date_default_timezone_set("Asia/Jakarta");
$dateLog    = date("Y-m-d H:i:s");
$sqlLog     = "INSERT INTO log_userdata4 (namleng, gender, email, username, foto, tgl, keterangan_log) VALUES ('$namleng', '$gender', '$email', '$username', '$namafoto', '$dateLog', '$keterangan_log')";
$logQuery   = mysqli_query($koneksi, $sqlLog);
header("location:/gate/admin/halaman-utama/?pesan=perbaharuipaket3");
?>