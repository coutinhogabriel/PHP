<?php
	include "funcao.php";

	$x=$_POST['a'];
	$y=$_POST['b'];
	echo "Soma entre eles: ".adicao($x,$y)."<br>";
	echo "subtracao entre eles: ".subtracao($x,$y)."<br>";
	echo "multiplicacao entre eles: ".multi($x,$y)."<br>";
	echo "O primeiro numero elevado ao segundo: ".potencia($x,$y)."<br>";


?>