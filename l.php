<?php
	$num=$_POST['num'];
	$contador=1;
	$cont2=2;
	do{
	$result=$contador+$cont2;
	echo("{$contador}+{$cont2}:{$result}<br>");
	$contador++;
	$cont2++;
	}while($contador+$cont2<=$num);
	?>
	