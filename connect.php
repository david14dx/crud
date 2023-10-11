<?php

$con = new mysqli('localhost','root','abc123!@#','crud');

if(!$con){
    die(mysqli_error($con));
}


?>