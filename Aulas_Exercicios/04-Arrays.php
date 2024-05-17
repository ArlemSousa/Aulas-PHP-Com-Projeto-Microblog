<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 2 - Arrays</title>
</head>
<body>
    <h1 align="center"> Trabalhando com Arrays</h1>
    <hr>
    

    <?php
    
        $bandas[0] = "Pink Floyd";
        $bandas[1] = "ACDC";
        $bandas[2] = "Iron Maiden";
    
    ?>
    
    <p> Minha banda prefereida é <?=$bandas[1]?> </p>
    
    
    <?php
        $comidas = array ("Arroz","Feijão","Batata","Paçoca")
    ?>
    
    <p> Eu gosto muito de <?=$comidas[2] ?></p>
    
    <h2>Arrays associativos</h2>
    
    <?php
        
        $clube ["nome"] = "Santos";
        $clune ["ano_fundacao"] = 1912 ;
        $clube ["titulo"] = "Campeão Paulista";
        $clube ["ano_titulo"] = 2019;
            
    ?>
    
    <p> <?=$clube["nome"]?> foi <?=$clube["titulo"]?> no ano de <?=$clube["ano_titulo"]?> </p>
    
    
    
    <?php
        $curso = array  ($curso = [
            "nome"      => "PHP com SQL",
            "unidade"   => "Senac Penha",
            "carga"     => 40]
                        ) ;  
    ?>
    
    
    
    <H2>MATRIZES</H2>
    
    <?php
    
    $tecnologias = [  ["HTML5", "CSS", "JS"],       //0
                      ["PHP", "MySQL", "node.js"],  //1
                      ["Photoshop", "Ilustrator"]   //2
                   ];
    
    ?>
    <p>O banco de dados <strong> <?=$tecnologias[1][1] ?> </strong> é o mais utilizado atualmente </p>
    
    
    
    
</body>
</html>