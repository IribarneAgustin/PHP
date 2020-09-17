<?php

require_once("Config/Autoload.php");

use Models\IActions as IActions;
use Models\Item as Item;

class ItemsRepository implements IActions{

    private $data; 
    private $itemsList = array();

public function __construct()
{
  
}

public function add(Item $item){
    
    array_push($this->itemsList,$item);
    
}
public function remove(Item $item){
    echo "a";
}

public function getAll(){
    return $this->itemsList;

}
















}













?>