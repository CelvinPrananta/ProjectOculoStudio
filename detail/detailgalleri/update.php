<?php
session_start();
include '../../database/galleri.php';
$id_galleri = $_POST['id_galleri'];
$keterangan_galleri = $_POST['keterangan_galleri'];
$keterangan_detail = $_POST['keterangan_detail'];
$tgl_aktivitas = $_POST['tgl_aktivitas'];
$username = $_POST['username'];
$querydetail = "UPDATE detail_galleri SET keterangan_galleri='$keterangan_galleri', keterangan_detail='$keterangan_detail', tgl_aktivitas='$tgl_aktivitas', username='$username' where id_galleri='$id_galleri'";
$sqldetail = mysqli_query($koneksi, $querydetail);
header("location:/gate/admin/detail/detailgalleri/?pesan=perbaharuidetail");
?>