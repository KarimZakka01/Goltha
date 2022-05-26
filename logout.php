<?php
include "connection.php";

unset($_SESSION["id"]); 
unset($_SESSION["name"]);
unset($_SESSION["password"]);

header("location: index.php");
?>