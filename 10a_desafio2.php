<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" required><br><br>
        
        <button type="submit">Enviar</button>
    </form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Validação dos dados 
    if (empty(trim($nome))) {
        echo "<p style='color: crimson;'>Erro: O nome do produto não pode estar vazio.</p>";
    } elseif (!is_numeric($preco) || $preco <= 0) {
        echo "<p style='color: crimson;'>Erro: O preço deve ser um número positivo.</p>";
    } else {
        // Conecta ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Insere o registro no banco de dados
        $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color: crimson;'>Erro ao cadastrar produto: " . $conn->error . "</p>";
        }

        // Fecha a conexão
        $conn->close();
    }
}
?> 
</body>
</html>
