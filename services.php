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
    <?php include "connection.php";
    ?>

    <section class = "subheading">
        <nav>
            <a href="index.html"><img src="golthalogo.svg" alt="This is the logo"></a>
            <div class = "navigation">
                
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Register</a></li>
                </ul>
            </div>
          
        </nav>


        <h1>Our Services</h1>

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
    
    <!-------SIMULATE------->

    <section class="form">
        <form action="simulation.php" method="post">
            <h1>SIMULATE your choices</h1>
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
            <input type="submit">
        </form>      
        
    </section>

     <!-------COLLECT------->

     <section class="testimonials">
        <h1>COLLECT your data</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
     <?php

$DBConnect = mysqli_connect("localhost","root",""); //Connection to the DBMS.
$DBSelect = @mysqli_select_db($DBConnect,"goltha"); //Connection to the DB.

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

    echo "<p>Average Tuition Per Semester: ". $row['average_tuition_per_semester'] ."</p>";
    echo "<br/>";

    echo "<p>Average Price Per Credit: ". $row['average_price_per_credit'] ."</p>";
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