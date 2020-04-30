<?php 
$con=mysqli_connect("localhost","root","","store") or die(mysqli_connect_error($con));
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  
?>