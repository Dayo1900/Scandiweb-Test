<?php
include "ConnectDatabase.php";
include "ProductListPage.php";

class ProductDelete extends ProductListPage 
{
    use ConnectDatabase;

    public $receive;
    public function loadPage() 
    {
        echo " ";
    }

    public function toDelete() 
    { 
        $this->receive = $_POST["box"];
        $array = explode(",", $this->receive);
        $length = count($array);
  
        $this->getConnection();

        foreach($array as $value) {
            $deleting =  $this->conn->query("DELETE FROM scandiweb WHERE id='$value'");
        }

        if($deleting) {
            echo "<i style='color:green;'> Product(s) deleted</i>";
        } else {
            echo "<i> Network error: </i>".$this->conn->error;
        }

        $this->closeConnection();  
    }
}
