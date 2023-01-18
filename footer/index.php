<?php
    session_start();
    
    // Cek apakah yang mengakses halaman ini sudah login //
    if($_SESSION['level']==""){
        header("location:/gate/?pesan=belum_login");
        exit();
    }

    // Menghubungkan php dengan koneksi database //
    include 'koneksi.php';
    
    // Membuat session username atau email //
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $query = "SELECT * FROM userdata WHERE username = '$username' OR email = '$username'";
    $result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/gate/admin/img/faviconbrand.png" sizes="228×228" type="image/png">
    <title>CMS Oculo Studio | Footer</title>
    <link href="/gate/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/gate/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="notif.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/gate/admin/">
            <div class="sidebar-brand-icon">
                    <img src="/gate/admin/img/brand.png" alt="brand"></img>
                </div>
                <div class="sidebar-brand-text mx-3">CMS Footer</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/">
                <i class="fa fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Jenis Pendataan -->
            <div class="sidebar-heading">Fitur Content</div>
            
            <!-- Nav Item - Halaman Utama -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/halaman-utama/">
                <i class="fa fa-house-laptop"></i>
                    <span>Halaman Utama</span></a>
            </li>
            
            <!-- Nav Item - Galleri -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true"
                    aria-controls="collapsePages2">
                    <i class="fa-solid fa-images"></i>
                    <span>Galleri</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Galleri :</h6>
                        <a class="collapse-item" href="/gate/admin/gallerioculo/gallerisaya/"><b>Galleri Saya</b></a>
                        <a class="collapse-item" href="/gate/admin/gallerioculo/gallerimoment/"><b>Galleri Moments</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Detail Galleri -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="true"
                    aria-controls="collapsePages5">
                    <i class="fa-solid fa-images"></i>
                    <span>Detail</span>
                </a>
                <div id="collapsePages5" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Detail :</h6>
                        <a class="collapse-item" href="/gate/admin/detail/detailgalleri/"><b>Detail Galleri</b></a>
                        <a class="collapse-item" href="/gate/admin/detail/albumdetail/"><b>Album Detail</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Kontak -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/kontak/">
                <i class="fa-solid fa-address-book"></i>
                    <span>Kontak</span></a>
            </li>
            
            <!-- Nav Item - Header -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/header/">
                <i class="fa-solid fa-heading"></i>
                    <span>Header</span></a>
            </li>
            
            <!-- Nav Item - Footer -->
            <li class="nav-item active">
                <a class="nav-link" href="/gate/admin/footer/">
                <i class="fa-solid fa-f"></i>
                    <span>Footer</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Fitur Lainnya</div>
            
            <!-- Nav Item - Data Pengguna -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true"
                    aria-controls="collapsePages3">
                    <i class="fa fa-users"></i>
                    <span>Data Pengguna</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Data Pengguna :</h6>
                        <a class="collapse-item" href="/gate/admin/userdata/"><b>Pengguna</b></a>
                        <a class="collapse-item" href="/gate/admin/userdata/akses/"><b>Konfirmasi Akses</b></a>
                        <a class="collapse-item" href="/gate/admin/userdata/datapribadi/"><b>Profil</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Catatan Aktivitas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true"
                    aria-controls="collapsePages4">
                    <i class="fa-solid fa-list"></i>
                    <span>Catatan Aktivitas</span>
                </a>
                <div id="collapsePages4" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Catatan :</h6>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/halaman-utama/"><b>Halaman Utama</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/galleri/"><b>Galleri</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/kontak/"><b>kontak</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/header/"><b>Header</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/footer/"><b>Footer</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/ulasan/"><b>Ulasan</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/data-pengguna/"><b>Data Pengguna</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/konfirmasi-akses/"><b>Konfirmasi Akses</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/profil/"><b>Profil</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Untuk Update Versi -->
            <hr class="sidebar-divider d-none d-md-block">
            <center><font size="1" color="white"><b>Versi Aplikasi 1.1.2</b></font></center>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-header topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <h6 class="h6 mb-1 text-white"><marquee scrollamount="3" width="230">Selamat datang <b><?= htmlspecialchars($_SESSION['namleng']); ?></b>, anda telah login sebagai <b><?= htmlspecialchars($_SESSION['level']); ?></b></marquee></h6>
                    
                    <ul class="navbar-nav ml-auto">
                    
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white bold-600 small"><b><?= htmlspecialchars($_SESSION['namleng']); ?></b></span>
                                <img class="img-profile rounded-circle" src="/gate/admin/userdata/datapribadi/assets/images/foto/<?= htmlspecialchars($_SESSION['foto']); ?>">
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <font color="#4B8673"><h6 align="center"><b>Login Terakhir : </br><?= date('j M Y',strtotime($_SESSION['firstlogin'])); ?></br><?= date('H:i:s A',strtotime($_SESSION['firstlogin'])); ?></b></h6>
                                 <div class="dropdown-divider"></div></font>
                                <a class="dropdown-item" href="/gate/admin/userdata/datapribadi/">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-green-400"></i>Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-green-400"></i>Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                
                <style>
                    .lingkaran{
                        width: 15px;
                        height: 15px;
                        background: #32CD32	;
                        border-radius: 100%;
                        }
                </style>
    <div class="container-fluid">
        <font color="#4B8673"><h6 align="right"><button type="button" class="lingkaran"></button>&nbsp;<b><?= htmlspecialchars($_SESSION['Status']); ?></b></h6></font>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-primary" align="center">Media Sosial Footer</h5>
                    </div>
                    <div class="card-body">
                                    <?php
                                        if(mysqli_num_rows($result)>0) {
                                        $data_admin = mysqli_fetch_array($result);
                                        $_SESSION["namleng"]   = $data_admin["namleng"];
                                        $_SESSION["gender"]    = $data_admin["gender"];
                                        $_SESSION["email"]     = $data_admin["email"];
                                        $_SESSION["username"]  = $data_admin["username"];
                                        $_SESSION["password"]  = $data_admin["password"];
                                        $_SESSION["foto"]   = $data_admin["foto"];
                                        $_SESSION["firstlogin"]   = $data_admin["firstlogin"];
        
                                        }
                                    ?>
                                    
                                <!-- Script Notif Update Data -->
	                                <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="perbaharuifooter1"){
			                            echo "<div class='alert2'>Data footer telah diperbaharui <i class='fa fa-check'></i></div>";
                                            }
	                                    }
	                                ?></br>
	                            <!-- End Script Notif Update Data -->
                                    
                                    
                                    <?php
                                        include '../database/footer.php';
                                        $querymedsos = "SELECT * FROM mediasosial";
                                        $resultmedsos = mysqli_query($koneksi, $querymedsos);
                                    ?>
                                    <?php
                                        if(mysqli_num_rows($resultmedsos)>0) {
                                        $resl_medsos = mysqli_fetch_array($resultmedsos);
                                        $_SESSION["link_instagram"]   = $resl_medsos["link_instagram"];
                                        $_SESSION["instagram"]    = $resl_medsos["instagram"];
                                        $_SESSION["link_facebook"]     = $resl_medsos["link_facebook"];
                                        $_SESSION["facebook"]  = $resl_medsos["facebook"];
                                        $_SESSION["link_tiktok"]  = $resl_medsos["link_tiktok"];
                                        $_SESSION["tiktok"]   = $resl_medsos["tiktok"];
                                        $_SESSION["tgl_aktivitas"]   = $resl_medsos["tgl_aktivitas"];
                                        }
                                    ?>
                                            <div class="form-group"><b>Link Instagram :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_medsos['link_instagram']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Instagram :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_medsos['instagram']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Link Facebook :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_medsos['link_facebook']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Facebook :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_medsos['facebook']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Link Tiktok :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_medsos['link_tiktok']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Tiktok :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_medsos['tiktok']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Tanggal Pembaharuan :</b>
                                                <h1 class="form-control"><?= date('d F Y | H:i A',strtotime($resl_medsos['tgl_aktivitas'])); ?></h1>
                                            </div>
                                            
                                            <!-- Scrip Modal Perbaharui-->
                                            <a href="" data-toggle="modal" data-target="#myModal1<?= htmlspecialchars($resl_medsos['id']); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit Media Sosial</button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal1<?= htmlspecialchars($resl_medsos['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Perbaharui Media Sosial</h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="update.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id" value="<?= htmlspecialchars("$resl_medsos[id]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Link Instagram</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="link_instagram" rows="2" placeholder="Masukkan link instagram"><?= htmlspecialchars($resl_medsos['link_instagram']); ?></textarea>
                                                <p><font color="red" size="3"><b>*example : https://www.instagram.com/....</b></font></p>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputinstagram" class="col-sm-2 col-form-label">Instagram</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="instagram" value="<?= htmlspecialchars("$resl_medsos[instagram]");?>" placeholder="Masukkan nama instagram">
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Link Facebook</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="link_facebook" rows="2" placeholder="Masukkan link facebook"><?= htmlspecialchars($resl_medsos['link_facebook']); ?></textarea>
                                                <p><font color="red" size="3"><b>*example : https://www.facebook.com/....</b></font></p>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputfacebook" class="col-sm-2 col-form-label">Facebook</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="facebook" value="<?= htmlspecialchars("$resl_medsos[facebook]");?>" placeholder="Masukkan nama facebook">
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Link Tiktok</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="link_tiktok" rows="2" placeholder="Masukkan link tiktok"><?= htmlspecialchars($resl_medsos['link_tiktok']); ?></textarea>
                                                <p><font color="red" size="3"><b>*example : https://www.tiktok.com/@....</b></font></p>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputtiktok" class="col-sm-2 col-form-label">Tiktok</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tiktok" value="<?= htmlspecialchars("$resl_medsos[tiktok]");?>" placeholder="Masukkan nama tiktok">
                                            </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl_aktivitas" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="username" value="<?= htmlspecialchars("$data_admin[username]");?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Perbaharui Media Sosial">
                                            </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>
	                                        </br></br>
	                                <!--End Scrip Modal Perbaharui-->
	                                
	                               <?php
                                        include '../database/footer.php';
                                        $queryhubkam = "SELECT * FROM hubungikami";
                                        $resulthubkam = mysqli_query($koneksi, $queryhubkam);
                                    ?>
                                    <?php
                                        if(mysqli_num_rows($resulthubkam)>0) {
                                        $resl_hubkam = mysqli_fetch_array($resulthubkam);
                                        $_SESSION["link_whatsapp"]   = $resl_hubkam["link_whatsapp"];
                                        $_SESSION["nomor_whatsapp"]    = $resl_hubkam["nomor_whatsapp"];
                                        $_SESSION["email"]     = $resl_hubkam["email"];
                                        $_SESSION["link_gmaps"]  = $resl_hubkam["link_gmaps"];
                                        $_SESSION["nama_alamat"]  = $resl_hubkam["nama_alamat"];
                                        $_SESSION["tgl_aktivitas"]   = $resl_hubkam["tgl_aktivitas"];
                                        }
                                    ?>
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold text-primary" align="center">Hubungi Kami Footer</h5>
                                            </div></br>
                                            
                                <!-- Script Notif Update Data -->
	                                <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="perbaharuifooter2"){
			                            echo "<div class='alert2'>Data footer telah diperbaharui <i class='fa fa-check'></i></div>";
                                            }
	                                    }
	                                ?></br>
	                           <!-- End Script Notif Update Data -->
	                                
                                            <div class="form-group"><b>Link Whatsapp :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_hubkam['link_whatsapp']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Nomor Whatsapp :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_hubkam['nomor_whatsapp']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Email :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_hubkam['email']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Link Google Maps :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_hubkam['link_gmaps']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Alamat :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_hubkam['nama_alamat']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Tanggal Pembaharuan :</b>
                                                <h1 class="form-control"><?= date('d F Y | H:i A',strtotime($resl_hubkam['tgl_aktivitas'])); ?></h1>
                                            </div>
                                            
                                            <!-- Scrip Modal Perbaharui-->
                                            <a href="" data-toggle="modal" data-target="#myModal2<?= htmlspecialchars($resl_hubkam['id']); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit Hubungi Kami</button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal2<?= htmlspecialchars($resl_hubkam['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Perbaharui Hubungi Kami</h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="update1.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id" value="<?= htmlspecialchars("$resl_hubkam[id]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Link Whatsapp</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="link_whatsapp" value="<?= htmlspecialchars("$resl_hubkam[link_whatsapp]");?>" placeholder="Masukkan link whatsapp">
                                                <p><font color="red" size="3"><b>*example : 62812.... (0812 <i class="fa fa-times" aria-hidden="true"></i> | 62812 <i class="fa fa-check" aria-hidden="true"></i>)</b></font></p>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputnomor" class="col-sm-2 col-form-label">Nomor Whatsapp</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nomor_whatsapp" value="<?= htmlspecialchars("$resl_hubkam[nomor_whatsapp]");?>" placeholder="Masukkan nomor whatsapp">
                                                <p><font color="red" size="3"><b>*example : 812-....-.... (0812 <i class="fa fa-times" aria-hidden="true"></i> | 812 <i class="fa fa-check" aria-hidden="true"></i>)</b></font></p>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" value="<?= htmlspecialchars("$resl_hubkam[email]");?>" placeholder="Masukkan email">
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Link Google Maps</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="link_gmaps" rows="2" placeholder="Masukkan link google maps"><?= htmlspecialchars($resl_hubkam['link_gmaps']); ?></textarea>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="nama_alamat" rows="2" placeholder="Masukkan alamat"><?= htmlspecialchars($resl_hubkam['nama_alamat']); ?></textarea>
                                            </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl_aktivitas" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="username" value="<?= htmlspecialchars("$data_admin[username]");?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Perbaharui Hubungi Kami">
                                            </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>
	                                        </br></br>
	                                <!--End Scrip Modal Perbaharui-->
                                            
                                    <?php
                                        include '../database/footer.php';
                                        $querybrand = "SELECT * FROM branding";
                                        $resultbrand = mysqli_query($koneksi, $querybrand);
                                    ?>
                                    <?php
                                        if(mysqli_num_rows($resultbrand)>0) {
                                        $resl_brand = mysqli_fetch_array($resultbrand);
                                        $_SESSION["nama_brand"]   = $resl_brand["nama_brand"];
                                        $_SESSION["keterangan_brand"]    = $resl_brand["keterangan_brand"];
                                        $_SESSION["tgl_aktivitas"]     = $resl_brand["tgl_aktivitas"];
                                        }
                                    ?>
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold text-primary" align="center">Brand Footer</h5>
                                            </div></br>
                                            
                                <!-- Script Notif Update Data -->
                                    <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="perbaharuifooter3"){
			                            echo "<div class='alert2'>Data footer telah diperbaharui <i class='fa fa-check'></i></div>";
                                            }
	                                    }
	                                ?></br>
	                            <!-- End Script Notif Update Data -->
                                    
                                            <div class="form-group"><b>Nama Brand :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_brand['nama_brand']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Keterangan Brand :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_brand['keterangan_brand']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Tanggal Pembaharuan :</b>
                                                <h1 class="form-control"><?= date('d F Y | H:i A',strtotime($resl_brand['tgl_aktivitas'])); ?></h1>
                                            </div>
                                            
                                    <!-- Scrip Modal Perbaharui-->
                                            <a href="" data-toggle="modal" data-target="#myModal3<?= htmlspecialchars($resl_brand['id']); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit Brand</button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal3<?= htmlspecialchars($resl_brand['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Perbaharui Brand</h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="update2.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id" value="<?= htmlspecialchars("$resl_brand[id]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Nama Brand</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_brand" value="<?= htmlspecialchars("$resl_brand[nama_brand]");?>" placeholder="Masukkan nama brand">
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Keterangan Brang</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="keterangan_brand" rows="2" placeholder="Masukkan link google maps"><?= htmlspecialchars($resl_brand['keterangan_brand']); ?></textarea>
                                            </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl_aktivitas" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="username" value="<?= htmlspecialchars("$data_admin[username]");?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Perbaharui Detail Brand">
                                            </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>
	                                        </br></br>
	                                <!--End Scrip Modal Perbaharui-->
	                                    
	                                <?php
                                        include '../database/footer.php';
                                        $querylokasi = "SELECT * FROM lokasi";
                                        $resultlokasi = mysqli_query($koneksi, $querylokasi);
                                    ?>
                                    <?php
                                        if(mysqli_num_rows($resultlokasi)>0) {
                                        $resl_lokasi = mysqli_fetch_array($resultlokasi);
                                        $_SESSION["embed_map"]   = $resl_lokasi["embed_map"];
                                        $_SESSION["tgl_aktivitas"]     = $resl_lokasi["tgl_aktivitas"];
                                        }
                                    ?>
                                            <div class="card-header py-3">
                                                <h5 class="m-0 font-weight-bold text-primary" align="center">Lokasi Halaman Kontak</h5>
                                            </div></br>
                                            
                                <!-- Script Notif Update Data -->
	                                <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="perbaharuifooter4"){
			                            echo "<div class='alert2'>Data footer telah diperbaharui <i class='fa fa-check'></i></div>";
                                            }
	                                    }
	                                ?></br>
	                            <!-- End Script Notif Update Data -->
                                    
                                            <div class="form-group"><b>Embed Map Google Maps :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_lokasi['embed_map']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Tanggal Pembaharuan :</b>
                                                <h1 class="form-control"><?= date('d F Y | H:i A',strtotime($resl_lokasi['tgl_aktivitas'])); ?></h1>
                                            </div>
                                            
                                            <!-- Scrip Modal Perbaharui-->
                                            <a href="" data-toggle="modal" data-target="#myModal4<?= htmlspecialchars($resl_lokasi['id']); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit Lokasi</button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal4<?= htmlspecialchars($resl_lokasi['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Perbaharui Lokasi</h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="update3.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id" value="<?= htmlspecialchars("$resl_lokasi[id]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputlink" class="col-sm-2 col-form-label">Embed Map :</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="embed_map" rows="2" placeholder="Masukkan embed google maps"><?= htmlspecialchars($resl_lokasi['embed_map']); ?></textarea>
                                                <p><font color="red" size="3"><b>*Nb : bagian (< iframe &amp; >< /iframe>) hilangkan serta pada bagian (width="" &amp; height="") dibuat menjadi (width="105%" &amp; height="270") </b></font></p>
                                            </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl_aktivitas" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="username" value="<?= htmlspecialchars("$data_admin[username]");?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="tgl" value="<?= date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Perbaharui Lokasi Kontak">
                                            </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>
	                                        </br></br>
	                                <!--End Scrip Modal Perbaharui-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Copyright 2022 - <?= date('Y') ?></span></br>
                        <span>CMS | Oculo Studio</span></br>
                        <span>All rights reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" dibawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                <a href="logout.php" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                    <button class="btn btn-primarybatal" type="button" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
	    history.pushState({}, "", '/gate/admin/footer/');
	</script>
    <!-- Bootstrap core JavaScript-->
    <script src="https://kit.fontawesome.com/09cdc10ae4.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="/gate/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/gate/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/gate/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="seepass.js"></script>
    <script src="seepass2.js"></script>
    <script src="/gate/admin/js/sb-admin-2.min.js"></script>
</body>
</html>