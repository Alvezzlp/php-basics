<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["cor"] = $_POST["cor"];
    header("Location: 15d_perfil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Perfil Personalizado</title>
</head>
<body>
    <h2>Crie seu perfil</h2>
    <form method="post" action="">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Cor favorita:</label><br>
        <select name="cor" required>
            <option value="lightblue">Azul Claro</option>
            <option value="lightgreen">Verde Claro</option>
            <option value="lightpink">Rosa Claro</option>
            <option value="lightyellow">Amarelo Claro</option>
            <option value="lavender">Lilás</option>
        </select><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>