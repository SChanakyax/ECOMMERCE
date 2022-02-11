<?php

//require MySQL connection
require ('database/DBController.php');
require ('database/Product.php');
require ('database/Cart.php');


//DBController object
$db = new DBController();

//product object
$product = new Product($db);

//print_r($product->getData());


//cart object
$Cart = new Cart($db);



/*
$arr = array(
    "user_id" => 2,
    "item_id" => 9
);

$Cart-> insertIntoCart($arr);
*/
?>