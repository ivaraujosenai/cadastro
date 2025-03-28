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
        <nav>
            <a href="index.php">Voltar</a>
        </nav>
        <h1>CADASTRAR</h1>
        <section>
            <form action="cadastro.php" method="post" enctype="multipart/form-data">
                <label for="">FOTO</label>
                <input type="file" name="foto">
                <label for="">NOME</label>
                <input type="text" name="nome" id="nome">
                <label for="">CPF</label>
                <input type="text" name="cpf" id="cpf">
                <label for="">ENDEREÇO</label>
                <input type="text" name="endereco" id="endereco">
                <label for="">ESTADO</label>
                <select name="estado" id="estado">
                    <option>Selecione o estado...</option>
                    <option value="BA">Bahia</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="MG">Minhas Gerais</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                </select>
                <label for="">DATA DE NASCIMENTO</label>
                <input type="date" name="data_nasc" id="data_nasc">                
                <div>                    
                    <input type="radio" name="sexo" id="m" value="M">
                    <label for="m">MASCULINO</label>                    
                    <input type="radio" name="sexo" id="f" value="F">
                    <label for="f">FEMININO</label> 
                </div>                   
                <label for="">SENHA</label>
                <input type="password" name="senha" id="senha">
                <label for="">ÁREAS DE INTERESSE</label>
                <textarea name="areas" id="areas"></textarea>
                <button type="submit">Cadastrar</button>
            </form>
        </section>
    </main>
</body>
</html>