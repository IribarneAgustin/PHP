<?php

namespace Models;

use Models\Person as Person;

class Client extends Person
{
    private $username;
    private $password;

    public function __construct($username,$password)
    {
        $this->$username = $username;
        $this->$password = $password;
    }



    /*
    public function __construct($id, $firstName, $lastName, $dni, $email, $username, $password)
    {
        parent::__construct($id, $firstName, $lastName, $dni, $email);
        $this->$username = $username;
        $this->$password = $password;
    }
*/
}
