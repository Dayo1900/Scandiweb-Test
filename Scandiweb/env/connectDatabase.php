<?php
trait connectDatabase		
{

private $databaseName;
private $username;
private $password;
private $conn;

//connect to database using setter function
private function setConnection() {

$this->databaseName = "localhost";
$this->username = "gahs...";
$this->password = "Temitope1900";

$this->conn = new mysqli($this->databaseName, $this->username, $this->password);

}

//getter function
public funtion getConnection() {

$this->connect = $conn
if(!$this->connect)
{ 
echo "<p class='notice'> Unable to connect: Network error</p> <br>";
return false;
}
}
}

?>