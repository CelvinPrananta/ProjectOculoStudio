<?php
include_once ("controller.php");
?>

<?php
include "session.php";
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM userdata");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Kata Sandi | Monitoring - PPK Ormawa</title>
    <link rel="icon" href="images/faviconbrand.png" type="image/png">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="stylebackground.css">
</head>
<body>
<div class="gatemain">
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">  
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <div style="text-align:top; padding:0px 0px 0px 0px;"><img alt="favicon" src="images/fav.png" style="float:center;margin:0px 150px -20px 98px;"height="80" width="80"/></img>
                        </div>
                        </br>
                        <h2 class="form-title"><center>Lupa Kata Sandi</center></h2>
                        <!-- Perintah salah memasukkan nama pengguna & katasandi -->
                        <?php 
	                        if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="masukkan-email"){
			                    echo "<div class='alert'>Silahkan masukkan email anda dahulu &hearts;</div>";
                                }
	                        }
	                    ?>
	                    <!--End Perintah salah memasukkan nama pengguna & katasandi -->
                    <!-- Script Form Lupa Kata Sandi -->
                        <form action="/gate/lupakatasandi/" method="POST" class="register-form" autocomplete="off">
                            <?php
                                if ($errors > 0) {
                                    foreach ($errors as $displayErrors) {
                            ?>
                                <div id="alert"><?php echo $displayErrors; ?></div>
                            <?php
                                }
                            }
                        ?>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-hc-2x zmdi-email"></i></label>
                                <input type="email" name="email" class="input" placeholder="Masukkan email anda"/>
                            </div>
                            <center><div class="form-group form-button">
                                <input type="submit" name="forgot_password" class="form-submit" value="PERIKSA"/>
                                <a href="/gate/"><input type="button" class="form-submit1" Value="KEMBALI"></a>
                            </div></center>
                                <input type="hidden" class="input" name="tgl" value="<?php echo date('Y-m-d H:i:s', time() + (210 * 120)); ?>">
                                <input type="hidden" class="input" name="keterangan_log" value="Perbaharui Kata Sandi">
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/favlupakatasandi.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

    <script>
	    history.pushState({}, "", '/gate/lupakatasandi/');
	</script>
    <!-- JS -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>