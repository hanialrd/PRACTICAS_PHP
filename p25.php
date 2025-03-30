<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 para soporte de múltiples idiomas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite que la página sea responsive en dispositivos móviles. -->
    <title>PRACTICA 25</title> <!-- Título que se muestra en la pestaña del navegador. -->
</head>
<body>
    <center> <!-- Centra el contenido de la página. -->
    <header><h1>NUMERO DOBLE Y TRIPLE</h1></header>
    <main>
        <section>
            <!-- Formulario HTML para ingresar un número. -->
            <form action="" method="POST"> <!-- El formulario se envía al mismo archivo con el método POST. -->
                <label for="num">Ingrese un número:</label>
                <input type="number" name="num" id="num" required><br><br> <!-- Campo numérico obligatorio. -->
                <button type="submit">Enviar</button><br><br> <!-- Botón para enviar el formulario. -->
            </form>
            
            <!-- Código PHP para procesar el número ingresado. -->
            <?php
                // Comprueba si se ha enviado el formulario con el método POST.
                if($_SERVER["REQUEST_METHOD"] == 'POST'){
                    $numero = $_POST['num']; // Captura el número ingresado.
                    
                    // Determina si el número es par o impar.
                    if($numero % 2 == 0){
                        $mensaje = "El doble del número " . $numero . " es: " . ($numero * 2) . "<br>";
                    } else {
                        $mensaje = "El triple del número " . $numero . " es: " . ($numero * 3) . "<br>";
                    }
                    
                    // Muestra el resultado.
                    echo $mensaje . "<br>";
                }
            ?>
            
            <!-- Enlace para avanzar a la siguiente práctica. -->
            <a href="p26.php">Siguiente práctica</a>
        </section>
    </main>
    <footer></footer> <!-- Pie de página vacío. -->
    <center>
</body>
</html>
