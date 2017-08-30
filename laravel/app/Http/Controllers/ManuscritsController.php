<?php

namespace App\Http\Controllers;

use \App\Manuscrits;
//use \App\Services\Manuscrits as ManuscritsService;
use \App\Http\Requests\ManuscritsRequest;
//use \App\Http\FileGestionInterface;
use \App\Gestion\FileGestion;
//use \App\Http\DescriptionFileInterface;
use \App\Gestion\DescriptionFileGestion;


class ManuscritsController extends Controller
{

    public function index()
	{
		
		//$listgenre = Items::all(['id_genre', 'genre_name']);
		$genres = \DB::table('genres')->pluck('genrename','id_genre');
		
		return view('manuscrits', ['genres'=> $genres]);
	}

	public function postForm(ManuscritsRequest $request, FileGestion $Filegestion, DescriptionFileGestion $Descriptionfile)

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
		$info_fichierdescription = $Descriptionfile->save($request->file('descriptionfile'));
		if ($info_fichier == false || $info_fichierdescription == false) {
				return view('error/erreur_extension');
		}


		$manuscrits->file = $info_fichier->getFilename();
		$manuscrits->descriptionfile = $info_fichierdescription->getFilename();
	

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