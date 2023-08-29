<?php

class Database
{
    private $host="localhost";
    private $db_name="planer";
    private $username="root";
    private $password="zoran";
    private $conn;

    public function connect()
    {
        $this->conn=null;
        try
        {
        $this->conn=new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Uspješno spajanje na bazu!<hr>";
        }
        catch(PDOException $e)
        {
            echo "Greška pri spajanju na bazu: ".$e->getMessage();
        }
        return $this->conn;
    }

}

?>