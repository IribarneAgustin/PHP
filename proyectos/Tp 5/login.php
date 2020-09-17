<?php

use Models\User as User;
require_once("Config/autoload.php");


$usr1 = new User();
$usr1->setUserName("SSoler");
$usr1->setPass("cosme123");
$usr1->setFirstName("Sebastian");
$usr1->setLastName("Soler");
$usr1->setEmail("sebastian@utn.com");

$usr2 = new User();
$usr2->setUserName("AzarJ");
$usr2->setPass("alAzar123");
$usr2->setFirstName("Juan");
$usr2->setLastName("Azar");
$usr2->setEmail("juanazar@utn.com");

$usr3 = new User();
$usr3->setUserName("Mari123");
$usr3->setPass("123456Mari");
$usr3->setFirstName("Maria");
$usr3->setLastName("Perez");
$usr3->setEmail("mariap@utn.com");

$usuarios = [$usr1, $usr2, $usr3];


if ($_POST) {

    if (!empty($_POST['username']) && !empty($_POST['pass'])) {


        $userName = $_POST['username'];
        $pass = $_POST['pass'];

        foreach ($usuarios as $key => $value) {
            if ($value->getUserName() == $userName && $value->getPass() == $pass) {
                session_start();
                $_SESSION['usrLoged'] = $value;
                header("location:welcome.php");
            }
        }
    }
}

if (!isset($_SESSION['usrLoged'])) {
    header("location:index.php");
}
