<?php
    include('validar.php');
    $login = $_SESSION["nome"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body>    
    <main>
        <nav>
            <h1>Seja bem-vindo, <span><?php echo $login ?></span></h1>
            <a href="logout.php">Sair</a>
        </nav>
        <h1>CADASTRADOS</h1>
        <section id="lista">
            <?php 
                include('conexao.php');

                $busca = $conexao->query("SELECT * FROM clientes");
                
                while($dados = mysqli_fetch_array($busca,MYSQLI_ASSOC)){
            ?>            
                <div class="container-lista">
                    <div class="container-foto-perfil">
                        <div class="campos"><?php echo "<img height=120 width=120 src='imagens/".$dados['foto']."' id='foto-perfil'>";?></div>
                    </div>                    
                    <div id="container-dados">
                        <div class="campos dados"><p>NOME: </p><?php echo $dados['nome'];?></div>
                        <div class="campos dados"><p>CPF: </p><?php echo $dados['cpf'];?></div>
                        <div class="campos dados"><p>ENDEREÇO: </p><?php echo $dados['endereco'];?></div>
                        <div class="campos dados"><p>ESTADO: </p><?php echo $dados['estado'];?></div>
                        <div class="campos dados"><p>DATA DE NASCIMENTO: </p><?php echo $dados['data_nasc'];?></div>                    
                        <div class="campos dados"><p>SEXO: </p><?php echo $dados['sexo'];?></div>
                        <div class="campos dados"><p>SENHA: </p><?php echo $dados['senha'];?></div>
                        <div class="campos dados"><p>ÁREAS DE INTERESSE: </p><?php echo $dados['areas'];?></div>
                    </div>
                    <div id="container-btn-lista">
                        <form action="editar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                            <button type="submit" name="editar" id="editar">Editar</button>
                        </form>
                        <form action="acoes.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                            <button type="submit" name="apagar" id="apagar">Apagar</button>
                        </form>
                    </div>
                </div>
                
            <?php } ?>
                        
        </section>
    </main>
</body>
</html>