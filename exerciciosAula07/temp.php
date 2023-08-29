<?php
	include "funcoes.php";

	$t=$_POST['farenheit'];
	echo "A temperatura em graus celsius é: ".farenheit($t) ."<br>";
	
	 $tc=$_POST['celsius'];
	 echo "A temperatura em farenheit é: ".celsius($tc) . "<br><hr>";
	
?>