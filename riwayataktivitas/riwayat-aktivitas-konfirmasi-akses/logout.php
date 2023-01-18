<?php
include "koneksi.php";

session_start();
    $email= $_SESSION["email"];
    $username= $_SESSION["username"];
    $sqlstts = "UPDATE userdata SET Status='Offline' WHERE username='$username' OR email = '$username'";
    $querystts = mysqli_query($koneksi, $sqlstts);
    $date_logout = date('Y-m-d H:i:s', time() + (210 * 120));
    $sql = "UPDATE userdata SET lastlogin ='$date_logout' WHERE username='$username' OR email = '$username'";
    $query = mysqli_query($koneksi, $sql);
    
    $dateLogout = date('Y-m-d H:i:s', time() + (210 * 120));
    $sqlLog = "UPDATE log_userdata SET tgl_logout='$dateLogout' WHERE username='$username' OR email = '$username'";
    $queryLog = mysqli_query($koneksi, $sqlLog);
    session_destroy();
    header("location: /gate/?pesan=logout");
?>