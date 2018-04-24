<?php 

class A
{
	public function toto()
	{
		echo 'Je suis la méthode toto appelée depuis la classe A.';
	}
}

class B extends A
{
	public function tata()
	{
	    A::toto(); //Permet d'appeler la méthode toto situé dans la classe A dont celle ci est la classe parent de B.
		echo 'Je suis la méthode tata appelée depuis la classe B';
	}
}

$test = new B();
$test->tata();

//VOIR EXEMPLE AVEC CLASS POLICIER EXTENDS PERSONNE