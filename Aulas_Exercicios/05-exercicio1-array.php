<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <style>
        
        .destaque{ color: red;  }
    
    </style>
    
    <title>Document</title>
</head>
<body>
    
    <?php
             $exercicio["nome"]      = "Francisco Mota"  
            ;$exercicio["usuario"]   = "francisco.asousa4"
            ;$exercicio["senha"]     = "******"
            ;$exercicio["idade"]     = 25
            ;$exercicio["cidade"]    = "Guarulhos"
            ;$exercicio["sexo"]      = "Masculino"
    ?>
    
    
    <?php
            
             $exercicio2[0]          = "Chico"
            ;$exercicio2[1]          = "francisco.asousa4"
            ;$exercicio2[2]          = 25
            ;$exercicio2[3]          = "maxxculino"
                
                        
    ?>
    
    <h1 class="destaque"> Exercicios Aula 2 - Arrays</h1>
    <hr>
    
    
    <ol>
    <li><?=$exercicio["nome" ] ?></li>
    <li><b class="destaque"> <?=$exercicio["idade"] ?> </b> Anos</li>
    <li><?=$exercicio["sexo" ] ?></li>
    </ol>
    
    <h2> Outras dormas de exibir o array</h2>
    
    <ol>
    <li><?=$exercicio2[0] ?></li>
    <li><?=$exercicio2[2] ?> Anos</li>
    <li><?=$exercicio2[3] ?></li>
    </ol>
    
    
</body>
</html>