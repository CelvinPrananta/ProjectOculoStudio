<?php
session_start();
include '../database/footer.php';
$id = $_POST['id'];
$link_instagram = $_POST['link_instagram'];
$instagram = $_POST['instagram'];
$link_facebook = $_POST['link_facebook'];
$facebook = $_POST['facebook'];
$link_tiktok = $_POST['link_tiktok'];
$tiktok = $_POST['tiktok'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username = $_POST['username'];
mysqli_query($koneksi,"update mediasosial set link_instagram='$link_instagram', instagram='$instagram', link_facebook='$link_facebook', facebook='$facebook', link_tiktok='$link_tiktok', tiktok='$tiktok', tgl_aktivitas='$tgl_aktivitas', username='$username' where id='$id'");
header("location:/gate/admin/footer/?pesan=perbaharuifooter1");
?>