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
 
    <title>Document</title>
</head>
<body>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Order_Id</th>
      <th scope="col">FullName</th>
      <th scope="col">Username</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Pin-Code</th>
      <th scope="col">Address</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Product_Name</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    
    include "dborder.php";

    $q="SELECT * FROM `order`";
    error_reporting(0);
    $re=mysqli_query($con,$q);
    $num=mysqli_num_rows($re);

// take $roe['xyz']; is the  row name in the table
    if($num>0){

        while($row =mysqli_fetch_assoc($re)){

           echo " <tr>
          <th scope='row'>".$row['oid']."</th>
          <td>".$row['fname']."</td>
          <td>".$row['usrname']."</td>
          <td>".$row['city']."</td>
          <td>".$row['state']."</td>
          <td>".$row['zip']."</td>
          <td>".$row['address']."</td>
          <td>".$row['phone']."</td>
          <td>".$row['productname']."</td>
          <td>".$row['price']."</td>
         
          <td><a href='orderadmin.php?id=$row[oid]&fname=$row[fname]&username=$row[usrname]&city=$row[city]&state=$row[state]&pin=$row[zip]&address=$row[address]&pn=$row[phone]&product=$row[productname]&price=$row[price]><button type='button' class='btn btn-success'>Edit</button></a></td>
          <td><a href='orderadmin.php?idd=$row[oid]'><button type='button' class='btn btn-danger'>Delete</button></a></td>
        </tr>";

        }
    }
/*   IF YPU WILL WRITE id = $row['oid']  '' is the error that you not have to give hereParse error: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) in C:\xampp\htdocs\M-kart\orderadmin.php on line 56?*/
   //id=xyz; //id=sls;
    //the id key must not be same;
    ?>
    
      </tbody>
</table>
     <?php
     //includes &xyz inside the $_GET[xyz]; the above is given  
     include "dborder.php";
     echo $_GET['id'];
     echo $_GET['fname'];
     echo $_GET['username'];
     echo $_GET['city'];
     echo $_GET['state'];
     echo $_GET['pin'];
     echo $_GET['address'];
     echo $_GET['pn'];
     echo $_GET['product']; 
     echo $_GET['price'];
     
     ?>


    <form action="orderadmin.php" method="GET">
   
<div class="container my-5">
<h1>Edit session</h1>
<div class="col-md-3">
    <label for="validationDefault05" class="form-label">ID</label>
    <input type="text" class="form-control"  name="id" value="<?php  echo $_GET['id']; ?>" id="validationDefault05" required>
  </div>

<form class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">FullName</label>
    <input type="text" class="form-control" id="validationDefault01"  name="fname" value="<?php  echo $_GET['fname']; ?>" placeholder="FULL-NAME" required>
  </div>
  <br>
 
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
     
      <input type="text" class="form-control" id="validationDefaultUsername" name="users" value="<?php  echo $_GET['username']; ?>" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" name="city"  value="<?php  echo $_GET['city']; ?>" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select"  name="state" value="<?php  echo $_GET['state']; ?>" id="validationDefault04" required>
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
    <input type="text" class="form-control"  name="pin" value="<?php  echo $_GET['pin']; ?>" id="validationDefault05" required>
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Address</label>
    <input type="text" class="form-control" id="validationDefault02"  name="add" value="<?php  echo $_GET['address']; ?>" placeholder="Delivery Address"  required>
  </div>

  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">PhoneNumber</label>
    <input type="text" class="form-control"  name="phno" value="<?php  echo $_GET['pn']; ?>" id="validationDefault05" required>
  </div>




  <div class="col-12">
 <button class="btn btn-success" type="submit">Edit</button>
  </div>
</form>
</div>
</form>
<?php
  
  if($_SERVER['REQUEST_METHOD']=="GET") {
include "dborder.php";

      $id=$_GET['id'];
      $fname=$_GET['fname'];
      $users=$_GET['users'];
      $city=$_GET['city'];
      $state=$_GET['state'];
      $zip=$_GET['pin'];
      $add=$_GET['add'];
      $pn=$_GET['phno'];
   
      $q="UPDATE `order` SET `fname`='$fname',`usrname`='$users',`city`='$city',`state`='$state',`zip`='$zip',`address`='$add',`phone`='$pn'WHERE `oid`='$id'";
      $res=mysqli_query($con,$q);

    if($res){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Updated Succesfully </strong>for better result update the page .
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }else{
      echo "error";
    }
  }
   
     
     ?>
<?php
  if($_SERVER['REQUEST_METHOD']=="GET") {
include "dborder.php";


$idd=$_GET['idd'];
$q="DELETE FROM `order` WHERE `oid`='$idd'";
$res=mysqli_query($con,$q);

if ($res) {
echo "Deleted successfully";
}
else
{
  echo "erro";
}
  }
  
?>

<?php
//<META HTTP-EQUIV="Refresh" CONTENT="3">
/*
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="grocery.php">Grocery</a>
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


*/ 
?>

</body>
</html>