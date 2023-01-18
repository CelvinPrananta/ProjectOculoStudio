<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP Verifikasi | Monitoring - PPK Ormawa</title>
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
                        <h2 class="form-title"><center>OTP Verifikasi</center></h2>
                    <!-- Script Form Lupa Kata Sandi -->
                        <form action="/gate/lupakatasandi/verifikasi-email/" method="POST" class="register-form" autocomplete="off">
                            <?php
                                if(isset($_SESSION['message'])){
                            ?>
                                    <div id="alert"><?php echo $_SESSION['message']; ?></div>
                                <?php
                                    }
                                ?>

                                    <?php
                                        if($errors > 0){
                                            foreach($errors AS $displayErrors){
                                    ?>
                                                <div id="alert"><?php echo $displayErrors; ?></div>
                                        <?php
                                                }
                                            }
                                        ?>
                            </br>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-hc-2x zmdi-code-smartphone 2x"></i></label>
                                <input type="number" name="OTPverify" class="input" placeholder="Kode Verifikasi" required>
                            </div>
                            <center><div class="form-group form-button">
                                <input type="submit" name="verifyEmail" class="form-submit" value="VERIFIKASI"/>
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
    <script src="/gate/lupakatasandi/vendor/jquery/jquery.min.js"></script>
    <script src="/gate/lupakatasandi/js/main.js"></script>
</body>
</html>