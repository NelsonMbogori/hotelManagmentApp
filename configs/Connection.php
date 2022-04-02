<?php
 
class Connection
{
    public function __construct()
    {
        $conn = new mysqli(host, username, password, database);

        if($conn->connect_error)
        {
            die("<h1>database connection failed</h1>");
        }
        
        return $this-> conn = $conn;
    }
}


?>