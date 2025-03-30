<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración básica de la página -->
    <meta charset="UTF-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Permite la adaptación a dispositivos móviles -->
    <title>PRACTICA 28</title> <!-- Título de la página -->
</head>
<body>
    <center> <!-- Centra todo el contenido de la página -->
    <header>
        <h1>MAYOR O MENOR DE EDAD</h1> <!-- Título principal de la práctica -->
    </header>
    <main>
        <section>
            <!-- Formulario para ingresar la edad -->
            <form action="" method="POST"> <!-- El formulario envía datos al mismo archivo mediante POST -->
                <label for="edad">Ingresa tu edad:</label>
                <input type="number" name="edad" id="edad" required> <!-- Se agrega 'required' para evitar campos vacíos -->
                <button type="submit">Enviar</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Comprueba si se envió el formulario
                
                $edad = $_POST['edad']; // Obtiene el valor ingresado por el usuario

                if ($edad >= 18) { // Si la edad es mayor o igual a 18
                    echo "Eres mayor de edad";
                } else { // Si la edad es menor a 18
                    echo "Eres menor de edad"; 
                }
            }
            ?>  

            <!-- Enlace para ir a la siguiente práctica -->
            <a href="p29.php">Siguiente Practica</a>
        </section>
    </main>
    <footer>
    </footer>
    </center>
</body>
</html>
