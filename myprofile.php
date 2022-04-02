<?php
include ('configs/app.php');
// include_once('/configs/connection.php');
include_once('controlers/authenticatedaccess.php');
include ('codes/authentication.php');
$authenticated->adminaccess();

// $authenticated = new authenticatedaccess;




// $data = $authenticated ->authDetails();


?>
<div class="profile">
    <div class="container">
        <?php include ('message.php')?>
        <h1>profile page</h1>
        <hr>
        <h4>  name: <?=  $data['fname'].' '.  $data['email'];  ?></h4>
        <h4> created at : <?=  $data['added_at'] ?></h4>
    </div>
</div>