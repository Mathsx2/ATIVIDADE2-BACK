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
function leds($numero) {
  $leds_por_numero = array(
    6,
    2,
    5,
    5,
    4,
    5,
    6,
    3,
    7,
    6,
  );
  $quantidade_leds = 0;
  foreach (str_split($numero) as $digito) {
    $quantidade_leds += $leds_por_numero[$digito];
  }
  return $quantidade_leds;
}
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
  $numero = trim(fgets(STDIN));
  $quantidade_leds = leds($numero);
  echo "$quantidade_leds leds\n";
}
?>

</body>

</html>