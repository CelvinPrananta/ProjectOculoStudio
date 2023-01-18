<?php
session_start();
include '../database/header.php';
$id = $_POST['id'];
$nama_brand = $_POST['nama_brand'];
$keterangan_brand = $_POST['keterangan_brand'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username = $_POST['username'];
mysqli_query($koneksi,"update branding set nama_brand='$nama_brand', keterangan_brand='$keterangan_brand', tgl_aktivitas='$tgl_aktivitas', username='$username' where id='$id'");
header("location:/gate/admin/header/?pesan=perbaharuiheader2");
?>