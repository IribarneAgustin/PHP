<?php

namespace Models;

require_once("Config/Autoload.php");

use Models\IActions as IActions;
use Models\Item as Item;

class Bill{
    private $date;
    private $type;
    private $number;
    private $items;

    
    public function __construct($date,$type,$number){
        $this->$date = $date;
        $this->$type = $type;
        $this->$number = $number;         
    }







}

?>