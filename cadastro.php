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


    //VALIDAR CPF
    function validaCPF($cpf) { 
        // Extrai somente os números
        $cpf = preg_replace( '/[.-]/is','', $cpf );
        
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;

    }

    function validateDate($date, $format = 'Y-m-d'){
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    
    // Processamento do upload da foto
    $foto = $_FILES['foto'];
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


//VALIDAR REGISTROS
    if($foto == "" or $nome == "" or $cpf =="" or $endereco == "" or $estado == "" or $data_nasc == "" or $sexo == "" or $senha == "" or $areas == ""){
        echo ("Preencha todos os campos!");       
        header("Location: cadastrar.php");           
    }
    else{
        $vali_cpf = validaCPF($cpf);
        if($vali_cpf == true){            
            $validate = validateDate($data_nasc);
            if($validate == false){
                echo "Data inválida";
            }
            else{
                $conexao->query("INSERT INTO clientes SET foto = '$nome_foto' , nome = '$nome', cpf = '$cpf', endereco = '$endereco', estado = '$estado', data_nasc = '$data_nasc', sexo = '$sexo', senha = '$senha', areas = '$areas'");
                header("Location: cadastrar.php");
            }
        }
        else{
            echo ("CPF inválido!");
        }        
        //echo "";       
    }

}