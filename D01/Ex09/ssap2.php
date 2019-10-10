#!/usr/bin/php
<?php
	function hyper_cmp($in1, $in2)
	{
		$c = 0;
		$t_line = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while (($c < strlen($in1)) || ($c < strlen($in2)))
		{
			 $indx1 = stripos($t_line, $in1[$c]);
			 $indx2 = stripos($t_line, $in2[$c]);
			 if ($indx1 > $indx2)
				 return 1;
			 else if ($indx1 < $indx2)
				 return -1;
			 else
				 $c++;
		}
 	}
	if ($argc == 1)
		exit;
	 $arg = 1;
 $out = [];
 foreach ($argv as $elem)
 {
	 if ($arg++ > 1)
	 {
		 $tmp_o = preg_split("/\s+/", trim($elem));
		 if ($tmp_o[0] != "")
			 $out = array_merge($out, $tmp_o);
	 }
 }
 usort($out,"hyper_cmp");
 foreach ($out as $elem)
	 echo "$elem"."\n";
?>