<?php

abstract class Forme //Une classe abstraite est une classe que l'on peut pas instancier, c'est à dire ne peut pas avoir d'objet.(Par exemple une forme est quelque chose d'abstrait)
{
   abstract public function aire(); //Une méthode abstraite n'est pas censé avoir de contenu.Elle sera définie au niveau des classes filles. Dans notre exemple, la méthode aire() oblige les classes filles à avoir une méthode aire(). Une classe abstraite doit obligatoirement se trouver dans une classe abstraire.
}