<?php

include_once "Database.php";
include_once "model.php";
include_once "view.php";
include_once "controller.php";

$database=new Database();
$db=$database->connect();

$view=new BiljeskaView();
$model=new Biljeska($db);
$controller=new BiljeskaController($model, $view);

$view->prikaziFormu();
if ($_POST)
{
    $naslov=$_POST["naslov"];
    $sadrzaj=$_POST["sadrzaj"];
    $controller->dodajBiljesku($naslov, $sadrzaj);
}

$controller->prikaziSveBiljeske();

?>