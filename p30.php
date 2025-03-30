<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptación en dispositivos móviles -->
    <title>Practica 30</title> <!-- Título en la pestaña del navegador -->
</head>
<body>
    <center> <!-- Centra el contenido -->
    <header><h1><mark>3 mejores notas</mark></h1></header> <!-- Título de la práctica -->

    <main>
        <!-- Formulario para ingresar las 4 notas -->
        <form action="p30.php" method="POST">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" required><br><br> <!-- Campo de entrada para la primera nota -->
            
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" required><br><br> <!-- Campo de entrada para la segunda nota -->
            
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" id="nota3" required><br><br> <!-- Campo de entrada para la tercera nota -->
            
            <label for="nota4">Nota 4:</label>
            <input type="number" name="nota4" id="nota4" required><br><br> <!-- Campo de entrada para la cuarta nota -->

            <br><button type="submit">Calcular</button> <!-- Botón para enviar el formulario -->
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica que el formulario fue enviado
            $nota1 = $_POST['nota1']; // Obtiene la primera nota
            $nota2 = $_POST['nota2']; // Obtiene la segunda nota
            $nota3 = $_POST['nota3']; // Obtiene la tercera nota
            $nota4 = $_POST['nota4']; // Obtiene la cuarta nota

            // Crea un arreglo con las notas
            $notas = array($nota1, $nota2, $nota3, $nota4);

            // Ordena el arreglo de notas de mayor a menor
            rsort($notas);

            // Calcula el promedio de las 3 mejores notas
            $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

            // Muestra el promedio con dos decimales
            echo "<p>El promedio de las 3 mejores notas es: " . number_format($promedio, 2) . "</p>";

            // Evalúa si el estudiante aprobó o reprobó
            if ($promedio >= 6) {
                echo "<p>Aprobó</p>"; // Si el promedio es mayor o igual a 6
            } else {
                echo "<p>Reprobó</p>"; // Si el promedio es menor a 6
            }
        }
        ?>

        <!-- Enlace a la práctica anterior -->
        <br><br><a href="p29.php">Practica anterior</a>
    </main>

    <footer></footer>
    </center>
</body>
</html>
