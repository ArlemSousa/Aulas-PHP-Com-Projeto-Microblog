<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

</head>
<body>
    
    <h1> Exercicio 2 - if </h1>
    
    <?php
    
        $salario_anterior = 500;
    ?>
    
    <!-- inicio condicional aplicação de porcentagem -->
    <?php
            
        if ($salario_anterior < 500)      {
            $salario = $salario_anterior * 1.15;
            
        } elseif ($salario_anterior <= 1000){
            $salario = $salario_anterior * 1.10;
            
            
        } else                   {
            $salario = $salario_anterior * 1.05;
        
        }
    
    ?>
    <!-- fim condicional aplicação de porcentagem --> 
    
    <?php
        
        if ($salario <= 500){
            $situacao = "Muito Pobre";
        } elseif ($salario > 500 && $salario <1000){
            $situacao = "Pobre";
        } elseif($salario >= 1000 && $salario < 2000)   {
            $situacao = "quase alguem na vida";
        } else  $situacao = "venceu na vida"
    
    ?>
    
    
    
    <p> O salário anterior é: <strong> <?=$salario_anterior?> </strong>, e o salário atual é <strong> <?=$salario?> </strong>  e você <?=$situacao?></p>
    
</body>
</html>