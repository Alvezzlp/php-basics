<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de validação</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        // Valida se os campos não estão vazios e o email é válido
        if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mensagem)) {
            echo "<p style='color: green;'>Feedback enviado com sucesso!</p>";
        } else {
            echo "<p style='color: crimson;'>Por favor, preencha todos os campos corretamente.</p>";
        }
    }
    ?>  
</body>
</html>