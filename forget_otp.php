
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';


$otp = rand(100000, 999999);
            session_start();
            // $_SESSION['otp'] = $otp;
            // $_SESSION['email'] = $email;
$email=$_POST['email'];
$_SESSION['otp'] = $otp;
            // echo $otp;


            $mail = new PHPMailer(true);
            $mail->isSMTP();

            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->Username   = 'sujalbera92@gmail.com';
            $mail->Password   = 'ttkd pzmz eihq sqgn';


            $mail->setFrom('sujalbera92@gmail.com', 'Easy Sports');

            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';


            $mail->Subject = 'OTP Verification';
            $mail->Body = "<h1>Your otp is: $otp
            <br> thank you..";
            $mail->send();
            if (!$mail->send()) {
                echo $mail->ErrorInfo;
            } else {
                header("Location: forget_otp_action.php?email=$email");
                exit();
               
            }


            ?>