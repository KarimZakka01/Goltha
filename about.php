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
        
        <?php include('header.html'); ?>

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