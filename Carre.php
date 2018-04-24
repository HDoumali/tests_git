<?php

class Carre extends Forme 
{
	 private $cote = 0;

    function __construct($cote)
    {
    	$this->cote = $cote;
    }
    
    
	public function aire()
	{
		return $this->cote * $this->cote; // Supposons que c'est l'air d'un carre que nous utilisons le plus. 
	}
}