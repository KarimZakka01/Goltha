<?php
include "connection.php";

session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Goltha</title>

<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
<!--width = device-width: sets the width of the page to follow the screen-width of the device.
    initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
<meta charset = "UTF-8">
<!--Specifies the character encoding for the HTML document (UTF-8 is the character set that is always encouraged for websites)-->
<meta http-equiv = "refresh" content = "400">
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


        <div class="box">
            <h1>Unravel Your Potential</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Assum enda rem, explicabo labore et aspernatur nesciunt alias<br>
                esse repellendus facere sit accusamus sapiente cum, odit vitae illo
                expedita odio ea soluta?</p>
            <a href="about.php" class="morebutton">Click Here to Find Out More</a>

        </div>

    </section>

  

<!-------SERVICES------->

<section class="service">
    <h1>Our Services</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

    <div class="row">

    <div class="servicecol">
        <h3>Simulate</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia inventore fugiat eius
            obcaecati, sed, quas adipisci laborum nihil molestias a, perferendis architecto. Voluptatem,
            laborum debitis suscipit aliquam velit labore magnam?</p>
    </div>

    <div class="servicecol">
        <h3>Collect</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia inventore fugiat eius
            obcaecati, sed, quas adipisci laborum nihil molestias a, perferendis architecto. Voluptatem,
            laborum debitis suscipit aliquam velit labore magnam?</p>
    </div>

    <div class="servicecol">
        <h3>Consult</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia inventore fugiat eius
            obcaecati, sed, quas adipisci laborum nihil molestias a, perferendis architecto. Voluptatem,
            laborum debitis suscipit aliquam velit labore magnam?</p>
    </div>
</div>
    

</section>

    <!-------STAFF------->

    <section class="staff">
        <h1>Meet the Team</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="staffcol">
                <img src="jake.jpg" alt="">
                <div class="layer">
                    <h3>JAKE</h3>
                </div>  
            </div>

            <div class="staffcol">
                <img src="king.jpeg" alt="">
                <div class="layer">
                    <h3>ICE KING</h3>
                </div>
            </div>

            <div class="staffcol">
                <img src="finn.jpeg" alt="">
                <div class="layer">
                    <h3>FINN</h3>
                </div>
            </div>
        </div>
    </section>

    <!-------FACILITIES------->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="facilitiescol">
                <img src="minastirith.jpg" alt="">
                <h3>Royal Ground of Minas Tirith</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
            
            <div class="facilitiescol">
                <img src="shire.jpg" alt="">
                <h3>Humble Village of Shire</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div> 

            <div class="facilitiescol">
                <img src="baraddûr.jpg" alt="">
                <h3>Tower of Barad Dûr</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div> 
        </div>
</section>

<!-------TESTIMONIALS------->
<section class="testimonials">
    <h1>What Our Users Say</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="testimonialscol">
                <img src="gandalf.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Molestiae quia accusantium dolor omnis aliquid porro laudantium,
                        doloribus ex ullam adipisci nisi nobis a voluptate aperiam rerum
                        officia cum earum excepturi.</p>
                    <h3>Gandalf The Grey</h3>
                    <i class="fa fa-star"></i><!--star (rating) icon from font awesome-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i><!--HALF FILLED star (rating) icon from font awesome-->
                </div>
            </div> 

            <div class="testimonialscol">
                <img src="gollum.jpg" alt="">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Molestiae quia accusantium dolor omnis aliquid porro laudantium,
                        doloribus ex ullam adipisci nisi nobis a voluptate aperiam rerum
                        officia cum earum excepturi.</p>
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