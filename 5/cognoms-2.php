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
   
    <p>Cognoms Enregistrats:
        <b>
            <?php 
            session_start();
            $_SESSION["cognoms"] = $_POST["cognoms"];
            echo $_SESSION["cognoms"];
            ?>
        </b> 
    </p>

<a href="index.php">Inici</a>

</body>
</html>