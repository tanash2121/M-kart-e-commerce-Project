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
  
    <title>M-Flex</title>
<style>
body{

    background-color: white;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;

  margin:5% -8%;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 0.75cm;
  padding: 8px 12px;
  position: absolute;
  top: 0;
  box-shadow: 5px 5px 5px 5px black;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.row_posterbig{

   margin-left: 10%;
}
.row_poster{

    box-shadow:  5px 5px 5px 5px black;
}
.row_poster:hover{
    border-radius: 10px;
   
    width: 15vw;
    height: 15vh;
}
    .row_poster{

        width: 11vw;
        height: 11vh;
    }
    .row{
     margin-top: 50px;
       border-radius: 10px;
 
    }
    .row h1{
        
     
    }
    h1{
        color: black;
        font-weight:bold;
    }
    .dot1{
        margin-right:14%;
    }
    .slideshow-container{

        margin-top:5%;
    }
</style>

</head> 
<body>
  <h1>M-flex</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="mflex.php">M-Flex</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music.php">Musically</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="sub.php">Subscription</a>
        </li>
        
        
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



    <div class="slideshow-container">
    
    <div class="mySlides fade">
      
      <a href="movie1.php"><img src='imagesm-flex/moneyheist.flex.jpg' style="width:80%"></a>
      <div class="text">Moneyheist</div>
    </div>
    
    <div class="mySlides fade">
     
      <a href="movie2.php"><img src='imagesm-flex/vikings.jpg' width="2000" height="450"  style="width:80%"></a>
      <div class="text">Vkings</div>
    </div>
    
    <div class="mySlides fade">
      
      <a href="movie3.php"><img src='imagesm-flex/pushpa.flex.jpeg' style="width:80%"></a>
      <div class="text">Pushpa</div>
    </div>
    
    </div>
    <br>
    <div class="dot1" style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

    

<div class="row">
    
    <h1>M-Flex Origin</h1>
    <div class="row_posters">
    <a href="moneyhesit.html"><img src='imagesm-flex/RRR.flex.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/Shershaah.flex.jpg '   class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/campus.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/police.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/rakt.jpg'class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/lucifer.flex.jpg '   class="row_poster "></a>
      
    </div>
</div>

<div class="row">
    
    <h1>Trending Now</h1>
    <div class="row_posters">
    <a href="moneyhesit.html"><img src='imagesm-flex/antim.flex.webp' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/dhamal.flex.jpg '   class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/idiot.flex.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/babu.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/pushpa.flex.jpeg'class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/squadgames.flex.jpg '   class="row_poster "></a>
      

    </div>
</div>

<div class="row">
    
    <h1>Web series</h1>
    <div class="row_posters">
        <a href="moneyhesit.html"><img src='imagesm-flex/moneyheist.flex.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/lucifer.flex.jpg '   class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/lastking.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/scam1992.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/narcos.jpg'class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/got.jpg' class="row_poster "></a>
      
  </div>
</div>


<div class="row">
    
    <h1>Hollywood</h1>
    <div class="row_posters">
    <a href="moneyhesit.html"><img src='imagesm-flex/the.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/mob.jpg '   class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/tion.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/un.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/maa.jpg'class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/jum.jpg' class="row_poster "></a>
      
  </div>
</div>


<div class="row">
    
    <h1>Bollywood</h1>
    <div class="row_posters">
    <a href="moneyhesit.html"><img src='imagesm-flex/bacha.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/gangubai.jpg '   class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/RRR.flex.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/Shershaah.flex.jpg' class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/radhe.jpg'class="row_poster "></a>
        <a href="moneyhesit.html"><img src='imagesm-flex/chohan.jpg' class="row_poster "></a>
      
  </div>
</div>

<script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
</body>
</html>