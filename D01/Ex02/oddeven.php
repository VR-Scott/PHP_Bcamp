#!/usr/bin/php
<?php
while(1)
{
	echo"Enter a number: ";
	$n=trim(fgets(STDIN));
	if (FEOF(STDIN))
	{
		echo("\n");
		break;
	}
	if (is_numeric($n))
	{
		if (!bcmod($n, 2))
			echo("The number ".$n." is even\n");
		else
			echo("The number ".$n." is odd\n");
	}
	else
		echo("'".$n."' is not a number\n");
}
?>