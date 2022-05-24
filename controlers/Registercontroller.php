<?php
//include('configs/app.php');

class Registercontroller
{
    public function __construct()
    {
        $db = new connection;
        $this ->conn = $db -> conn; 
    }
    public function registration($fname, $email, $password,$verify_token,$title)
    {
        $register_query = "INSERT INTO users (fname,email,password,verify_token,title) VALUES('$fname','$email','$password','$verify_token','$title')";
        $result = $this->conn->query($register_query);
        return $result;
    }
    public function confirmpassword($password,$confirm_password)
    {
        if($password == $confirm_password){
            return true;
        }
        else{
            return false;
        }
    }
    public function userExists($email)
    {
        $checkuser ="SELECT email FROM users WHERE email='$email' limit 1";
        $result = $this->conn->query($checkuser);

        ///change
        if($result->num_rows > 1){
            return true;
        }
        else{
            return false;
        }
    }
    
}

?>