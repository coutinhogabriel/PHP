<?php
	include "funcoes.php";

	$hh=$_POST['homemHora'];
	$qh=$_POST['quantidadeHora'];
	echo("O salário bruto é de R$ ".sbruto($sb). "<br>");
	echo("O desconto do IR foi de R$ ".irenda($ir)."<br>");
	echo("O desconto do INSS foi de R$ ".inss($ins). "<br>");
	echo("O desconto do sindicato foi de R$ ".isin($is). "<br>");
	echo("Seu salário líquido é de R$ ".sliq($sl). "<br>");

?>