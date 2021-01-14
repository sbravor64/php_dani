<?php
    session_start();
?>
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

        if(isset($_POST['crear'])){
            if (!empty($_POST['segundos'])){
                $_SESSION["segundos"] = $_POST["segundos"];
                $time = $_POST['segundos'];
                setcookie('cookieTemporal','Hola, soy una cookie',time() + $time);

                echo "Cookies creada. Es destruirà en " . (($_SESSION["segundos"]) - time()) . " segons.";

            } else {
                echo "No has indicado la duración de la cookie";
            }

        } else if(isset($_POST['comprovar']) ){

            if(isset($_COOKIE['cookieTemporal'])){
                    echo "Cookies creada. Es destruirà en " . (($_SESSION["segundos"]) - time()) . " segons.";
            } else {
                echo "No hay cookie para comprovar";
            }

        } else if(isset($_POST['destruir'])){

            if(isset($_COOKIE['cookieTemporal'])){
            setcookie ("cookieTemporal", "", time() - 3600);
            echo "Cookie destruida";
            } else {
                echo "No hay cookie para destruir";
            }

        } else if (!isset($_POST['crear'])) {

            echo "Crea la cookie indicándole su duración";

        }

    ?>

    <p> Tria una opció:</p>
    
    <form action="index.php" method="post">
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