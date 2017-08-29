<?php 

namespace App\Http\Controllers;

use App\Http\Requests\manuscritsRequest;
use App\Http\TexteGestionInterface;
use App\Gestion\TexteGestion;

class TexteController extends Controller 
{

    public function getForm()
	{
		return view('texte');
	}
	public function postForm(manuscritsRequest $request,TexteGestion $textegestion)

	{
		
		if($textegestion->save($request->file('manuscrits'))) {
			return view('texte_ok');
		} 
		return redirect('texte')
			->with('error','Désolé mais votre manuscrits ne peut pas être envoyée ');
	
	}


/*	public function postForm(manuscritsRequest $request)
	{
		$manuscrits = $request->file('manuscrits');

		if($manuscrits->isValid())
		{
			$chemin = config('manuscrits.path');

			$extension = $manuscrits->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			if($manuscrits->move($chemin, $nom)) {
				return view('texte_ok');
			}
		}

		return redirect('texte')
			->with('error','Désolé mais votre manuscrit ne peut pas être envoyée !');
	}
	*/
}