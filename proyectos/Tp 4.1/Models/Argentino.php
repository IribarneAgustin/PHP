<?php
namespace Models;

class Argentino
{

    private $name;

    public function __construct()
    {
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function saludar()
    {
        return "Hola elegiste Argentino";
    }
    public function despedirse()
    {
        return "Adios argentino!";
    }
    public function otroMensaje($mensaje){
        return $mensaje; 
    }
}
?>