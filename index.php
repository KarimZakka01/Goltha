<?php
include "connection.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Goltha</title>

<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
<!--width = device-width: sets the width of the page to follow the screen-width of the device.
    initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
<meta charset = "UTF-8">
<!--Specifies the character encoding for the HTML document (UTF-8 is the character set that is always encouraged for websites)-->
<!-- <meta http-equiv = "refresh" content = "400"> -->
<!--Refresh page every 400 seconds-->

<link rel = "stylesheet" href = "style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:
wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<!--Got the font from google fonts-->

<link rel="stylesheet" href="https:/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--This is a cdn (content delivery network) for font awesome.-->


<body>

    <section class = "heading">
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


        <div class="box">
            <h1>Unravel Your Potential</h1>
            <p>Ever felt trapped and lost? Didn't know what
               educational path is the most suitable for you?<br>
               Goltha is the answer to all of your questions.
               Simulate, Collect, & Consult with Goltha to
               become the best version of yourselves!</p>
            <a href="about.php" class="morebutton">Click Here to Find Out More</a>

        </div>

    </section>

  

<!-------SERVICES------->

<section class="service">
    <h1>Our Services</h1>
    <p>Igniting your passion is what our services are all about!</p>

    <div class="row">

    <div class="servicecol">
    <a href="services.php#simulate-jump"><h3>Simulate</h3>
        <p>Our simulation form offers you the chance to draw out what career
           path is the most suitable for you according to what section you join in the 11th grade
           and the 12th grade. Whether it was G11 Scientific & G12 Life & Science, or even G11 Literature and G12 General Sciences,
           All your options will be presented on a golden plate and your journey to success will begin.
        </p></a>
    </div>

    <div class="servicecol">
    <a href="services.php#collect-jump"><h3>Collect</h3>
        <p>We know it can be a bit overwhelming to start your college research.
            From looking for the precise tutuion fees, to finding the suitable office
            to contact in the university, to even figuring out what major a specific 
            university shines in... That's why we made a summary of data of each university in Lebanon
            for you to collect. All information in the palm of yourn hands within seconds!
        </p></a>
    </div>

    <div class="servicecol">
    <a href="contact.php#consult-jump"><h3>Consult</h3>
        <p>Still can't figure out what it is you want to do and what path you're going
            to take? No worries, just go right ahead and send us a message through 
            the contact form and we'll get back to you before you can pronounce Goltha!
            After we gather some basic information from you, a consultant from our offices
            will reach out, listen to everything you have to say, and help you figure out 
            who and what you want to do and be. 
        </p></a>
    </div>
</div>
    

</section>

    <!-------STAFF------->

    <section class="staff">
        <h1>Meet the Team</h1>
        <p>It's a team of one currently, but hey! Photos of Adventure Time!</p>

        <div class="row">
            <div class="staffcol">
                <img src="images/jake.jpg" alt="">
                <div class="layer">
                    <h3>JAKE</h3>
                </div>  
            </div>

            <div class="staffcol">
                <img src="images/king.jpeg" alt="">
                <div class="layer">
                    <h3>ICE KING</h3>
                </div>
            </div>

            <div class="staffcol">
                <img src="images/finn.jpeg" alt="">
                <div class="layer">
                    <h3>FINN</h3>
                </div>
            </div>
        </div>
    </section>

    <!-------FACILITIES------->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lord of the Rings famous sites</p>

        <div class="row">
            <div class="facilitiescol">
                <img src="images/minastirith.jpg" alt="">
                <h3>Royal Ground of Minas Tirith</h3>
                <p>Shines in the center of Gondor, Minas Tirith rests on its mountain-seat.</p>
            </div>
            
            <div class="facilitiescol">
                <img src="images/shire.jpg" alt="">
                <h3>Humble Village of Shire</h3>
                <p>Idyllic and fruitful land, beloved by all. A place for everyone to gather.</p>
            </div> 

            <div class="facilitiescol">
                <img src="images/baraddûr.jpg" alt="">
                <h3>Tower of Barad Dûr</h3>
                <p>A scary but powerful place, definitely not for the faint-hearted.</p>
            </div> 
        </div>
</section>

<!-------TESTIMONIALS------->
<section class="testimonials">
    <h1>What Our Users Say</h1>
        <p>Reviews from our real users!</p>

        <div class="row">
            <div class="testimonialscol">
                <img src="images/gandalf.jpg" alt="">
                <div>
                    <p>Goltha helped me find my calling. I would not be Gandalf the White
                        if it wasn't for the people at Goltha. They helped me reach my full 
                        wizarding potential! I would definitely recommend it and I might I 
                        suggest getting in touch with whoever is responsible for project!
                    </p>
                    <h3>Gandalf The Grey</h3>
                    <i class="fa fa-star"></i><!--star (rating) icon from font awesome-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i><!--HALF FILLED star (rating) icon from font awesome-->
                </div>
            </div> 

            <div class="testimonialscol">
                <img src="images/gollum.jpg" alt="">
                <div>
                    <p>After spending a bit of time using Goltha's precious services,
                        I no longer feel lost or needing a ring or anything! I became whole.
                        Goltha guided me through it and I can now say with full certainty
                        that I want to become a wizard. Yes... a precious wizard...
                        
                    </p>
                    <h3>Gollum The Creature</h3>
                    <i class="fa fa-star"></i><!--FULL star (rating) icon from font awesome-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i><!--EMPTY star (rating) icon from font awesome-->
                </div>
            </div> 
        </div>   
    
</section>

<!-------CALL TO ACTION------->
<section class="call">
    <h1>Simulate, Collect, & Consult with Goltha to<br>Become the Best Version of Yourselves</h1>
    <a href="contact.php" class="morebutton">CONTACT US</a>

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