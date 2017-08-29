<?php 

namespace App\Gestion;

class FileGestion implements FileGestionInterface
{

    public function save($file)
	{
		//print_r(filesize($file));
		//print_r(getimagesize($file));	
		//die();
		
		
	/*	if (filesize($file) > 8388608)
			{
				return view('la taille nest pas correct');
			}

		if (fileextension($file) != doc,docx,rtf,pdf) 
		{
			return view('Le format nest pas correct');
		}  
      // Display File Name
       echo 'File Name: '.$file->getClientOriginalName() ;
       echo '<br>';
   
      // Display File Extension
       echo 'File Extension: '.$file->getClientOriginalExtension() ;
       echo '<br>';
   
      // Display File Real Path
       echo 'File Real Path: '.$file->getRealPath() ;
      echo '<br>';
   
      // Display File Size
       echo 'File Size: '.$file->getSize() ;
       echo '<br>';
   		// Display File Mime Type
       echo 'File Mime Type: '.$file->getMimeType() ; 
       echo '<br>';  */
   
		
		if($file->isValid())
		
		{
		    $chemin = getenv('APP_UPLOAD_DIR');
			
			if (filesize($file) > 8388608)
			{
				//return false;
				die('poids');
			}
			
			
			//if($file->getMimeType() != 'application/pdf' && $file->getMimeType() != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
			if (!in_array($file->getMimeType(), array('application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'text/rtf', 'application/msword'))) 
			{

				//return false;
				//die('BOOOH');
				 return false;
				 //return redirect('manuscrits')
				 //->with('error','Désolé mais votre manuscrits ne peut pas être envoyée !');
			} 
			
			$extension = $file->getClientOriginalExtension();
			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			return $file->move($chemin, $nom);
			
		}

		return false;
		
	}




}

