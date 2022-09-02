<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>eye linear</title>
</head>
<body>
    <?php
     include "dborder.php";

    if($_SERVER['REQUEST_METHOD']=='POST');
   
error_reporting(0);
    $fname=$_POST['fname'];
    $users=$_POST['users'];
 
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['pin'];
    $add=$_POST['add'];
    $pnno=$_POST['pn'];
    $pname="Eye Linear";
    $pri=100;

    $cou=$_POST['l'];
    $price=$pri*$cou;
    $count=$_POST['l'];
    
    $category="beauty";

    $sql="INSERT INTO `order` (`fname`, `usrname`, `city`, `state`, `zip`, `address`,`phone`,`productname`,`price`,`count`,`cat`) VALUES ( '$fname', '$users', '$city', '$state', '$zip', '$add','$pnno','$pname','$price','$count','$category')";
    $res=mysqli_query($con,$sql);
    if($res){
     
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> Hello </strong> Order placed successfully Click on X .
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong> Hello </strong> something went wrong.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="beauty.php">Beauty</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="m-flex.php">Funzone</a>
        </li>
        
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




  <form action="beau2orderform.php" method="post">



<div class="container my-5">
<form class="row g-3">



  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">FullName</label>
    <input type="text" class="form-control" id="validationDefault01"  name="fname" placeholder="FULL-NAME" required>
  </div>
  
  
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
     
      <input type="text" class="form-control" id="validationDefaultUsername" name="users" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationDefault03" class="form-label">Phonenumber</label>
    <input type="text" class="form-control" name="pn"  id="validationDefault03" required>
  </div>


  <div class="col-md-2">
  <label for="v" class="form-label">Quantity</label>
  
  <select class="form-select"  name="l"  id="v" required>
 
    <option selected >1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    </select>
    <div>


  <div class="col-md-5" >
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" name="city"  id="validationDefault03" placeholder="City"  required>
  </div>


  <div class="col-md-8">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select"  name="state"  id="validationDefault04" required>
      <option selected disabled value="">Select State</option>
      <option>Maharashtra</option>
      <option>karnataka</option>
      <option>Haryana</option>
      <option>Uttar Pradesh</option>
      <option>Delhi</option>
      <option>Punjab</option>
      <option>Gujrat</option>
      <option>Rajasthan</option>
    
    </select>
  </div>
  <div class="col-md-7">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" class="form-control"  name="pin" id="validationDefault05" required>
  </div>
  
  <div class="col-md-10">
    <label for="validationDefault02" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationDefault02"  name="add" placeholder="Delivery Address"  required>
  </div>
<br>
  <div class="col-12">
 <button class="btn btn-primary" type="submit">Buy</button>
  </div>
</form>
</div>
</form>
</body>
</html>
