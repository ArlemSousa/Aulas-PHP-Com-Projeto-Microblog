<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 01 - Sintaxe </title>
</head>
<body>
    <h1> Introdução PHP</h1>
    
    <?php
    //comentarios
    
    //comando de saida
    echo 2019;
    echo " <p> Senac Penha </P> ";
    
    
    ?>
    
    
    <p> 
    <?php echo " <strong>Francisco </strong>"; ?>, seja bem vindo ao site teste.     
    </p>
    
    <p> 
        <strong> <?php echo "Francisco Mota "; ?> </strong>, seja bem vindo ao site teste.     
    </p>
    
    
    <!-- Sintaxe gerando tudo via PHP no server (melhor evitar)-->
    <?php
        echo "<p> Seja muito bem vindo(a) ao nosso curso de PHP com MySQL </p>";
    ?>
        
                
</body>
</html>