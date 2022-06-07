<!DOCTYPE html>
<html lang="en">
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
    <!-- <a href="index.html"><img class="simulationlogo" src="golthalogo.svg" alt="This is the logo"></a> -->
      
    
    <?php
    

        $Eleventype =$_POST['Eleven'];
        $Twelvetype =$_POST['Twelve'];

        $Medicine = "<p>The Faculty of Medicine and Health brings together the
         areas of dentistry, medicine, medical sciences, nursing, 
         pharmacy, and public health to facilitate a multidisciplinary
          approach to solving modern day healthcare problems.</p>";

        $Business = '<p>The Faculty of Business is a professional faculty. It allows 
        students to specialise in four corporate areas: Business Organization; Finance 
        and Insurance; Marketing and Market Research;  Accounting and Taxation.</p>';

        $Arts = '<p>The Faculty of Fine Arts houses departments that offer an 
        unparalleled range of programs in the visual, performing, cinematic, design, 
        digital, and therapeutic arts. It offers you to bring your creativity to life.</p>'; 

        $Law = '<p>At the Faculty of Law, students study the administrative, legislative 
        and judicial branches of the government from a wide range of angles. Students are 
        expected to acquire fundamental legal thinking skills and basic political insight.</p>';
        
        $Engineering = '<p>The Faculty of Engineering provides the application of science
        and maths to solve problems. While scientists and inventors come up with innovations, 
        it is engineers who apply these discoveries to the real world.</p>';

        $Education = '<p>The mission of the faculty is to provide a unique learning opportunity, 
        for all those whose interest it is to impress young minds, by integrating the principles 
        of true redemptive education into the curricula.</p>';

        $Philosophy = '<p>Philosophy is the investigation of very general and fundamental questions about 
        knowledge, reality, mind, morality, logic, language, reasoning, politics art and value, analyze the world
        and our place in it, and among other things.</p>';

        $Music = '<p>The aim of the faculty is to educate musicians who, with their performing skills, theoretical 
        knowledge, and highly developed musical abilities,  enrich and spread local and International music culture.</p>';


        $Medicinelogo = '<i class="fa fa-user-md" aria-hidden="true"></i>';
        $Businesslogo = '<i class="fa fa-briefcase" aria-hidden="true"></i>';
        $Artslogo = '<i class="fa fa-paint-brush" aria-hidden="true"></i>';
        $Lawlogo = '<i class="fa fa-gavel" aria-hidden="true"></i>';
        $Engineeringlogo = '<i class="fa fa-car" aria-hidden="true"></i>';
        $Educationlogo = '<i class="fa fa-graduation-cap" aria-hidden="true"></i>';
        $Philosophylogo = '<i class="fa fa-key" aria-hidden="true"></i>';
        $Musiclogo = '<i class="fa fa-music" aria-hidden="true"></i>';

        echo '<div class="containers">';
       if($Eleventype == "science"){


           if($Twelvetype == "gs"){

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Engineeringlogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Engineering</h3>';
                echo $Engineering;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Businesslogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Business</h3>';
                echo $Business;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Medicinelogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Medicine</h3>';
                echo $Medicine;
                echo '</div>';
                echo '</div>';
        
            }elseif ($Twelvetype == "ls") {
                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Medicinelogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Medicine</h3>';
                echo $Medicine;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Educationlogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Education</h3>';
                echo $Education;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Businesslogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Business</h3>';
                echo $Business;
                echo '</div>';
                echo '</div>';

                
        
            }elseif ($Twelvetype == "se"){
                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Artslogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Fine Arts</h3>';
                echo $Arts;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Lawlogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Law</h3>';
                echo $Law;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Philosophylogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Philosophy</h3>';
                echo $Philosophy;
                echo '</div>';
                echo '</div>';
                echo '</div>';
        
            }else{ 
                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Musiclogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Music</h3>';
                echo $Music;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Educationlogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Education</h3>';
                echo $Education;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Philosophylogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Philosophy</h3>';
                echo $Philosophy;
                echo '</div>';
                echo '</div>';
        
            }
        
        }else{
            if($Twelvetype == "gs"){

                echo '<h1 style = "text-align: center; color: white; font-size:20px">
                WARNING: Literature students are NOT allowed to join the General Sciences section in Grade 12 in most circumstances!
                <h1>';


                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Engineeringlogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Engineering</h3>';
                echo $Engineering;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Businesslogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Business</h3>';
                echo $Business;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Medicinelogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Medicine</h3>';
                echo $Medicine;
                echo '</div>';
                echo '</div>';

                    
             
            }elseif ($Twelvetype == "ls") {

                echo '<h1 style = "text-align: center; color: white; font-size:20px">
                WARNING: Literature students are NOT allowed to join the Life & Sciences section in Grade 12 in most circumstances!
                <h1>';


                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Medicinelogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Medicine</h3>';
                echo $Medicine;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Educationlogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Education</h3>';
                echo $Education;
                echo '</div>';
                echo '</div>';

                echo '<div class="boxes">';
                echo '<div class="icons">';
                echo $Businesslogo;
                echo '</div>';
                echo '<div class="contents">';
                echo '<h3>Faculty of Business</h3>';
                echo $Business;
                echo '</div>';
                echo '</div>';
                     
             
            }elseif ($Twelvetype == "se"){
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo $Lawlogo;
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>Faculty of Law</h3>';
                    echo $Law;
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo $Businesslogo;
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>Faculty of Business</h3>';
                    echo $Business;
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo $Educationlogo;
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>Faculty of Education</h3>';
                    echo $Education;
                    echo '</div>';
                    echo '</div>';
             
            }else{ 
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo $Philosophylogo;
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>Faculty of Philosophy</h3>';
                    echo $Philosophy;
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo $Artslogo;
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>Faculty of Fine Arts</h3>';
                    echo $Arts;
                    echo '</div>';
                    echo '</div>';
    
                    echo '<div class="boxes">';
                    echo '<div class="icons">';
                    echo $Educationlogo;
                    echo '</div>';
                    echo '<div class="contents">';
                    echo '<h3>Faculty of Eduaction</h3>';
                    echo $Education;
                    echo '</div>';
                    echo '</div>';
             
                 }
             
       }
       
       echo '</div>';
      
   ?> 
   
  
    </body>
</html>