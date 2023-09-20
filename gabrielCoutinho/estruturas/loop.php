<?php

//while
	$x=0;

	while ($x<=5) {
		echo "Numero: $x <br>";
		$x++;
	}

	echo "<br>";
	echo "<hr>";

	//do while
	$y=1;
	do {
		echo "Numero: $y <br>";
		$y++;
	} while ($y<=5);

	echo "<br>";
	echo "<hr>";

	//for

	for ($i=1; $i <=10 ; $i++) { 
		echo $i."\n";
	}

	echo "<br>";
	echo "<hr>";

	//array

	$cores=array("verde","amarelo","vermelho","azul");
	foreach ($cores as $cor) {
		echo "Cor: $cor <br>";
	}

	?>