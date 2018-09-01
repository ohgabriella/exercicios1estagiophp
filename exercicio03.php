<?php
	
	$salario= $_POST['salario'];
	$vendas= $_POST['vendas'];
	
	$comissao = $vendas * 0.04;
	$resultado = $salario + $comissao;
	
	echo "O funcionário recebe uma comissão de ".$comissao, " e o seu salário final será " .$resultado;
	
?>

