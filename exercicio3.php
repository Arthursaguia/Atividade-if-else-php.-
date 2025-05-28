<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];
 
$imc = $peso / ($altura * $altura);
 
echo "IMC: " . number_format($imc, 2) . "<br>";
 
if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso normal";
} elseif ($imc < 24.9) {
    echo "Classificação: Peso normal";
} elseif ($imc < 29.9) {
    echo "Classificação: Excesso de peso";
} elseif ($imc < 34.9) {
    echo "Classificação: Obesidade classe I";
} elseif ($imc < 39.9) {
    echo "Classificação: Obesidade classe II";
} else {
    echo "Classificação: Obesidade classe III";
}
?>