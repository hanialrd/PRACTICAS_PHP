<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica de la página -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite la adaptación a dispositivos móviles -->
    <title>PRACTICA 29</title> <!-- Título que aparece en la pestaña del navegador -->
</head>

<body>
    <center> <!-- Centra el contenido -->
    <header>
        <h1>DOBLE Y TRIPLE</h1> <!-- Título principal de la práctica -->
    </header>
    <main>
        <section>
            <!-- Formulario para ingresar un número -->
            <form action="" method="POST"> <!-- Se envía el formulario mediante POST -->
                <label for="num">Ingresa un número:</label>
                <input type="number" name="num" id="num" required> <!-- 'required' asegura que el campo no quede vacío -->
                <button type="submit">Enviar</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica que el formulario fue enviado
                $numero = $_POST['num']; // Obtiene el valor del número ingresado

                // Realiza la operación dependiendo del valor del número
                if ($numero > 0) { // Si el número es positivo
                    $resultado = $numero * 2; // Doble del número
                }
                else if ($numero < 0) { // Si el número es negativo
                    $resultado = $numero * 3; // Triple del número
                }
                else { // Si el número es cero
                    $resultado = 0; // El resultado es 0
                }

                // Muestra el resultado
                echo "El resultado es: $resultado";
            }
            ?>

            <!-- Enlace para ir a la siguiente práctica -->
            <a href="p30.php">Siguiente Practica</a>
        </section>
    </main>
    <footer>
    </footer>
    <center>
</body>
</html>
