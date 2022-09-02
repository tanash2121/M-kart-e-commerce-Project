<?php

$server="localhost";
$username="root";
$password="";
$database="login";

$con=mysqli_connect($server,$username,$password,$database);

if($con){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Note!:-</strong> By pressing Delete Button Data is permently Deleted Be care dull while Deleting.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
else{
    die("error".mysqli_connect_error($con));
}
?> 