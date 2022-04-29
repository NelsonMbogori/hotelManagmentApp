<?php
require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
// include('configs/app.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//include('configs/app.php');
include_once('controlers/Registercontroller.php');
include_once('controlers/logincontroller.php');
$auth = new logincontroller;
if(isset($_POST['logout_btn']))
{
    $checklogout = $auth->logout();
    if($checklogout)
    {
        redirect('logged out successfully','login.php');
    }
}
 


if(isset($_POST['login_btn']))
{
    $email =  validateinput($db->conn, $_POST['email']);
    $password =  validateinput($db->conn, $_POST['password']);
    
    $checklogin = $auth->userlogin($email,$password);
    if($checklogin)
    {
        
         redirect('logged in successfully','index.php ');
    }
    else{
        redirect("invalid email or pasword","login.php");
    }
}







if(isset($_POST['register_btn']))
{
    $fname = validateinput($db->conn, $_POST['fname']);
    $email = validateinput($db->conn, $_POST['email']);
    $password =validateinput($db->conn, $_POST['password']);
    $confirm_password = validateinput($db->conn, $_POST['cofirm_password']);
    $verify_token = md5(rand());

    $register = new Registercontroller;
    $result_password = $register->confirmpassword($password, $confirm_password);
    if($result_password)
    {
       $resultuser =  $register->userExists($email);
       if($resultuser)
       {
            redirect("email already exists","registration.php");

       }
       else{
             $register_query = $register -> registration($fname,$email,$password,$verify_token);
            if($register_query)
            {//successfully posted registration details
                sendEmailVerification("$name","$email","$verify_token");
                // redirect("registered successfuly","login.php");
            }
            else{
                redirect("something went wrong","register.php");
            }
       }
    }
    else
    {
        redirect("passwords dont match","registration.php");
    }
}
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
            redirect('sent successfully now verify','registration.php');
        }
        else{
            echo "Message could not be sent. ";
        }
        $mail->smtpClose();
    }

    if(isset($_POST['logout_btn']))
{
    $checklogout = $auth->logout();
    if($checklogout)
    {
        redirect('logged out successfully','login.php');
    }
}
 


// if(isset($_POST['update']))
// {
//     $firstname =  validateinput($db->conn, $_POST['firstname']);
//     $middlename =  validateinput($db->conn, $_POST['middlename']);
//     $surname =  validateinput($db->conn, $_POST['surname']);
//     $gender =  validateinput($db->conn, $_POST['gender']);
//     $location =  validateinput($db->conn, $_POST['location']);
//     $id =   $_GET['user_id'];
    

//     $update = new updatecontroller;
//     $updatecheck = $update->update($firstname,$middlename,$surname,$gender,$location,$id);
//     return $updatecheck;
// }
