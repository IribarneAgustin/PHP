<?php

require_once("Config/autoload.php");

use Models\Argentino as Argentino;
use Models\Ingles as Ingles;
use Models\Portugues as Portugues;
/*
require_once("Models/Argentino.php");
require_once('Models/Inlges.php');
require_once('Models/Portugues.php');
*/

if ($_POST) {

    if(isset($_POST['idioma']) && isset($_POST['accion'])){

    // echo $_POST['idioma']; 
    $className = $_POST['idioma'];
    $classMetod = $_POST['accion'];
    $otroMensaje = $_POST['otroMensaje'];
    $obj = null;

    if($className == 'Argentino'){
        $obj = new Argentino();
    }else if($className == 'Portugues'){
        $obj = new Portugues();
    }else{
       $obj = new Ingles();
    }

    if(isset($_POST['otroMensaje'])){

        $msj = call_user_func(array($obj,$classMetod),$otroMensaje);
    }else{

        $msj = call_user_func(array($obj,$classMetod));
    }

    include_once('greet.php');
    

   // call_user_func(array($className, 'saludar'));
    }
    else{
        header("location:index.php");
    }
}