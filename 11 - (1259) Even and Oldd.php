<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$n = intval(fgets(STDIN));
$pares = array();
$impares = array();
for ($i = 0; $i < $n; $i++) {
    $valor = intval(fgets(STDIN));
    if ($valor % 2 == 0) {
        $pares[] = $valor;
    } else {
        $impares[] = $valor;
    }
}
sort($pares);
rsort($impares);
foreach ($pares as $valor) {
    echo $valor . "\n";
}
foreach ($impares as $valor) {
    echo $valor . "\n";
}
?>
</body>

</html>