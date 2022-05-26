<?php

include "connection.php";

session_start();




if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($DBConnect, $_POST['email']);
   //This function protects against sql query injections; it escapes special characters in a string
   $pass = md5($_POST['password']);
   
   //MD5 is a form of encryption. It generates a hash from a string
   

   $select = " SELECT * FROM `user` WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($DBConnect, $select);//mysqli_query() performs a query against the. We stored it in a variable called result

   $row  = mysqli_fetch_array($result); 

   if(is_array($row)) {
       $_SESSION["id"] = $row['id']; //create session  for the user id
       $_SESSION["name"] = $row['name']; // create a session for the name of the user
       $_SESSION["password"] = $row['password']; //create session  for the user password
       
       if(isset($_SESSION["id"])) {
           header("Location:index.php"); // direct the user to the index page  - Success
       }
   } else {
       $error[] = "Incorrect email or password!"; 
   }
}


?>



<!DOCTYPE html>
<html>
<head>

<title>Goltha</title>

<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
<meta charset = "UTF-8">
<meta http-equiv = "refresh" content = "600">

<link rel = "stylesheet" href = "style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:
wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<!--Got the font from google fonts-->

<link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--This is a cdn (content delivery network) for font awesome.-->


<body class = "regpage">


    <!-------REGISTER CONTENT------->
<div class="mainbox">
   <div class="content">
    <div class="formbox">

        <form action="" method="post">
           <h3>Sign In</h3>
           <?php
           if(isset($error)){
              foreach($error as $error){
                 echo '<span class="errormsg">'.$error.'</span>';
              }

           }
           
           ?>
           
           
           <input type="email" name="email" required placeholder="Enter Your Email">
           <input type="password" name="password" required placeholder="Enter Your Password">
          
          
           <input type="submit" name="submit" value="Login" class="formbutton">
           <p>Don't have an account?&nbsp;<a href="register.php">Register Now</a></p>
        </form>
     
     </div>
     </div>
     </div>
    
    


<!-------FOOTER-------> 
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptates,
        pariatur et quasi odit vel harum libero eius! Exercitationem delectus, labore<br>
        corrupti fuga doloribus eligendi at quod praesentium iure architecto!</p>
    <div class="socialicons">
        <i class="fa fa-facebook"></i><!--FACEBOOK icon from font awesome-->
        <a href="https://twitter.com/KarimZakka2" target="_blank"><i class="fa fa-twitter"></i></a><!--TWITTER icon from font awesome-->
        <a href="https://www.instagram.com/karim_zakka/" target="_blank"><i class="fa fa-instagram"></i></a><!--INSTAGRAM icon from font awesome-->
        <a href="https://www.linkedin.com/in/karim-zakka-022a2a1b6/" target="_blank"><i class="fa fa-linkedin"></i></a><!--LINKEDIN icon from font awesome-->
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><!--YOUTUBE icon from font awesome-->
    </div>
    <p>Made with <i class="fa fa-heart-o"></i> By Karim Zakka</p>

</section>

    


    
</body>
</html>