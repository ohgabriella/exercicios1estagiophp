<?php
	
	$baseMaior= $_POST['baseMaior'];
	$baseMenor= $_POST['baseMenor'];
	$altura = $_POST['altura'];
	
	$areaTrapezio = (($baseMaior + $baseMenor) * $altura)/2;
	
	echo "A área do trapézio será " .$areaTrapezio;
	
?>

