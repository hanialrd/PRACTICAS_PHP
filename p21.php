<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica del documento HTML -->
    <meta charset="UTF-8"> <!-- Establece la codificación de caracteres a UTF-8 para compatibilidad con diferentes idiomas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite que la página se vea correctamente en dispositivos móviles. -->
    <title>PRACTICA 21</title> <!-- Título de la página que aparece en la pestaña del navegador. -->
</head>
<body>
<center> <!-- Centra todo el contenido de la página. -->
    <header>
        <h1>NUMERO MAYOR DE 3 NUMEROS</h1> <!-- Título principal de la página. -->
    </header>
    <main>
        <section>
            <!-- Formulario para ingresar tres números. -->
            <form action="" method="POST"> <!-- El formulario se enviará al mismo archivo con el método POST. -->
                <label for="num1">Ingrese el numero uno</label>
                <input type="number" id="num1" name="num1"><br><br>
                
                <label for="num2">Ingrese el numero dos</label>
                <input type="number" id="num2" name="num2"><br><br>
                
                <label for="num3">Ingrese el numero tres</label>
                <input type="number" id="num3" name="num3"><br><br>
                
                <button type="submit">Enviar</button> <!-- Botón para enviar los datos al servidor. -->
            </form>

            <!-- Código PHP para procesar los datos del formulario. -->
            <?php
                // Verifica si el formulario fue enviado mediante el método POST.
                if($_SERVER["REQUEST_METHOD"]=='POST'){
                    // Recibe los datos ingresados por el usuario y los almacena en variables.
                    $n1 = $_POST['num1'];
                    $n2 = $_POST['num2'];
                    $n3 = $_POST['num3'];

                    // Determina cuál de los números es el mayor utilizando estructuras condicionales.
                    if($n1 > $n2 && $n1 > $n3){
                        $mayor = $n1;
                    } elseif($n2 > $n1 && $n2 > $n3){
                        $mayor = $n2;
                    } else {
                        $mayor = $n3;
                    }

                    // Muestra el resultado en pantalla.
                    echo "El numero $mayor es el mayor de los 3 numeros";
                }
            ?>

            <!-- Enlace para avanzar a otra práctica. -->
            <a href="p22.php">Siguiente práctica</a>
        </section>
    </main>
    <footer></footer>
</center>
</body>
</html>
