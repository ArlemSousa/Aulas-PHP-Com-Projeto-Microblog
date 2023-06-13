<?php 
require "inc/cabecalho.php"; 
?>

<main class="row my-3">
    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">Acesso ao painel de controle</h2>

        <p class="my-2 alert alert-warning text-center"> </p>                 

        <div class="form-group">
            <label for="email" class="sr-only">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Endereço de e-mail" autofocus>
        </div>

        <div class="form-group">
            <label for="senha" class="sr-only">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">Entrar</button> 
    </form>
</main>

<?php
if( isset($_POST["entrar"]) ){
    
    if( empty($_POST["email"]) && empty($_POST["senha"]) ){
        header("location:login.php");
    } else {

    }
}

require "inc/rodape.php"; 
?>



