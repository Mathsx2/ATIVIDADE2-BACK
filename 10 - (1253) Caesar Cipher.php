<?php

$quant = readline();

while($quant--){

  $string = readline();
  $right = readline();
  $completa = "";

  for($i=0; $i<strlen($string); $i++){
    $char = $string[$i];
    $convert = strtoupper($char);
    $charN = ord($convert);
    $var = chr($charN - $right);
    $value = ord($var);

    if($value < 65){
      $dif = $charN - 64;
      $value  = $right - $dif;
      
      $var = 'Z';
      $var = ord($var);
      $var = chr($var - $value);
      $completa .= $var;
    } else{$completa .= $var;}
  }
  echo "$completa\n";
}

?>