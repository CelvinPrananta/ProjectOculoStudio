<?php
session_start();
include 'koneksi.php';
$namafoto = $_FILES['gambar']['name'];
if($namafoto != null){
    $namafoto = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];	
    $terupload = move_uploaded_file($file_tmp, 'assets/images/foto/'.$namafoto);
}else{
    $namafoto = $_POST['fotolama'];
}
$id = $_POST['id'];
$namleng = $_POST['namleng'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$username = $_POST['username'];
$tgl_uploadfoto = $_POST['tgl_uploadfoto'];
$query = mysqli_query($koneksi,"UPDATE userdata SET namleng='$namleng', gender='$gender', email='$email', username='$username', tgl_uploadfoto='$tgl_uploadfoto', foto='$namafoto' where id='$id'");
$keterangan_log = $_POST['keterangan_log'];
date_default_timezone_set("Asia/Jakarta");
$dateLog    = date("Y-m-d H:i:s");
$sqlLog     = "INSERT INTO log_userdata4 (namleng, gender, email, username, foto, tgl, keterangan_log) VALUES ('$namleng', '$gender', '$email', '$username', '$namafoto', '$dateLog', '$keterangan_log')";
$logQuery   = mysqli_query($koneksi, $sqlLog);
header("location:/gate/admin/userdata/datapribadi/?pesan=updatedatapribadi");
?>