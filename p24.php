<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 para compatibilidad con diferentes idiomas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite que la página sea responsive en dispositivos móviles. -->
    <title>PRACTICA 24</title> <!-- Título que se muestra en la pestaña del navegador. -->
</head>
<body>
    <center> <!-- Centra todo el contenido de la página. -->
    <header>
        <h1>ES PAR O IMPAR</h1> <!-- Título principal de la página. -->
    </header>
    <main>
        <section>
            <!-- Formulario HTML para ingresar un número. -->
            <form action="" method="POST"> <!-- El formulario se envía al mismo archivo usando el método POST. -->
                <label for="num">Ingrese un número:</label>
                <input type="number" id="num" name="num" required><br><br> <!-- Campo de entrada numérica obligatorio. -->
                <button type="submit">Enviar</button><br><br> <!-- Botón para enviar el formulario. -->
            </form>

            <!-- Código PHP para determinar si el número es par o impar. -->
            <?php
                // Comprueba si se envió el formulario usando el método POST.
                if($_SERVER["REQUEST_METHOD"] == 'POST'){
                    $numero = $_POST['num']; // Captura el número ingresado por el usuario.
                    
                    // Comprueba si el número es par o impar.
                    if($numero % 2 == 0){
                        $mensaje = "El número " . $numero . " es par.<br>";
                    } else {
                        $mensaje = "El número " . $numero . " es impar.<br>";
                    }
                    
                    // Muestra el mensaje resultante.
                    echo $mensaje;
                }
            ?>
            <!-- Enlace para avanzar a la siguiente práctica. -->
            <a href="p25.php">Siguiente practica</a>
        </section>
    </main>
    <footer></footer> 
    <center>
</body>
</html>
