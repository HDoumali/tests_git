<?php 



//require 'src/Person.php';
//require 'src/Team.php';
//require 'src/League.php';

//OU

//use Acme\Person; //Permet d'éviter de répéter Acme\nom de la classe quand on crée un objet, par exemple : $hassan = new Acme/Person(); (nous allons mettre .... = new Person();)
//use Acme\Team;
//use Acme\League;

//OU directement en ajoutant Acme\.
    (new Image)->like();
    (new Video)->dislike();

    (new Chien)->communiquer();
    (new Chat)->communiquer();

    function toto(Animal $animal)
    {
        $animal->communiquer();
    }

    toto(new chat);
    toto(new chien);

    echo random_number() . '<br />';

    new Song;
   
    $hassan = new Acme\Person('Hassan Doumali');
    $pierre = new Acme\Person('Pierre Dubuc');

  
    $barcelona = new Acme\Team('Barcelona');
    $realMadrid = new Acme\Team('Real Madrid');

    $hassan->favorite($barcelona);
    $pierre->favorite($realMadrid);
    $pierre->favorite($barcelona);

    echo $barcelona->getName() . ' a ' . $barcelona->getNombreFans() . ' fans.<br />';
    echo $realMadrid->getName() . ' a ' . $realMadrid->getNombreFans() . ' fans.<br />';

    $liga =new Acme\League('Liga'); 

    $liga->addTeam($barcelona);
    $liga->addTeam($realMadrid);
    echo $liga->getTeamCount();

//Tout ce qui ce trouve dans le dossier "src" est mis sur le namespace Acme et cela évite d'appeler les classe à chaque fois.

//ETAPE permettant l'autoloading : 
    
//1) Crée un fichier composer.json dans le dossier du projet 
//2) Taper composer install dans la ligne de commande (lien du projet) afin que composer puisse générer à ce niveau la son dossier "vendor" et les fichiers nqui vont servir pour l'autoloading 
//3) Rajouter la convention sur le fichier composer.json pour l'autoloading en lui disant que les fichiers se trouvant dans le dossier "src" auront le namespace Acme 
//4) Rajouter le namespace Acme dans les fichiers 
//5) Pour que composer.json puisse prendre en compte l'autoload inscrit dans son code, il faut aller dans la ligne de controle et taper "composer dumpautoload. 
//6)Inclure le fichier d'autoloading de composer dans le fichier test. 
//7) Rajouter le namespace Acme devant les classes : ex = new Acme\Person().

//files : va permettre d'autoloader des fichiers avec composer.json. il y a juste à lister les éléments que nous souhaitons autoloader dans les crochets. 
//classmap : va permettre d'autoloader des classes de manière spécifique avec composer.json ou des dossiers complets comportant des classes.

//IMPORTANT : Sur la ligne de commande pour effacer un lien il faut écrire "cd .."