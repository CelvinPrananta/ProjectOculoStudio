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
    <title>Home | Monitoring - Catatan Aktivitas</title>
    <link href="/gate/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="/gate/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
                <div class="sidebar-brand-text mx-3">Monitoring Aktivitas</div>
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
            <li class="nav-item">
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
                        <a class="collapse-item" href="/gate/admin/userdata/akses/"><b>Konfirmasi Akses</b></a>
                        <a class="collapse-item" href="/gate/admin/userdata/datapribadi/"><b>Data Pribadi</b></a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Catatan Aktivitas -->
            <li class="nav-item active">
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
                        <a class="collapse-item active" href="/gate/admin/riwayataktivitas/riwayat-aktivitas-pengguna/"><b>Pengguna</b></a>
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
                                        $_SESSION["email"]   = $data_admin["email"];
                                        $_SESSION["namleng"]   = $data_admin["namleng"];
                                        $_SESSION["level"]  = $data_admin["level"];
                                        $_SESSION["foto"]   = $data_admin["foto"];
        
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
                            <font color="#4B8673"><h6 align="center"><b>Login Terakhir : </br><?php echo date('j M Y',strtotime($_SESSION['firstlogin'])); ?></br><?php echo date('H:i:s A',strtotime($_SESSION['firstlogin'])); ?></b></h6></font>
                                 <div class="dropdown-divider"></div>
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

                <!-- Aktivitas Bagian Ke-1 -->
                <!-- Begin Page Content -->
            <section id="riwayat" class="container-fluid">
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
                    <h1 class="h4 mb-2 text-gray-800">Data Pengguna</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <!-- Script Fitur Pencarian -->
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" class="d-flex">
                                <input type="text" name="cari" class="form-control me-2" aria-label="Search" placeholder="Cari nama pengguna atau status">
                                <labelsearch0 for="search0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="form-control0" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                </svg>
                                </labelsearch0>
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
                            <div class="table-responsive">
                                <div class="card-body">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama Pengguna</center></th>
                                            <th><center>Status</center></th>
                                            <th><center>Login Masuk</center></th>
                                            <th><center>Login Keluar</center></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
				                        $batas = 5;
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
		                                $sql = mysqli_query($koneksi,"SELECT * FROM userdata WHERE username like '%".$cari."%' OR Status like '%".$cari."%' ORDER BY id ASC");
	                                    }else{
		                                $data = mysqli_query($koneksi,"SELECT * FROM userdata ORDER BY id ASC");
	                                    }
	                                    
	                                    if(mysqli_num_rows($sql)){
			                        	while($resl = mysqli_fetch_array($sql)){
				                	?>
                                        <tr>
                                            <th><center><?php echo htmlspecialchars($id++); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl[ 'username']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl[ 'Status']); ?></center></th>
                                            <th><center><?php echo date('d-m-Y | H:i:s',strtotime($resl['firstlogin'])); ?></center></th>
                                            <th><center><?php echo date('d-m-Y | H:i:s',strtotime($resl['lastlogin'])); ?></center></th>
                                        </tr>
                                        <?php
                                            }}else{
                                                echo '<tr><th colspan="5"><center><font color="FF0000">Tidak ada data, silahkan masukkan nama pengguna & status kembali &#128522;</font></center></th></tr>';
                                            }?>
                                    </tbody>
                                </table>
                                
                                <!-- Script menampilkan total data -->               
                                    <?php 
                                        $tampil = "SELECT * FROM userdata";
                                        $hasil = mysqli_query($koneksi,$tampil);
                                        $jmldata = mysqli_num_rows($hasil);
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
            </section>
                <!-- /.container-fluid -->
                
                <!-- Aktivitas Bagian Ke-1 -->
                <!-- Begin Page Content -->
            <section id="riwayat" class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h4 mb-2 text-gray-800">Aktivitas Tambah Pengguna</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <!-- Script Fitur Pencarian -->
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" class="d-flex">
                                <input type="text" name="cari1" class="form-control me-2" aria-label="Search" placeholder="Cari penyunting, email, nama lengkap atau nama pengguna">
                                <labelsearch0 for="search0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="form-control0" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                </svg>
                                </labelsearch0>
                            </form>
                            <?php 
                                if(isset($_GET['cari1'])){
	                            $cari1 = $_GET['cari1'];
	                            echo "<b>Hasil pencarian :</b> ".$cari1."";
                                }
                            ?>
                        <!-- End Script Fitur Pencarian -->
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Penyunting</center></th>
                                            <th><center>Email</center></th>
                                            <th><center>Nama Lengkap</center></th>
                                            <th><center>Jenis Kelamin</center></th>
                                            <th><center>Nama Pengguna</center></th>
                                            <th><center>Tanggal Aktivitas</center></th>
                                            <th><center>Jenis Aktivitas</center></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
				                        $batas1 = 5;
				                        $halaman1 = isset($_GET['halaman1'])?(int)$_GET['halaman1'] : 1;
				                        $halaman_awal1 = ($halaman1>1) ? ($halaman1 * $batas1) - $batas1 : 0;
			                        	$Sebelum1 = $halaman1 - 1;
			                        	$lanjut1 = $halaman1 + 1;
				                        $id_log = 1;
				                        $data1 = mysqli_query($koneksi,"select * from log_userdata2");
				                        $jumlah_data1 = mysqli_num_rows($data1);
				                        $total_halaman1 = ceil($jumlah_data1 / $batas1);
				                        $sql1 = mysqli_query($koneksi,"select * from log_userdata2 limit $halaman_awal1, $batas1");
				                        $id_log= $halaman_awal1+1;
				                        
				                        if(isset($_GET['cari1'])){
		                                $cari1 = $_GET['cari1'];
		                                $sql1 = mysqli_query($koneksi,"SELECT * FROM log_userdata2 WHERE username_add like '%".$cari1."%' OR email like '%".$cari1."%' OR namleng like '%".$cari1."%' OR username like '%".$cari1."%' ORDER BY id_log ASC");
	                                    }else{
		                                $data1 = mysqli_query($koneksi,"SELECT * FROM log_userdata2 ORDER BY id_log ASC");
	                                    }
	                                    
	                                    if(mysqli_num_rows($sql1)){
			                        	while($resl1 = mysqli_fetch_array($sql1)){
				                	?>
                                        <tr>
                                            <th><center><?php echo htmlspecialchars($id_log++); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl1[ 'username_add']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl1[ 'email']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl1[ 'namleng']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl1[ 'gender']); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl1[ 'username']); ?></center></th>
                                            <th><center><?php echo date('d F Y | H:i A',strtotime($resl1['tgl'])); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl1[ 'keterangan_log']); ?></center></th>
                                        </tr>
                                        <?php
                                            }}else{
                                                echo '<tr><th colspan="8"><center><font color="FF0000">Tidak ada data, silahkan masukkan penyunting, email, nama lengkap & nama pengguna kembali &#128522;</font></center></th></tr>';
                                            }?>
                                    </tbody>
                                </table>
                                <p align="right"><font color="red"><b>Nb: Jenis aktivitas hapus data (+7 Jam) dari jam luar negri</b></font></p>
                                <!-- Script menampilkan total data -->               
                                    <?php 
                                        $tampil1 = "SELECT * FROM log_userdata2";
                                        $hasil1 = mysqli_query($koneksi,$tampil1);
                                        $jmldata1= mysqli_num_rows($hasil1);
                                        $jmlhalaman1 = ceil($jmldata1/$batas1);
                                        echo "<b><font color='#c80000'>Jumlah Data : $jmldata1</font></b>";
                                    ?>
                                <!-- End Script menampilkan total data -->
                                
                                    </br>
                                    </br>
                                <!-- Navigasi Pindah Slide -->
                                <nav>
			                        <ul class="pagination justify-content-center">
				                        <li class="page-item">
					                    <a class="page-link" <?php if($halaman1 > 1){ echo "href='?halaman1=$Sebelum1'"; } ?>><b>&laquo;</b></a>
				                        </li>
				                    <?php 
				                        for($x=1;$x<=$total_halaman1;$x++){
					                ?> 
					                    <li class="page-item">
					                    <a class="page-link" href="?halaman1=<?php echo htmlspecialchars($x) ?>"><?php echo htmlspecialchars($x); ?></a>
					                    </li>
					                <?php
				                    }
				                    ?>				
				                        <li class="page-item">
					                    <a  class="page-link" <?php if($halaman1 < $total_halaman1) { echo "href='?halaman1=$lanjut1'"; } ?>><b>&raquo;</b></a>
				                        </li>
			                        </ul>
		                        </nav>
		                        <!-- End Navigasi Pindah Slide -->
                                
                            </div>
                        </div>
                    </div>
                <!-- End Form Table -->
                    
                </div>
            </section>
                <!-- /.container-fluid -->
                
                <!-- Aktivitas Bagian Ke-3 -->
                <!-- Begin Page Content -->
            <section id="riwayat" class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h4 mb-2 text-gray-800">Aktivitas Lupa Kata Sandi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <!-- Script Fitur Pencarian -->
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" class="d-flex">
                                <input type="text" name="cari3" class="form-control me-2" aria-label="Search" placeholder="Cari email atau jenis aktivitas">
                                <labelsearch0 for="search0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="form-control0" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                </svg>
                                </labelsearch0>
                            </form>
                            <?php 
                                if(isset($_GET['cari3'])){
	                            $cari3 = $_GET['cari3'];
	                            echo "<b>Hasil pencarian :</b> ".$cari3."";
                                }
                            ?>
                        <!-- End Script Fitur Pencarian -->
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Email</center></th>
                                            <th><center>Tanggal Aktivitas</center></th>
                                            <th><center>Jenis Aktivitas</center></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
				                        $batas3 = 5;
				                        $halaman3 = isset($_GET['halaman3'])?(int)$_GET['halaman3'] : 1;
				                        $halaman_awal3 = ($halaman3>1) ? ($halaman3 * $batas3) - $batas3 : 0;
			                        	$Sebelum3 = $halaman3 - 1;
			                        	$lanjut3 = $halaman3 + 1;
				                        $id = 1;
				                        $data3 = mysqli_query($koneksi,"select * from log_userdata5");
				                        $jumlah_data3 = mysqli_num_rows($data3);
				                        $total_halaman3 = ceil($jumlah_data3 / $batas3);
				                        $sql3 = mysqli_query($koneksi,"select * from log_userdata5 limit $halaman_awal3, $batas3");
				                        $id= $halaman_awal3+1;
				                        
				                        if(isset($_GET['cari3'])){
		                                $cari3 = $_GET['cari3'];
		                                $sql3 = mysqli_query($koneksi,"SELECT * FROM log_userdata5 WHERE email like '%".$cari3."%' OR keterangan_log like '%".$cari3."%' ORDER BY id ASC");
	                                    }else{
		                                $data3 = mysqli_query($koneksi,"SELECT * FROM log_userdata5 ORDER BY id ASC");
	                                    }
	                                    
	                                    if(mysqli_num_rows($sql3)){
			                        	while($resl3 = mysqli_fetch_array($sql3)){
				                	?>
                                        <tr>
                                            <th><center><?php echo htmlspecialchars($id++); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl3[ 'email']); ?></center></th>
                                            <th><center><?php echo date('d F Y | H:i A',strtotime($resl3['tgl'])); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl3[ 'keterangan_log']); ?></center></th>
                                        </tr>
                                        <?php
                                            }}else{
                                                echo '<tr><th colspan="4"><center><font color="FF0000">Tidak ada data, silahkan masukkan email dan jenis aktivitas kembali &#128522;</font></center></th></tr>';
                                            }?>
                                    </tbody>
                                </table>
                                
                                <!-- Script menampilkan total data -->               
                                    <?php 
                                        $tampil3 = "SELECT * FROM log_userdata5";
                                        $hasil3 = mysqli_query($koneksi,$tampil3);
                                        $jmldata3 = mysqli_num_rows($hasil3);
                                        $jmlhalaman3 = ceil($jmldata3/$batas3);
                                        echo "<b><font color='#c80000'>Jumlah Data : $jmldata3</font></b>";
                                    ?>
                                <!-- End Script menampilkan total data -->
                                
                                    </br>
                                    </br>
                                <!-- Navigasi Pindah Slide -->
                                <nav>
			                        <ul class="pagination justify-content-center">
				                        <li class="page-item">
					                    <a class="page-link" <?php if($halaman3 > 1){ echo "href='?halaman3=$Sebelum3'"; } ?>><b>&laquo;</b></a>
				                        </li>
				                    <?php 
				                        for($x=1;$x<=$total_halaman3;$x++){
					                ?> 
					                    <li class="page-item">
					                    <a class="page-link" href="?halaman3=<?php echo htmlspecialchars($x) ?>"><?php echo htmlspecialchars($x); ?></a>
					                    </li>
					                <?php
				                    }
				                    ?>				
				                        <li class="page-item">
					                    <a  class="page-link" <?php if($halaman3 < $total_halaman3) { echo "href='?halaman3=$lanjut3'"; } ?>><b>&raquo;</b></a>
				                        </li>
			                        </ul>
		                        </nav>
		                        <!-- End Navigasi Pindah Slide -->
                                
                            </div>
                        </div>
                    </div>
                <!-- End Form Table -->
                    
                </div>
            </section>
                <!-- /.container-fluid -->

                <!-- Aktivitas Bagian Ke-2 -->
                <!-- Begin Page Content -->
            <section id="riwayat" class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h4 mb-2 text-gray-800">Aktivitas Pengguna</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <!-- Script Fitur Pencarian -->
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" class="d-flex">
                                <input type="text" name="cari2" class="form-control me-2" aria-label="Search" placeholder="Cari nama pengguna">
                                <labelsearch0 for="search0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="form-control0" class="bi bi-search-heart-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 13a6.474 6.474 0 0 0 3.845-1.258h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.008 1.008 0 0 0-.115-.1A6.471 6.471 0 0 0 13 6.5 6.502 6.502 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13Zm0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z"/>
                                </svg>
                                </labelsearch0>
                            </form>
                            <?php 
                                if(isset($_GET['cari2'])){
	                            $cari2 = $_GET['cari2'];
	                            echo "<b>Hasil pencarian :</b> ".$cari2."";
                                }
                            ?>
                        <!-- End Script Fitur Pencarian -->
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama Pengguna</center></th>
                                            <th><center>Login Masuk</center></th>
                                            <th><center>Login Keluar</center></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
				                        $batas2 = 10;
				                        $halaman2 = isset($_GET['halaman2'])?(int)$_GET['halaman2'] : 1;
				                        $halaman_awal2 = ($halaman2>1) ? ($halaman2 * $batas2) - $batas2 : 0;
			                        	$Sebelum2 = $halaman2 - 1;
			                        	$lanjut2 = $halaman2 + 1;
				                        $id = 1;
				                        $data2 = mysqli_query($koneksi,"select * from log_userdata");
				                        $jumlah_data2 = mysqli_num_rows($data2);
				                        $total_halaman2 = ceil($jumlah_data2 / $batas2);
				                        $sql2 = mysqli_query($koneksi,"select * from log_userdata limit $halaman_awal2, $batas2");
				                        $id= $halaman_awal2+1;
				                        
				                        if(isset($_GET['cari2'])){
		                                $cari2 = $_GET['cari2'];
		                                $sql2 = mysqli_query($koneksi,"SELECT * FROM log_userdata WHERE username like '%".$cari2."%' OR email like '%".$cari2."%' ORDER BY id ASC");
	                                    }else{
		                                $data2 = mysqli_query($koneksi,"SELECT * FROM log_userdata ORDER BY id ASC");
	                                    }
	                                    
	                                    if(mysqli_num_rows($sql2)){
			                        	while($resl2 = mysqli_fetch_array($sql2)){
				                	?>
                                        <tr>
                                            <th><center><?php echo htmlspecialchars($id++); ?></center></th>
                                            <th><center><?php echo htmlspecialchars($resl2[ 'username']); ?></center></th>
                                            <th><center><?php echo date('d F Y | H:i A',strtotime($resl2['tgl_login'])); ?></center></th>
                                            <th><center><?php echo date('d F Y | H:i A',strtotime($resl2['tgl_logout'])); ?></center></th>
                                        </tr>
                                        <?php
                                            }}else{
                                                echo '<tr><th colspan="4"><center><font color="FF0000">Tidak ada data, silahkan masukkan nama pengguna kembali &#128522;</font></center></th></tr>';
                                            }?>
                                    </tbody>
                                </table>
                                
                                <!-- Script menampilkan total data -->               
                                    <?php 
                                        $tampil2 = "SELECT * FROM log_userdata";
                                        $hasil2 = mysqli_query($koneksi,$tampil2);
                                        $jmldata2= mysqli_num_rows($hasil2);
                                        $jmlhalaman2 = ceil($jmldata2/$batas2);
                                        echo "<b><font color='#c80000'>Jumlah Data : $jmldata2</font></b>";
                                    ?>
                                <!-- End Script menampilkan total data -->
                                
                                    </br>
                                    </br>
                                <!-- Navigasi Pindah Slide -->
                                <nav>
			                        <ul class="pagination justify-content-center">
				                        <li class="page-item">
					                    <a class="page-link" <?php if($halaman2 > 1){ echo "href='?halaman2=$Sebelum2'"; } ?>><b>&laquo;</b></a>
				                        </li>
				                    <?php 
				                        for($x=1;$x<=$total_halaman2;$x++){
					                ?> 
					                    <li class="page-item">
					                    <a class="page-link" href="?halaman2=<?php echo htmlspecialchars($x) ?>"><?php echo htmlspecialchars($x); ?></a>
					                    </li>
					                <?php
				                    }
				                    ?>				
				                        <li class="page-item">
					                    <a  class="page-link" <?php if($halaman2 < $total_halaman2) { echo "href='?halaman2=$lanjut2'"; } ?>><b>&raquo;</b></a>
				                        </li>
			                        </ul>
		                        </nav>
		                        <!-- End Navigasi Pindah Slide -->
                                
                            </div>
                        </div>
                    </div>
                <!-- End Form Table -->
                    
                </div>
            </section>
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
	  history.pushState({}, "", '/gate/admin/riwayataktivitas/riwayat-aktivitas-pengguna/');
	</script>
    <!-- Bootstrap core JavaScript-->
    <script src="/gate/admin/vendor/jquery/jquery.min.js"></script>
    <script src="seepass.js"></script>
    <script src="seepass2.js"></script>
    <script src="/gate/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/gate/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/gate/admin/js/sb-admin-2.min.js"></script>
</body>
</html>