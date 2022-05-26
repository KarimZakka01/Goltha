<?php
include "connection.php";

session_start();

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


<body>

    <section class = "subheading">
        <nav>
            <a href="index.html"><img src="golthalogo.svg" alt="This is the logo"></a>
            <div class = "navigation">
                
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
          
        </nav>


        <h1>About Us</h1>

    </section>

    <!-------ABOUT US CONTENT------->

    <section class="about">
        <div class="row">
            <div class="aboutcol">
                <h1>We Help You Reach Your Full Potential</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ipsum cumque excepturi voluptatem magni tenetur, modi exercitationem
                    alias, qui neque soluta accusantium perspiciatis vero natus
                    nobis quisquam sit maxime consequatur nam!
                </p>
                <a href="services.php" class="morebutton purplebutton">EXPLORE NOW</a>
            </div>

            <div class="aboutcol">
                <img src="aboutsecond.jpg" alt="">

            </div>

        </div>

    </section>




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