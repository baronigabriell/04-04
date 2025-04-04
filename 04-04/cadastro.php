<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro do cliente</h1>
    <form action="gravar.php" method="post">
        <label>Nome</label>
        <br>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do cliente">
        <br>
        <label>CPF</label>
        <br>
        <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF do cliente">
        <br>
        <label>Telefone</label>
        <br>
        <input type="text" id="telefone" name="telefone" placeholder="Digite o telefone do cliente">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
        <br>
    </form>
    <a href="index.php">
        <button>Voltar para página inicial</button>
    </a>
</body>
<style>
    a{
        text-decoration: none;
    }
</style>
</html>