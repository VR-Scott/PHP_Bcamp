<?php

class Color 
{
	//Properties and Methods go here
	public static $verbose = FALSE;
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	
	public static function doc()
	{
		print (file_get_contents("./Color.doc.txt"));
		return;
	}

	public function __construct(array $col_ar)
	{
		if (array_key_exists('red', $col_ar))
			$this->red = $col_ar['red'] % 256;
		if (array_key_exists('green', $col_ar))
			$this->green = $col_ar['green'] % 256;
		if (array_key_exists('blue', $col_ar))
			$this->blue = $col_ar['blue'] % 256;
		if (array_key_exists('rgb', $col_ar))
		{
			$this->red = ($col_ar['rgb'] >> 16) % 256;
			$this->green = ($col_ar['rgb'] >> 8) % 256;
			$this->blue = $col_ar['rgb'] % 256;
		}
		if (self::$verbose == TRUE)
			printf('Color( red: %3d, green: %3d, blue: %3d ) constructed.' . PHP_EOL, $this->red, $this->green, $this->blue);
		return;
	}

	public function __destruct()
	{
		if (self::$verbose == TRUE)
			printf('Color( red: %3d, green: %3d, blue: %3d ) destructed.' . PHP_EOL, $this->red, $this->green, $this->blue);
		return;
	}

	public function __toString()
	{
		return (sprintf( 'Color( red: %3d, green: %3d, blue: %3d )', $this->red, $this->green, $this->blue));
	}

	public function add( Color $instance )
	{
		return (new Color( array( 'red' => $this->red + $instance->red, 'green' => $this->green + $instance->green, 'blue' => $this->blue + $instance->blue)));
	}

	public function sub ( Color $instance )
	{
		return (new Color( array( 'red' => $this->red - $instance->red, 'green' => $this->green - $instance->green, 'blue' => $this->blue - $instance->blue)));
	}

	public function mult( $f )
	{
		return (new Color( array( 'red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f)));
	}
}
?>