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

<?php include('header.html'); ?>


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

<?php include('footer.html'); ?>



<!-------JS FOR TOGGLING MENU-------> 
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