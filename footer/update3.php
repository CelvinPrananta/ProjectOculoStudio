<?php
session_start();
include '../database/footer.php';
$id = $_POST['id'];
$embed_map = $_POST['embed_map'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username = $_POST['username'];
mysqli_query($koneksi,"update lokasi set embed_map='$embed_map', tgl_aktivitas='$tgl_aktivitas', username='$username' where id='$id'");
header("location:/gate/admin/footer/?pesan=perbaharuifooter4");
?>