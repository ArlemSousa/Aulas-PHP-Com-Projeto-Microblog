<?php 
require "../inc/cabecalho-admin.php"; 

?>

                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posts</li>
            </ol>
        </nav> 

        <div class="row">
            <div class="col-sm">
                <h2>Posts</h2>

                <p class="text-right">
                    <a class="btn btn-primary" href="post-insere.php" role="button">
                    Inserir novo post</a>
                </p>

                <table class="table table-hover data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>ID...</td>
                            <td>Título... <br>
                                <a href="post-atualiza.php">
                                    Atualizar</a> -
                                <a class="excluir" data-toggle="modal" data-target="#myModal"
                                    href="post-exclui.php">Excluir</a></td>
                            <td>Data...</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

<?php require "../inc/rodape-admin.php"; ?>



