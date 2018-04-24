<?php 

class A
{
	protected static $attribut1 = 8; //Protected : permet d'accéder à l'attribut dans la classe courante mais également dans les classes filles.

	public function methode1()
    {
    	echo static::$attribut1;
    }
}

class B extends A
{
	public function methode1()
	{
	    parent::methode1();
	}
}

(new B)->methode1();