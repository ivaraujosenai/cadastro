<?php
    include('validar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>        
        <h1>EDITAR</h1>
        <section>                        
            <form action="acoes.php" method="post" enctype="multipart/form-data">
                <nav>
                    <a href="listar.php">Voltar</a>
                </nav>
                <?php 
                    include('conexao.php');

                    if(isset($_POST['editar'])){
                        $id = $_POST['id'];
                        $busca = $conexao->query("SELECT * FROM clientes WHERE id = $id");
                    
                        while($dados = mysqli_fetch_array($busca,MYSQLI_ASSOC)){
                ?>
                                
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                <label for="">FOTO</label>
                <input type="file" name="foto">
                <label for="">NOME</label>
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="">CPF</label>
                <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf'];?>">
                <label for="">ENDEREÇO</label>
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>">
                <label for="">ESTADO</label>
                <select name="estado" id="estado">
                    <option value="<?php echo $dados['estado'];?>"><?php echo $dados['estado'];?></option>
                    <option value="BA">Bahia</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="MG">Minhas Gerais</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                </select>
                <label for="">DATA DE NASCIMENTO</label>
                <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $dados['data_nasc'];?>">                
                <div>
                    <?php
                        if($dados['sexo'] == 'M'){                        
                    ?>
                        <input type="radio" name="sexo" id="m" value="M" checked>
                        <label for="m">MASCULINO</label>
                        <input type="radio" name="sexo" id="f" value="F">
                        <label for="f">FEMININO</label>                    
                     <?php }
                     else{
                     ?>
                        <input type="radio" name="sexo" id="m" value="M">
                        <label for="m">MASCULINO</label>
                        <input type="radio" name="sexo" id="f" value="F" checked>
                        <label for="f">FEMININO</label>
                    <?php } ?> 
                </div>                   
                <label for="">SENHA</label>
                <input type="password" name="senha" id="senha" value="<?php echo $dados['senha'];?>">
                <label for="">ÁREAS DE INTERESSE</label>
                <textarea name="areas" id="areas"><?php echo $dados['areas'];?></textarea>
                <button type="submit" name="atualizar">Atualizar</button>
                <?php }} ?>
            </form>
        </section>
    </main>
</body>
</html>