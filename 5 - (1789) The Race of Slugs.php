<?php

  while (1){
  $Count = 0;
  $Quant = readline();
  if ($Quant == "" || $Quant == " "){
    break;
  }
  $Vel = readline();
  $Vel = explode(" ", $Vel);
  for ($i=0; $i<=$Quant; $i++){
      if ($Vel[$i] > $Count){
       $Count = $Vel[$i];
    }
  }
  if ($Count >= 20){
    echo "3\n";
  } elseif ($Count >= 10 && $Count < 20){
    echo "2\n";
  } else {echo "1\n";}
}

?>