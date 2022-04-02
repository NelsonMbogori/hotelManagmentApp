<?php


// include('configs/app.php');
class authenticatedaccess
{
    public function __construct()
    {
        $db = new Connection;
        $this->conn = $db->conn;
        $this ->isloggedin();
    }
    public function adminaccess()
    {
        $user_id = $_SESSION['auth_user']['user_id'];
        $checkadmin = "SELECT user_id,role FROM users WHERE user_id ='$user_id' AND role == 1 LIMIT 1";
        $result = $this->conn->query($checkadmin);
        if ($result->num_rows == 1){
            return true;

        }
        else {
            redirect("not authorised as admin","index.php");
        }
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
            $user_id = $_SESSION['auth_user']['id'];
            $getuserdata = "SELECT * FROM users WHERE user_id ='$user_id' LIMIT 1";
            $result = $this->conn->query($getuserdata);
            if($result->num_rows > 0)
            {
                echo"0011000";
                $data = $result->fetch_assoc();
                return $data;
            }
            else{
                redirect("something went wrong","login.php");
            }
        }
        else{
            echo"012012";
            return false;
        }
    }
}


?>