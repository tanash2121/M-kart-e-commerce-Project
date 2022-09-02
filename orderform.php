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
    <title>todolist</title>
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
    $sql="INSERT INTO `order` (`fname`, `usrname`, `city`, `state`, `zip`, `address`,`phone`) VALUES ( '$fname', '$users', '$city', '$state', '$zip', '$add','$pnno')";
    $res=mysqli_query($con,$sql);
    if($res){
     
      echo "order successfull";


    }else{
      echo"messing";
    }
    ?>
    <form action="orderform.php" method="post">
<div class="container my-5">
<form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">FullName</label>
    <input type="text" class="form-control" id="validationDefault01"  name="fname" placeholder="FULL-NAME" required>
  </div>
  <br>
 
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
     
      <input type="text" class="form-control" id="validationDefaultUsername" name="users" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Phonenumber</label>
    <input type="text" class="form-control" name="pn"  id="validationDefault03" required>
  </div>

  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" name="city"  id="validationDefault03" required>
  </div>
  <div class="col-md-3">
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
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" class="form-control"  name="pin" id="validationDefault05" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationDefault02"  name="add" placeholder="Delivery Address"  required>
  </div>

  <div class="col-12">
 <button class="btn btn-primary" type="submit">Buy</button>
  </div>
</form>
</div>
</form>
</body>
</html>
