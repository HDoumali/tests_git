<?php

class Cercle extends Forme
{
  private $rayon = 3;

  public function aire()
  {
  	return pi() * $this->rayon * $this->rayon;
  }
}