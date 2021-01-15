<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

</head>
<body>

    <h1>Cookies: Creació i destrucció</h1>

    <?php

        if(isset($_POST["crear"])){
            if (!empty($_POST["segundos"])){
                $durada =  $_POST['segundos'];
                $valorCookie = time() + $durada;
                setcookie('cookieTemporal', $valorCookie, time() + $durada);

                echo "Cookies creada. Es destruirà en $durada segons.";

            } else {
                echo "<p style='color:red;'>No has indicado la duración de la cookie</p>";
            }

        } else if(isset($_POST["comprovar"]) ){

            if(isset($_COOKIE["cookieTemporal"])){
                $tiempoRestante = $_COOKIE["cookieTemporal"] - time();
                if ($tiempoRestante) echo "Cookies creada. Es destruirà en $tiempoRestante segons.";
                else echo "Cookie Expirada";
            } else {
                echo "<p style='color:red;'>No hay cookie para comprovar</p>";
            }

        } else if(isset($_POST["destruir"])){

            if(isset($_COOKIE["cookieTemporal"])){
            setcookie ("cookieTemporal", "", time() - 3600);
            echo "Cookie destruida";
            } else {
                echo "<p style='color:red;'>No hay cookie para destruir</p>";
            }

        } else if (!isset($_POST["crear"])) {

            echo "Crea la cookie indicándole su duración";

        }

    ?>

    <p> Tria una opció:</p>
    
    <form action="6.php" method="post">
        <ul>
            <li>
                <label for="segundos">Crear una cookie amb una duració de:</label>
                <input type="number" id="segundos" name="segundos" min="1" max="60">
                </label>segons (entre 1 y 60)</label>
                <input type="submit" value="Crear" name="crear">
            </li>
            
            <li>
                </label>Comprovar la cookie</label>
                <input type="submit" value="Comprovar" name="comprovar">
            </li>

            <li>
                </label>Destruir la cookie</label>
                <input type="submit" value="Destruir" name="destruir">
            </li>
        </ul>
    </form>

</body>
</html>