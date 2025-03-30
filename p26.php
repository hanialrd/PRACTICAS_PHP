<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 para soporte de múltiples idiomas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite que la página sea responsive en dispositivos móviles. -->
    <title>PRACTICA 26</title> <!-- Título de la pestaña del navegador. -->
</head>
<body>
    <center> <!-- Centra todo el contenido de la página. -->
    <header><h1>NUMERO MAYOR, INTERMEDIO Y MENOR</h1></header>
    <main>
        <section>
            <!-- Formulario HTML para ingresar tres números -->
            <form action="" method="POST"> <!-- El formulario se envía al mismo archivo con el método POST. -->
                <label for="num1">Ingrese un número:</label>
                <input type="number" name="num1" id="num1" required><br><br>
                
                <label for="num2">Ingrese un número:</label>
                <input type="number" name="num2" id="num2" required><br><br>
                
                <label for="num3">Ingrese un número:</label>
                <input type="number" name="num3" id="num3" required><br><br>
                
                <button type="submit">Enviar</button><br><br>
            </form>

            <?php
                if($_SERVER["REQUEST_METHOD"] == 'POST'){
                    // Captura de los números ingresados por el usuario
                    $N1 = $_POST['num1'];
                    $N2 = $_POST['num2'];
                    $N3 = $_POST['num3'];

                    // Determinación del número menor
                    if($N1 < $N2 && $N1 < $N3){
                        $menor = $N1;
                    } elseif ($N2 < $N1 && $N2 < $N3){
                        $menor = $N2;
                    } else {
                        $menor = $N3;
                    }

                    // Determinación del número mayor
                    if($N1 > $N2 && $N1 > $N3){
                        $mayor = $N1;
                    } elseif ($N2 > $N1 && $N2 > $N3){
                        $mayor = $N2;
                    } else {
                        $mayor = $N3;
                    }

                    // Cálculo del número intermedio
                    $intermedio = ($N1 + $N2 + $N3) - ($mayor + $menor);

                    // Mostrar resultados
                    echo "Los números son: <br>";
                    echo "Número mayor: " . $mayor . "<br><br>";
                    echo "Número intermedio: " . $intermedio . "<br><br>";
                    echo "Número menor: " . $menor . "<br><br>";
                }
            ?>

            <!-- Enlace para la siguiente práctica -->
            <a href="p27.php">Siguiente práctica</a>
        </section>
    </main>
    <footer></footer>
    <center>
</body>
</html>
