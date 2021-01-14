<?php

echo "<table border='1'>";
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($y = 49; $y <= 60; $y++) {
        if ($y == 49) {
            if($i == 0) echo "<td bgcolor='8F7AFC'></td>";
            else echo "<td bgcolor='C593FF'> $i </td>";
        } else if($i == 0) echo "<td bgcolor='C593FF'> $y </td>";
        else {
            if ($i%2==0) echo "<td bgcolor='FFCA80'>";
            else echo "<td bgcolor='FFF980'>";

            if ($y%$i==0) echo "* </td>";
            else echo "- </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>
