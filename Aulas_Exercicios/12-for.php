<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>loop FOR</title>
</head>
<body>
    
    
    <h1> Loop For</h1>

    <?php
    for ($i = 1; $i <=5; $i++){
        echo "<p> O numero atual é  ".$i." </p>";
        
    }
    
    ?>
          
    <h2>Exemplo 2 </h2>
            
    <?php
         for ($j = 1; $j <=5; $j++){
    ?>
          <p> O numero atual é <strong> <?=$j?> </strong>   
    <?php
        
         }
    ?>   
    
                 
               
    <h2> Exemplo 3 - array</h2>              
    <?php
         $bandas = array("iron", "pink", "mega", "slayer", "pantera");
    
              
        for ($k = 0; $k < sizeof($bandas); $k++ ){
                              
    ?>
               
               <p>Banda <?=$bandas[$k] ?></p>
    <?php
    
                }    

    ?>
                
</body>
</html>