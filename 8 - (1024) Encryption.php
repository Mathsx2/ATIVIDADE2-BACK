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
$quant = readline();

while($quant--){

  $entry = readline();
  $completa = "";

  for($i=0; $i<strlen($entry); $i++){
    $char = $entry[$i];
    $teste1 = strtoupper($char);

    $teste2 = strtolower($char);

    if ($teste == $char && $teste2 == $char){
      $completa .= $char;
    }  else {
      $charN = ord($char);
      $var = chr($charN + 3);
      $completa .= $var;
    }
  }
  $charR = strrev($completa);
  $geral = strlen($charR);

  for ($i= (int)($geral/2); $i<$geral; $i++){
    $char = $charR[$i];
    
    $charN = ord($char);
    $var = chr($charN - 1);

    $charR[$i] = $var;
  }
  echo "$charR\n";
}

?>
</body>

</html>
