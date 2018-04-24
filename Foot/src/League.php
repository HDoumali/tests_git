<?php 

namespace Acme;

class League 
{
	private $name; 
	private $teams;

	public function __construct($name)
	{
		$this->name = $name;
		$this->teams = []; // private $teams = [];
	}

	public function addTeam(Team $team) // "Team" devant la variable permet de faire passer obligatoirement un objet de la classe Team et éviter à l'utilisateur de passe une chaine de caractère ou autres. 
	{
	    $this->teams[] = $team; // Méthode permettant d'ajouter une équipe dans un tableau.
	}

	public function getTeamCount()
	{
		return count($this->teams); //Méthode permettant de compter le nombre d'équipe dans le tableau.
	}

}
