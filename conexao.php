<?php

$servidor = '127.0.0.1:3309';
$usuario = 'root';
$senha = '';
$banco = 'cadastros';


$conexao = mysqli_connect($servidor,$usuario,$senha);
$select = mysqli_select_db($conexao,$banco);

if($conexao->connect_errno){
    echo ("Falha ao conectar:(".$mysqli->connect_errno.")".$mysqli->connect_error);
}