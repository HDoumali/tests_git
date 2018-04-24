<?php 

class Enfant extends Papa //Classe enfant hérite de la classe Papa
{
  public function toto()
  {
  	return parent::getNombreDeTetes(); // ou $this-> quand il y a pas deux fois le meme nom de méthode.
  }

}