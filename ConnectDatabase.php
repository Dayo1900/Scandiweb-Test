<?php
trait ConnectDatabase {
private $hostname;
private $username;
private $password;
private $databasename;
private $conn;

//connect to database using setter function
private function setConnection() {

$this->hostname = "**********";
$this->username = "**********";
$this->password = "**********";
$this->databasename = "************";

$this->conn = new mysqli($this->hostname, $this->username, $this->password,  $this->databasename);
}

//getter function
final public function getConnection() {
  return $this->setConnection();
}

//close database connection
public function closeConnection() {
    $connect = $this->conn;
    $connect->close();
    $this->conn = " ";
}

}

?>
