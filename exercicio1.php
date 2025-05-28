<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
 
$media = ($nota1 + $nota2 + $nota3) / 3;
 
echo "Média: " . number_format($media, 2) . "<br>";
 
if ($media >= 7) {
    echo "Situação: APROVADO";
} else {
    echo "Situação: REPROVADO";
}
?>