<?php
require_once 'connect.php';
if (isset($_GET['add'])){
    $dishname = $_GET['add'];
    $query = "INSERT FROM `basket` WHERE dishname='$dishname'";
    mysqli_query($connect, $query);
    
}

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
 <title>Healthy Food Delivery</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div id = "blockbody">
                        
                        <a href="cart.php" target="_blank">My Cart</a>
    
            </div>
            
        </header>
        <div class="content">
            <div class="main">
                <h1>Healthy food <span class="colortext">delivery</span></br> to your home</h1>
                <picture>
                    <img src="../img/salat.png" alt="Salat">
                </picture>
                <p>Healthy nutrition makes it possible to stabilize</br> weight without violent restrictions, helps to restore </br>intellectual and physical energy. Healthy eating is an </br>important part of a healthy lifestyle.</p>
                <div>
                    <a href="registr.php" target="_blank"> Sign Up </a>
                    
                </div> 
            </div>
        </div>

        <div>
            <div class="menu">
                <h2>Our Special Dishes</h2>
                <h3>Made with premium ingredients</h3>
            </div>

         <div class="product">
            <?php foreach ($menu as $data) { ?>
                <div class="item">
                    <div class="item_picture">
                        <img src="<?= $data['image']; ?>"> 
                    </div>
                    <div class="item_content">
                        <h4> <?= $data ['dishname'] ?> </h4>
                        <h5> <?= $data ['discription'] ?> </h5>
                        <h6> <?= $data ['price'] ?>$ </h6>
                        <p class="item_to_card"><a href="cart.php?add=<?=$data ['dishname']?>" target="_blank">Add to Cart</a></p>
                    
                    </div>
                    
                </div>

            <?php } ?>

            
            
                   
            </div>
        

                


             </div>



        </div>


    </div>
    
</body>
</html>


    


	








