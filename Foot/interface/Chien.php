<?php

class Chien implements Animal //La classe Chien va implémenter l'interface animal, donc signature du contrat et devra avoir obligatoirement les fonctions énumérées dans l'interface Animal.
{
   public function communiquer()
   {
   	echo 'wowowo';
   }
}