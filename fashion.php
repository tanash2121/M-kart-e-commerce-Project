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
 
    <title>Admin</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="edit.php">Edit session</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="grocery.php">Grocery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="vegetable.php">Vegetable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="fruit.php">Fruits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mobile.php">Mobile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="laptop.php">Laptop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="footwear.php">footwear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="fashion.php">fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="beauty.php">Beauty</a>
        </li>
      
        
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



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
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    
    include "dbmkart.php";

    $q="SELECT * FROM `order` WHERE `cat`='fashion'";
    error_reporting(0);
    $re=mysqli_query($con,$q);
    $num=mysqli_num_rows($re);


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
          <td>".$row['count']."</td>
          <td>".$row['cat']."</td>
         
          <td><a href='fashion.php?idd=$row[oid]'><button type='button' class='btn btn-danger'>Delete</button></a></td>
        </tr>";

        }
    }

    ?>
    
      </tbody>
</table>


    <?php
    
    if($_SERVER['REQUEST_METHOD']=="GET") {
include "dbmkart.php";


$idd=$_GET['idd'];
$q="DELETE FROM `order` WHERE `oid`='$idd'";
$res=mysqli_query($con,$q);

if ($res) {
echo "wow";
}
else
{
  echo "error";
}
  }
  
?>



</body>
</html>