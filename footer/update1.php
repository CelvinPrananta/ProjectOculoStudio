<?php
session_start();
include '../database/footer.php';
$id = $_POST['id'];
$link_whatsapp = $_POST['link_whatsapp'];
$nomor_whatsapp = $_POST['nomor_whatsapp'];
$email = $_POST['email'];
$link_gmaps = $_POST['link_gmaps'];
$nama_alamat = $_POST['nama_alamat'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username = $_POST['username'];
mysqli_query($koneksi,"update hubungikami set link_whatsapp='$link_whatsapp', nomor_whatsapp='$nomor_whatsapp', email='$email', link_gmaps='$link_gmaps', nama_alamat='$nama_alamat', tgl_aktivitas='$tgl_aktivitas', username='$username' where id='$id'");
header("location:/gate/admin/footer/?pesan=perbaharuifooter2");
?>