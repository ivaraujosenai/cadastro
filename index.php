<?php
    if(isset($_GET['erro'])){
        $erro = $_GET['erro'];
        echo ("<center><font color='red'>$erro</font></center>");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main> 
        <h1>LOGIN</h1>
        <section>
            <form action="login.php" method="post" id="formlogin">
                <label for="cpf">Usuário</label>
                <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="******">
                <button type="submit" name="logar">Entrar</button>
                <nav>
                    <a href="cadastrar.php" id="btn-cadastro">Cadastrar</a>
                </nav>
            </form>
            
        </section>
    </main>
</body>
</html>