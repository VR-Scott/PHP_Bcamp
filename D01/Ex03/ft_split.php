
<?php
	function	ft_split($s)
	{
		$out=preg_split('/\s+/', $s);
		$srt = sort($out);
		return ($out);
	}
?>