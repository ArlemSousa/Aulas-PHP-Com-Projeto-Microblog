<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> while loop</h1>
    <hr>
    
    <?php
    
    $i = 1;
    
   do {
        
        echo $i.", ";
    $i++;
    }  while ($i <= 10) 
    
    ?>
    
    <h2> Exemplo 2</h2>
    <?php
    
    $j = 11;
    
    
    do {
    
    ?>    
     
     <p>  O valor de J é : <?=$j?> </p>
    
    <?php
        $j++;
        } while ($j <= 10)
    ?>
    
</body>
</html>
