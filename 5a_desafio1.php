<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade🆔</title>
</head>
<body>
    <form action="" method='post'>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> <br>

       <label for="ano">Ano de nascimento:</label>
        <input type="number" name="ano_nascimento" placeholder="AAAA"> <br>

        <!-- Botão de envio -->
         <button type="Submit">Verificar</button>
    </form>

    <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores dos inputs (No formulário)
        $nome = $_POST['nome'];
        $ano_nascimento = $_POST['ano_nascimento'];

    $idade = date('Y') - $ano_nascimento;

    if ($idade >=18) {
        echo"Acesso permitido, $nome!";

         $arquivo =fopen('log_acessos.txt', 'a');

            // Cria uma linha com nome e senha separados por ;
            $linha = $nome . ';' . $ano_nascimento . "\n";
-
            // Insere a linha criada no arquivo (usuarios.txt)
            fwrite($arquivo, $linha);

            // Fecha o arquivo
            fclose($arquivo);

    } else {
        echo"Acesso negado, $nome!";
    }
}

?>