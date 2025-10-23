<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cdastro de Clientes</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <button type="submit">Cadastrar</button>
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviado pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Conecta ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha a conexão: " . $conn->connect_error);
    }

    // Insere o registro no banco de dados
    $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Cliente cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color: crimson;'>Erro ao cadastrar: " . $conn->error . "</p>";
    }

    // Fecha a conexão
    $conn->close();
}
?> 
</body>
</html>