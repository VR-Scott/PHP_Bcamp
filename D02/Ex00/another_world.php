#!/usr/bin/php
<?php
if ($argc > 1)
{
	$out = trim(preg_replace('/\s+/', ' ', $argv[1]));
	echo"$out\n";
}
?>