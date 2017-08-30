<?php 

namespace App\Gestion;

class DescriptionFileGestion implements DescriptionFileGestionInterface
{

    public function save($file) {
		if($file->isValid()) {
		    $chemin = getenv('APP_UPLOAD_DIR');
			if (filesize($file) > 8388608) return false;
			if (!in_array($file->getMimeType(), array( 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/rtf', 'application/msword'))) return false;
			$extension = $file->getClientOriginalExtension();
			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			return $file->move($chemin, $nom);
			
		}

		return false;
		
	}




}

