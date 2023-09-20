<?php 
	function perimetro($r){
		$perimetro=2*pi()*$r;
		return $perimetro;
	}

	function area($r){
		$area=pi()*($r*$r);
		return $area;
	}

	function farenheit($t){
		$farenheit=($t -32) * 0.55;
		return $farenheit;
	}

	function celsius($tc){
		$celsius=($tc * 1.8) + 32;
		return $celsius;
	}

	function salario($valorHora, $quantidadeHoras){
        $sbruto = 'Salário Bruto: R$' .($valorHora * $quantidadeHoras) .'<br>';
        $irenda = 'Imposto de Renda: R$' .(($valorHora * $quantidadeHoras) * (11/100)) .'<br>';
        $inss = 'INSS: R$' .(($valorHora * $quantidadeHoras) * (8/100)) .'<br>';
        $isin = 'Imposto Sindicato: R$' .(($valorHora * $quantidadeHoras) * (5/100)) .'<br>';
        $sliquido = 'Salário Líquido: R$' .(($valorHora * $quantidadeHoras)-($valorHora * $quantidadeHoras)*(24/100)).'<br>';

        return $sbruto .$irenda .$inss .$isin .$sliquido;


    }
		
	

	

	

?>