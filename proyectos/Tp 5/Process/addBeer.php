<?php

namespace Process;


require_once ("../Config/autoload.php");


use Models\Beer;

use Repositories\BeerRepository;

if ($_POST) {

    if (
        isset($_POST['name']) && isset($_POST['code']) && isset($_POST['description'])
        && isset($_POST['type'])
    ) {

        $name = $_POST['name'];
        $code = $_POST['code'];
        $description = $_POST['description'];
        $type = $_POST['type'];
      
        $newBeer = new Beer();

        $newBeer->setName($name);
        $newBeer->setCode($code);
        $newBeer->setDescription($description);
        $newBeer->setType($type);

        $beerRepository = new BeerRepository();
        $beerRepository->add($newBeer);
    }



}
