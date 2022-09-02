<?php

$server="localhost";
$username="root";
$password="";
$database="login";

$con=mysqli_connect($server,$username,$password,$database);
if($con){
    echo "";
}else{
    echo "error";
}

?>