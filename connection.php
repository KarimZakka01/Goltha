<?php
//Connecting PHP to to specific DB:



    $servername="localhost";
    $username = "root"; //Default username is root.
    $password=""; //Default password is blank.
    $dbName = "goltha";
    

    //Create connection.
    //mysqli_connect() function opens a new connection to the MySQL server.
    // Check connection using try and catch.
    try{
        //Here we insert a 4TH PARAMETER because we're connecting to a specific DB.
        $DBConnect = mysqli_connect($servername, $username, $password); //Connection to the DBMS.
        $DBSelect = @mysqli_select_db($DBConnect, $dbName); //Connection to the DB.
        // echo "connected to the database $dbName";

        }catch(Exception $e){
            echo $e->getMessage();
            die("connection failed".$e->getMessage());
        }
        //-> is invoking a method (like . in java).
        //e->getMessage() will display the message of the exception (same as mysqli_connect_error).
    
    
    
?>