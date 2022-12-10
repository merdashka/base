<?php
require_once 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
mysqli_query($connect, "INSERT INTO `clients` (`id_client`, `name`, `email`, `phonenumber`) VALUES ( NULL, '$name', '$email', '$phonenumber')");

?>
                     


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
    <style>
    <?php echo file_get_contents("style.css");?>
    </style>
 <title>Sign Up</title>
</head>
<body> 
    <div class="wrapper">
        <header class="header">
            <div id = "blockbody">      
                <a href="index.php">Main</a>
            </div>
        </header>
        <div class="registr">
            
                <h1>Create your profile</h1>
                <picture>
                    <img src="../img/sign_up.png" alt="Salat">
                </picture>
                <div class="sign_up">
                    <form action="registr.php" method="post">
                        <p><label for="name">
                        <input class="input" name="name" type="text" placeholder="Name"></label></p>
                        <p><label for="email">
                        <input class="input" name="email" type="email" placeholder="Email"></label></p>
                            <p><label for="number">
                        <input class="input"  name="phonenumber" type="text" placeholder="Number" ></label></p>
                        <button type ="submit"> Sign Up</button>
                       
                    </form>
                    
                </div>

            
        </div>
        