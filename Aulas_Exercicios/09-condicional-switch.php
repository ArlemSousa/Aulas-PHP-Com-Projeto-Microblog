<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> switch / case / default </h1>
    
    <?php 
        $programa = "Corel";
    
    
    switch ($programa) {
        case "Photoshop": 
        case "Corel":
        case "Ilustrator":
            echo "<p> $programa  é usado para edição de imagem</p>";
        break;
        
        case "Premiere": 
            echo "<p> $programa  é usado para ediçaõ de video</p>";
        break;
            
       case "brackets": 
            echo "<p> $programa  é usado para ediçaõ de códigos</p>";
        break;
          
        default: echo "Nada";
        break;
    }
    
    ?>
</body>
</html>