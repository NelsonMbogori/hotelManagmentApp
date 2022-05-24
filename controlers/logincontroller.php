<?php

// include('configs/app.php');
include_once('controlers/authenticatedaccess.php');

class logincontroller
{
    
    public function __construct()
    {
        $db = new Connection;
        $this ->conn = $db -> conn; 

    } 
    public function userlogin($email, $password)
    {
        
        $checkuser = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
        $result = $this->conn->query($checkuser);
        $therow = mysqli_fetch_array($result); 
        if ($result->num_rows > 0){
            if($therow['verify_status'] == 1)//if email is verified
            {
                
                if($therow['roles'] == 1)//if email is verified and role is admin
                {
                    $data = $result->fetch_assoc();
                    $the_role = $data['roles'];
                    $the_id = $data['id'];
                    $_SESSION['admin'] = true;
                    $_SESSION['email'] = $email;

                    $this->userauthentication($the_role,$the_id);
                    redirect('admin welcome','dashboard.php');

                    return $data;

                }
                 if ($therow['roles'] == 0){
                    $data = $result->fetch_assoc();
                    $the_role = $data['roles'];
                    $the_id = $data['id'];
                    $this->userauthentication($the_role,$the_id);
                    redirect('welcome','viewbookings.php');
                    
                    return false;
                }
                if ($therow['roles'] == 2){
                    
                    redirect('you do not have clearance','login.php');
                    
                    return false;
                }
            }
            else{
                redirect('please verify email','login.php');
                return false;
            }
       
        }
        
        else{
            redirect('invalid email or password','login.php');
            return false;
        }
    }
    
    private function userauthentication($the_role,$the_id){
            $_SESSION['authenticated'] = true;
            $_SESSION['auth_role'] = $the_role;
            $_SESSION['user_id'] = $the_id;

            // $_SESSION['auth_user'] = [

            // 'user_id' => $data['id'],
            // 'user_fname' => $data['fname'],
            // 'user_email' => $data['email'],

            // ];
            
            
    }
   
    public function loggedin()
    {
        if(isset($_SESSION['authenticated']) === true)
        {
            
            redirect("already logged in",'dashboard.php');
            
            return true;
            
            
        }
        else{
            return false;
        }
    }
    
    public function logout()
    {
        if(isset($_SESSION['authenticated'])===TRUE)
        {
            unset($_SESSION['authenticated']);
            unset($_SESSION['auth_user']);
            unset($_SESSION['admin']);
            unset($_SESSION['user']);
            unset($_SESSION['auth_role']);
            unset($_SESSION['userid']);
            unset($_SESSION['user_id']);
            unset($_SESSION['message']);
            return true;
        }
        else{
            return false;
        }

    }
    public function isadm()
    {
        if($_SESSION['admin']!='1'){

            echo
              "
              <script>
                alert('Not logged in as admin');
                document.location.href = 'viewbookings.php';
              </script>
              ";
        }
}
        // if( isset($_SESSION['admin']) === TRUE)
        // {
            
        //     echo"wwwwww";
        // }
        // else{
            
        //     echo "lllll";
        // }

    }
    



?>