<?php
session_start();
?>
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

    <?php
        if(isset($_SESSION['nombre']) && isset($_SESSION['cognoms'])) {
            $_SESSION["nombre"] = NULL;
            $_SESSION["cognoms"] = NULL;
            echo "Dades esborrades amb èxit.<br><br>";
        } else if (isset($_SESSION['nombre'])) {
            $_SESSION["nombre"] = NULL;
            echo "Nom esborrat amb èxit.<br><br>";
        } else if (isset($_SESSION['cognoms'])) {
            $_SESSION["cognoms"] = NULL;
            echo "Cognoms esborrats amb èxit.<br><br>";
        } else {
            echo "Escriu dades per esborrar.<br><br>";
        } 
    ?>

    <a href="index.php">Inici</a>

</body>
</html>