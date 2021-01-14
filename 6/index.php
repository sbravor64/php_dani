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
        session_start();
        if(isset($_POST['segundos'])){
            $durada = $_POST['segundos'];
            echo "Cookies creada. Es destruirà en $durada segons.";
        } else echo "Indica la duración de la cookie para empezar...";
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

    <?php
        if(isset($_POST['crear'])){
            if (!empty($_POST['segundos'])){
                $time = $_POST['segundos'];
                setcookie("cookie","Hola, soy una cookie",time() + $time);
            }
        } else if(isset($_POST['comprovar']) && isset($_POST['segundos']) ){
                $contenido = $_COOKIE["cookie"];
                echo "hoala";
        }
    ?>
    
    
</body>
</html>