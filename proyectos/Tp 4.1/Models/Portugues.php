<?php
namespace Models;
class Portugues{

    private $name;

    public function __construct()
    {        
    }

    public function setName($name){
        $this->name = $name;
    }
    public function saludar(){
        return "Olá voce escolheu portugues";
    }
    public function despedirse(){
        return "Tchau!!";
    }
    public function otroMensaje($mensaje){
        return $mensaje; 
    }



}