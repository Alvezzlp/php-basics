<?php
// Página de logout (15c_logou.php)
session_start();
session_destroy(); // Destroi a sessão do usuário
header("Location: 15a_sistema.php");
exit();
?>