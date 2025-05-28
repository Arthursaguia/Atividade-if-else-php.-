<?php
$temp = $_GET["temp"];
 
if ($temp < 0) {
    echo "Congelante";
} elseif ($temp < 15) {
    echo "Muito frio";
} elseif ($temp < 25) {
    echo "Razoável";
} else {
    echo "Calor";
}
?>