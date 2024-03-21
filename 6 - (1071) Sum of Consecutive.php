<?php

    $n = readline();
    $m = readline();
    $soma = 0;
    
    if ($n > $m){$maior = $n;$menor = $m;} 
    else{$maior = $m;$menor = $n;}
    
    for ($i=$menor+1; $i<$maior; $i++){
      if ($i % 2 != 0){
        $soma = $soma + $i;
      } 
    }
    echo "$soma\n";
    
?>