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

	function sbruto($sb){
		$sb=($hh*$qh);
		return $sb;
		
	}

	function irenda ($ir){
		$ir= $sb * 0.11;
		return $ir;
	}

	function inss($ins){
		$ins=$sb * 0.08;
		return $inss;
	}

	function isin($is){
		$is=$sb * 0.05;
		return $is;
	}

	function sliq($sl){
		$sl=$sb-($ir+$ins+$is);
		return $sl;
	}

	

?>