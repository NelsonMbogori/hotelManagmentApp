<?php

require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
include('configs/app.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendEmailVerification($name,$email,$verify_token)
{
$mail = new PHPMailer();

$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'muthominelson4@gmail.com';                     //SMTP username
$mail->Password   = 'wmgo4848';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'php mailer test';
$email_template = "
    <h2>verify</h2>
    <hr>
    <br>
    <a href='http://localhost/yr2_prj/verify-email.php?verify_token=$verify_token'>click me</a>

";
$mail->Body = $email_template;
//Recipients
$mail->setFrom('muthominelson4@gmail.com');
$mail->addAddress('muthominelson4@gmail.com'); 
if($mail->send())
{
    redirect('sent successfully','registration.php');
}
else{
    echo "Message could not be sent. ";
}
$mail->smtpClose();
}
if(isset($_POST['register_btn']))
{
    $name = $_POST['fname'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());
    sendEmailVerification("$name","$email","$verify_token");
    echo"sent or";
}
?>