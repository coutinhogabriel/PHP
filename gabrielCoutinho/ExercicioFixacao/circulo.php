<?php 
	include "operacoes.php";

	$r=$_POST['raio'];
	echo "O perímetro é: ".perimetro($r)."<br><br>";
	echo "A área é: ".area($r)."<br><br><hr>";

 ?>