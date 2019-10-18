<?php

require_once 'Color.class.php';

class Vertex 
{
	//Properties and Methods go here
	public static $verbose = FALSE;
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	
	public static function doc()
	{
		print (file_get_contents("./Vertex.doc.txt")."\n");
		return;
	}

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
	public function getColor() { return $this->_color; }

	public function setX( $nb )
	{
		$this->_x = $nb;
		return;
	}

	public function setY( $nb )
	{
		$this->_y = $nb;
		return;
	}

	public function setZ( $nb )
	{
		$this->_z = $nb;
		return;
	}

	public function setW( $nb )
	{
		$this->_w = $nb;
		return;
	}

	public function setColor( Color $Color )
	{
		$this->_color = $Color;
		return;
	}

	public function __construct(array $args)
	{
		if (!array_key_exists('x', $args) || !array_key_exists('y', $args) || !array_key_exists('z', $args))
			return;
		// echo "X is : ".$args['x']."\t";
		$this->setX($args['x']);
		// echo "X is : ".$this->_x."\n";
		$this->setY($args['y']);
		$this->setZ($args['z']);

		if (array_key_exists('w', $args))
			$this->setW($args['w']);
		if (array_key_exists('color', $args))
			$this->setColor($args['color']);
		else
			$this->setColor( new Color( array('red' => 255, 'green' => 255, 'blue' => 255)));

		if (self::$verbose == TRUE)
			printf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s ) constructed' . PHP_EOL, $this->getX(), $this->getY(), $this->getZ(), $this->getW(), $this->getColor());
		return;
	}

	public function __destruct()
	{
		if (self::$verbose == TRUE)
			printf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s ) destructed' . PHP_EOL, $this->getX(), $this->getY(), $this->getZ(), $this->getW(), $this->getColor());
		return;
	}

	public function __toString()
	{
		if (self::$verbose == TRUE)
			return (sprintf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s )', $this->getX(), $this->getY(), $this->getZ(), $this->getW(), $this->getColor()));
		else
			return (sprintf('Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )', $this->getX(), $this->getY(), $this->getZ(), $this->getW()));
	}

	public function add( Vertex $instance )
	{
		return (new Vertex( array( 'x' => $this->getX() + $instance->getX(), 'y' => $this->getY() + $instance->getY(), 'z' => $this->getZ() + $instance->getZ(), 'w' => $this->getW() + $instance->getW(), 'color' => $this->getColor()->add($instance->getColor() ))));
	}

	public function sub( Vertex $instance )
	{
		return (new Vertex( array( 'x' => $this->getX() - $instance->getX(), 'y' => $this->getY() - $instance->getY(), 'z' => $this->getZ() - $instance->getZ(), 'w' => $this->getW() - $instance->getW(), 'color' => $this->getColor()->sub($instance->getColor() ))));
	}

	public function mult( $f )
	{
		return (new Vertex( array( 'x' => $this->getX() * $f->getX(), 'y' => $this->getY() * $f->getY(), 'z' => $this->getZ() * $f->getZ(), 'w' => $this->getW() * $f->getW(), 'color' => $this->getColor()->mult($f))));
	}
}
?>