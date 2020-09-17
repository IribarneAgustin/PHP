<?php

namespace Repositories;

//require_once("Config/autoload.php");
use Models\Beer as Beer;

class BeerRepository implements IBeerRepository
{

    private $file;
    private $beerList = array();

    ///Si mi archivo no existe, lo creo con la funcion dirname, pasando la ruta por parámetro.
    public function __construct()
    {
        $this->file = dirname(__DIR__) . "/Data/Beers.json";
    }

    public function add($beer)
    {

        //Primero actualizo mi lista privada con los datos que tenga en el archivo
        $this->retrieveData();

        array_push($this->beerList, $beer);

        //Por ultimo actualizo mi archivo con la lista nueva.

        $this->saveData();

    }
    public function getAll(){

        $this->retrieveData();

        return $this->beerList;
    }

    public function retrieveData()
    {
        $beerList = array();

        if(file_exists($this->file)){

            //Bajo a una variable mi contenido json
            $jsonContent = file_get_contents($this->file);

            //Decodifico mi contenido y lo guardo en un array

            $arrayToDecode = array();
            $arrayToDecode = json_decode($jsonContent,true);

            //Recorro el array decodificado y voy instanciando objetos, para ir guardandolos en mi lista
            foreach($arrayToDecode as $value){

                $beer = new Beer();
                $beer->setCode($value['code']);
                $beer->setName($value['name']);
                $beer->setDescription($value['description']);
                $beer->setType($value['type']);
                
                array_push($this->beerList,$beer);

            }

        }


    }

    public function saveData(){

        $arrayToEncode = array();

        
        ///Recorro mi lista con objetos y los guardo en un array con claves para cada atributo.
        foreach($this->beerList as $value){

            $valuesArray['code'] = $value->getCode();
            $valuesArray['name'] = $value->getName();
            $valuesArray['description'] = $value->getDescription();
            $valuesArray['type'] = $value->getType();

            array_push($arrayToEncode,$valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);

        file_put_contents($this->file,$jsonContent);


    }




}
