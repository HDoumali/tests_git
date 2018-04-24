<?php 

class Policier extends Personne
{
	private $grade;

   public function __construct($firstName, $lastName, $age, $grade)
   {

   	parent::__construct($firstName, $lastName, $age); // Meme cas pour le constructeur en cas d'ajout d'un attribut.
    $this->grade = $grade; 
   }

   public function fullName()
   {
   	return parent::fullName() . ', Policier, ' . $this->grade; //Utilisation du mot clé "parent" permettant d'appeler la méthode fullName de la classe Personne (classe Parent) et lui rajouter ', policier'.
   }
}