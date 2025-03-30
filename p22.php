<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 para compatibilidad con diferentes idiomas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que la página sea responsive para dispositivos móviles. -->
    <title>Practica 22</title> <!-- Título que se muestra en la pestaña del navegador. -->
</head>
<body>
    <center> <!-- Centra el contenido en la pantalla. -->
    <header>
        <h1>ES VOCAL O NO ES VOCAL</h1> <!-- Título principal de la página. -->
    </header>
    <main>
        <section>
            <!-- Formulario HTML para ingresar un carácter. -->
            <form action="" method="POST"> <!-- El formulario se envía al mismo archivo usando el método POST. -->
                <label for="caracter">Ingresa un caracter:</label>
                <input type="text" id="caracter" name="caracter" maxlength="1"> <!-- Permite ingresar un solo carácter. -->
                <br><br>
                <button type="submit">Enviar</button><br><br> <!-- Botón para enviar el formulario. -->
            </form>

            <!-- Código PHP para procesar el carácter ingresado. -->
            <?php
                // Verifica si el formulario fue enviado con el método POST.
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    // Captura el valor ingresado y lo almacena en la variable $char.
                    $char = $_POST['caracter'];
                    
                    // Comprueba si el carácter ingresado es una vocal (mayúscula o minúscula).
                    if($char == 'a' || $char == 'A'){
                        $resultado = 'es vocal';
                    } elseif($char == 'e' || $char == 'E'){
                        $resultado = 'es vocal';
                    } elseif($char == 'i' || $char == 'I'){
                        $resultado = 'es vocal';
                    } elseif($char == 'o' || $char == 'O'){
                        $resultado = 'es vocal';
                    } elseif($char == 'u' || $char == 'U'){
                        $resultado = 'es vocal';
                    } else {
                        $resultado = 'no es vocal';
                    }

                    // Muestra el resultado en la pantalla.
                    echo "El caracter ingresado $resultado<br><br>";
                }
            ?>

            <!-- Enlace para avanzar a la siguiente práctica. -->
            <a href="p23.php">Siguiente practica</a>
        </section>
    </main>
    <footer></footer> 
    <center>
</body>
</html>
