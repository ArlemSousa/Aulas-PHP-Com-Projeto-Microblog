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
    
    while ($i <= 10) {
        
        echo $i.", ";
    $i++;
    }
    
    ?>
    
    <h2> Exemplo 2</h2>
    <?php
    
    $j = 1;
    
    
    while ($j <= 10) {
    
    ?>    
     
     <p>  O valor de J é : <?=$j?> </p>
    
    <?php
        $j++;
        }
    ?>
    
</body>
</html>