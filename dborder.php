<?php

$server="localhost";
$username="root";
$password="";
$database="login";

$con=mysqli_connect($server,$username,$password,$database);

if($con){
    echo "connected";
}
else{
    die("error".mysqli_connect_error($con));
}
?>