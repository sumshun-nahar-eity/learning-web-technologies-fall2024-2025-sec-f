<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  
    $a=10;
    $b=20;
    $c=50;
        
    if($a>$b && $a>$c){
        echo("a is greater than b and c ");
    }
   
    if($b>$c && $b>$a){
        echo("b is greater than a and c");

    }
else{
    echo("c is greater than c")
}


    ?>
</body>
</html>