<!DOCTYPE html>
<html>
    <head>
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
        <!--This is a cdn (content delivery network) for font awesome.
            We are uing font awesome to get access to icons to use in @media css-->

    </head>

    <body class= "simulate">
        
      
    
    <?php
    

        $Eleventype =$_POST['Eleven'];
        $Twelvetype =$_POST['Twelve'];
        echo '<div class="containers">';
       if($Eleventype == "science"){


           if($Twelvetype == "gs"){

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Medicine</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Business</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Arts</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';
        
            }elseif ($Twelvetype == "ls") {
                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Medicine</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Business</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Arts</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';

                
        
            }elseif ($Twelvetype == "se"){
                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Medicine</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Business</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Arts</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
        
            }else{ 
                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Medicine</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Business</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>School of Arts</h3>';
                echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Fugiat quod fugit eveniet eius debitis, similique veniam
                delectus ullam neque magni! Suscipit, quo nam optio repellendus
                voluptate fuga unde non doloremque.</p>';
                echo '</div>';
                echo '</div>';
        
            }
        
        }else{
            if($Twelvetype == "gs"){

                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Medicine</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Business</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Arts</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
             
            }elseif ($Twelvetype == "ls") {
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Medicine</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Business</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Arts</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
     
                     
             
            }elseif ($Twelvetype == "se"){
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Medicine</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Business</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Arts</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
             
            }else{ 
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-user-md" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Medicine</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus.</p>';
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-briefcase" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Business</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>School of Arts</h3>';
                    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat quod fugit eveniet eius debitis, similique veniam
                    delectus ullam neque magni! Suscipit, quo nam optio repellendus
                    voluptate fuga unde non doloremque.</p>';
                    echo '</div>';
                    echo '</div>';
             
                 }
             
       }
       
       echo '</div>';
      
   ?> 
   
  
    </body>
</html>