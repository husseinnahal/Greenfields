<?php
include ('db.php');



$name=  "";
$email=  ""; 
$pass=  ""; 
$conpass=  ""; 

$error=  ""; 
$success=  ""; 


if(isset($_POST['submit'])){ 
    $name=    $_POST['name'];
    $email=   $_POST['email']; 
    $pass=   $_POST['password']; 
    $conpass=   $_POST['confpass']; 
    
    if(empty($name) || empty($email) || empty($pass) || empty($conpass)    ){
   $error="All fields are required";

    }
    elseif ($pass!==$conpass) {
    $error="password don't match";
    }
else{
    session_start();

 $sql="INSERT INTO register(name,email,password) VALUES ('$name','$email','$pass')";
 $data = mysqli_fetch_assoc($sql);
    $_SESSION["user_info"]=$data;
 
    if (mysqli_query($conn,$sql)) {
$success=  "Registration Successful!"; 
    }
}
}


?>