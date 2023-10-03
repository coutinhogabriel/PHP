<?php

$imagem = $_FILES["imagem"]; // Obtém os dados da imagem enviada via formulário
$host = "localhost"; // Endereço do servidor de banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$db = "Aula16"; // Nome do banco de dados

if ($imagem != null && $imagem['error'] == 0) { // Verifica se uma imagem foi enviada sem erros
    $nomeFinal = time() . '.jpg'; // Cria um nome único para a imagem usando o timestamp
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) { // Move a imagem para o destino final
        $conexao = mysqli_connect($host, $username, $password, $db); // Conecta-se ao banco de dados

        if (!$conexao) {
            die("Impossível Conectar: " . mysqli_connect_error()); // Verifica se a conexão falhou
        }

        $tamanhoImg = filesize($nomeFinal); // Obtém o tamanho da imagem em bytes
        $mysqlImg = addslashes(file_get_contents($nomeFinal)); // Lê o conteúdo da imagem e adiciona escapes para o MySQL

        $query = "INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')"; // Monta uma query SQL para inserir a imagem no banco de dados

        if (mysqli_query($conexao, $query)) { // Executa a query de inserção
            unlink($nomeFinal); // Remove o arquivo temporário da imagem
            header("location: exibir.php"); // Redireciona para outra página após o upload bem-sucedido
        } else {
            echo "O sistema não foi capaz de executar a query: " . mysqli_error($conexao); // Exibe uma mensagem de erro caso a query falhe
        }

        mysqli_close($conexao); // Fecha a conexão com o banco de dados
    } else {
        echo "Falha ao mover o arquivo para o destino final."; // Exibe uma mensagem de erro se a movimentação do arquivo falhar
    }
} else {
    echo "Você não realizou o upload de forma satisfatória."; // Exibe uma mensagem de erro se o upload não for bem-sucedido
}

?>
