<?php
include ('../include/db.php');
 include ('../include/register.php')
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
<style>

body{
    background:#57704f;
color: #F9ECD0;
margin:0px;
}


.login{
display: flex;
justify-content:space-between;
align-items: center;
z-index: -1;
.log{

    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-left: 290px;
    width: 440px;
    margin-top:80px;

    h1{
    text-align: center;
    font-size: 40px;
    margin-bottom: 0px;
}

}

.inputs{    
    display: flex;
    flex-direction: column;
    gap: 12px;

    label{
        font-size:20px;
    }
    .information{
        background: none;
    border: 2px solid black;
    border-radius: 30px;
    padding: 12px;
color: #F9ECD0;
 
    }

    .send{
        background:#002204;
        color: #F9ECD0;

    width: 130px;
    border-radius: 30px;
    padding: 10px;
    margin: 0 auto;
    font-size:19px;
    border:none;
    cursor: pointer;
    }
    .information:focus{
outline:none;

    }

.errors{
    display: flex;
    align-items: center;
    justify-content: space-between;
    .error{
        color: #dd0404;
      font-size: 17px;
    }
    .succ{
        color: #002204;
      font-size: 17px;
    }
    p{margin:8px 0}
}

}

}


</style>

</head>
<body>
<?php  require("header.php")  ?>

<div class="login">
<div class="log">
    <h1>Welcome to Greenfields!</h1>
    <p>Lorem ipsum dolor sit adipisicing elit. Minus deleniti deserunt quod voluptatibus ab.</p>

<form   action="register.php" method="Post" class="inputs">

    <label for="name"> User name</label>
<input type="text" id="name" name="name" placeholder="Enter your user name " require=""  class="information" value="<?php echo $name?>" autocomplete="off"/>

    <label for="email" for="email"> Email</label>
<input type="email" id="email" name="email" placeholder="Enter your Adress" require="" value="<?php echo $email?>" class="information" autocomplete="off">

<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Enter you password" class="information" require="" value="<?php echo $pass?>" autocomplete="off">

<label for="comfpass">Comfirm Password</label>
<input type="password" id="comfpass" name="confpass" placeholder="Enter you password" class="information" require="" value="<?php echo $conpass?>" autocomplete="off">

<div class="errors">
    <p class="succ"> <?php echo $success ?></p>
    <p class="error"> <?php echo $error ?></p>
<p>Already have an acount?<a href="login.php">login</a></p>
</div>
<input type="submit" class="send" value="send" name="submit"/> 

</form>


</div>




<img src="../img/register.png" alt="back" width="600" height="740">

</div>

</body>
</html>