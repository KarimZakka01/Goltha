<?php
include "connection.php";

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Goltha</title>

<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
<meta charset = "UTF-8">
<!-- <meta http-equiv = "refresh" content = "400"> -->

<link rel = "stylesheet" href = "style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:
wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<!--Got the font from google fonts-->

<link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--This is a cdn (content delivery network) for font awesome.-->


<body>

    <section class = "about-subheading">
    <nav>
            <a href="index.html"><img src="images/golthalogo.svg" alt="This is the logo"></a>
            <div class = "navigation" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i> <!--menu icon from font awesome-->
          
        </nav>

        <h1>About Us</h1>

    </section>

    <!-------ABOUT US CONTENT------->

    <section class="about">
        <div class="row">
            <div class="aboutcol">
                <h1>We Help You Reach Your Full Potential</h1>
                <p>
                    A need for a fully-fledged educational website that assists students in all aspects has always 
                    been present. We've seen many people struggling with choosing their high school sections that 
                    are responsible for building a base for college education, struggling with university research, 
                    and struggling with decision making. That's why "Goltha" was developed. "Goltha" means education 
                    in elvish langauge (written by J. R. R. Tolkien), that's how much committed we are to your 
                    educational needs and we will stick by your side through every step of the way.

                </p>
                <a href="services.php" class="morebutton purplebutton">EXPLORE NOW</a>
            </div>

            <div class="aboutcol">
                <img src="images/aboutdesc.jpg" alt="">

            </div>

        </div>

    </section>




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
    <p>Copyright &copy; 2022 Goltha Inc. | All rights reserved | Karim Zakka</p>
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