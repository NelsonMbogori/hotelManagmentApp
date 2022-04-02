<?php

include('configs/app.php');
// Database connection
$conn = new mysqli('localhost','root','','nelson');


if(isset($_GET['verify_token']))
{
    $token = $_GET['verify_token'];
    $verifyquerry = "SELECT verify_token FROM users WHERE verify_token='$token'LIMIT 1 ";
    $verifyquerry_run = mysqli_query($conn,$verifyquerry);
    if(mysqli_num_rows($verifyquerry_run) > 0)
    {
        
        $row = mysqli_fetch_array($verifyquerry_run);
        $your_status=$row['verify_status'];
        if($your_status == 0 )
        {
            $clicked_token = $row['verify_token'];
            echo $clicked_token;
            $update_querry = "UPDATE users SET verify_status ='1' WHERE verify_token='$clicked_token'LIMIT 1";
            $update_querry_run = mysqli_query($conn, $update_querry);
            if( $update_querry_run)
            {
                redirect("account successfully verified  login to continue","login.php");
            }
            else{
                redirect("verification failed","login.php");
            }
        }
        else{
            redirect("email already verified please login","login.php");
        }
    }
    else{
        redirect("token does not exist","login.php");
    }
}
else{
    redirect("wrong","login.php");
}
?> 