<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica de la página -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite la adaptación a dispositivos móviles -->
    <title>PRACTICA 27</title> <!-- Título que aparece en la pestaña del navegador -->
</head>
<body>
    <center> <!-- Centra todo el contenido de la página -->
    <header>
        <h1>ECUACIÓN DE PRIMER GRADO</h1> <!-- Título principal de la práctica -->
    </header>
    <main>
        <section>
            <!-- Formulario para ingresar los valores de 'a' y 'b' -->
            <form action="" method="POST"> <!-- Método POST se utiliza para enviar los datos al mismo archivo -->
                <label for="a">Ingresa el valor de a:</label>
                <input type="number" name="a" id="a" required> <!-- Se agrega 'required' para evitar entradas vacías -->

                <label for="b">Ingresa el valor de b:</label>
                <input type="number" name="b" id="b" required> <!-- Se agrega 'required' para evitar entradas vacías -->

                <button type="submit">Enviar</button> <!-- Botón para enviar el formulario -->
            </form>

            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Captura de valores ingresados por el usuario
                $a = $_POST['a'];
                $b = $_POST['b'];

                // Validación: si 'a' es 0, la ecuación no es de primer grado.
                if($a == 0){
                    $mensaje = "El valor de 'a' no puede ser 0, ya que no sería una ecuación de primer grado.";
                } else {
                    // Cálculo de 'x' en la ecuación lineal ax + b = 0
                    $x = -$b / $a;
                    $mensaje = "El valor de x es: $x";
                }

                // Muestra el mensaje con el resultado o el error
                echo $mensaje;
            }
            ?>

            <!-- Enlace para ir a la siguiente práctica -->
            <a href="p28.php">Siguiente Práctica</a>
        </section>
    </main>
    <footer>
    </footer>
    <center>
</body>
</html>
