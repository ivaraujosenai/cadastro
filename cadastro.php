<?php

include('conexao.php');

if(isset($_POST['nome'])){
        
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];
    $areas = $_POST['areas'];
    
    // Processamento do upload da foto
    $foto = $_FILES['txtFoto'];
    $nome_foto = $foto["name"];
    $pasta = 'C:/xampp/htdocs/aula27032025/imagens/';
    $destino = $pasta . $nome_foto;
    if($foto['error'] != 0){
        echo "Erro no upload";
    }
    $res = move_uploaded_file($foto['tmp_name'], $destino);
    if(!$res){
        echo ("Falha a carregar imagem!");
    }    

    if($foto == "" or $nome == "" or $cpf =="" or $endereco == "" or $estado == "" or $data_nasc == "" or $sexo == "" or $senha == "" or $areas == ""){
        echo ("Preencha todos os campos!");       
        //header("Location: cadastrar.php");           
    }
    else{ 
        $conexao->query("INSERT INTO clientes SET foto = '$nome_foto' , nome = '$nome', cpf = '$cpf', endereco = '$endereco', estado = '$estado', data_nasc = '$data_nasc', sexo = '$sexo', senha = '$senha', areas = '$areas'");
            //header("Location: cadastrar.php");
        echo "<IMG src='img/".$foto['name']."'>";       
    }
    
}