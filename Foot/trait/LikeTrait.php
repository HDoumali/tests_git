<?php 

trait LikeTrait //Permet de partager un ensemble de méthode entre vos différentes classes. On utilise le plus souvent trait quand nous souhaitons associer des méthodes sur des classes n'ayant pas de rapport direct.
{
	public function like(){
		echo 'Liker la video';
	}
    
    public function dislike(){
		echo 'disliker la video';
	}

}