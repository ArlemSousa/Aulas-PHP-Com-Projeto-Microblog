<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <style>
        .aprovado { color: blue; }
        .reprovado { color: red; }
    </style>
    
</head>
<body>
    
    <h1> Estutura condicional IF/ELSEIF/ELSE</h1>
        <hr>
    <h2> Exemplo A: IF Simples</h2>
    
    <?php

        $numero = 10;            
            if($numero > 7) {
    ?>
                
                 <p>O numero informado é maior.</p>
    <?php        
        }  
    ?>
    
    
    
    <h2> Exemplo B: Condicional Composta</h2>
    <?php
        
        $outroNumero = 1;
    
            if($numero >= $outroNumero){
    ?>
        
                
        <p> <?=$numero?>  é maior/igual que <?=$outroNumero?> </p>
    <?php        
               } else {
    ?>
    
    <p> <?=$numero ?> é menor que  <?=$outroNumero?></p>
        
    <?php                    
            }
    ?>
    
    <?php   
        $nota1  =  5.1;
        $nota2  =  5.2;
        $nota3  =  5.1;
        $media  = ($nota1 + $nota2 + $nota3) /3;
    ?>
    
        <p> Sua nota é: <?=$media?></p> 
             
              
    <?php
    
        if ($media <=7) {
    ?>
    
        <p class="reprovado"> Reprovado</p>
    <?php
    
        }
    ?>
    
    
    <h2>Exemplo C: Condicional IF ENCADEADA</h2>
<?php
    /* Algoritmo/Lógica
    Se a média for abaixo de 3, então foi PÉSSIMO
    Senão, se a média for abaixo de 5, então foi RUIM
    Senão, se a média for abaixo de 7, então foi REGULAR
    Senão, se a média for abaixo de 9, então foi BOM
    Senão, então foi ÓTIMO */
    if($media < 3){
        $desempenho = "PÉSSIMO";
    } elseif($media < 5){
         $desempenho = "RUIM";
    } elseif($media < 7){
         $desempenho = "REGULAR";
    } elseif($media < 9){
         $desempenho = "BOM";
    } else {
        $desempenho = "OTIMO";
    }
?>
        
    <P>Desempenho <?=$desempenho?> </P>

    
</body>
</html>