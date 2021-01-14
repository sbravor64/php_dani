<?php
function e1($num1, $num2, $num3, $num4, $num5){
    echo $num1+$num2+$num3+$num4+$num5;
}

function e2 ($num1, $num2, $num3, $num4, $num5){
    return $num1+$num2+$num3+$num4+$num5;
}

function e3($radi, $alçada){
    $volum = pi()*$radi*$radi*$alçada;
    return $volum;
}

const debug = 1;
function e4($missatge){
    if (debug == 1) {
        echo"<p style='border: ridge #ff0000 1px;'> <b>Debug:</b> <br>$missatge</br></p>";
    }
}

echo "<h3><b>A) El resultat de la funció passant com a pàmetres 1,1,1,1,1 és: </b></h3>";
e1(1,1,1,1,1);

$tmp = e2(2,5,1,8,10);
echo '<h3><b>B) $tmp = El resultat de la funció passant com a paràmetres 2,5,1,8,10 </b></h3>';
echo '$tmp = ';
echo $tmp;

echo "<h3><b>C) Radi = 5 / Alçada = 10: </b></h3>";
echo '$volum = ';
echo round(e3(5,10), 3);

echo "<h3><b>D) Debug: </b></h3>";
e4("Missatge de prova de debug.");

?>