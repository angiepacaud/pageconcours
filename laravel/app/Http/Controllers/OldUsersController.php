<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getInfos()
    {
    	return view('contact');
    }

    public function postInfos(Request $request)
    {
    	return 'le nom est ' .$request->input('nom');
    }
}
