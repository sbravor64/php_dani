<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom-1</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    
</head>

<body>

    <p>Nom anterior:
        <b>
            <?php
                session_start();
                if(isset($_SESSION['nombre'])) echo $_SESSION["nombre"];
            ?>
        </b>
    </p>

    <p>Escriu el teu nom: </p>

    <form method="post" action="nom-2.php">
        <b><label for="nombre">Nom:</label></b>
        <input required autofocus type="text" id="nombre" name="nombre"><br><br>
        <input type="submit" value="Guardar">
        <input type="reset" value="Esborrar">
    </form><br>

    <a href="index.php">Inici</a>
    
</body>
</html>