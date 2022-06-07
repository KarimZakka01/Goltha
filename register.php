<?php

include "connection.php";


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($DBConnect, $_POST['name']);
   $email = mysqli_real_escape_string($DBConnect, $_POST['email']);
   //This function protects against sql query injections; it escapes special characters in a string
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   //MD5 is a form of encryption. It generates a hash from a string
   $gender = $_POST['gender'];

   $select = " SELECT * FROM `user` WHERE email = '$email' || password = '$pass' ";

   $result = mysqli_query($DBConnect, $select);//mysqli_query() performs a query against the. We stored it in a variable called result

   if(mysqli_num_rows($result) > 0){//mysqli_num_rows()  returns the number of rows in the result
      //This if statement will check if any of the emails & passwords where found in the DB, and if they were, we will perform:
      $error[] = 'User already exists!';

   }else{

      if($pass != $cpass){
        
         $error[] = 'Passwords do not match!';

      }else{
        
         $insert = "INSERT INTO user(name, email, password, gender) VALUES('$name','$email','$pass','$gender')";
         mysqli_query($DBConnect, $insert);
         header('location:login.php');
      }
   }

};


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


<nav>
            <a href="index.html"><img src="images/golthalogo.svg" alt="This is the logo"></a>
            <div class = "navigation" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <!-- <li><a href="#">More</a>
                    <ul> -->
                    <li><a href="register.php">Register</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <!-- </ul>
                    </li> -->
                    
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i> <!--menu icon from font awesome-->
          
        </nav>


    <!-------REGISTER CONTENT------->
<div class="mainbox">
   <div class="content">
    <div class="formbox">

        <form action="" method="post">
           <h3>Register Here</h3>
           <?php
           if(isset($error)){
              foreach($error as $error){
                 echo '<span class="errormsg">'.$error.'</span>';
              }

           }
           
           ?>
           
           <input type="text" name="name" required placeholder="Enter Your Name">
           <input type="email" name="email" required placeholder="Enter Your Email">
           <input type="password" name="password" required placeholder="Enter Your Password">
           <input type="password" name="cpassword" required placeholder="Confirm Your Password">
           <select name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="female">Other</option>
           </select>
           <input type="submit" name="submit" value="Register" class="formbutton">
           <p>Already have an account?&nbsp;<a href="login.php">Login Now</a></p>
        </form>
     
     </div>
     </div>
     </div>
    
    


<!-------FOOTER-------> 
<section class="footer">
    <h4>About Us</h4>
    <p>Goltha Inc. • Beirut, Lebanon • Main (961) 78-870-922 • Support (961) 03-123-456 </p>
    <div class="socialicons">
        <i class="fa fa-facebook"></i><!--FACEBOOK icon from font awesome-->
        <a href="https://twitter.com/KarimZakka2" target="_blank"><i class="fa fa-twitter"></i></a><!--TWITTER icon from font awesome-->
        <a href="https://www.instagram.com/karim_zakka/" target="_blank"><i class="fa fa-instagram"></i></a><!--INSTAGRAM icon from font awesome-->
        <a href="https://www.linkedin.com/in/karim-zakka-022a2a1b6/" target="_blank"><i class="fa fa-linkedin"></i></a><!--LINKEDIN icon from font awesome-->
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a><!--YOUTUBE icon from font awesome-->
    </div>
    <p>Copyright &copy; 2022-20XX Goltha Inc. | All rights reserved | Karim Zakka</p>

</section>

    
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    
    }

</script>

   
</body>
</html>