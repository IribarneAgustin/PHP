<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="guia3.php">

    <label for="importe">Ingrese el importe</label> <br>   
    <input type="number" min="0" name="importe" step="any" placeholder="Importe"> <br>

    <label for="tipoDeCompra">Tipo de compra</label> <br> 
    <select name="tipoDeCompra">
        <option value="mascotas">Mascotas</option>
        <option value="ropa">Ropa</option>
    </select> 
    <br>
    <br>

    <input type="submit">
    

    
    </form>

    
</body>
</html>