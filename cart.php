<?php
require_once 'connect.php';
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
 <title>My Cart</title>
</head>
<body>
<div class="wrapper">
    
<div class="main">
    <h1>Create Your Profile</h1>
        <div>
             <a href="registr.php"> Sign Up </a>         
        </div> 
</div>
</div>
<!-- <div class="product">
            /<?php foreach ($cart as $data) { ?>
                <div class="item">
                    <div class="item_picture">
                        <img src="<?= $data['image']; ?>"> 
                    </div>
                    <div class="item_content">
                        <h4> <?= $data ['dishname'] ?> </h4>
                        <h5> <?= $data ['discription'] ?> </h5>
                        <h6> <?= $data ['price'] ?>$ </h6>
                        <p class="item_to_card"><a href="shipping.php?add=<?=$data ['dishname']?>" target="_blank">Chechout</a></p>
                    
                    </div>
                    
                </div>

            <?php } ?> -->



</body>
