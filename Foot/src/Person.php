<?php 

namespace Acme;

class Person 
{
	private $name;

	public function __construct($name) // l'antislash permet de dire que la class Song est situé dans le Namespace global.
	{
		$this->name = $name;
	}

	public function favorite(Team $team)
	{
		$team->favorite();
	}
}
