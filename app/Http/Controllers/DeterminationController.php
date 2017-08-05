<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
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
		$resultats = [];

		$apples = Apple::All();
		foreach ($apples as $apple) {
			array_push($resultats, $apple);
		}
		return $resultats;
		
	}
}

// foreach($criteres as $critere){
//   $apples = array_filter($apples, "filter"+$critere->nom);
// }

// function filter_critere($apple){
//   return $apple->critere === $valeur_critere_recherchee;
// }






