<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>

    <style>
        table {
            border: 1px solid black;
            padding: 1%;
        }

        td.position {
            text-align: right;    
        }

    </style>

</head>
<body>
    <table>
        <form method="post" action="4.php">

        <tr>
            <td class="position"><label for="nombre">Nom</label></td>
            <td><input required autofocus type="text" id="nombre" name="nombre"></td>
        </tr>

        <tr>
            <td class="position"><label for="cognom">Cognom</label></td>
            <td><input required autofocus type="text" id="cognom" name="cognom"></td>
        </td>

        <tr>
            <td class="position"><label for="contrasenya">Passwd</label></td>
            <td><input required autofocus type="password" id="contrasenya" name="contrasenya"></td>
        </tr>

        <tr>
            <td class="position">
                <label for="tipo_usuari">Usuari</label>
            </td>
            <td>
                <input type="radio" id="profe" name="tipo_usuari" value="Profe">
                <label for="profe">Profe</label>
                <input type="radio" id="alumne" name="tipo_usuari" value="Alumne">
                <label for="alumne">Alumne</label>
            </td>
        </tr>

        <tr>
            <td class="position"><label for="actiu">Actiu</label></td>
            <td><input type="checkbox" id="actiu" name="actiu"></td>
            <td><label for="actiu"></label></td>            
        </td>

        <tr>
            <td class="position"><label for="foto">Foto</label></td>            
            <td><input type="file" name="foto" /></td>
        </td>

        <tr>
            <td class="position"><label for="edat">Edat</label></td>
            <td>
                <select name="edat" id="edat">
                    <?php
                        for ($y = 18; $y <= 99; $y++) echo "<option value=$y>$y</option>";                     
                    ?>
                </select>
            </td>
        </td>

        <tr>
            <td class="position"><label for="comentari">Comentari</label></td>
            <td><textarea name="comentari" id="comentari" cols="30" rows="5"></textarea></td>
        </td>

        <tr>
            <td><input type="submit" value="Enviar" name="submit"></td>
            <td><input type="reset" value="Reiniciar"></td>
        </td>

        </form>
    </table>

    <?php
    
        if(isset($_POST['submit'])){
            $name = $_POST['nombre'];
            $cognom = $_POST['cognom'];
            $contra = $_POST['contrasenya'];
            $foto = $_POST['foto'];
            $edat = $_POST['edat'];
            $comentari = $_POST['comentari'];

            if(isset($_POST['tipo_usuari'])) $usuari = $_POST['tipo_usuari'];
            else $usuari = "Elije un tipo de usuario";

            if(isset($_POST['actiu'])) $actiu = $_POST['actiu'];
            else $actiu = "off";

            echo "POST[nom] = $name <br>";
            echo "POST[cognom] = $cognom <br>";

            echo "POST[password] = ";
            echo md5($contra);
            echo "<br>";

            echo "POST[usuari] = $usuari <br>";
            echo "POST[actiu] = $actiu <br>";
            echo "POST[foto] = $foto <br>";
            echo "POST[edat] = $edat <br>";
            echo "POST[comentari] = $comentari <br>";
        }
    ?>
    
    </body>
</html>
