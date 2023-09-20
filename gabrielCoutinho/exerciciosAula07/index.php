<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercicios de fixação</title>
</head>
<body>
	<form action="circulo.php" method="post">
		<h1>Exercicio 01:</h1> <br>
		Digite o raio do círculo: <input type="text" name="raio" placeholder="Valor do Raio">
		<input type="submit" value="Enviar">
	</form>
	<form action="temp.php" method="post">
		<h1>Exercicio 02:</h1> <br>
		Digite a temperatura em graus Farenheit: <input type="text" name="farenheit" placeholder="Graus Farenheit"> <br>

		Digite a temperatura em graus Celsius: <input type="text" name="celsius" placeholder="Graus Celsius"> <br>

		<input type="submit" name="Enviar">
	</form>

		<form action="renda.php" method="post">
			<h1>Exercicio 03:</h1><br>
			Digite o valor recebido por hora trabalhada: <input type="text" name="valorHora" placeholder="Valor da hora trabalhada"> <br>

			Digite o número de horas trabalhadas no mês: <input type="text" name="quantidadeHora" placeholder="Quantidade de horas trabalhadas"> <br>

			<input type="submit" name="Enviar">
		</form>
</html>