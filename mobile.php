<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        

.container{

    margin-left:25%;
}
.mobile{

    margin: 55px 63px;
}
.mobile1{
    border: 2px solid black;
    margin:23px 23px;
    width:40vw;
    display: flex;
    }
.info{
    font-weight: bold;
    float: left;
    margin-right: 11%;
}

h1{
   text-align:center; 
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="mobile.php">Mobiles</a>
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


  <h1>Mobiles</h1>
     <div class="container">
 
    <div class="mobile">

        <div class="mobile1">
           
        <a href="mob1info.php"><img src='img/realme1.xx.jpg'  width="150px" height="170px"></a>
            <a href="mob1info.php">realme GT 5G (Racing Yellow, 256 GB)  (12 GB RAM)</a>
           <br>
            <div class="info">
            <p>-chinese product</p>
            <p>-khatarnak bhangar</p>
            <p>-chla to saal tak nahi toh raat tak</p>
            <p>-Duplicate maal</p>
        </div>

        </div>
        <div class="mobile1">
           <a href="mob2info.php"> <img src='img/vivo1.jpg'  width="150px" height="190px">
            <a href="mob2info.php">vivo T1 5G (Rainbow Fantasy, 128 GB)  (4 GB RAM)</a>
            <br>
            <div class="info">
            <p>-Bhikari feel</p>
            <p>-buttonacha mobile vapra yachya peksha</p>
            <p>-processor like shard pawar brain</p>
            <p>-Android (-12)</p>
        </div>

    </div>

</div>
</body>
</html>
