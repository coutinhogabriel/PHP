<?php 

	$n1 = 10;
	$n2 = 8;
	$n3 = 5;
	$n4 = 6;

	$media=($n1+$n2+$n3+$n4)/4;

	if ($media>=7) {
		echo "Aluno aprovado, média $media";
	} elseif ($media>=5) {
		echo "Aluno irá para o exame, média $media";
	} elseif ($media<5) {
		echo "Aluno reprovado, média $media";
	}

 ?>