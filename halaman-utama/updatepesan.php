<?php
session_start();
include '../database/beranda.php';
$id = $_POST['id'];
$link_whatsapp = $_POST['link_whatsapp'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username = $_POST['username'];
mysqli_query($koneksi,"update pesan set link_whatsapp='$link_whatsapp', tgl_aktivitas='$tgl_aktivitas', username='$username' where id='$id'");
header("location:/gate/admin/halaman-utama/?pesan=perbaharuipesan");
?>