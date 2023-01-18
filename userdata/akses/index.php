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
    <link rel="icon" href="/gate/admin/brand.png" type="image/png">
    <title>Home | Monitoring - Konfirmasi Akses</title>
    <link href="/gate/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/gate/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
                    <img src="/gate/admin/brand.png" alt="brand"></img>
                </div>
                <div class="sidebar-brand-text mx-3">Monitoring Akses</div>
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
            <div class="sidebar-heading">Fitur Monitoring</div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book"></i>
                    <span>Pendataan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Pendataan :</h6>
                        <a class="collapse-item" href="/gate/admin/pendataan/koloni/"><b>Koloni</b></a>
                        <a class="collapse-item" href="/gate/admin/pendataan/vegetasi/"><b>Vegetasi</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Statistik Koloni -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/statistikkoloni/">
                <i class="fas fa-fw fa-chart-area" aria-hidden="true"></i>
                    <span>Statistik Koloni</span></a>
            </li>
                
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">Fitur Lainnya</div>
            
            <!-- Nav Item - Kritik & Saran -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/kritik-saran/">
                <i class="fa fa-comments" aria-hidden="true"></i>
                    <span>Kritik &amp; Saran</span></a>
            </li>

            <!-- Nav Item - QR Code Koloni -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/qrcode/generateqrcode/">
                <i class="fa fa-qrcode" aria-hidden="true"></i>
                    <span>QR Code (Koloni)</span></a>
            </li>
            
            
            <!-- Nav Item - QR Code Vegetasi -->
            <li class="nav-item">
                <a class="nav-link" href="/gate/admin/qrcode/generateqrcode2/">
                <i class="fa fa-qrcode" aria-hidden="true"></i>
                    <span>QR Code (Vegetasi)</span></a>
            </li>
            
            <!-- Nav Item - Data Pengguna -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true"
                    aria-controls="collapsePages3">
                    <i class="fa fa-users"></i>
                    <span>Data Registrasi</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Data Registrasi :</h6>
                        <a class="collapse-item" href="/gate/admin/userdata/"><b>Data Pengguna</b></a>
                        <a class="collapse-item active" href="/gate/admin/userdata/akses/"><b>Konfirmasi Akses</b></a>
                        <a class="collapse-item" href="/gate/admin/userdata/datapribadi/"><b>Data Pribadi</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Catatan Aktivitas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4" aria-expanded="true"
                    aria-controls="collapsePages4">
                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                    <span>Catatan Aktivitas</span>
                </a>
                <div id="collapsePages4" class="collapse" aria-labelledby="headingPages3"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Catatan :</h6>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-koloni/"><b>Koloni</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-vegetasi/"><b>Vegetasi</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-kritik&amp;saran/"><b>Kritik & Saran</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-qrcode-koloni/"><b>QR Code (Koloni)</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-qrcode-vegetasi/"><b>QR Code (Vegetasi)</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-pengguna/"><b>Pengguna</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-konfirmasi-akses/"><b>Konfirmasi Akses</b></a>
                        <a class="collapse-item" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-profil/"><b>Data Pribadi</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Untuk Update Versi -->
            <hr class="sidebar-divider d-none d-md-block">
            <center><font size="1" color="white"><b>Versi Aplikasi 2.1.0</b></font></center>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
                    <?php
                                        if(mysqli_num_rows($result)>0) {
                                        $data_admin = mysqli_fetch_array($result);
                                        $_SESSION["username"]   = $data_admin["username"];
                                        $_SESSION["namleng"]   = $data_admin["namleng"];
                                        $_SESSION["level"]  = $data_admin["level"];
                                        $_SESSION["foto"]   = $data_admin["foto"];
                                        $_SESSION["Status"]   = $data_admin["Status"];
        
                                        }
                                    ?>
                    <!-- Topbar Navbar -->
                    <h6 class="h6 mb-1 text-white"><marquee scrollamount="3" width="230">Selamat datang <b><?php echo htmlspecialchars($_SESSION['namleng']); ?></b>, anda telah login sebagai <b><?php echo htmlspecialchars($_SESSION['level']); ?></b></marquee></h6>
                    
                    <ul class="navbar-nav ml-auto">
                        
                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white bold-600 small"><b><?php echo htmlspecialchars($_SESSION['namleng']); ?></b></span>
                                <img class="img-profile rounded-circle" src="/gate/admin/userdata/datapribadi/assets/images/foto/<?php echo htmlspecialchars($_SESSION['foto']); ?>"></img>
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <font color="#4B8673"><h6 align="center"><b>Login Terakhir : </br><?php echo date('j M Y',strtotime($_SESSION['firstlogin'])); ?></br><?php echo date('H:i:s A',strtotime($_SESSION['firstlogin'])); ?></b></h6>
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <style>
                    .lingkaran{
                        width: 15px;
                        height: 15px;
                        background: #32CD32	;
                        border-radius: 100%;
                        }
                    </style>
                    
                    <font color="#4B8673"><h6 align="right"><button type="button" class="lingkaran"></button>&nbsp;<b><?php echo htmlspecialchars($_SESSION['Status']); ?></b></h6></font>

                    <!-- Page Heading -->
                    <h1 class="h4 mb-2 text-gray-800">Data Konfirmasi Akses</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        <!-- Script Fitur Pencarian -->
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" class="d-flex">
                                <input type="text" name="cari" class="form-control me-2" aria-label="Search" placeholder="Cari email, nama pengguna atau jabatan">
                                <labelsearch for="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="form-control1" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                </svg>
                                </labelsearch>
                            </form>
                            <?php 
                                if(isset($_GET['cari'])){
	                            $cari = $_GET['cari'];
	                            echo "<b>Hasil pencarian :</b> ".$cari."";
                                }
                            ?>
                        <!-- End Script Fitur Pencarian -->
                        </div>
                        
                        <div class="card-body">
                            <!-- Script Notif Update Data -->
                                    <?php 
	                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan']=="perbaharui-akses"){
			                            echo "<div class='alert2'>Data konfirmasi akses telah diperbaharui <i class='fa fa-check'></i></div>";
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
                                            <th><center>Email</center></th>
                                            <th><center>Nama Pengguna</center></th>
                                            <th><center>Jabatan</center></th>
                                            <th><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
				                        $batas = 10;
				                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
			                        	$Sebelum = $halaman - 1;
			                        	$lanjut = $halaman + 1;
				                        $id = 1;
				                        $data = mysqli_query($koneksi,"select * from userdata");
				                        $jumlah_data = mysqli_num_rows($data);
				                        $total_halaman = ceil($jumlah_data / $batas);
				                        $sql = mysqli_query($koneksi,"select * from userdata limit $halaman_awal, $batas");
				                        $id= $halaman_awal+1;
				                        
				                        if(isset($_GET['cari'])){
		                                $cari = $_GET['cari'];
		                                $sql = mysqli_query($koneksi,"SELECT * FROM userdata WHERE email like '%".$cari."%' OR username like '%".$cari."%' OR level like '%".$cari."%' ORDER BY id ASC");
	                                    }else{
		                                $data = mysqli_query($koneksi,"SELECT * FROM userdata ORDER BY id ASC");
	                                    }
	                                    
	                                    if(mysqli_num_rows($sql)){
			                        	while($resl = mysqli_fetch_array($sql)){
				                	?>
                                        <tr>
                                            <th><center><?php echo htmlspecialchars($id++); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl['email']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl['username']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl[ 'level']); ?></center></th>
                                            <th><center>
                                                
                                        <!-- Scrip Modal Perbaharui-->
                                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal1<?php echo htmlspecialchars($resl['id']); ?>"><i class="fas fa-edit"></i> Perbaharui</a>
	                                        <!-- Modal -->
	                                        <div class="modal fade" id="myModal1<?php echo htmlspecialchars($resl['id']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
		                                    <div class="modal-dialog">
			                                <!-- konten modal-->
			                                <div class="modal-content">
				                            <!-- heading modal -->
				                            <div class="modal-header">
				                                <h5 class="modal-title">Perbaharui Data</h5>
					                            <button type="button" class="close" data-dismiss="modal">&times;</button>
				                            </div>
				                            <!-- body modal -->
				                            <div class="modal-body">
				                                <form method="POST" action="update.php">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="inputid" readonly="" name="id" value="<?php echo htmlspecialchars("$resl[id]");?>">
                    </div>
                <div class="row mb-3">
                    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputemail" readonly="" name="email" value="<?php echo htmlspecialchars("$resl[email]");?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputusername" class="col-sm-2 col-form-label">Nama Pengguna</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputusername" readonly="" name="username" value="<?php echo htmlspecialchars("$resl[username]");?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputlevel" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                    <select name="level" value="<?php echo htmlspecialchars("$resl[level]");?>" class="form-control" id="inputlevel" class="form-select" required>
                    <option value="" disabled selected>Pilih Kategori Jabatan</option>
                    <option value="admin">Admin</option>
                    <option value="author">Author</option>
                    <option value="member">Member</option>
                    </select>
                    </div>
                </div>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="tgl_perulevel" value="<?php echo date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                </div>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="username_addlevel" value="<?php echo htmlspecialchars("$data_admin[username]");?>">
                </div>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="keterangan_log" value="Perbaharui Jabatan">
                </div>
				                            </div>
				                            <!-- footer modal -->
				                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
 Simpan</button>
                                                <button type="button" class="btn btn-primarybatal" data-dismiss="modal"><i class="fas fa-ban"></i> Batal</button>
                                            </div>
                                            </form>
			                                </div>
		                                    </div>
	                                        </div>
	           <!--End Scrip Modal Perbaharui-->                             
	                                            
	                                        </center></th>
                                        </tr>
                                        <?php
                                            }}else{
                                                echo '<tr><th colspan="8"><center><font color="FF0000">Tidak ada data, silahkan masukkan email, nama pengguna & jabatan kembali &#128522;</font></center></th></tr>';
                                            }?>
                                    </tbody>
                                </table>
                                
                                <!-- Script menampilkan total data -->               
                                    <?php 
                                        $tampil = "SELECT * FROM userdata    ";
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
                    </div>
                <!-- End Form Table -->
                    
                </div>
            </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022 - <?= date('Y') ?> Monitoring | PPK Ormawa</span></br>
                         <a href="http://websitehmftunipma.rf.gd/" class="text-muted" target="_blank">Himpunan Mahasiswa Fakultas Teknik</a> | </span>All rights reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
	    history.pushState({}, "", '/gate/admin/userdata/akses');
	</script>
    <!-- Bootstrap core JavaScript-->
    <script src="/gate/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/gate/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/gate/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/gate/admin/js/sb-admin-2.min.js"></script>
</body>
</html>