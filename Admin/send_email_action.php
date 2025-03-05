<?php
include('../db_connection.php');
global $conn;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../plugin/PHPMailer/src/Exception.php';
require '../plugin/PHPMailer/src/PHPMailer.php';
require '../plugin/PHPMailer/src/SMTP.php';


//Create an instance; passing true enables exceptions


//Server settings
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // $otp = mt_rand(100000, 999999);

    $userEmail = $_POST['userEmail'];
    $message = $_POST['message'];
    $mid = $_POST['userid'];

    $sql = "UPDATE messages SET admin_reply = '" . $message . "' WHERE email = '$userEmail'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        // echo "<script>alert('Your data saved successfully. Login another gmail account.');window.location.href='login.php';</script>";

        // echo "User data saved successfully. Sending OTP...<br>";

        // Send OTP email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Use your SMTP server (Gmail in this case)
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->Username = 'suvaranajn59@gmail.com';
            $mail->Password = 'roxn nyeg ayzl lmjo';

            //Recipients
            $mail->setFrom('suvaranajn59@gmail.com','Ecommerce');
            $mail->addAddress($userEmail, );

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Reply Your massege';
            $mail->Body = " <b>$message</b><br><br>Thank you.";

            // Send the email
            $mail->send();
            // echo 'OTP has been sent to your email. Please check your inbox to verify.';
            // session_start();
            // $_SESSION['email'] = $email;
            // Redirect to OTP verification page
            header("Location: messages.php");
            exit();
        } catch (Exception $e) {
            echo " Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        // echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.php';</script>";
        echo "Error: " . $stmt->error;
    }
}