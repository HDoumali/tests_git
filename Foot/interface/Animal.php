<?php 

interface Animal //Une interface est quelque part une class 100% abstraite. en comparaison avec la classe abstraite, celle-ci ne peut avoir que des fonctions abstraites. elle ne peut pas également avoir d'attribut ni de constructeur.
{
	public function communiquer(); //Nous avons pas besoin dans une interface de mentionner abstract au début de la fonction car l'interface la transforme automatiquement.
}

//Quand utiliser une classe abstraite ou une interface : 

// Quand une classe est associé à une classe abstraite il s'agit d'une relation forte, exemple : la classe carré est associé à la classe Forme, il s'agit d'une relation forte car un carré est une forme. Donc dans ces cas il faut utiliser les classes abstraites (autres exemples : chien associé à animal)

//Une interface est plus souvent utilisé pour associé des comportements. Par exemple une interface Clickable qui implements une classe Button qui permet de cliquer sur le bouton ou une classe Image permettant de dire que l'image est également cliquable. Il s'agit d'un comportement.

//Ce qui est interressant avec l'interface également, c'est que une classe peut implémenter plusieurs interface , exemple : class Cercle extends Forme implements Animal, Clickable