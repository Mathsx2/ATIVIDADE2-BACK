<?php

    $vezes = readline();
    
    for ($i=0; $i<$vezes; $i++){
      
      $values = readline();
      $values = explode(" ", $values);
    
      if ($values[1] > $values[0]){
        $dividendo = $values[0];
        $divisor = $values[1];
      } else {
        $dividendo = $values[1];
        $divisor = $values[0];
      }
    
      while($dividendo % $divisor != 0){
        $temp = $dividendo % $divisor;
        $dividendo = $divisor;
        $divisor = $temp;
      }
    
      echo "$divisor\n";
      
    }

?>