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
while (true) {
  $m = intval(readline());
  $n = intval(readline());
  if ($m <= 0 || $n <= 0){
    break;
  }
  $soma=0;
  for($i = min($m, $n); $i <= max($m, $n); $i++){
    echo"$i ";
    $soma += $i;
  }
  echo"Sum={$soma}\n";
}
?>
</body>

</html>