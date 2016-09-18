<?php 

// username = "root"
// password = "root"
$conn= mysqli_connect("localhost","root","root", "djsce");  
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}   
?>