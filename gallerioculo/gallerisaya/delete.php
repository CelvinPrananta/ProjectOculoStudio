<?php 
    include '../../database/galleri.php';
    $id = $_GET['id'];
    $sqlDelete = "DELETE FROM gallerisaya WHERE id='$id'";
    mysqli_query($koneksi, $sqlDelete);
    header("location:/gate/admin/gallerioculo/gallerisaya/?pesan=hapusgalleri");
?>