<?php 
    include '../database/kontak.php';
    $id = $_GET['id'];
    $sqlDelete = "DELETE FROM ulasan WHERE id='$id'";
    mysqli_query($koneksi, $sqlDelete);
    header("location:/gate/admin/kontak/?pesan=hapusulasan");
?>