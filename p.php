<?php
	$num=$_POST['num'];
	$contador=1;
	$contador2=1;
	do{
	$result=$contador+$contador2;
	$ver=($result%2==0)?"par":"impar";
	echo("{$contador}+{$contador2}:{$result} é {$ver}<br>");
	$contador++;
	}while($result<=$num);
	?>