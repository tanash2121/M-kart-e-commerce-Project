<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<style>

  
</style>
<body>
   
<?php

$server="localhost";
$username="root";
$password="";
$database="login";

$con=mysqli_connect($server,$username,$password,$database);
if($con){
    echo "";
}else{
    echo "kya kr raha hee bhai ";
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    
    $email=$_POST['email'];
    $pn=$_POST['pn'];
    $un=$_POST['usname'];
    $pass=$_POST['pass'];

    $q="INSERT INTO `register` (`email`, `phonenumber`, `username`, `password`) VALUES ('$email', '$pn', '$un', '$pass');";
    $res=mysqli_query($con,$q);

    if ($res) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> Hello </strong> Registration successfull.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    
}else

{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> Hello </strong>  please fill all the details.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="mflex.php">Funzone</a>
        </li>
        
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container my-5" >
<form action="register.php" method="post">

<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
     
      <input type="email" class="form-control" id="validationDefaultUsername" name="email" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">MobileNumber</label>
    <input type="text" class="form-control" name="pn"  id="validationDefault03" pattern="[0-9]{10}" required>
  </div>

  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
     
      <input type="text" class="form-control" id="validationDefaultUsername" name="usname" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass"  id="validationDefault03" required>
  </div>

  <div id="emailHelp" class="form-text">Click on Register button and then Click on Login</div>
  <a href="login.php"><button type="submit" class="btn btn-primary">Register</button></a>
</form>
<br>
<p>Registration Is Over Now I Want To Login </p>
 <a href="login.php"><button>Login</button></a>
</div>

</body>
</html>