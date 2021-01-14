<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom-2</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    
</head>

<body>
   
    <p>Nom Enregistrat:
        <b>
            <?php 
            session_start();
            $_SESSION["nombre"] = $_POST["nombre"];
            echo $_SESSION["nombre"];
            ?>
        </b> 
    </p>

    <a href="index.php">Inici</a>

</body>
</html>