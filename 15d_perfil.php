<?php
session_start();

if (!isset($_SESSION["nome"]) || !isset($_SESSION["cor"])) {
    header("Location: 15d_login.php");
    exit();
}

$nome = $_SESSION["nome"];
$cor = $_SESSION["cor"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil de <?php echo htmlspecialchars($nome); ?></title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($cor); ?>;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>👋 Olá, <?php echo htmlspecialchars($nome); ?>!</h1>
    <p>Bem-vindo(a) ao seu perfil personalizado.</p>
    <a href="15d_logout.php">Sair</a>
</body>
</html>