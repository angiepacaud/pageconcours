<?php 

namespace App\Gestion;

class TexteGestion implements TexteGestionInterface
{

    public function save($manuscrits)
	{
		
		if($manuscrits->isValid())
		{

			$chemin = config('manuscrits.path');

			$extension = $manuscrits->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			return $manuscrits->move($chemin, $nom);
		}

		return false;
	}

}

