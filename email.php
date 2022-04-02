<?php

include('configs/app.php');
$conn = new mysqli(host, username, password, database);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function sendEmailVerification($name,$email,$verify_token)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'muthominelson4@gmail.com';                     //SMTP username
    $mail->Password   = 'happy';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = "587";                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->setFrom("muthominelson4@gmail.com",$name);
    $mail->addAddress($email);

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'php mailer test';
    $email_template = "
        <h2>verify</h2>
        <hr>
        <br>
        <a href='http://localhost/yr2_prj/verify-email.php?token=$verify_token'>click me</a>
    
    ";
    $mail->Body = $email_template;
    if($mail->send()) {
        echo"message sent";
    }else{
        echo"message error";
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


    // $checkemail = "SELECT email FROM users WHERE email = '$email'LIMIT 1";
    // $checkemailrun = mysqli_query($conn,$checkemail);
    // if(mysqli_num_rows($checkemailrun)> 0)
    // {
        
    //     redirect("email id already exists","registration.php");

    // }
    // else{
    //     $querry = "INSERT INTO users (fname,email,verify_token,password) VALUES ('$name','$email','$verify_token','$password')";
    //     $querryrun = mysqli_query($conn,$querry);
    //     if($querryrun)
    //     {
    //         sendEmailVerification("$name","$email","$verify_token");
    //         redirect("great success","dashboard.php");
    //     }
    //     else{
    //         redirect("bad","registration.php");
    //     }
    // }
}
?>