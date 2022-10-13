<?php

$con = new mysqli("localhost","root","","studentdata");

if(!$con){
    die(mysqli_error($con));
}

?>