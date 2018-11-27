<?php

require_once 'conexao.php';

if(isset($_POST['btn-cadastrar'])):
$nome = mysqli_escape_string($conexao, $_POST['nome']);
$sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
$idade = mysqli_escape_string($conexao, $_POST['idade']);
$email = mysqli_escape_string($conexao, $_POST['email']);
$senha = mysqli_escape_string($conexao, $_POST['senha']);
$endereco = mysqli_escape_string($conexao, $_POST['endereco']);
$complemento = mysqli_escape_string($conexao, $_POST['complemento']);
$cidade = mysqli_escape_string($conexao, $_POST['cidade']);
$estado = mysqli_escape_string($conexao, $_POST['estado']);
$cep = mysqli_escape_string($conexao, $_POST['cep']);

$sql = "INSERT INTO cadastro(nome,unome,idade,email,senha,endereco,complemento,cidade,estado,cep) VALUES ('$nome','$sobrenome','$idade','$email','$senha','$endereco','$complemento','$cidade','$estado','$cep')";

if(mysqli_query ($conexao, $sql)):
    header('Location: index.php?sucesso');
    else:
        header('Location: index.php?erro');
    endif;        

?>