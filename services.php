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
    <?php include "connection.php";
    ?>

    <section class = "services-subheading">
        <nav>
            <a href="index.php"><img src="images/golthalogo.svg" alt="This is the logo"></a>
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


        <h1>Our Services</h1>

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
    
    <!-------SIMULATE------->

    <section class="form">
        <form action="simulation.php" method="post">
        <a id="simulate-jump"><h1>SIMULATE your choices</h1></a>
            <h3>Choose your grade 11 section:</h3>
            <div class="spacea">
                <label for="science" class="radio">
                    <input class="radioinput" type="radio" name="Eleven" id="science" value="science">
                    <div class="radiocircle"></div>
                    Scientific  
                </label>

                
                <label for="literature" class="radio">
                    <input class="radioinput" type="radio" name="Eleven" id="literature" value="literature">
                    <div class="radiocircle"></div>
                    Literature 
                </label>
            </div>


            
            <h3>Choose your grade 12 section:</h3>
            <div class="spaceb">
                <label for="gs" class="radio">
                    <input class="radioinput" type="radio" name="Twelve" id="gs" value="gs">
                    <div class="radiocircle"></div>
                    General Science  
                </label>

                
                <label for="ls" class="radio">
                    <input class="radioinput" type="radio" name="Twelve" id="ls" value="ls">
                    <div class="radiocircle"></div>
                    Life & Sciences 
                </label>

                <label for="se" class="radio">
                    <input class="radioinput" type="radio" name="Twelve" id="se" value="se">
                    <div class="radiocircle"></div>
                    Sociology & Economy  
                </label>

                <label for="lh" class="radio">
                    <input class="radioinput" type="radio" name="Twelve" id="lh" value="lh">
                    <div class="radiocircle"></div>
                    Literature & Humanity  
                </label>
            </div>
            <input class="simbutton purplebutton" type="submit">
        </form>      
        
    </section>

     <!-------COLLECT------->

     <section class="testimonials">
     <a id="collect-jump"><h1>COLLECT your data</h1></a>
        <p>Like we said, in the palm of your hands.</p>
     <?php
     




$query = "SELECT * FROM universities"; //Create a query.

$result = mysqli_query($DBConnect,$query) or die(mysqli_error($DBConnect));
/*Executed the query and stored it in a variable called result.*/
/*query() / mysqli_query() function performs a query against a database.
  Variable $result is an array. Usually a query returns multiple rows. These rows will be stored in an array called result.*/
  echo ' <div class="datarow">';
while($row = mysqli_fetch_array($result)){
    
    echo '<div class="datacol">';
    echo '<div>';
    echo "<h3>". $row['university'] ."</h3>";
    echo "<br/>";
    
    // if(strlen($row['description']) > 200):
    //     $stringCut = substr($row['description'],0,200);
    //     $endPoint = strrpos($stringCut, ' ');
    //     $row['description'] = $endPoint?substr($stringCut,0,$endPoint):substr($stringCut,0);
    //     $row['description'].= '...<a href="services.php">Read more</a>'; 
    // endif;
    echo "<p>". $row['description'] ."</p>";
    echo "<br/>";

    echo "<p>Location: ". $row['location'] ."</p>";
    echo "<br/>";

    echo "<p>Average Tuition Per Semester (USD): ". $row['average_tuition_per_semester'] ."</p>";
    echo "<br/>";

    echo "<p>Average Price Per Credit (USD): ". $row['average_price_per_credit'] ."</p>";
    echo "<br/>";

    echo '<p>Email: <a href="mailto:' . $row['email'] . '">' . $row['email'] . '</a></p>';
    echo "<br/>";

    
    echo "<p>Phone: ". $row['phone'] ."</p>"; 
    echo "<br/>"; 

    echo '<p>For more information, click on the following link:&nbsp;&nbsp;<a href="' . $row['link'] . '">' . $row['link'] . '</a></p>';
    echo '</div>';
    echo '</div>';
    echo "<br/>";
    echo "<br/>";
}

echo '</div>';

/*While loop that will iterate through all of the values in the array.
  The fetch_array() / mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both.
  Result is an associative array. Position is a key and the value is its value. Age is a key and the value is its value.*/ 



?>
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