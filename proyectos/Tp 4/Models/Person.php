<?php

namespace Models;

abstract class Person{

    private $id;
    private $firstName;
    private $lastName;
    private $dni;
    private $email;


    public function __construct($id,$firstName,$lastName,$dni,$email){
        $this->$id = $id;
        $this->$firstName = $firstName;
        $this->$id = $id;
        $this->$id = $id;
        
    }

}



?>