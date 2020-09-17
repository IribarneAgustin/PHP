<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="table.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    $parameters = array();

    $interests= array();



    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;
    

    if(isset($parameters['interests'])){
        $interests = $parameters['interests'];
    }
    if(empty($parameters['aboutYou'])){
        $parameters['aboutYou'] = 'Unespicified';
    }
    if(empty($parameters['sex'])){
        $parameters['sex'] = 'Unespicified';
    }
    if(empty($parameters['role'])){
        $parameters['role'] = 'Unespicified';
    }
    
    
    ?>

    <!--tr sirve para definir una fila-->
    <!-- td se utiliza para crear celdas-->
    <!--th sirve para el encabezado de una celda, y aparece en negrita-->

<div id="main-container">
    <table>
        <thead>
            <th colspan="2">Your basic info</th>
        </thead>
        <tr>
            <td>Name</td>
            <td><?php echo $parameters["name"] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $parameters["email"] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $parameters["password"] ?></td>
        </tr>
        <tr>
            <td>Birth-day</td>
            <td><?php echo $parameters["birthday"] ?></td>
        </tr>
        <tr>
            <td>Sex</td>
            <td><?php echo $parameters["sex"] ?></td>
        </tr>
        <thead>
            <th colspan="2">Your profile</th>
        </thead>
        <tr>
            <td>About you</td>
            <td><?php echo $parameters["aboutYou"] ?></td>
        </tr>
        <tr>
            <td>Role</td>
            <td><?php echo $parameters["role"] ?></td>
        </tr>
        <tr>
            <td>Interests</td>
            <td><?php echo implode("<br>",$interests) ?></td>
        </tr>

    </table>

        <a href="index.php">Go back</a>

</div>

</body>

</html>