<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Constantes e Variaveis</title>
</head>
<body>
    
    <h1 align = "center"> manipulando dados dinamicos</h1>
    <hr>
    <?php
    
    //constantes
    define ("Autor", "Chico");
    define ("Profissao", "Analista de dados");
    define ("CURSO", "PHP com MySQL");
    define ("ESCOLA", "Senac Penha");
    define ("CARGAHORARIA", 40);
        
    echo "<p>";
        echo "Olá, meu nome é ". Autor . " e eu sou " .  Profissao;
    echo "</p>";
    
    //variaveis
    
    $aluno = "Francisco";
    $idade = 35;
    $ano   = 2019;
    $estilo_musical = "Rock 'n Roll";

        
    $parente = "Ivanilde";
    $idade2 = 50;
    $ano2   = 2020;
            
    ?>
    
    <hr> <!-- insere uma linha -->
    
    <p> O aluno     <strong><?php echo $aluno  ; ?> </strong> tem <?php echo $idade; ?> anos e está no ano letivo de <?php echo $ano  ; ?>    </p>
    <p> O parente   <strong><?php echo $parente; ?> </strong> tem <?php echo $idade2; ?> anos      </p>
    
    
    <?php
        echo "<p>".CURSO."</p>";
        echo "<p>".ESCOLA."</p>";
        echo "<p>".CARGAHORARIA."</p>";
    
    
        echo "<h2> Saidas de variaveis</h2>"; 
        echo "<p> O Aluno ".$aluno." Gosta de ".$estilo_musical."</p>";
    ?>
       
    <h2> OUtras formas de Saida</h2>
        <p>Olá estamos no curso <strong> <?php echo CURSO; ?> </strong> na escola <strong> <?php echo ESCOLA  ?></strong> </p>
    <p>Olá! Me chamo <?=$aluno?> Estamos faZendo o curso de <?=CURSO?> no <?=ESCOLA?></p>
       
        
</body>
</html>