<?php
include('conexao.php');
if(isset($_POST['logar'])){
    $login = $_POST['cpf'];
    $senha = $_POST['senha'];

    $busca = $conexao->query("SELECT * FROM clientes WHERE cpf = '$login' AND senha = '$senha'");

    if($dado = mysqli_fetch_array($busca)){
        $nome = $dado['nome'];

        session_start();
        $_SESSION["login"] = $login;
        $_SESSION["nome"] = $nome;

        header("Location:listar.php");
    }
    else{
        header("Location:index.php?erro=Login inválido.");
    }
}