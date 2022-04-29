<?php
if(isset($_SESSION['message']))
{
    echo "<h2>".$_SESSION['message']."</h2>";
    unset($_SESSION['message']);
}

?>