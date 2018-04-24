<?php 
try
{
class BankAccount
{   
	const TAX = 0.08; //cette valeur est une constante et elle ne va pas changer (toujours en majuscule)
	private $accountNumber; //permet de cacher les informations
	private $balance = 0;

	public function __construct($accountNumber) // Nous souhaitons que l'attribut puisse passer au niveau du constructeur 
	{
		$this->accountNumber = $accountNumber;
	}

    Public static function getTax()
    {
    	return static::$tax;
    }
    
	public function setBalance($balance) // Setters (mutateurs) : permet de modifier un attribut
	{
		if($balance < 10000)
		{
			throw new Exception('La somme est trop faible');
		}

		$this->balance = $balance;
	}

	public function getBalance()// Getters (accesseurs) : permet d'acceder à un attribut et de gérer son affichage avant de la retourner
	{
		return $this->balance * 100;
	}

}

$compteBancaireDeHonore = new BankAccount('65485482211335');
$compteBancaireDeHonore->setBalance(50000);
var_dump($compteBancaireDeHonore->getbalance());
var_dump(BankAccount::TAX);
}


catch(Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}