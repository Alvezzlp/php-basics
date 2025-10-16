<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Recebe a senha
        $senha = $_POST['senha'];

        // Verifica se a senha é: 123
        if ($senha == '123') {
            // Se usuário digitar a senha correta (123) ele será desviado para página 4b_bem_vindo.php
            header("Location: 4b_bem_vindo.php");
            exit();
        } else {
            // Se usuário digitar a senha incorreta ele verá a mensagem de erro
            $erro = 'Senha incorreta. Tente novamente!';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>
    
    <h1>Digite a senha para continuar</h1>

    <form action="" method='post'>
        <!-- Campos da senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required> <br> <br>

        <!-- Botão de entrada -->
        <button type="Submit">Entrar</button>

    </form>

    <?php
    // Se senha errada exibe a mensagem em vermelho
        if(isset($erro)) {
            echo"<p style='color: crimson';>$erro</p>";
        }
    ?>