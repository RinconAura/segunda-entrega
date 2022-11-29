<?php
    $articulo1 = $_POST["articulo1"];
    $articulo2 = $_POST["articulo2"];
    $articulo3 = $_POST["articulo3"];
    
    $promedio =($articulo1 + $articulo2 + $articulo3)/3;
    echo "El promedio de la venta de los articulos es: $promedio";
?>

<!DOCTYPE html>
<html lang="es">
    <head >
        <meta charset="UTF-8">
        <Title>Formulario promedio</Title>
    </head>
    <body>
        <form  method="POST" action="">
            <fieldset>Promedio</fieldset>
            <label for="">Articulo 1</label>
            <input type="text" name="articulo1"><br>
            <br>
            <label for="">Articulo 2</label>
            <input type="text" name="articulo2"><br>
            <br>
            <label for="">Articulo 3</label>
            <input type="text" name="articulo3"><br>
            <br>
            <input type="submit" name="enviar" value="Calcular">
        </form>
        
    </body>
    
</html>