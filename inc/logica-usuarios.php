<?php

require "conecta.php";

function inserirUsuario($conexao, $nome, $email, $senha){
    
    $sql  = "insert into usuarios (nome, email, senha)";
    $sql.= "values ('$nome', '$email', '$senha')";
    return mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
    
}


function codificaSenha($senha){
    return password_hash ($senha, PASSWORD_BCRYPT);
    
}
    

function lerUsuarios ($conexao) {
    
    $sql = "select * from usuarios order by nome";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

$usuarios = [];

while ($usuario = mysqli_fetch_assoc ($resultado)){
    
    array_push ($usuarios, $usuario);
} /*enquanto tiver dados dentro da consulta, transforma em um aray associativo $usuario*/

return $usuarios;
    
}


function lerUmUsuario($conexao, $id){
    
    $sql = "select * from usuarios where id = $id";
    $resultado = mysqli_query($conexao, $sql) or die (
        mysqli_error ($conexao)
    );
    
    return mysqli_fetch_assoc($resultado);
}

function atualizarUsuario($conexao, $id, $nome, $email, $senha) {
    
    $sql = "update usuarios set nome = '$nome', email = '$email', ";
    $sql.= "senha = '$senha' where id = $id";
    return mysqli_query($conexao, $sql) or die (mysqli_error ($conexao) );
}

function verificarSenha ($senhaFormulario, $senhaBanco) {
    
    
    if (password_verify($senhaFormulario, $senhaBanco)){
        
        return $senhabanco;
    } else {
        
        return codificaSenha($senhaFormulario);
    }
    
}



function excluirUsuario($conexao, $id){
    
    $sql = "delete from usuarios where id = $id" ;   
    return mysqli_query($conexao, $sql) or die (mysqli_error ($conexao) );
}
