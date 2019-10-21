<?php

class Tyrion extends Lannister
{
	public function with($person)
	{
		if (get_parent_class($person) === "Lannister")
			return "Not even if I'm drunk!";
		else
			return "Let's do this.";
	}
}