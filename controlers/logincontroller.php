<?php


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
                if($therow['role'] == 1)//if email is verified and role is admin
                {
                    $data = $result->fetch_assoc();
                    $this->userauthentication($data);
                    redirect('admin welcome','dashboard.php');
                    return true;

                }
                else {
                    $data = $result->fetch_assoc();
                    $this->userauthentication($data);
                    redirect('welcome','index.php');
                    return true;
                }
                
            }
            else{
                redirect('please verify email','login.php');
                return false;
            }
        // if($result->num_rows > 0){
        //     $data = $result->fetch_assoc();
        //     $this->userauthentication($data);
        //     return true;
        // }
        }
        
        else{
            redirect('invalid email or password','login.php');
            return false;
        }
    }
    public function loggedin()
    {
        if(isset($_SESSION['authenticated']) === TRUE)
        {
             redirect("already loged in","dashboard.php");
            return true;
        }
        else{
            return false;
        }
    }
    private function userauthentication($data){
            $_SESSION['authenticated'] = true;
            $_SESSION['auth_role'] = $data['role'];
            $_SESSION['auth_user'] = [
                'user_id' => $data['user_id'],
                'user_fname' => $data['fname'],
                'user_email' => $data['email']
            ];
    }
    
    public function logout()
    {
        if(isset($_SESSION['authenticated'])===TRUE)
        {
            unset($_SESSION['authenticated']);
            unset($_SESSION['auth_user']);
            return true;
        }
        else{
            return false;
        }

    }
}

?>