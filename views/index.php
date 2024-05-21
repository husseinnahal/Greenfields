<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mashtal</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body{
margin:0px;
      }

.home {
  height: 100vh;
  width: 100%;
 background-image: url(../img/mainbackgroun.jpeg);
 background-repeat: no-repeat;
 background-size: cover;

.words{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 70%;
  color: #F9ECD0;
  position: relative;
  top: 172px;
  font-family: ui-serif;
.title{
  font-size: 85px;
  font-weight: 100;
  margin-bottom: 45px;
}
.desc{
  font-size: 40px;
  position: relative;
  bottom: 60px;
  width: 660px;
text-align: center;
}
a{
  background-color: #57704f;
    padding: 17px 39px;
    border-radius: 24px;
    text-decoration: none;
    position: relative;
    bottom: 60px;
    color:#F9ECD0 ;
    font-size: 20px;
    transition: 0.5s;
}
a:hover{
  background-color: #F9ECD0;
  color: #57704f;
  

}
}
}


    </style>
</head>
<body>
<?php  require("header.php")  ?>

<div class="home">
 <div class="words">
    
   <h1 class="title">Welcome To Greenfields</h1>
    <p class="desc">your premier destination for permium quality trees</p>
  <a href="allproducts.php" >Shop Now</a>
   </div>
</div>

<?php  require("categories.php")  ?>

<?php  require("bestseller.php")  ?> 
<?php  require("product.php")  ?> 
<?php  require("footer.php")  ?> 




</body>
</html>