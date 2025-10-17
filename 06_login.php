<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form action="" method='post'>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> <br> <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required> <br> <br>
        <br>
        <button type="Submit">Entrar</button> 
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            // Abrir o arquivo usuarios.txt para leitura
            $arquivo = fopen('usuarios.txt', 'r');
            $login_sucesso = false;

            // Ler cada linha do arquivo
            while (($linha = fgets($arquivo)) !== false) {
                // Divide a linha pelo delimitador ";"
                list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

                // Verifica se o nome e a senha correspondem aos valores no arquivo
                if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                    $login_sucesso = true;
                    break; // Interromper o laço. Usuário localizado no arquivo
                }
            }

            // Fecha o arquivo
            fclose($arquivo);

            // Exibe a mensagem de sucesso ou erro
            if ($login_sucesso) {
                echo "<p style='color: green;'>Login realizado com sucesso! Bem-vindo(a), $nome!<p>";
            } else {
                echo "<p style='color: crimson;'>Usuário ou senha incorretos.</p>";
            }
        } 
    ?>
</body>
</html>