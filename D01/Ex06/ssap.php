#!/usr/bin/php
<?php
if($argc > 1)
{
	$out = preg_split('/\s+/', trim(implode(" ", $argv)));
	unset($out[0]);
	sort($out);
	$i = 0;
	while ($out[$i] != NULL)
	{
		echo($out[$i++]."\n");
	}
}
?>