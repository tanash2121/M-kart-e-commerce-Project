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
<body>
 
<div class="container my-5">
<h1> Admin <h1> 
  <h2>UserDetails</h2>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Phone-Number</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Coustomer_ID</th>
    </tr>
  </thead>
  <tbody>
  </div>
  <?php
    
    include "temdb.php";
    
    $q="SELECT * FROM `register`";
    $res=mysqli_query($con,$q);
    
    $num=mysqli_num_rows($res);

    if($num>0){


    while($row=mysqli_fetch_assoc($res)){

    echo" <tr>
    <th scope='row'>".$row['email']."</th>
    <td>".$row['phonenumber']."</td>
    <td>".$row['username']."</td>
    <td>".$row['password']."</td>
    <td>".$row['id']."</td>
  </tr>";
    }
  }
    ?>

  </tbody>
</table>
<?php

include "temdb.php";
if($_SERVER['REQUEST_METHOD']=="POST"){

  $us=$_POST['usname'];
  $pass=$_POST['pass'];
  $id=$_POST['id'];

  $sq="UPDATE `register` SET `username`='$us',`password`='$pass' WHERE `id`='$id' ";
  $re=mysqli_query($con,$sq);

  if($re){

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Refresh the Page for better Result  </strong> Editing done successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }else{
    echo"rrrr";
  }

}

?>
<form action="admin.php" method="post">
<h2>Edit-Section</h2>
<p>Enter the Coustomer_ID and you will able edit following section</p>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">  Coustomer_ID </label>
    <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" name="usname" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
  </div>
  <div id="emailHelp" class="form-text">Admin can only able to change password ad username </div>
  <button type="submit" class="btn btn-success">Edit</button>
</form>

<?php

include "temdb.php";
if($_SERVER['REQUEST_METHOD']=="POST"){

  
  $idd=$_POST['idd'];

  $sql="DELETE FROM `register` WHERE `id`='$idd' ";
  $res=mysqli_query($con,$sql);

  if($res){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Refresh the page for better Result </strong> Delition done successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }else{
    echo"rrrr";
  }

}
?>
<form action="admin.php" method="post">
<h2>Delete-Section</h2>
<p>Enter the Coustomer_ID and you able delete custmers Details</p>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">  Coustomer_ID </label>
    <input type="text" class="form-control" name="idd" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div id="emailHelp" class="form-text">Be Carefull All the data of an user will be deleted  </div>
  <button type="submit" class="btn btn-danger">Delete</button>
</form>






</body>
</html>