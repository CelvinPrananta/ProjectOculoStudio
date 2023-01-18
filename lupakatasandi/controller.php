<?php
    include_once("koneksi.php");
    // Koneksi Berhasil Dibuat

    session_start();

    // Simpan Semua Kesalahan
    $errors = [];

    // Jika Tombol Verifikasi Diklik //
    if (isset($_POST['verify'])) {
        $_SESSION['message'] = "";
        $otp = mysqli_real_escape_string($conn, $_POST['otp']);
        $otp_query = "SELECT * FROM userdata WHERE otppass = $otp";
        $otp_result = mysqli_query($conn, $otp_query);

        if (mysqli_num_rows($otp_result) > 0) {
            $fetch_data = mysqli_fetch_assoc($otp_result);
            $fetch_code = $fetch_data['otppass'];

            $update_code = 0;

            $update_query = "UPDATE userdata SET otppass = $update_code WHERE otppass = $fetch_code";
            $update_result = mysqli_query($conn, $update_query);

            if ($update_result) {
                header('location: /gate/lupakatasandi/');
            } else {    
                $errors['db_error'] = "<b><center><font color='FF0000'>Gagal memasukkan data ke Database !</font></center></b>";
            }
        } else { 
            $errors['otp_error'] = "<b><center><font color='FF0000'>Anda memasukkan kode verifikasi yang tidak valid</font></center></b>";
        }
    }

    // Jika Tombol Lupa Kata Sandi Diklik
    if (isset($_POST['forgot_password'])) {
        $email = $_POST['email'];
        $tgl = $_POST['tgl'];
        $keterangan_log = $_POST['keterangan_log'];
        $_SESSION['email'] = $email;
        $sqlLog = "INSERT INTO log_userdata5 (email, tgl, keterangan_log) VALUES ('$email', '$tgl', '$keterangan_log')";
        $logQuery   = mysqli_query($conn, $sqlLog);
        $emailCheckQuery = "SELECT * FROM userdata WHERE email = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

        // Jika kueri dijalankan
        if ($emailCheckResult) {
            
            // Jika email cocok
            if (mysqli_num_rows($emailCheckResult) > 0) {
                $otppass = rand(999999, 111111);
                $updateQuery = "UPDATE userdata SET otppass = $otppass WHERE email = '$email'";
                $updateResult = mysqli_query($conn, $updateQuery);
                if ($updateResult) {
                    $subject = 'PENTING : Harap melakukan verifikasi kode';
                    $message = "* $otppass * adalah kode OTP-mu silahkan masukkan kode OTP-mu ke aplikasi PPK Ormawa berlaku selama 5 menit. Hindari penipuan! Jangan berikan kode OTP kepada siapa pun. ";
                    $sender = 'From: ppkhmft22@kthngudiwaluyo.com';

                    if (mail($email, $subject, $message, $sender)) {
                        
                        $message = "<b>Kode verifikasi telah terkirim ke email anda : <font color='0d6efd'>$email</font></b>";

                        $_SESSION['message'] = $message;
                        header('location: /gate/lupakatasandi/verifikasi-email/');
                    } else {
                        $errors['otp_errors'] = '<b><center><font color="FF0000">Gagal saat mengirim kode !</font></center></b>';
                    }
                } else { 
                    $errors['db_errors'] = "<b><center><font color='FF0000'>Gagal saat memasukkan data ke database !</font></center></b>";
                }
            }else{ 
                $errors['invalidEmail'] = "<b><center><font color='FF0000'>Email anda salah, mohon periksa kembali</font></center></b>";
            }
        }else {   
            $errors['db_error'] = "<b><center><font color='FF0000'>Gagal saat memeriksa email dari database !</font></center></b>";
        }
    }
    
if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($conn, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM userdata WHERE otppass = $OTPverify";
    $runVerifyQuery = mysqli_query($conn, $verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE userdata SET otppass = 0";
            $run = mysqli_query($conn,$newQuery);
            header("location: /gate/lupakatasandi/kata-sandi-baru/");
        }else{ 
            $errors['verification_error'] = "<b><center><font color='FF0000'>Kode verifikasi tidak benar</font></center></b>";
        }
    }else{ 
        $errors['db_error'] = "<b><center><font color='FF0000'>Gagal saat memeriksa Kode Verifikasi dari database !</font></center></b>";
    }
}

// Perintah ganti kata sandi
if(isset($_POST['changePassword'])){
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);
    
    if (strlen($_POST['password']) < 8) {
        $errors['password_error'] = '<b><center><font color="FF0000">Gunakan 8 karakter atau lebih dengan campuran huruf, angka & simbol</font></center></b>';
    } else {
        
        // Jika Kata Sandi Tidak Cocok     
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password_error'] = '<b><center><font color="FF0000">Kata sandi tidak cocok</font></center>';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE userdata SET password = '$password' WHERE email = '$email'";
            $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
            session_unset($email);
            session_destroy();
            header('location: /gate/');
        }
    }
}