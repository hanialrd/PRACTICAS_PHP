<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 para compatibilidad con diferentes idiomas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace que la página sea responsive en dispositivos móviles. -->
    <title>Practica 23</title> <!-- Título que se muestra en la pestaña del navegador. -->
</head>
<body>
    <center> <!-- Centra el contenido de la página. -->
    <header>
        <h1>Múltiplo de 3 y 5</h1> <!-- Título principal de la página. -->
    </header>
    <main>
        <section>
            <!-- Formulario HTML para ingresar un número. -->
            <form action="" method="POST"> <!-- El formulario se envía al mismo archivo usando el método POST. -->
                <label for="num">Ingresa un número:</label>
                <input type="number" name="num" id="num" required> <!-- Campo de entrada para el número, obligatorio con "required". -->
                <button type="submit">Enviar</button> <!-- Botón para enviar el formulario. -->
            </form>

            <!-- Código PHP para procesar el número ingresado. -->
            <?php
                // Verifica si el formulario fue enviado con el método POST.
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    // Almacena el número ingresado en una variable.
                    $numero = $_POST['num'];
                    
                    // Comprueba si el número es múltiplo de 3 y 5 al mismo tiempo.
                    if($numero % 3 == 0 && $numero % 5 == 0){
                        $mensaje = "El número " . $numero . " es múltiplo de 3 y 5.<br>";
                    } else {
                        $mensaje = "El número " . $numero . " no es múltiplo de 3 y 5.<br>";
                    }

                    // Muestra el mensaje generado.
                    echo $mensaje;
                }
            ?>

            <!-- Enlace para avanzar a la siguiente práctica. -->
            <a href="p24.php">Siguiente práctica</a>
        </section>
    </main>
    <footer></footer> 
    <center>
</body>
</html>
