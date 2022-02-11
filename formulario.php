<!DOCTYPE html>
    <?php 
        include('conexion.php');
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anet Guadalupe Formilario.php</title>
    </head>
    <body>
        <h1>BLACK MOON </h1>
        <h2>servicios....</h2>
        <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
    </ul>

        <form action="store.php" method="POST" name="frm" id="formulario">
                <label id="preguntas" for="Nombre">
                    Nombre: 
                    <input class="datos" type="text" name="Nombre" required>
                </label><br><label id="preguntas" for="Edad">
                    Edad:
                    <input class="datos" type="numeric" name="Edad" require>
                </label><br><label id="preguntas" id="Grupo">
                    Grupo al que pertenecen:
                    <input class="datos"  type="text" name="Grupo">
                </label><br><label id="preguntas" id="Telefono">
                    Numero telefonico:
                    <input class ="datos" type="text" name="Telefono" require>
                </label><br><label id="preguntas" id="Casa">
                    Casa donde se hospeda:
                    <select  class="datos"  name="Casa">
                        <option  class="datos"  value="Casa Blanca">Casa Blanca</option>
                        <option  class="datos" value="Casa Azul" selected>Casa Azul</option>
                        <option class="datos"  value="Casa Cafe" selected>Casa Cafe</option>
                        <option  class="datos"  value="Edificio" selected>Edificio</option>
                        <option class="datos" value="Otro">Otro</option>
                    </select>
                </label><br><label for="boton">
                    <button  class="boton" type="submit">Send</button>
                </label>
            <footer>
                <p id = "Deespedida">
                    Actividad: Conexión básica a Base de Datos
                </p><p>
                    Nombre: Anet Guadalupe Muñoz De Santiago
                </p>
            </footer>
        </form>
    </body>
</html>