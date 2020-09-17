<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="procesamiento.php" method="POST">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <input type="radio" name="idioma" value="Argentino"> Argentino
                    <input type="radio" name="idioma" value="Ingles"> Ingles
                    <input type="radio" name="idioma" value= "Portugues"> Portugues
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="accion" value='saludar'> Saludar
                    <input type="radio" name="accion" value='despedirse'> Despedirse
                    <input type="radio" name="accion" value='otroMensaje'> Otro Mensaje
                    <textarea name="otroMensaje" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Procesar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>