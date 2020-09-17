<?php

require_once("Config/Autoload.php");

use Models\Client as Client;

$username = $_POST['user'];
$password = $_POST['pass'];


if($_POST){

    if($username = "Agus" && $password == "123"){

        session_start();

        $client = new Client($username,$password);

        $_SESSION["client"] = $client;

        header("Location:add-bill.php");
    }
    else
    {  
        header("Location:index.php");
    }




}


?>