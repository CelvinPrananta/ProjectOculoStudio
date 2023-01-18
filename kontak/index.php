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
    <title>CMS Oculo Studio | Kontak</title>
    <link href="/gate/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/gate/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="stylesearch.css" rel="stylesheet">
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
                <div class="sidebar-brand-text mx-3">CMS Kontak</div>
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
            <li class="nav-item active">
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
                        <h5 class="m-0 font-weight-bold text-primary" align="center">Ulasan</h5>
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
                                    
                        <!-- Script Fitur Pencarian -->
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" class="d-flex">
                                <input type="text" name="cari" class="form-control me-2" aria-label="Search" placeholder="Cari nama lengkap, komentar ulasan atau tanggal pengisian">
                                <labelseepass for="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="form-control1" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                </svg>
                                </labelseepass>
                            </form>
                            <?php 
                                if(isset($_GET['cari'])){
	                            $cari = $_GET['cari'];
	                            echo "<font color='#c80000'><b>Hasil pencarian :</b> ".$cari."</font>";
                                }
                            ?>
                        <!-- End Script Fitur Pencarian -->
                        <!-- Script Notif Update Data -->
                        </br>
                                    <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="hapusulasan"){
			                            echo "<div class='alert2'>Data ulasan telah dihapus <i class='fa fa-check'></i></div>";
                                            }
	                                    }
	                                ?>
	                            <!-- End Script Notif Update Data -->
                            <div class="table-responsive">
                                <div class="card-body">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama Lengkap</center></th>
                                            <th><center>Komentar Ulasan</center></th>
                                            <th><center>Tanggal Pengisian</center></th>
                                            <th><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include '../database/kontak.php';
				                        $batas = 10;
				                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
			                        	$Sebelum = $halaman - 1;
			                        	$lanjut = $halaman + 1;
				                        $id = 1;
				                        $data = mysqli_query($koneksi,"select * from ulasan");
				                        $jumlah_data = mysqli_num_rows($data);
				                        $total_halaman = ceil($jumlah_data / $batas);
				                        $sql = mysqli_query($koneksi,"select * from ulasan limit $halaman_awal, $batas");
				                        $id= $halaman_awal+1;
				                        
				                        if(isset($_GET['cari'])){
		                                $cari = $_GET['cari'];
		                                $sql = mysqli_query($koneksi,"SELECT * FROM ulasan WHERE namleng like '%".$cari."%' OR komen_ulasan like '%".$cari."%' OR tgl_ulasan like '%".$cari."%' ORDER BY id ASC");
	                                    }else{
		                                $data = mysqli_query($koneksi,"SELECT * FROM ulasan ORDER BY id ASC");
	                                    }
	                                    
	                                    if(mysqli_num_rows($sql)){
			                        	while($resl = mysqli_fetch_array($sql)){
				                	?>
                                        <tr>
                                            <th><center><?php echo htmlspecialchars($id++); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl['namleng']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl[ 'komen_ulasan']); ?></center></th>
                                            <th><center><?php echo date('d F Y | H:i A',strtotime($resl['tgl_ulasan'])); ?></center></th>
                                            <th><center>
                                                <!-- Scrip Modal Hapus-->
                                            <a href="" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?php echo htmlspecialchars($resl['id']); ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal<?php echo htmlspecialchars($resl['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">  
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Hapus data</h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <p>Yakin akan dihapus?</p>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <a href='delete.php?id=<?= htmlspecialchars($resl['id']) ?>' class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus</a>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
			                                </div>
		                                    </div>
	                                        </div>
	                                    <!-- End Scrip Modal Hapus-->
	                                    </center></th>
                                        </tr>
                                        <?php
                                            }}else{
                                                echo '<tr><th colspan="5"><center><font color="#c80000">Tidak ada data, silahkan masukkan nama lengkap, komentar ulasan & tanggal pengisian kembali &#128522;</font></center></th></tr>';
                                            }?>
                                    </tbody>
                                </table>
                                <p><font color="blue" size="4"><b>Nb :</b></font></br><font color="blue" size="3">Format pencarian dengan tanggal <b>(tahun - bulan - tanggal)</b></font></p>
                                <!-- Script menampilkan total data -->               
                                    <?php 
                                        $tampil = "SELECT * FROM ulasan";
                                        $hasil = mysqli_query($koneksi,$tampil);
                                        $jmldata= mysqli_num_rows($hasil);
                                        $jmlhalaman = ceil($jmldata/$batas);
                                        echo "<b><font color='#c80000'>Jumlah Data : $jmldata</font></b>";
                                    ?>
                                <!-- End Script menampilkan total data -->
                                    </br>
                                    </br>
                                <!-- Navigasi Pindah Slide -->
                                <nav>
			                        <ul class="pagination justify-content-center">
				                        <li class="page-item">
					                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Sebelum'"; } ?>><b>&laquo;</b></a>
				                        </li>
				                    <?php 
				                        for($x=1;$x<=$total_halaman;$x++){
					                ?> 
					                    <li class="page-item">
					                    <a class="page-link" href="?halaman=<?php echo htmlspecialchars($x) ?>"><?php echo htmlspecialchars($x); ?></a>
					                    </li>
					                <?php
				                    }
				                    ?>				
				                        <li class="page-item">
					                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$lanjut'"; } ?>><b>&raquo;</b></a>
				                        </li>
			                        </ul>
		                        </nav>
		                        <!-- End Navigasi Pindah Slide -->
		                        
                            </div>
                        </div>
                <!-- End Form Table -->
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
	    history.pushState({}, "", '/gate/admin/kontak/');
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