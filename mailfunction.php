<?php
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
