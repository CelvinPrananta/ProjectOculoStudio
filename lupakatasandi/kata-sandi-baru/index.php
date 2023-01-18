<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganti Kata Sandi | Monitoring - PPK Ormawa</title>
    <link rel="icon" href="/gate/lupakatasandi/images/faviconbrand.png" type="image/png">
    <link rel="stylesheet" href="/gate/lupakatasandi/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/gate/lupakatasandi/css/style.css">
    <link rel="stylesheet" href="/gate/lupakatasandi/stylebackground.css">
</head>
<body>
<div class="gatemain">
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">  
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <div style="text-align:top; padding:0px 0px 0px 0px;"><img alt="favicon" src="/gate/lupakatasandi/images/fav.png" style="float:center;margin:0px 150px -20px 98px;"height="80" width="80"/></img>
                        </div>
                        </br>
                        <h2 class="form-title"><center>Ganti Kata Sandi</center></h2>
                        <form action="/gate/lupakatasandi/kata-sandi-baru/" method="POST" autocomplete="off">
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
                                <label for="your_pass"><i class="zmdi zmdi-hc-2x zmdi-lock"></i></label>
                                <labelseepass for="lihatpassword">
                                    <span id="mybutton" onclick="change()" class="input-group-text">
                                    <svg width="23px" height="23px" color="#d10000" viewBox="0 0 20 20" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" /></svg>
                                </span>
                                </labelseepass>
                                <input type="password" name="password" id="your_pass" class="form-control"  autocomplete="off" placeholder="Kata sandi baru" required>
                            </div>
                            <div class="form-group">
                                <label for="lihatkonfirmasi"><i class="zmdi zmdi-hc-2x zmdi-lock"></i></label>
                                <labelseepass for="lihatpassword2">
                                    <span id="mybutton2" onclick="change2()" class="input-group-text">
                                    <svg width="23px" height="23px" color="#d10000" viewBox="0 0 20 20" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" /></svg>
                                </span>
                                </labelseepass>
                                <input type="password" name="confirmPassword" id="lihatkonfirmasi" class="form-control" placeholder="Konfirmasi kata sandi"  autocomplete="off" required>
                            </div>
                            <center><div class="form-group form-button">
                                <input type="submit" name="changePassword" class="form-submit" value="SIMPAN SANDI BARU"/>
                            </div></center>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/gate/lupakatasandi/images/favlupakatasandi.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

    <!-- JS -->
    <script src="seepass.js"></script>
    <script src="seepass2.js"></script>
    <script src="/gate/lupakatasandi/vendor/jquery/jquery.min.js"></script>
    <script src="/gate/lupakatasandi/js/main.js"></script>
</body>
</html>