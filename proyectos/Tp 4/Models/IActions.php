<?php

namespace Models;

interface IActions {
    
    public function add(object $value);
    public function remove(object $value);
    public function getAll();

}



?>