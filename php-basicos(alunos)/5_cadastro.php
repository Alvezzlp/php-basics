<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <!-- Formulário de cadastro -->
    <form action="" method="post">

        <!-- Campos de nome e senha -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <!-- Botão de cadastro -->
        <button type="Submit">Cadastrar:</button>
    </form>

    <!-- Lógica de cadastro de usuário -->
     <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            // Abre/Cria arquivo (usuarios.txt) para guardar os dados. O "a" vem de append (acrescentar)
            $arquivo =fopen('usuarios.txt', 'a');

            // Cria uma linha com nome e senha separados por ;
            $linha = $nome . ';' . $senha . "\n";

            // Insere a linha criada no arquivo (usuarios.txt)
            fwrite($arquivo, $linha);

            // Fecha o arquivo
            fclose($arquivo);

            // Mensagem de confirmação (Cadastro)
            echo "<p>Usuário cadastrado com sucesso!</p>";
        }
    ?>
</body>
</html>