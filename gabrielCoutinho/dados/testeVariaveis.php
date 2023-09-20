<?php
//string
$str = "Teste de execução php.<br>" ;
var_dump($str);

if(is_string($str)):
		echo "É uma variável string";
else:
		echo "Não é uma variavel string";
endif;
echo "<br>";
echo "<hr>";

//int
$num = 12;
var_dump($num);

echo "<br>";
echo "<hr>";

if(is_int($num)):
		echo "É uma variável int";
else:
		echo "Não é uma variavel int";
endif;
echo "<br>";
echo "<hr>";

//ponto flutuante - float - double
$real=2.75;
var_dump($real);
if(is_float($real)):
		echo "É uma variável float";
else:
		echo "Não é uma variavel float";
endif;
echo "<br>";
echo "<hr>";

//objeto
class Alunos{

	public $nome;
	public function nomeAluno($nome){
		$this->$nome=$nome;
	}
}
$aluno = new Alunos();
$aluno->nomeAluno("Joao");
var_dump($aluno);
if(is_object($aluno)):
		echo "É um objeto";
else:
		echo "Não é um objeto";
endif;
echo "<br>";
echo "<hr>";

//Null
$saldo=null;
var_dump($saldo);
if(is_null($saldo)):
		echo "É uma variável nula";
else:
		echo "Não é uma variavel nula";
endif;

?>