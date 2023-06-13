<?php 
require "../inc/cabecalho-admin.php"; 

?>

                <li class="breadcrumb-item">
                <a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="posts.php">Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Atualizar</li>
            </ol>
        </nav> 

        <div class="row">
            <div class="col-sm">
            <h2>Atualizar post</h2>

                <form class="form-geral" action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="id do post...">
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo"
                        value="título do post...">
                    </div>
                    <div class="form-group">
                        <label for="texto">Texto</label>
                        <textarea name="texto" id="texto" cols="50" rows="10" class="form-control">texto do post...</textarea>
                    </div>
                    <div class="form-group">
                        <label for="resumo">Resumo</label>
                        <textarea name="resumo" id="resumo" cols="50" rows="3" class="form-control">resumo do post...</textarea>
                    </div>

                    <div class="form-group">
                        <label for="imagem-existente">Imagem do post:</label>
                        <input type="text" id="imagem-existente" name="imagem-existente" class="form-control" readonly value="Nome da imagem...">
                    </div>            
                    
                    <div class="form-group">
                        <label for="imagem">Selecionar uma imagem para este post:</label>
                        <input type="file" id="imagem" name="imagem" class="form-control"
                        accept="image/png, image/jpeg, image/gif, image/svg+xml">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="atualizar">Atualizar post</button>
                </form>

            </div>
        </div>

<?php
if( isset($_POST['atualizar'])) {
        
    if( empty($_POST["titulo"]) || 
        empty($_POST["texto"]) || 
        empty($_POST["resumo"]) ){
        echo '<p class="my-2 alert alert-danger" role="alert">Você deve preencher todos os campos</p>';
    } else {
        
    }
}            

require "../inc/rodape-admin.php"; 
?>



