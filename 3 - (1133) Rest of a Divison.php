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
    $x = readline();
    $y = readline();
    if($x > $y){
      for($i = $y+1; $i < $x; $i++){
        if($i % 5 == 2 || $i % 5 == 3){
          echo "$i\n";
        }
      }
    }
    elseif($x < $y){
      for($i = $x+1; $i < $y; $i++){
        if($i % 5 == 2 || $i % 5 == 3){
          echo "$i\n";
        }
      }
    }    
    ?>
</body>

</html>