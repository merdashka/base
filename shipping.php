<?php
require_once 'connect.php';
if(isset($_POST["resaddress"]))
{
    $course = $_POST["resaddress"];
    echo $course;
}

$address = $_POST['address'];
mysqli_query($connect, "INSERT INTO `shipping` WHERE address='$address'");


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
 <title>Checkout</title>
</head>
<body>
<div class="wrapper">
<header class="header">
            <ul class="header_menu">
                <li><a href="#card">.</a></li>
            </ul>
        </header>
<div class="checkout">
  <h1>Checkout</h1>
  <picture>
        <img src="../img/sw.png" alt="Strawberry">
   </picture>
   <p>Where would you like your oder sent?</p>
   <div class="delivery">
                    <form action="basket.php" method="post">
                        <p><label for="address">
                        <input class="input" name="address" type="text" placeholder="Address"></label></p>
                        <h2>Delivery options</h2>
                        <?php foreach ($res as $id) { ?>
                        <div class="res">
                              <p><input name="dzen" type="radio" value="nedzen"> <?= $id ['res_address'] ?> ( <?= $id ['number'] ?> )</p>    
                        </div>
                        <?php } ?>
                     </form>
                
                    <h3>How would you like to pay?</h3>
                    <form action="shipping.php" method="post">
                        <div class="pay">
                    <p><input name="pay1" type="radio" value="Chash">Cash</p> 
                    <p><input name="pay1" type="radio" value="Bank Card">Bank Card</p>
                        </div> 
                    <button type ="submit">Chechout</button>
                      </form>
                      
       </div>

</div>  
</div>


 
</body>
</html>