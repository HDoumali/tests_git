<?php 

class Triangle extends Forme //Redéfinition de la méthode car la classe parent "forme" utilise la méthode pour calculer l'aire d'un carre.
{
  private $base = 4;
  private $hauteur = 2;

  public function aire()
  {
  	return ($this->base * $this->hauteur)/2;
  }

}