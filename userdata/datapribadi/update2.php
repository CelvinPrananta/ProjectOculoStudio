<?php
session_start();
include 'koneksi.php';
$id = $_POST['id'];
$password = md5($_POST['password']);
mysqli_query($koneksi,"update userdata set password='$password' where id='$id'");
header("location:/gate/admin/userdata/datapribadi/?pesan=updatekatasandi");
?>