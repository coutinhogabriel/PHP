<?php
$host = "localhost"; // Endereço do servidor de banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$db = "aula16"; // Nome do banco de dados

$PicNum = $_GET["PicNum"]; // Obtém o valor do parâmetro "PicNum" da URL

// Conectar ao banco de dados usando mysqli
$conn = mysqli_connect($host, $username, $password, $db);

// Verificar a conexão
if (!$conn) {
    die("Impossível conectar ao banco: " . mysqli_connect_error());
}

$PicNum = mysqli_real_escape_string($conn, $PicNum); // Evita injeção de SQL ao escapar o valor de "PicNum"

$query = "SELECT * FROM PESSOA WHERE PES_ID='$PicNum'"; // Monta uma query SQL para selecionar um registro específico da tabela PESSOA com base no ID
$result = mysqli_query($conn, $query); // Executa a query no banco de dados

if (!$result) {
    die("Impossível executar a query: " . mysqli_error($conn)); // Verifica se a query falhou
}

if (mysqli_num_rows($result) > 0) {
    // Se houver pelo menos um registro retornado pela consulta, configure o cabeçalho HTTP para exibir uma imagem GIF

    header("Content-type: image/gif");

    // Obtém o registro retornado da consulta
    $row = mysqli_fetch_object($result);
    
    // Exibe o conteúdo da coluna PES_IMG (que contém a imagem)
    echo $row->PES_IMG;
} else {
    // Se nenhum registro for encontrado, exiba uma mensagem de erro
    echo "Imagem não encontrada.";
}

mysqli_close($conn); // Fecha a conexão com o banco de dados
?>
