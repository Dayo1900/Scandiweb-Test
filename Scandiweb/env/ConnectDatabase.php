<?php
trait ConnectDatabase
{
    private $hostname;
    private $username;
    private $password;
    private $databasename;
    private $conn;

     //connect to database using setter function
    private function setConnection()
    {
        $this->hostname = "localhost";
        $this->username = "id17048003_gahs";
        $this->password = "Temitope.1900";
        $this->databasename = "id17048003_customer";

        $this->conn = new mysqli($this->hostname, $this->username, $this->password,  $this->databasename);
    }
     //getter function
    final public function getConnection()
    {
        return $this->setConnection();
    }
     //close database connection
    public function closeConnection() 
    {
        $connect = $this->conn;
        $connect->close();
        $this->conn = " ";
    }
}
