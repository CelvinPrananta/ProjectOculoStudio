<?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqlDelete = "DELETE FROM userdata WHERE id='$id'";
    mysqli_query($koneksi, $sqlDelete);
    header("location:/gate/admin/userdata/?pesan=hapuspengguna");
?>