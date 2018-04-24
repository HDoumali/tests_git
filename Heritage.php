<?php 
require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';
require 'Papa.php';
require 'Enfant.php'; 
require 'personne.php';
require 'Policier.php';

$enfant = new Enfant();
echo $enfant->toto() . '<br />';

$aireCarre = new Carre(4);
echo $aireCarre->aire() . '<br />';

$aireCercle = new Cercle();
echo $aireCercle->aire() . '<br />';

$policier = new Policier('Hassan', 'Doumali', 156, 'Sergent');
echo $policier->fullName() . '<br />';

class Boom 
{
	public function test($forme)
	{
		echo $forme->aire();
	}
}

$Boom = new Boom;
$airCercle = new Cercle;
$Boom->test($airCercle);
