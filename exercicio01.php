<?php

	$n= $_POST['n'];
	
	if($n < 0)
		echo "o número é negativo.";
	elseif($n > 0)
		echo "o número é positivo.";
	else 
		echo "número incorreto.";
?>

