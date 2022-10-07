<?php
include "ConnectDatabase.php";


class AcceptData		
{
 use ConnectDatabase;

 public $SIZE;
 public $WEIGHT;
 public $HEIGHT;
 public $LENGTH;
 public $WIDTH;
 public $SKU;
 public $NAME;
 public $PRICE;

  // setter function
 protected function saveData()
 {
    $this->SKU = $_POST['sku'];
    $this->NAME = $_POST['name'];
    $this->PRICE = $_POST['price'];
    $this->SIZE = $_POST['size'];
    $this->WEIGHT = $_POST['weight'];
    $this->HEIGHT = $_POST['height'];
    $this->LENGTH = $_POST['length'];
    $this->WIDTH = $_POST['width'];
    // Sanitising product info

    $sku 		= filter_var($this->SKU, FILTER_SANITIZE_STRING); 
    $product_name 	= filter_var($this->NAME, FILTER_SANITIZE_STRING);
    $price 		= filter_var($this->PRICE, FILTER_SANITIZE_NUMBER_INT);
 
    if(empty($sku) || empty($product_name) || empty($price)) { 
        echo "<p class='notice'> Incomplete Product Information!</p> <br>";
        return false;
    }
    
    function check_if_empty($measurement)
    {
        $valid = filter_var($measurement, FILTER_SANITIZE_NUMBER_INT);
        if(empty($valid)) {
            $valid = 0;
        }
        return $valid;
   }
   $size = check_if_empty($this->SIZE);
   $weight = check_if_empty($this->WEIGHT);
   $height = check_if_empty($this->HEIGHT);
   $length = check_if_empty($this->LENGTH);
   $width = check_if_empty($this->WIDTH);

   //insert into database     
   $this->getConnection();

   //check if sku has already been registered.
   $check = "SELECT sku FROM scandiweb WHERE sku='$sku'";
   $response = $this->conn->query($check);

   if($response->num_rows >0) 
   {
       printf("<p class='error' style='text-align:center;'>SKU already registered.<br></p>");
       return false;
   } else {
         $insert = "INSERT INTO scandiweb(sku, name, price, weight, height, length, width, size) 
         VALUES ('$sku', '$product_name', '$price', '$weight', '$height', '$length', '$width', '$size')";
         $result = mysqli_query($this->conn, $insert); 
         if( $result) {
             echo "<meta http-equiv='refresh' content='0;url=https://plutobakery.000webhostapp.com/Scandiweb/Product_List.php'>";
         } else {
             echo "<p class='notice'>Unable to connect at the moment: </p>". mysqli_error($this->conn);
         }
       
     } 
  $this->closeConnection();  
}
  
  // getter function
  public function showData() {
    return $this->saveData();
  }
}

//object
$product = new AcceptData();
$product->showData();
