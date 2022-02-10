<?php

//require MySQL connection
require ('database/DBController.php');
require ('database/Product.php');


//DBController object
$db = new DBController();

//product object
$product = new Product($db);

//print_r($product->getData());

?>