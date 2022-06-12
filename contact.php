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

    <section class = "contact-subheading">
        
        <?php include('header.html'); ?>


        <a id="simulate-jump"><h1>Contact Us</h1></a>

    </section>

    <!-------CONTACT US CONTENT------->

    <section class="location">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.2947662790675!2d35.49445361503165!3d33.88206158065258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f173c55cfddfb%3A0x3fe55df78257daed!2sSalim%20Salam%2C%20Bayrut!5e0!3m2!1sen!2slb!4v1653405521788!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <section class="contactus">
        <div class="row">
            <div class="contactcol">
                <div>
                    <i class="fa fa-home"></i>
                        <span> <!--div is a block-level element, while <span> is an inline element-->
                            <h5>ABC Road, XYZ Building</h5>
                            <p>Beirut, Lebanon</p>
                        </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                        <span> <!--div is a block-level element, while <span> is an inline element-->
                            <h5>+961 78 870 922 </h5>
                            <p>Monday to Saturday, 10:00am to 5:00pm</p>
                        </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                        <span> <!--div is a block-level element, while <span> is an inline element-->
                            <h5>karimzakka2001@gmail.com</h5>
                            <p>Email your inquiries</p>
                        </span>
                </div>

            </div>

            <div class="contactcol">

                <form action="contacthandler.php" method="post">
                    <input type="text" name="name" placeholder="Enter your Name" required><!--placeholder specifies a short hint that describes the expected value of an input field-->
                    <input type="email" name="email" placeholder="Enter your Email Address" required>
                    <input type="text" name="subject" placeholder="Enter your Subject" required> 
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" class="morebutton purplebutton">Send Message</button>
                </form>
                
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