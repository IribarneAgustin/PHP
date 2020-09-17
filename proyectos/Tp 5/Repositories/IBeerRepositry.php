<?php

namespace Repositories;
require_once("Config/autoload.php");
use Models\Beer as Beer;

interface IBeerRepository{

    function add($beer);
    function getAll();


}
?>