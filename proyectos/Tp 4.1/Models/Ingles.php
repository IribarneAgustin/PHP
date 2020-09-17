<?php
namespace Models;
class Ingles{

    private $name;

    public function __construct()
    {        
    }

    public function setName($name){
        $this->name = $name;
    }
    public function saludar(){
        return "Hi you choose english";
    }
    public function despedirse(){
        return "Bye bye beatiful";
    }

    public function otroMensaje($mensaje){
        return $mensaje; 
    }

}