<?php
// include ('configs/app.php');
// include_once('/configs/connection.php');
include_once('controlers/authenticatedaccess.php');
include ('codes/authentication.php');
$authenticated = new authenticatedaccess;
$data = $authenticated->authdetails();

// $authenticated = new authenticatedaccess;




// $data = $authenticated ->authDetails();

?>
<div class="profile">
    <div class="container">
        <h1>profile page</h1>
        <hr>
        <?= $data['fname']; ?>
    </div> 
</div>
