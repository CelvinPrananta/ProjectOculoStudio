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
    <title>CMS Oculo Studio | Halaman Utama</title>
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
                <div class="sidebar-brand-text mx-3">CMS Halaman Utama</div>
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages5" aria-expanded="true"
                    aria-controls="collapsePages5">
                    <i class="fa-solid fa-images"></i>
                    <span>Detail</span>
                </a>
                <div id="collapsePages5" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Detail :</h6>
                        <a class="collapse-item active" href="/gate/admin/detail/detailgalleri/"><b>Detail Galleri</b></a>
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
            <li class="nav-item">
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
                        <h5 class="m-0 font-weight-bold text-primary" align="center">Detail Galleri</h5>
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
                                        if($_GET['pesan']=="perbaharuidetail"){
			                                echo "<div class='alert'>Data detail telah diperbaharui <i class='fa fa-check'></i></div>";
                                        }else if($_GET['pesan'] == "uploadfoto"){
                                            echo "<div class='alert'>Upload foto telah berhasil <i class='fa fa-check'></i></div>";
                                        }else if($_GET['pesan'] == "uploadvideo"){
                                            echo "<div class='alert'>Unggah video telah berhasil <i class='fa fa-check'></i></div>";
                                            }
	                                    }
	                                ?></br>
	                            <!-- End Script Notif Update Data -->
	                                        <?php
                                                $id_galleri = 1;
                                                include '../../database/galleri.php';
                                                $data_detail = mysqli_query($koneksi, "SELECT * FROM detail_galleri");
                                                while($resl_detail = mysqli_fetch_array($data_detail)){
                                            ?>
                                            <div class="form-group"><b>Nama Pasangan :</b>
                                                <h1 class="form-control"><?= htmlspecialchars($resl_detail['keterangan_galleri']); ?></h1>
                                            </div>
                                            <div class="form-group"><b>Keterangan Detail :</b>
                                                <textarea class="form-control" rows="2"><?= htmlspecialchars($resl_detail['keterangan_detail']); ?></textarea>
                                            </div>
                                            <div class="form-group"><b>Tanggal Pembaharuan :</b>
                                                <h1 class="form-control"><?= date('d F Y | H:i A',strtotime($resl_detail['tgl_aktivitas'])); ?></h1>
                                            </div>
                                            <p><font color="red" size="3"><b>Catatan Penting :</b></br>Silahkan mengupload video hanya 1x saja.</br>Selanjutnya dapat merubah isi video</br>ataupun upload thumbnail pada fitur <a href="/gate/admin/detail/albumdetail/">Album Detail.</a></font></p>
                                            
                                        <!-- Scrip Modal Perbaharui-->
                                            <a href="" data-toggle="modal" data-target="#myModal<?= htmlspecialchars($resl_detail['id_galleri']); ?>"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i> Edit Detail <?= htmlspecialchars($resl_detail['id_galleri']); ?></button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal<?= htmlspecialchars($resl_detail['id_galleri']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Perbaharui Detail <?= htmlspecialchars($resl_detail['id_galleri']); ?></h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="update.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id_galleri" value="<?= htmlspecialchars("$resl_detail[id_galleri]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputnamapaket" class="col-sm-2 col-form-label">Nama Pasangan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="keterangan_galleri" value="<?= htmlspecialchars("$resl_detail[keterangan_galleri]");?>" placeholder="Masukkan nama pasangan">
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputketpaket" class="col-sm-2 col-form-label">Keterangan Detail</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="keterangan_detail" rows="2" placeholder="Masukkan keterangan detail"><?= htmlspecialchars($resl_detail['keterangan_detail']); ?></textarea>
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
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Perbaharui Detail Galleri">
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
	                                        </div>&nbsp;
	                                <!--End Scrip Modal Perbaharui-->
	                                
	                                <!-- Scrip Modal Upload-->
                                            <a href="" data-toggle="modal" data-target="#myModal4<?= htmlspecialchars($resl_detail['id_galleri']); ?>"><button type="button" class="btn btn-success"><i class="fa fa-upload" aria-hidden="true"></i> Upload Foto <?= htmlspecialchars($resl_detail['id_galleri']); ?></button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal4<?= htmlspecialchars($resl_detail['id_galleri']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Upload Foto <?= htmlspecialchars($resl_detail['id_galleri']); ?></h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="proses.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id_foto" value="<?= htmlspecialchars("$resl_detail[id_galleri]");?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="keterangan_galleri" value="<?= htmlspecialchars("$resl_detail[keterangan_galleri]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputfotoprofil" class="col-sm-2 col-form-label">Upload Foto</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image[]" class="form-control" multiple />
                                                <p><font color="red" size="3"><b>*upload foto kembali apabila menambah foto</b></font></p>
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
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Upload Foto Detail">
                                            </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>&nbsp;
	                                <!--End Scrip Modal Upload-->
	                                
	                               <!-- Scrip Modal Upload Video-->
                                            <a href="" data-toggle="modal" data-target="#myModal3<?= htmlspecialchars($resl_detail['id_galleri']); ?>"><button type="button" class="btn btn-success"><i class="fa fa-upload" aria-hidden="true"></i> Upload Video <?= htmlspecialchars($resl_detail['id_galleri']); ?></button></a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal3<?= htmlspecialchars($resl_detail['id_galleri']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Upload Video <?= htmlspecialchars($resl_detail['id_galleri']); ?></h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form class="forms-sample" action="upload.php" method="POST" enctype="multipart/form-data">
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="id_video" value="<?= htmlspecialchars("$resl_detail[id_galleri]");?>">
                                            </div>
                                            <div class="col-sm-10">
                                                <input type="hidden" class="form-control" readonly="" name="keterangan_galleri" value="<?= htmlspecialchars("$resl_detail[keterangan_galleri]");?>">
                                            </div>
                                            <div class="row mb-3">
                                                <label for="inputfotoprofil" class="col-sm-2 col-form-label">Upload Video</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="my_video" class="form-control">
                                                <p><font color="red" size="3"><b>*Upload video disarankan mengupload 1x saja</b></font></p>
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
                                                <input type="hidden" class="form-control" name="keterangan_log" value="Upload Video Detail">
                                            </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" name="unggah" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>
	                                        </br></br></br>
	                                        <?php
                                                }
                                            ?>
	                                <!--End Scrip Modal Upload Video-->
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
	    history.pushState({}, "", '/gate/admin/detail/detailgalleri/');
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