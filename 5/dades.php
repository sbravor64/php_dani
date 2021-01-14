
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>
<body>

    <p>Nom:
        <b>
        <?php
            session_start();
            if(isset($_SESSION['nombre'])) echo $_SESSION["nombre"];
        ?>
        </b> 
    </p>

    <p>Cognoms:
        <b>
        <?php
            if(isset($_SESSION['cognoms'])) echo $_SESSION["cognoms"];
        ?>
        </b> 
    </p>

    <a href="index.php">Inici</a>

</body>
</html>