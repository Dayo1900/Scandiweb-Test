<?php
abstract class acceptData		
{
public function data() {
 $SKU          = $_POST('$sku');
 $productNAME  = $_POST('$name');
 $PRICE        = $_POST('$price');
 $SIZE         = $_POST('$size');
 $HEIGHT       = $_POST('$height');
 $WIDTH        = $_POST('$width');
 $LENGTH       = $_POST('$length');
 $WEIGTH       = $_POST('$weight');

//Sanitizing general product info
$sku 		= filter_var($SKU, FILTER_SANITIZE_STRING); 
$product_name 	= filter_var($productNAME, FILTER_SANITIZE_STRING);
$price 		= filter_var($PRICE, FILTER_SANITIZE_INTEGER);
$size		= filter_var($SIZE, FILTER_SANITIZE_INTEGER);
$height		= filter_var($HEIGHT, FILTER_SANITIZE_INTEGER);
$width		= filter_var($WIDTH, FILTER_SANITIZE_INTEGER);
$length		= filter_var($LENGTH, FILTER_SANITIZE_INTEGER);
$weight		= filter_var($WEIGHT, FILTER_SANITIZE_INTEGER);

if(!$sku || !$product_name || !$price)
{ 
echo "<p class='notice'> Incomplete Product Information!</p> <br>";
return false;
}
else {
include "connectDatabase.php";
}

abstract protected function saveData() { }

}




class storeData extends acceptData {

protected function saveData() { //when you buy airtime, please google if objects can call protected methods in php oop.

use connectDatabase.php;

$insert = "INSERT INTO products(sku, price, name, height, width, length, weight, size) VALUES('$sku', 'price', '$product_name', '$height', '$width', '$length', '$weight', '$size')";

mysqli_close($this ->conn);
}
}


$input = new storeData();
$input -> data();
$input -> saveData();

?>