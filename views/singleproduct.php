<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="style.css">

<style>
body{
    background:#57704f;
color: #F9ECD0;
margin:0px;
}

.singleproduct{
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 40px;
    padding-top: 160px;
margin-bottom:130px;
.img{
    width: 500px;
        height: 520px;
}

.desc{
    display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 25px;

        .singletitle{
font-size:40px;

        }
        .para{
            width:400px;
        }
    .counter{
        width: 100px;
    height: 25px;
    background: red;
    }
.price{
font-size:25px
}
.cart{
    background:#002204;
color: #F9ECD0;

padding: 14px 20px;
    border-radius: 30px;
    border: none;
}
.cart:hover{
    background:transparent;
color:#002204 ;
border:2px solid #002204;
}
}
}


.mayyoulike{
width:85%;
margin:0 auto;
margin-bottom: 40px;

}
swiper-container {
      width: 85%;
      height: 250px;
      margin:0 auto;
      margin-bottom:80px;
    }

    swiper-slide {
      font-size: 18px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      display: flex;
     gap: 10px;


    .img{
      height:70%;
      width:100%;

     .iconss{
      display: flex;
      flex-direction: column;
       gap:10px;
      position: absolute;
      right: 15px;
      top: 20px;
      cursor: pointer;
     }
     .addtocart{
      color: #F9ECD0;
      text-align: center;
      background:#002204;
      padding: 8px 0;
      position: relative;
      top: 78%;
      width:0px;
      transition:0.5s;
      font-size:0px;
      height: 22px;
      cursor: pointer;

       }
    }

 .descseller{
  display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
 
  .titleitem{
    font-weight: 100;

  }
}

    }
    

    swiper-slide:hover .addtocart{
width:100%;
font-size:20px;

    }


</style>


</head>
<body>
<?php  require("header.php")  ?>

<div class="singleproduct">

<div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;"></div>


<div class="desc"> 

 <h1 class="singletitle">Pothos martble </h1>
 <p class="para">Lorem ipsum  Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, quod!dolor sit amet consectetur adipisicing elit. Id,Lorem, ipsum dolor. nemo.</p>
 <p class="price">50$</p>

 <div class="counter"> 22</div>

 <button class="cart">Add To Cart</buttom>

</div>

</div>





<h2 class="mayyoulike">Items you may like</h2>





<swiper-container class="mySwiper" pagination="true"  pagination-clickable="true" space-between="50"
    slides-per-view="4">
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>
    <swiper-slide>
    <div class="img" style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;">

 <div class="iconss">
  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="20"  width="20" viewBox="0 0 512 512"><path fill="#145c00" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
  </a>

  <a href="" >
  <svg xmlns="http://www.w3.org/2000/svg" height="22" width="22" viewBox="0 0 512 512"><path fill="#226100" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
  </a>

         </div>
 
  <div class="addtocart">
 Add to cart

  </div>
 </div>

 <div class="descseller">
 <h4 class="titleitem">Peperomia Ginny</h4>  
 <p class="price" >35$</p>
 </div>


    </swiper-slide>

  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <?php  require("footer.php")  ?> 


</body>
</html>