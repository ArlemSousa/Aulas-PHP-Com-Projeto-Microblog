<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   
   <h1> IF/ELSE encurtado</h1>
    <hr>
    
    <?php
    
        $idade = 17;
    
        if ($idade >= 18 ){
            echo "maior de idade! ";
            
        }   else {
            echo "Menor de idade";
        } 
         
    //shortend é baseada em um operador chamaddo ternario
    
    echo "<br>";
    echo $idade  >=18 ? "É maior de idade" : "Menor de idade";
    
    ?>
    
    
    
    
    
</body>
</html>