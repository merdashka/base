<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Delivery');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$db = new PDO("mysql:host=localhost;port=3305; dbname=Delivery", "root", "");
if (!$db) {
	die('error connect to database!');
}


$menu =[];
if($query = $db->query("SELECT * FROM `menu`")){
	$menu = $query->fetchAll(PDO::FETCH_ASSOC);
} else {
	print_r($db->errorInfo());
}

$res =[];
if($query = $db->query("SELECT * FROM `restaurant`")){
	$res = $query->fetchAll(PDO::FETCH_ASSOC);
} 
else {
	print_r($db->errorInfo());
}




?>
