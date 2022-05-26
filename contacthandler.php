<?php
//This php script is responsible for sending the contact form content to both the Database  &  to a specific email address.
include "connection.php";

$name = $_POST['name'];
$visitoremail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$insertquery = mysqli_query($DBConnect, "INSERT INTO `contact`(`name`, `email`, `subject`, `body`) VALUES ('$name','$visitoremail','$subject','$message')");

$emailfrom = 'Goltha.com';

$emailsubject = 'New Goltha Submission';

$emailbody = "Username: $name\n".
             "User Email: $visitoremail\n".
             "Subject: $subject\n".
             "User Message: $message\n";

$to = "karimzakka2001@gmail.com";

$header = "From: $emailfrom \r\n";

$header .= "Reply-To: $visitoremail \r\n";

mail($to, $emailsubject, $emailbody, $header);



header("Location: contact.html"); //where to send user after submitting the form.



 
 

?>