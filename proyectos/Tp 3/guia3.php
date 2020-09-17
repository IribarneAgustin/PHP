<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <h1>Sintaxis basica</h1>

    <?php

    $text = "Agus";
    $variable = 1.3;

    //Formas de inicarlizar arreglo
    $array = [];
    $arreglo2 = array();



    $array[] = "primer dato";
    $array[] = 2;
    $array["texto"] = "Se puede asignar una clave a la posicion";
    $array[] = "Continua la numeracion ignorando la clave texto anterior";
    $array[$variable] = "Paso variable a posicion"; // como vale 1.3, pisa la posicion 1
    $array[3 + 3] = "se pueden asignar operacion como posicion";

    // Mostrar con for each

    foreach ($array as $key => $value) {

        echo "Clave: $key Valor: $value <br>";
    }


    //La etiqueta pre mejora la visual de los array
    echo '<pre>';

    var_dump($array); //Si el array es null, nos lo va a mostrar, a diferencia de printr que no lo muestra


    echo '</pre>';

    $number = 10;
    $numberString = "11";

    // echo $numberString.$number;


    if (1 - 1) {
        echo "It´s right";
    }

    // EJERCICIO 3 funcion dividir y multiplicar

    function dividir($numerador, $denominador)
    {
        return $numerador / $denominador;
    }
    echo dividir(1, 2) . "</br>";

    function multiplicar($valor1, $valor2)
    {
        return $valor1 * $valor2;
    }

    echo multiplicar(2, 3) . "</br>";


    // EJERCICIO 5A (IMPRIMIR MAYORES DE EDAD)

    $people = [
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'],
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'],
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'],
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'],
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'],
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'],
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'],
    ];

    /// Dentro de cada posicion del array tenemos distintas claves, por lo que a 
    /// la hora de recorrerlo, hay que especificarlas. En este caso la clave "age"

    /*    echo '<pre>';

    $i = 0;
    for ($i = 0; $i < count($people); $i++) {
        if($people[$i]['age'] >= 18){
            var_dump($people[$i]);
        }
    }
    echo '</pre>';

    //Mismo algoritmo pero con foreach
    foreach ($people as $key => $value) {
        if ($value['age'] >= 18) {
            echo '<pre>';
            var_dump($value);
            echo '</pre>';
        }
    }

    //Ejercicio 5b Imprimir mujeres menores de edad

    foreach($people as $key => $value){
        if($value['age'] < 18 && $value['sex'] == 'f'){
            echo '<pre>';
            var_dump($value);
            echo '</pre>';
        }

    }
*/
    ///Ejercicio 5c (Hacer tabla con el array dado)
    ?>
    <table>

        <!--tr sirve para definir una fila-->
        <!-- td se utiliza para crear celdas-->
        <!--th sirve para el encabezado de una celda, y aparece en negrita-->

        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Martin</td>
                <td>18</td>
                <td>M</td>

            </tr>
            <tr>
                <td>Martina</td>
                <td>25</td>
                <td>F</td>

            </tr>
            <tr>
                <td>Pablo</td>
                <td>27</td>
                <td>M</td>

            </tr>
            <tr>
                <td>Paula</td>
                <td>12</td>
                <td>F</td>
            </tr>
            <tr>
                <td>Alexis</td>
                <td>8</td>
                <td>M</td>
            </tr>
            <tr>
                <td>Jacinta</td>
                <td>33</td>
                <td>F</td>
            </tr>
            <tr>
                <td>Epifania</td>
                <td>45</td>
                <td>F</td>
            </tr>

        </tbody>

    </table>

    <?php


    echo '<table border="1">';
    foreach ($people as $r) {
        //Con tr creo filas
        echo '<tr>';
        foreach ($r as $v) {
            //dentro de cada fila creo una celda con td
            echo "<td>  $v  </td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    $i = 0;
    echo '<table border="1">';
    for ($i; $i < count($people); $i++) {
        echo "<tr>";
        foreach ($people[$i] as $v) {
            echo "<td> $v </td>";
        }
        echo "</tr>";
    }
    echo '</table>';



    //EJERCICIO 5d Reducir hasta que sea solo un array de edades.
    $i = 0;

    for ($i = 0; $i < count($people); $i++) {
        unset($people[$i]['name']);
        unset($people[$i]['sex']);
    }

    echo '<pre>';
    var_dump($people);
    echo '</pre>';

    //EJERCICIO 6 Mostrar dia de la semana

    //Utilizo un array para almacenar los dias, y como indice la funcion date('w') que devuelve
    //el dia numerico 0 - 6

    function mostrarDiaSemana()
    {
        $arrayDias = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];

        echo "El dia de la semana es " . $arrayDias[date('w')];
        if (date('w') == 6 || date('w') == 0) {
            echo " y es finde semana";
        }
    }
    mostrarDiaSemana();
    echo "<br>";

    ///EJERCICIO 7 Compra con formulario



    /*
    function compra($importe, $tipo)
    {
        if ($importe < 200) {
            if (strcmp($tipo, "mascotas") == 0) {
                echo "No se puede realizar el envio";
            } else {
                echo "El gasto de envio es de $80";
            }
        } else if ($importe < 600) {
            echo "El gasto de envio es de $80";
        } else if ($importe > 2000) {
            echo "código de descuento: CODEDESC33";
        } else {
            echo "Los portes de envío son gratis";
        }
    }

    $precio = $_POST['importe'];
    $tipoDeCompra = $_POST['tipoDeCompra'];

    compra($precio, $tipoDeCompra);

    echo "<br>";


    ///EJERCICIO 8 Mostrar mayor numero entre 4 enteros

    function mostrarMayor($a, $b, $c, $d)
    {
        $arrayValues = [$a, $b, $c, $d];
        echo max($arrayValues);
    }
   // mostrarMayor(1, 10, 3, 4);
*/
    $people = [
        ['name' => 'Martin', 'age' => 18, 'sex' => 'm'],
        ['name' => 'Martina', 'age' => 25, 'sex' => 'f'],
        ['name' => 'Pablo', 'age' => 27, 'sex' => 'm'],
        ['name' => 'Paula', 'age' => 12, 'sex' => 'f'],
        ['name' => 'Alexis', 'age' => 8, 'sex' => 'm'],
        ['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'],
        ['name' => 'Epifania', 'age' => 45, 'sex' => 'f'],
    ];
    ///EJERCICIO 9 Mostrar tabla con datos de formulario
    function validateName($name)
    {
        $rta = 0;
        if (is_string($name))
            $rta = 1;

        return $rta;
    }
    function validateAge($age)
    {
        $rta = 0;
        if ($age > 0)
            $rta = 1;

        return $rta;
    }
    function validateSex($sex)
    {
        $rta = 0;
        if ($sex == 'm' || $sex == 'f')
            $rta = 1;

        return $rta;
    }

    function mostrarTablaPersonas($people)
    {
        $i = 0;
        echo '<table border="1">';
        for ($i; $i < count($people); $i++) {
            echo "<tr>";
            foreach ($people[$i] as $v) {
                echo "<td> $v </td>";
            }
            echo "</tr>";
        }
        echo '</table>';
    }



    function agregarPersonaYmostrarTabla($name, $age, $sex, $people)
    {
        if (validateAge($age) && validateSex($sex) && validateName($name)) {

            $newPerson = ['name' => $name, 'age' => $age, 'sex' => $sex];
            array_push($people, $newPerson);
            mostrarTablaPersonas($people);
        }
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];


    agregarPersonaYmostrarTabla($name, $age, $sex, $people);








    ?>










</body>

</html>