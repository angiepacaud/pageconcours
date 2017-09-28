<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manuscrits;
use \App\Http\Requests\HomeRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$manuscrits = \DB::table('manuscrits')->pluck('name', 'email', 'title');
         $manuscrits = \DB::table('manuscrits')->get();
        
        return view('home', ['manuscrits'=> $manuscrits]);

        //return view('home');

    }

    
   // public function edit(Manuscrits $manuscrits)
   // {
   //      dd(get_class_vars($manuscrits));

   //     $manuscrits = \DB::table('manuscrits')->get();
   //     return view('edit', ['manuscrits'=> $manuscrits]);
   // }

    public function edit(Manuscrits $manuscrits)
    {

        //$manuscrits = manuscrits::find($manuscrits); 
        //return $manuscrits;
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
        $statut = \DB::table('statut')->pluck('Traitement','id_statut');
        // echo '<pre>';
        // print_r(compact('manuscrits'));
        // echo '</pre>';
        return view('manuscrits.edit')->with(['manuscrits'=> $manuscrits, 'statut'=>$statut]);

        //return view('manuscrits.edit', compact('manuscrits'));
    }

    
 
    public function postForm(HomeRequest $request)
    {
        
        //echo 'test';
//         $statut= new Home;
//         $statut->Traitement = $request ->input('Traitement');
//         $statut->save();

//         return('hhh');

        
    }

public function download()
{
    $file = $nom.'.doc';
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
}



    
}
