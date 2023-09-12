<?php

	//Dados de conexão com a base de dados
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banco";

	//criar conexão com banco de dados
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	//Verificando a conexão
	if(!$conn){
		die("Falha na conexão!" . mysqli_connect_error()); 
	}

	echo "Conectando com sucesso!";

	mysqli_close($conn);
?>