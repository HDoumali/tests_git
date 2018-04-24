<?php 

class A 
{
	public static function who()
	{
		echo __CLASS__; //permet d'afficher le nom de la classe (ici "A" sera affiché)
	}

	public static function test()
	{
		echo self::who() . '<br />'; // self permet de faire référence à la classe courante 
		static::who(); //Static va lui tout dabord regarder la classe qui est executé (celle qui est appelé) pour l'associer à la méthode
	}
}

class B extends A
{
	public static function who()
	{
		echo __CLASS__;
	}
}


B::test();