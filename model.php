<?php

include_once "Database.php";

class Biljeska
{
    private $conn;
    private $table="biljeska";

    public $id;
    public $naslov;
    public $sadrzaj;

    public function __construct($db)
    {
        $this->conn=$db;
    }

    public function dohvatiSveBiljeske()
    {
        $query="SELECT * FROM ".$this->table;
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function dodajBiljesku()
    {
        $query="INSERT INTO ".$this->table." (naslov, sadrzaj) VALUES (:naslov, :sadrzaj)";
        $stmt=$this->conn->prepare($query);
        $this->naslov=htmlspecialchars(strip_tags($this->naslov));
        $this->sadrzaj=htmlspecialchars(strip_tags($this->sadrzaj));

        $stmt->bindParam(":naslov",$this->naslov);
        $stmt->bindParam(":sadrzaj",$this->sadrzaj);

        if($stmt->execute())
        {
            return true;
        }
        return false; //bez else, vraća false i istodobno prekida program
    }

}



?>