<?php
include('conexao.php');

if(isset($_POST['atualizar'])){}

if(isset($_POST['apagar'])){
    $id = $_POST['id'];

    $conexao->query("DELETE FROM clientes WHERE id = $id");
    header('Location: listar.php');
}