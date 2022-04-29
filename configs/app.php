<?php
session_start();

define('host','localhost');
define('username','root');
define('password','');
define('database','nelson');
define('site_url','http://localhost/yr2_prj/');


include_once('connection.php');

$db = new connection;

function validateinput($dbcon, $input)
{
    return mysqli_real_escape_string($dbcon, $input);
}
function redirect($message, $page)
{
    $redirectTo = site_url.$page;
    $_SESSION['message'] = "$message";
    header("Location:$redirectTo");
    exit(0);
}

?>