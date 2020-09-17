<?php

require_once("Config/Autoload.php");

use Models\Bill as Bill;

$date = $_GET['date'];
$type = $_GET['tipo'];
$number = $_GET['number'];



if ($_GET) {
    
    //Falta validar fecha futura
    if ($_GET['date'] && $_GET['tipo'] && $_GET['number']) {

        
        session_start();

        $bill = new Bill($_GET['date'],$_GET['tipo'],$_GET['number']);

        $_SESSION["bill"] = $bill;

        header("location:bill-content.php");        
       
    } else {
        header("location:add-bill.php");

    }
}



