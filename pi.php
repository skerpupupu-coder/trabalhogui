<?php
	$numero=$_POST['num'];
	$contador=1;
	do{
	$conta=$contador*$numero;
	echo "{$contador }X{$numero} = {$conta}<br>";
	$contador++;
	}while($contador<=10);
	?>