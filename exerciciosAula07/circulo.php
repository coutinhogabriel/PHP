<?php 
	include "funcoes.php";

	$r=$_POST['raio'];
	echo "O perímetro é: ".perimetro($r)."<br>";
	echo "A área é: ".area($r)."<br><hr>";

 ?>