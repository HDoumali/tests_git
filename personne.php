<?php 

class Personne 
{   //ATTRIBUT 
	public $firstName; // Variable d'instance
	public $lastName;
	public $age;
	protected static $totalCount = 0; // variable static (affilié simplement à la classe) qui permet de savoir combien d'objet Personne ont été crées.


    //METHODES
	public function __construct($firstName, $lastName, $age) // Le constructeur de la classe
	{
      $this->firstName = $firstName; //this = appel moi l'attribut firstName qui recois la variable $firstName.
      $this->lastName = $lastName; 
      $this->age = $age;

      static::$totalCount++; // autres facon de l'écrire : static::$totalCount += 1; OU static::$totalCount = static::$totalCount + 1
	}

	public static function getTotalCount()
	{
		return static::$totalCount;
	}

	public function fullName() // Une méthode
	{
		return $this->firstName . ' ' . $this->lastName;
	}

	public function getAge()
	{
		return $this->age * 365;
	}
}

$honore = new Personne('Honore', 'Hounwanou', 156); // Un objet
$toto = new Personne('Toto', 'Dupont', 56);


echo $honore->firstName;
echo $honore->lastName;
echo $honore->age . '<br />';


echo $toto->firstName;
echo $toto->lastName;
echo $toto->age . '<br />';

$nomCompletHonore = $honore->fullName();
$nomCompletToto = $toto->fullName();

echo $nomCompletHonore;
echo $nomCompletToto;

echo $honore->getAge() . '<br />';

echo Personne::getTotalCount(); // :: = Opérateur de Résolution de Portée.




// La notion d'abstraction : se focaliser sur ce qui est important et non les détails