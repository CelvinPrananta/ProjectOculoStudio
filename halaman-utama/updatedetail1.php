<?php
session_start();
include '../database/beranda.php';
$id = $_POST['id'];
$nama_paket = $_POST['nama_paket'];
$keterangan_paket = $_POST['keterangan_paket'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username_detail = $_POST['username_detail'];
mysqli_query($koneksi,"update paket1 set nama_paket='$nama_paket', keterangan_paket='$keterangan_paket', tgl_aktivitas='$tgl_aktivitas', username_detail='$username_detail' where id='$id'");
header("location:/gate/admin/halaman-utama/?pesan=perbaharuipaket1");
?>