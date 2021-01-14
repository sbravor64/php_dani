<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognom-1</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    
</head>

<body>

    <p>Cognoms anteriors:
        <b>
            <?php
                session_start();
                if(isset($_SESSION['cognoms'])) echo $_SESSION["cognoms"];
            ?>
        </b>
    </p>

    <p>Escriu els teus cognoms: </p>

    <form action="cognoms-2.php" method="post">
        <b><label for="cognoms">Cognoms:</label></b>  
        <input required autofocus type="text" id="cognoms" name="cognoms"><br><br>
        <input type="submit" value="Guardar">
        <input type="reset" value="Esborrar">
    </form><br>

    <a href="index.php">Inici</a>
    
</body>
</html>