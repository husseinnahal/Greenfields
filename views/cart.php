<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

    <style>
body{
    background:#57704f;
 color: #F9ECD0;
 margin:0px;
}



.carts{
min-height:83vh;
padding:120px 0 0 0;
font-family: ui-serif;
    font-size: 23px;
.carttitle{
text-align:center;
}



}

.orders{
    width:90%;
    margin:100px auto;
 margin-top:50px;
 display:flex;
 justify-content:space-between;   

 .summary{
    border:2px solid #002204;
width:30%;
height:363px;
margin-top:30px;

.titlesummary{
    color:#002204;
    padding:15px;
 border-bottom:2px solid #002204;
margin:0;
}

.subtotal{
    display:flex;
    justify-content:space-between;
    padding:0 15px;

}

.totalsummary{
    display:flex;
    justify-content:space-between;
    padding:0 15px;
    color:#002204;
    border-top:2px solid #002204;
    margin-top:25px;
}

.checkout{
background:#002204;
text-align:center;
padding:10px
}
 }

}

table{
    width: 65%;

 th{
        text-align:start;
        font-size: 32px;
    font-weight: 200;
  padding-bottom:8px;
  border-bottom:2px solid #002204;
 }
 td{
 border-bottom:2px solid #002204;
.total{
    display: flex;
            gap: 40px;
            align-items: center;
            justify-content: space-around;
.del{
    width:35px;
    height:35px;
    border-radius:50%;
    background:#002204;
    display: flex;
                align-items: center;
                justify-content: center;
}
}
}

.product{
    display: flex;
        gap: 13px;
        padding: 16px 0;
        align-items: center;
.img{
 width:140px;
 height:120px;
 background:red;
}
}

.counterr{
    width: 90px;
        height: 30px;
        background: white;
        border-radius: 30px;
}

}




    </style>
</head>
<body>
<?php  require("header.php")  ?>
<div class="carts">
    <h1 class="carttitle">Your cart</h1>


 <div class="orders">

     
<table>
  <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr>


 <tr>
 <td class="product">
 <div class="img"  style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;"></div>
 <h3>Fittonia plant</h3>
 </td>

    <td>30$</td>
    <td>
    <div class="counterr"></div>
    </td>

    <td>
 <div class="total">
 <p>30$</p>
 <div class="del">X</div>

 </div>
    </td>

 </tr>
 <tr>
 <td class="product">
 <div class="img"  style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;"></div>
 <h3>Fittonia plant</h3>
 </td>

    <td>30$</td>
    <td>
    <div class="counterr"></div>
    </td>

    <td>
 <div class="total">
 <p>30$</p>
 <div class="del">X</div>

 </div>
    </td>

 </tr>
 <tr>
 <td class="product">
 <div class="img"  style="    background-image: url(../img/bestseller.jpeg);
  background-repeat: no-repeat;
    background-size: 100% 100%;"></div>
 <h3>Fittonia plant</h3>
 </td>

    <td>30$</td>
    <td>
    <div class="counterr"></div>
    </td>

    <td>
 <div class="total">
 <p>30$</p>
 <div class="del">X</div>

 </div>
    </td>

 </tr>




</table>


<div class="summary">
<h3 class="titlesummary">Order Summary</h3>

<div class="subtotal">
 <p>Subtotal</p>
 <p>140$</p>
</div>
<div class="subtotal">
 <p>Shipping </p>
 <p>5$</p>
</div>

<div class="totalsummary">
<h3>Total</h3>
<p>145$</p>
</div>

<div class="checkout">
Checkout
</div>

</div>

</div>


</div>






<?php  require("footer.php")  ?> 
</body>
</html>