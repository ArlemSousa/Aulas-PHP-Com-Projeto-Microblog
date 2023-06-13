<?php 
require "../inc/cabecalho-admin.php"; 
require "../inc/logica-usuarios.php"; 

?>

                <li class="breadcrumb-item">
                <a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="usuarios.php">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inserir</li>
            </ol>
        </nav> 

        <div class="row">
            <div class="col-sm">
            <h2>Inserir usuário</h2>
                <form class="form-geral" action="" method="post">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary" name="inserir">Inserir usuário</button>
                </form>
            </div>
        </div>

<?php
if( isset($_POST['inserir'])) {
    if( empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) ){
        echo '<p class="my-2 alert alert-danger" role="alert">Você deve preencher todos os campos</p>';
    } else {
        
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = codificaSenha ($_POST['senha']);
           
        /*echo $senha;*/
        
        inserirUsuario($conexao, $nome, $email, $senha); 
        /*aqui chamamos a funcao inserirUsuario que está no aquivo logica_usuario, enviando os parametros para inserir no sql */
        
        require "../inc/desconecta.php";
        header("location:usuarios.php") ;/*apos inserir usuario, desconecta o banco e redireciona para a pagina usuarios*/

    }
}   
         
require "../inc/rodape-admin.php"; 
?>



