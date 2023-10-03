<?php
$host = "localhost"; // Endereço do servidor de banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$db = "aula16"; // Nome do banco de dados

// Conectar ao banco de dados usando mysqli
$conn = mysqli_connect($host, $username, $password, $db);

// Verificar a conexão
if (!$conn) {
    die("Impossível conectar ao banco: " . mysqli_connect_error());
}

$query = "SELECT * FROM PESSOA"; // Monta uma query SQL para selecionar todos os registros da tabela PESSOA
$result = mysqli_query($conn, $query); // Executa a query no banco de dados

if (!$result) {
    die("Impossível executar a query: " . mysqli_error($conn)); // Verifica se a query falhou
}

while ($row = mysqli_fetch_object($result)) {
    echo "<hr>"; // Imprime uma linha horizontal como separador entre os registros
    echo "<img src='getImagem.php?PicNum={$row->PES_ID}' style='height: 100px; margin: 10px;'>"; // Exibe a imagem associada ao registro
}

mysqli_close($conn); // Fecha a conexão com o banco de dados
?>
