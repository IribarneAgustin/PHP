<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //EJERCICIO 1a. Crear array a partir de string

    $name = 'juan,maria,pepe,andrea,jorgelina,cecilia';
    $nombres = explode(',',$name);
    echo "<pre>";
    var_dump($nombres);
    echo "</pre>";

    //EJERCICIO 1b. Ordenar array

    sort($nombres);
    echo "<pre>";
    var_dump($nombres);
    echo "</pre>";

    //EJERCICIO 1c. Convertir primera letra a mayuscula y pasar a newArray
    $name = ucwords($name,','); //Convierte a mayuscula la primera letra de cada palabra
    $newArray = explode(',',$name);
    sort($newArray);
    echo "<pre>";
    var_dump($newArray);
    echo "</pre>";

    //EJERCICIO 1d crear array de keys y convinarlo con el arreglo de nombres anterior

    echo sizeof($newArray);
    $keys = [1,2,3,4,5,6];
    $arrayAsociative = array_combine($keys,$newArray);
    echo "<pre>";
    var_dump($arrayAsociative);
    echo "</pre>";

    //EJERCICIO 2 exist value

    function existElement ($value,$array){
     
        if(is_array($array) && in_array($value,$array)){
            echo "El elemento se encuentra en el array";
        }
        else{
            echo "El elemento no se encuentra en el array <br>";
        }     
        
    }

    existElement('Cecialia',$arrayAsociative);

     //EJERCICIO 3 exist key and show it

     function existKey ($key,$array){
     
        if(is_array($array) && array_key_exists($key,$array)){
            echo $array[$key];
            
        }
        else{
            echo "La clave no corresponde a ningun valor";
        }     
        
    }

    existKey(1,$arrayAsociative);
    echo "<br>";
    existKey("a",$arrayAsociative);

    //EJERCICIO 4. Funcion que devuelve string con claves de un arreglo separadas con comas.
    
    function keysToString($arrayAsociative){

        if(is_array($arrayAsociative)){
            $stringKeys = implode(",",array_keys($arrayAsociative));
        }
        return $stringKeys;
    }

    echo "<br>";
    echo keysToString($arrayAsociative);





   










    ?>

</body>

</html>