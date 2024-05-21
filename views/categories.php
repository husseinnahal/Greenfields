<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 70%;
    
    }

    body {
 
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #F9ECD0;
      background:#57704f;
      
    }

.titlee{
  padding: 60px;
  padding-top: 30px;
    font-size: 35px;
    font-weight: 100;
}

    .swiper {
      width:100%;
      height: 450px;
    }

    .swiper-slide {
      font-size: 18px;

    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: flex-start;
    border-radius: 20px;
    transition: 0.5s;
    gap: 10px;

.titles{
  background: #3a6c3a;

    padding: 5px 10px;
    border-radius: 6px;
margin-left:10px
}
a{
  display: flex;
        justify-content: space-between;
        width: 84%;
        background-color: #002204;
        text-decoration: none;
        border-radius: 15px;
        margin-bottom: 10px;
        padding: 0 8px;
        height: 45px;
        align-items: center;
        color: #F9ECD0;
margin-left:10px
    
}
    }




 .swiper-button-next , .swiper-button-prev {

  color: #F9ECD0;
    background: #3a6c3a;
    width: 45px;
    border-radius: 50%;
    padding: 10px;
    height: 45px;
}
.para{
  height:70px
}
  </style>
</head>

<body>
  <h1 class="titlee">Our Categories</h1>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <div class="swiper-slide" ></div>
      <div class="swiper-slide" style="    background-image: url(../img/lemon.jpg);
             background-repeat: no-repeat;
                 background-size: cover;">
        <p class="titles">Cirtus Trees</p>
        <a href="" >
          <p>explore </p>              
          <p> -> </p>
        </a>
      </div>

      <div class="swiper-slide" style="    background-image: url(../img/flow.jpg);
background-repeat: no-repeat;
background-size: cover;">
        <p class="titles">Flowers</p>
        <a href="" >
          <p>explore </p>              
          <p> -> </p>
        </a>
      </div> 

      <div class="swiper-slide" style="    background-image: url(../img/orn.jpg);
background-repeat: no-repeat;
background-size: cover;">
        <p class="titles">Onamental Plant</p>
        <a href="" >
          <p>explore </p>              
          <p> -> </p>
        </a>
      </div>
      <div class="swiper-slide" style="    background-image: url(../img/in.jpg);
background-repeat: no-repeat;
background-size: cover;">
        <p class="titles">Indoor Plant</p>
        <a href="" >
          <p>explore </p>              
          <p> -> </p>
        </a>
      </div>
      <div class="swiper-slide" style="    background-image: url(../img/pl.jpg);
background-repeat: no-repeat;
background-size: cover;">
        <p class="titles">Cirtus Trees</p>
        <a href="" >
          <p>explore </p>              
          <p> -> </p>
        </a>
      </div>
  
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
<p class="para"> </p>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4.5,
      spaceBetween: 30,
      // centeredSlides: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>
