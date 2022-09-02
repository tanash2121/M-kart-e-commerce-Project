




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mhome.css">
    <title>M_kart</title>
</head>
<style>

*{
    margin: 0;
    padding: 0;
}
.title{
    width:auto;
    height:7vh;
    background-color: #ff4e00;
background-image: linear-gradient(315deg, #ff4e00 0%, #ec9f05 74%);

    display:flex;
    flex-direction:row;
    justify-content:center;
  

}
.title p{
    margin-top:3px;
    font-weight:bold;
    font-size: 0.75cm;

}
header{

    background-color: #eec0c6;
background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%);

width: 100vw;

 
    }
       nav{
        display:flex;
    }
    .logo{
       
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 23px 23px ;
        font-size: 0.75cm;
        font-weight: 200px;
        color: white;
       
    }
    .logo img{
        width:50px;
    
    }
  
    nav ul {
        height: 13vh;
         display: flex;
        justify-content: flex-start;
        align-items: center;
       list-style-type: none;  
    }

    nav ul li {
        padding: 0px 23px;
        list-style-type: none;
        font-size:larger;
        
    }

    nav ul li a{
       
        text-decoration: none;
        color: white;

    }
    nav ul li a:hover{
       
        font-weight: bolder;
    

    }
    
    .searchbar {
     
        display: flex;
          
        align-content: center; 

    }
    .searchbar input{
        display: flex;
        width: 423px;
        height: 22px;
        margin: 34px 23px;
      
   
    } 

    
    .search{
    display: flex;
            width: 56px;
            height: 26px;
        border: 2px solid red;
            margin: 34px -24px;
            
}
   main{
    height:400px;
    color: black;

    }   
    #gender{

    height: 4vh;
    width: 64px;
    margin: 34px 90px

    }
    
nav ul li a{

  
    color: black;
    text-decoration: none;
      list-style-type: none;
    font-size: 0.50cm;
    font-weight: 300;
       
}
.atoms{

    background-color: blanchedalmond;
    width: auto;
    height: auto;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
   flex-wrap: wrap;
   row-gap: 23px;
   width: 100vw;
   height: 27vh;
 
   
}
#M-flex a{
margin-right: 25px;
text-decoration: none;
font-weight: bold;
color: black;
}
#grocery a{
    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}
#mobiles a{
    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}
#laptops a{
    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}
#footwears a{
    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
color: black;
}
#fruits a{
    margin-right: 35px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}
#vegetables a{
    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
    color: black;
}
#fashtions a{
    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
    color: black;

}
#beauty a{

    margin-right: 25px;
    text-decoration: none;
    font-weight: bold;
    color: black;
    
} 
.deal {
    width: auto;
    height: 33vh;
    margin-top: 123PX;
    background-color: whitesmoke;
    border: 2px solid black;
    display: flex;
    flex-wrap: wrap;
    flex-direction: rows;
    justify-content:center;
    align-content: center;
    
}
#mob1{

margin: 23px 23px;
border: 2px solid black;

}
#mob3{

    margin: 23px 23px;
    border: 2px solid black;
    
    }
    #lap{

        margin: 23px 23px;
        border: 2px solid black;
        
    }

    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border:2px solid black;
  width:auto;


  
}


.text {
  color:black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


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


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

<body>

<header>
  
    <nav>
        <div class="logo">
            <img src="img/m-kart.xx.jpg" alt="m-kart">
            <h> M-kart </h>
        </div>
        <ul>
        
           
        </ul>
        <div class="searchbar">
            <input type="text" class="searchbar"  >
            
            <button class="search">Search</button>
        </div>

        <select name="more" id="gender">
                       
            <option value="more">more</option>
       
            <option value="notification">notification</option>
       
            <option value="sell detail">sell details</option>
       
            <option value="trades">traders</option>
   
        </select>

      <div id="login">
          <ul>
              
          <li><button><a href="login.php"> Login </a></button> </li>
              <i class="fas fa-shopping-cart"></i>
          </ul>
        
      </div>
    </nav>

 </header>
<main>

        <div class="atoms">

            <div id="M-flex"> <a href="mflex.php" target="main"><img src='img/m-flex.xx.jpg'   width="100px" height="100px"></a>
                <br>
                <a href="mflex.php">M-flex</a></div>

                
            <div id="grocery"> <a href= "grocery.php" target="main"><img src='img/grocery.xx.jpg'   width="100px" height="100px"> </a>
                <br>
                <a href="grocery.html">Grocery</a></div>

            <div id="vegetables">  <a href="vegetablee.php"><img src='img/vegetable.xx.jpg'  width="100px" height="100px"> </a> 
                    <br>
                    <a href="vegetable.php">Vegetables</a></div>

                    
            <div id="fruits">  <a href="fruitt.php"><img src='img/fruit.xx.jpg'  width="100px" height="100px"> </a> 
                        <br>
                        <a href="fruit.php">Fruits</a></div>
                

            <div id="mobiles"> <a href="mobile.php" target="main"> <img src='img/mobiles.xx.jpg'   width="100px" height="100px"> </a>
                <br>
                <a href="mobile.php">Mobiles</a></div>

                
            <div id="laptops">  <a href="laptop.php"><img src='img/laptops.xx.jpg'  width="100px" height="100px"> </a> 
                <br>
                <a href="laptop.php">Laptops</a></div>

                <div id="footwears">  <a href="footwearr.php"><img src='img/footwear.xx.jpg' width="100px" height="100px"> </a> 
                    <br>
                    <a href="footwear.php">Footwears</a></div>

                    <div id="fashtions">  <a href="fashionn.php"><img src='img/fashion.xx.jpg' width="100px" height="100px"> </a> 
                        <br>
                        <a href="fashion.php">Fashtion</a></div>

                        
                    <div id="beauty">  <a href="beautyy.php"><img src='img/beauty.xx.jpg' width="100px" height="100px"> </a> 
                        <br>
                        <a href="beauty.php">Beauty</a></div>

                    </div>
<br>
                    <h1>Hot Deals on Electronics:</h1>

<div class="slideshow-container">

<div class="mySlides fade" >
  
<a href="mob1info.php"><img src="img/realme1.xx.jpg" height="200" width="200" style="width:100%"></a>
  <div class="text">Realme 5G</div>
</div>

<div class="mySlides fade" >

<a href="mob2info.php"><img src="img/vivo1.jpg" height="200" width="200" style="width:100%"></a>
  <div class="text">Vivo 5G</div>
</div>

<div class="mySlides fade" >
  
  <a href="lap1info.php"><img src="img/laptop1.jpg" height="200" width="200" style="width:100%"></a>
  <div class="text">Acer aspire</div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



</main>
<footer>

</footer>
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