<?php
$conn = mysqli_connect("mysql.hostinger.co.uk","u817478211_penggunaoculo","Oculostudio_2k23","u817478211_datapengguna");
    
    session_start();
    
    // Script Saat Tombol Daftar Diklik //
    if (isset($_POST['insert'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $namleng = mysqli_real_escape_string($conn, $_POST['namleng']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $tgl_pembuatan = mysqli_real_escape_string($conn, $_POST['tgl_pembuatan']);
        $foto = mysqli_real_escape_string($conn, $_POST['foto']);
    // End Script Saat Tombol Daftar Diklik //
    
        $errors = array();
        $u = "SELECT username FROM userdata WHERE username='$username' ";
        $uu = mysqli_query($conn,$u);
        $e = "SELECT email FROM userdata WHERE email='$email' ";
        $ee = mysqli_query($conn,$e);
    
    // Script cek nama pengguna ganda //
    if (empty($username)){
        $errors['u'] = "<b><center><font color='FF0000'>Silahkan masukkan nama pengguna Anda</font></center></b>";
    }else if(mysqli_num_rows($uu) > 0){
        $errors['u'] = "<b><center><font color='FF0000'>Nama pengguna sudah digunakan</font></center></b>";
    }
    // End Script cek nama pengguna ganda //
    
    // Script cek email ganda //
    if (empty($email)){
        $errors['e'] = "<b><center><font color='FF0000'>Silahkan masukkan email Anda</font></center></b>";
    }else if(mysqli_num_rows($ee) > 0){
        $errors['e'] = "<b><center><font color='FF0000'>Email sudah digunakan</font></center></b>";
    }
    // End Script cek email ganda //
    
    // Script cek kata sandi ganda //
    if (empty($password)){
        $errors['p'] = "<b><center><font color='FF0000'>Silahkan masukkan kata sandi Anda</font></center></b>";
    }
    // Script cek kata sandi ganda //
    
    // Script cek nama lengkap //
    if (empty($namleng)){
        $errors['n'] = "<b><center><font color='FF0000'>Silahkan masukkan nama lengkap Anda</font></center></b>";
    }
    // Script cek nama lengkap //
    
    // Script cek jenis kelamin //
    if (empty($gender)){
        $errors['j'] = "<b><center><font color='FF0000'>Silahkan memilih jenis kelamin Anda</font></center></b>";
    }
    // Script cek jenis kelamin //
    
    // periksa panjang kata sandi jika kata sandi kurang dari 8 karakter //
        if (strlen(trim($_POST['password'])) < 8) {
            $errors['p3'] = "<b><center><font color='FF0000'>Gunakan 8 karakter atau lebih dengan campuran huruf, angka & simbol</font></center></b>";
        } else {
    
    // Script jika password tidak sama //
            if ($_POST['password'] != $_POST['confirmPassword']){
                $errors['p2'] = "<b><center><font color='FF0000'>Kata sandi Anda tidak cocok</font></center></b>";
            }else{
                $password = md5($_POST['password']);
    // End Script jika password tidak sama //        
    
    // Script insert data ke database //
    if (count($errors)==0){
        $query = "INSERT INTO userdata(email,namleng,gender,username,password,tgl_pembuatan,foto) VALUES ('$email','$namleng','$gender','$username','$password','$tgl_pembuatan','$foto')";
        $result = mysqli_query($conn,$query);
        if ($result) {
            header("location:/sign-up/#popup");
        }else{
            echo "<script>alert('Failed')</script>";
            }
        }
    // End Script insert data ke database //
    
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-Up | Monitoring - PPK Ormawa</title>
    <link rel="icon" href="images/faviconbrand.png" type="image/png">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylemodal.css">
    <link rel="stylesheet" href="stylebackground.css">
    <link rel="stylesheet" href="demo.css">
</head>
    <style type="text/css">
	    /* link popup*/
	a.popup-link {
		padding:10px 0;
		text-align: center;
		margin: 5% auto;
		position: relative;
		width: 160px;
		color: #fff;
		text-decoration: none;
		background-color: #5FD068;
        background-image: linear-gradient(90deg,#5FD068 10%,#4B8673 100%);
		border-radius: 50px;
		box-shadow: 0 3px 0px 0px #4B8673;
		display: block;
	}
	a.popup-link:hover {
		background-color: #5FD068;
		box-shadow: 0 3px 0px 0px #5FD068;
		transition: all 1s;
	}
	/* end link popup*/
	
	/*style untuk popup */	
	#popup {
		visibility: hidden;
		opacity: 0;
		margin-top: -200px;
	}
	#popup:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0, 0.6);
		position: fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99999999999;
		transition: all 2s;
	}

	@media (min-width: 768px){
		.popup-container {
			width:550px;
		}
	}
	@media (max-width: 767px){
		.popup-container {
			width:93%;
		}
	}
	.popup-container {
		position: relative;
		margin:7% auto;
		padding:20px 50px;
		background-color: #fafafa;
		border-radius: 30px;
	}

	a.popup-close {
		position: absolute;
		top:3px;
		right:3px;
		background-color: #333;
		padding:7px 10px;
		font-size: 20px;
		text-decoration: none;
		line-height: 1;
		color:#fff;
	}
	/* end style popup */

	/* style untuk isi popup */
	.popup-form {
		margin:10px auto;
	}
		.popup-form h2 {
			margin-bottom: 5px;
			text-transform: uppercase;
		}
		.popup-form .input-group {
			margin:10px auto;
		}
			.popup-form .input-group input {
				padding:17px;
				text-align: center;
				margin-bottom: 10px;
				border-radius:3px;
				font-size: 16px; 
				display: block;
				width: 100%;
			}
			.popup-form .input-group input:focus {
				outline-color:#82a3ff; 
			}
			.popup-form .input-group input[type="email"] {
				border:0px;
				position: relative;
			}
			.popup-form .input-group input[type="submit"] {
				background-color: #82a3ff;
				color: #fff;
				border: 0;
				cursor: pointer;
			}
			.popup-form .input-group input[type="submit"]:focus {
				box-shadow: inset 0 3px 7px 3px #82a3ff;
			}
	/* End style untuk isi popup */
	</style>
</head>
<body>
<div class="gatemain">
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <div style="text-align:top; padding:0px 0px 0px 0px;"><img alt="favicon" src="images/fav.png" style="float:center;margin:0px 150px -20px 98px;" height="80px" width="80px"/></img>
                        </div>
                        <h2 class="form-title"><center>Daftar</center></h2>
                        <form  action="" method="POST" class="register-form" id="register-form">
                            <p class="text-danger"><?php if(isset($errors['e'])) echo $errors['e']; ?></p>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" autocomplete="off">
                            </div>
                            <p class="text-danger"><?php if(isset($errors['n'])) echo $errors['n']; ?></p>
                            <div class="form-group">
                                <label for="namleng"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="namleng" id="namleng" placeholder="Nama Lengkap" autocomplete="off">
                            </div>
                            <p class="text-danger"><?php if(isset($errors['j'])) echo $errors['j']; ?></p>
                            <div class="form-group">
                            <label for="gender"><i class="zmdi zmdi-hc-2x zmdi-male-female"></i></label>
                            <input class="form-control" name="gender" list="datalistOptions" id="gender" placeholder="Pilih Jenis Kelamin">
                            <datalist id="datalistOptions">
                                <option value="Laki-Laki">
                                <option value="Perempuan">
                            </datalist>
                            </div>
                            <p class="text-danger"><?php if(isset($errors['u'])) echo $errors['u']; ?></p>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-pin-account"></i></label>
                                <input type="text" name="username" id="username" placeholder="Nama Pengguna" class="form-control" autocomplete="off">
                            </div>
                            <p class="text-danger"><?php if(isset($errors['p'])) echo $errors['p']; ?></p>
                            <p class="text-danger"><?php if(isset($errors['p2'])) echo $errors['p2']; ?></p>
                            <p class="text-danger"><?php if(isset($errors['p3'])) echo $errors['p3']; ?></p>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <labelseepass for="lihatpassword">
                                    <span id="mybutton" onclick="change()" class="input-group-text">
                                    <svg width="23px" height="23px" color="#d10000" viewBox="0 0 20 20" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" /></svg>
                                </span>
                                </labelseepass>
                                <input type="password" name="password" id="your_pass" placeholder="Kata Sandi" class="form-control" autocomplete="off">
                            </div>
                            <p class="text-danger"><?php if(isset($errors['p'])) echo $errors['p']; ?></p>
                            <p class="text-danger"><?php if(isset($errors['p2'])) echo $errors['p2']; ?></p>
                            <p class="text-danger"><?php if(isset($errors['p3'])) echo $errors['p3']; ?></p>
                            <div class="form-group">
                                <label for="lihatkonfirmasi"><i class="zmdi zmdi-lock"></i></label>
                                <labelseepass for="lihatpassword2">
                                    <span id="mybutton2" onclick="change2()" class="input-group-text">
                                    <svg width="23px" height="23px" color="#d10000" viewBox="0 0 20 20" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" /></svg>
                                </span>
                                </labelseepass>
                                <input type="password" name="confirmPassword" id="lihatkonfirmasi" placeholder="Konfirmasi Kata Sandi" class="form-control" autocomplete="off">
                            </div>
                                <input type="hidden" name="tgl_pembuatan" class="form-control" value="<?php echo date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                <input type="hidden" name="foto" class="form-control" value="men.svg">
                            <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/ required>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a style="text-decoration:none;color: #0087C8;" class="term-service" data-toggle="modal" data-target="#ModalTOS"><b>Terms of service</b></a></label>
                            
    <!-- Modal -->
    <div class="modal fade" id="ModalTOS" tabindex="-1" role="dialog" aria-labelledby="ModalTOS" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="ModalTOS">Terms Of Service</h3>
          </div>
          <div class="modal-body">
            Dengan mengunjungi website <b>https://kthngudiwaluyo.com/</b> berarti Anda setuju dengan ketentuan-ketentuan yang telah diatur oleh kami, yakni sebagai berikut :
          </br>
          </br>
          1. Anda setuju untuk tidak melakukan copy paste maupun download artikel/foto/video atau apapun juga yang ada di dalam website <b>https://kthngudiwaluyo.com/</b>. Dengan copy paste maupun download, baik artikel/foto/video di dalam website/blog ini juga memperlihatkan ketidak profesionalan Anda, kecuali mendapat izin dari Redaksi dan atau Penulis kami.
          </br>
          </br>
          2. Anda setuju untuk tidak mengganggu kenyamanan pembaca serta melakukan tindakan-tindakan yang tidak berkenan dengan cara memberikan komentar Spam dan atau tindakan lain-lain di Website/Blog kami yang tidak sepantasnya sesuai aturan hukum yang berlaku.
          </br>
          </br>
          3. Website <b>https://kthngudiwaluyo.com/</b> memperbolehkan siapapun juga untuk mengcopy/menyebarkan link tulisan/artikel apa saja di website ini dan menyebarluaskannya. Tapi, kami melarang siapa saja untuk mengcopy paste setiap tulisan/artikel di dalam website/blog ini untuk kepentingan pribadi dan maksud-maksud tertentu dengan mengedit, merubah dan lain sebagainya.
          </br>
          </br>
          4. Perubahan setiap tulisan/artikel/video/foto dari website <b>https://kthngudiwaluyo.com/</b> ke dalam website/blog/media sosial maupun ke produk lain, baik secara di sengaja atau tidak sengaja, apabila melanggar aturan dan hukum yang berlaku sudah bukan tangggung jawab kami.
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primarybatal" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
                            </div>
                            <center><div class="form-group form-button">
                                <input type="submit" name="insert" href="#popup" class="form-submit" value="DAFTAR">
                            </div></center>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/favdaftar.png" alt="sing up image"></figure>
                        <p><center>Sudah memiliki akun?
                        </br>
                            <a style="text-decoration:none;color: #0087C8;" href="/gate/" class="link-masuk"><font size="3"><b>Masuk</b></font></a></center></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
                <!-- Script Awal Pop Up -->
                    <div class="popup-wrapper" id="popup">
	                    <div class="popup-container">
	                    </br>
	                    </br>
			            <center><hb2>Berhasil &#x2705;</hb2></center>
			            <p><center><font size="3">Terimakasih telah mendaftar</font></center></p>
			            </br>
			            <p><center><font size="3">Silahkan menunggu 1x24 jam konfirmasi agar dapat memasuki halaman aplikasi CMS Oculo Studio &#128522;</font></center></p>
                        <a href="http://sampelproject.website/" class="popup-link">Beranda</a>
	                    </div>
	               </div>
                <!--End Script Akhir Pop Up -->
                
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="seepass.js"></script>
    <script src="seepass2.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>