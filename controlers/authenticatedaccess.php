<?php


include('configs/app.php');
// include_once('controlers/logincontroller.php');

class authenticatedaccess
{
    public function __construct()
    {
        $db = new Connection;
        $this->conn = $db->conn;
        $this ->isloggedin();
    }
    
    private function isloggedin()
    {
        if (! isset($_SESSION ['authenticated']))
        {
            redirect("login to access this page","login.php");
            return false;
        }
        else{
            return true;
        }
    }
        public function authDetails()
    {
        $checkAuth = $this->isloggedin();
        if($checkAuth)
        {
        
            $email = $_SESSION['email'];
            $getuserdata = "SELECT * FROM users WHERE email ='$email' LIMIT 1";
            $result = $this->conn->query($getuserdata);
            if($result->num_rows > 0)
            {
                
                $data = $result->fetch_assoc();
                return $data;
            }
            else{
                echo"something went wrong";
                
                // redirect("something went wrong","login.php");
            }
        }
        else{
            
            return false;
        }
    }
}


?>