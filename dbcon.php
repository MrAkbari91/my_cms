<?php

$con= new mysqli("localhost","root","","my_cms");

if($con->connect_error){
    die("connection failed");
}

?>