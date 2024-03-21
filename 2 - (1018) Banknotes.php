<?php
$valor = intval(readline());
echo $valor . "\n";
$notas = array(100, 50, 20, 10, 5, 2, 1);
$valores = array();

foreach ($notas as $nota) {
    $valores[$nota] = intdiv($valor, $nota);
    $valor -= $valores[$nota] * $nota;
    echo $valores[$nota] . " nota(s) de R$ " . number_format($nota, 2, ',', '.') . "\n";
}
?>
