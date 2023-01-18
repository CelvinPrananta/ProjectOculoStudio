<?php
session_start();
include 'koneksi.php';
$id = $_POST['id'];
$level = $_POST['level'];
$username_addlevel = $_POST['username_addlevel'];
$username = $_POST['username'];
$email = $_POST['email'];
$keterangan_log = $_POST['keterangan_log'];
$tgl_perulevel = $_POST['tgl_perulevel'];
mysqli_query($koneksi,"update userdata set level='$level', username_addlevel='$username_addlevel', tgl_perulevel='$tgl_perulevel' where id='$id'");

date_default_timezone_set("Asia/Jakarta");
$dateLog    = date("Y-m-d H:i:s");
$sqlLog     = "INSERT INTO log_userdata3 (username_add, email, username, level, tgl,keterangan_log) VALUES ('$username_addlevel', '$email', '$username', '$level', '$dateLog', '$keterangan_log')";
$logQuery   = mysqli_query($koneksi, $sqlLog);
header("location:/gate/admin/userdata/akses/?pesan=perbaharui-akses");
?>