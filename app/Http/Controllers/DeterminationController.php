<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apple;
use App\Synonyme;

class DeterminationController extends Controller
{

	public function index()
	{
		return view('determination');

	}
	public function recherche(Request $request)
	{
		

		
		$results = Apple::where('id_couleur_epiderme_value', '$request->input("couleur_epiderme")')
		->get();
		
		return view('resultat',['apples'=>$apple]);
	}
}







