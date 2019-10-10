#!/usr/bin/php
<?php
if($argc > 1)
{
	$out = preg_split('/\s+/', $argv[1]);
	$i = 1;
	while ($out[$i])
	{
		echo($out[$i++]." ");
	}
	echo($out[0]."\n");
}
?>