<?php

namespace Models;

class User
{

    private $userName;
    private $password;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct()
    {
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstName($name){
        $this->firstName = $name;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function getPass(){
        return $this->password;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getEmail(){
        return $this->email;
    }
    
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    public function setPass($pass)
    {
        $this->password = $pass;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
