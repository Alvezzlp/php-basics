<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    
    <form action="" method='post'>
        <!-- Campos de entrada -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required> <br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required> <br>

        <!-- Botão de envio -->
        <button type="Submit">Enviar</button>

    </form>

    <?php
        // $_SERVER variável superglobal que guarda informações do servidor e o tipo de requisição feita
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores do input (No formulário)
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            // Exibe os valores na página
            echo "<h2> Dados recebidos:</h2>";
            echo "Nome: $nome <br>";
            echo "Email: $email <br>";
            echo "Telefone: $telefone <br>";


        }
    ?>

</body>
</html>