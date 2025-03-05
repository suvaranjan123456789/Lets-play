<?php
$con=mysqli_connect("localhost","root","","e-com");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
	
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $stmt = $pdo->prepare("SELECT * FROM registration_data WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $token = bin2hex(random_bytes(32));
        $stmt = $pdo->prepare("UPDATE registration_data SET reset_token = ?, reset_expires = ? WHERE email = ?");
        $stmt->execute([$token, date("Y-m-d H:i:s", strtotime("+1 hour")), $email]);

        $resetLink = "http://yourdomain.com/reset.php?token=$token";

        mail($email, "Password Reset", "Click here to reset your password: $resetLink");

        echo "A password reset link has been sent to your email.";
    } else {
        echo "No user found with this email.";
    }
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

$mail= new PHPMailer(true);
$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Port=587;
$mail->Username   = 'suvaranajn59@gmail.com'; 
$mail->Password   = 'roxn nyeg ayzl lmjo'; 


$mail->setFrom('suvaranajn59@gmail.com','Ecommerce');

$mail->addAddress('pranabrana2004@gmail.com','Pranab Rana');

$mail->isHTML(true);
$mail->CharSet='UTF-8';


$mail->Subject='=====subject goes here=======';
$mail->Body="<h1>msg";

$mail->send();
if(!$mail->send()){
    echo $mail->ErrorInfo;
}
else{
    echo "Successfully Send the Mail.";
}
  
?>

