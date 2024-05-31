<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <form action = "index.php" method="post">
       <input type="text" name ="username">
       <input type ="submit" value="log in">
    </body>
</html>




<?php
 if(isset($_POST["log in"])){
     $username = $_POST["username"];
     if(empty($username)){
         echo "invalid name";
     } else {
         echo "your registered";
     }
 }
?>