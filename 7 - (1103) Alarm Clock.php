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
while (true){
    list($h1, $m1, $h2, $m2) = array_map('intval', explode(' ', readline()));
  if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
    break;
  }
  $minutos_sono = 0;
  if ($h1 < $h2 || ($h1 == $h2 && $m1 < $m2)){
    $minutos_sono = ($h2 - $h1) * 60 + ($m2 - $m1);
  } else {
    $minutos_sono = ((24 - $h1) + $h2) * 60 + ($m2 - $m1);
  }
  echo"$minutos_sono\n";
}
?>
</body>

</html>