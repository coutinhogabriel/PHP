<?php 
	$sexo='h';
	$tempo_servico=25;

	if ($sexo=='f') {
		if ($tempo_servico>=30) {
			echo ("A mulher pode se aposentar");
		} else {
			echo ("A mulher não pode se aposentar");
		}
	} else if ($sexo=='h') {
		if ($tempo_servico>=35) {
			echo ("O homem pode se aposentar");
		} else {
			echo ("O homem não pode se aposentar");
		}
	}

 ?>