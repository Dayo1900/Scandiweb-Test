<?php
include "ConnectDatabase.php";
include "ProductListPage.php";

class PageLoad extends ProductListPage  
{
    use ConnectDatabase;

    public $id;
    public $sku;
    public $name;
    public $price;
    public $weight;
    public $height;
    public $width;
    public $length;
    public $size;

    public $one;
    public $two;
    public $three;
    public $four;
    public $five;
    public $six;
    public $seven;
    public $info;
      
    public function toDelete() 
    {
        echo "";
    }
     
    public function  check_type($data) 
    {
        switch($data) {
             case $this->one: 
                 $type = $this->id;
                 return $type;
                 break;
             case $this->two:
                 $type = $this->sku;
                 return $type;
                 break;
             case $this->three:
                 $type = $this->name;
                 return $type;
                 break;
             case $this->four:
                 $type = "$". $this->price;
                 return $type;
                 break;
             case $this->five:
                 if($this->weight ==0) {
                     $type = null;
                     return $type;
                     break;
                 } else {
                     $type = "Weight: ". $this->weight. "kg";
                     return $type;
                     break;
                 }

             case $this->six:
                 if($this->height ==0) {
                     $type = null;
                     return $type;
                     break;
                 } else {
                     $type =   "HxWxL: ".$this->height. "x" . $this->width. "x". $this->length. "cm";
                     return $type;
                     break;
                 }

             case $this->seven:
                 if($this->size ==0) {
                     $type = null;
                     return $type;
                     break;
                 } else {
                     $type = "Size: " .$this->size."MB";
                     return $type;
                     break;
                 }

        }
    }

    public function loadPage() 
    {
        $variables = array();
        $this->getConnection();
        $select = $this->conn->query ("SELECT * FROM   scandiweb");
     
        $rowNumber = $select->num_rows;
     
        if($rowNumber >0) {
            while ($row = $select->fetch_assoc()) {
                $this->id = $row["id"];
                $this->sku = $row["sku"];
                $this->name = $row["name"];
                $this->price = $row["price"];
                $this->weight = $row["weight"];
                $this->height = $row["height"];
                $this->length = $row["length"];
                $this->width = $row["width"];
                $this->size = $row["size"];
 
                $this->one ='id';
                $this->two = 'sku';
                $this->three = 'name';
                $this->four = 'price';
                $this->five = 'weight';
                $this->six = 'height';
                $this->seven = 'size';
 
                echo  '<div class="class-9b">
                <input type="checkbox" value='.$this->check_type($this->one).'title="Select item" id="delete-checkbox" class="delete-checkbox"><br>
                <small style="text-align:center;">
                <i class="sku">'.$this->check_type($this->two). '</i><br>'.
                $this->check_type($this->three). '<br>'.
                $this->check_type($this->four).'<br>'.
                $this->check_type($this->five).$this->check_type($this->six).$this->check_type($this->seven).
                '</small>
                </div>';      
            }
        } else {
        echo '<div class="class-9b">
        <small style="text-align:center;">
        <i class="sku">No product has been added yet</i>
        </small>
        </div>';
        }
 
    }  
}
