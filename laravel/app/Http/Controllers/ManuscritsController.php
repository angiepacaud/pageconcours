<?php

namespace App\Http\Controllers;

use \App\Manuscrits;
use \App\Services\Manuscrits as ManuscritsService;
use \App\Http\Requests\ManuscritsRequest;
use \App\Http\FileGestionInterface;
use \App\Gestion\FileGestion;


class ManuscritsController extends Controller
{

    public function index(ManuscritsService $service)
	{
		
		//$listgenre = Items::all(['id_genre', 'genre_name']);
		$genres = \DB::table('genres')->pluck('genrename','id_genre');
		
		return view('manuscrits', ['genres'=> $genres]);
	}

	public function postForm(ManuscritsRequest $request, FileGestion $Filegestion)

	{
		
		//$this->validate($request, [
		//	'file' => 'required',
		//	'extension' => 'mime84s:pdf'
		//]);

		// if($file->extension() != 'pdf')
		// {
		// 	return view ('mauvaise extension');
		// } 
		
		$manuscrits = new Manuscrits;
		$manuscrits->firstname = $request->input('firstname');
		$manuscrits->name = $request->input('name');
		$manuscrits->email = $request->input('email');
		$manuscrits->title = $request->input('title');
		$manuscrits->id_genre = $request->input('genre');
		$manuscrits->resume = $request->input('resume');
		$manuscrits->comments = $request ->input('comments');
		
		$info_fichier = $Filegestion->save($request->file('file'));
		if ($info_fichier == false) {

				return view('error/erreur_extension');
				//return redirect('manuscrits')
							//->with('error','Désolé mais votre manuscrits ne peut pas être envoyée !');
		}


		$manuscrits->file = $info_fichier->getFilename();
	

	/*	$this->validate($request, [

		'file' => 'required',
		'extension' => 'required|mimes:pdf',
			]);

		if($file->extension() != 'pdf')
		{
			return view ('mauvaise extension');
		} 
		*/



		$manuscrits->save();
		
		return view('manuscrits_ok');
	//}
	}

}