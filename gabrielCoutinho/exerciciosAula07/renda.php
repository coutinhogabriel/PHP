<?php
	include "funcoes.php";

	$valorHora=$_POST['valorHora'];
	$quantidadeHoras=$_POST['quantidadeHora'];
	echo salario($valorHora,$quantidadeHoras);
	

?>