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
		foreach ($apples as $apple) {
			# code...
		}
		if('id_couleur_epiderme_value', '=', '$request->input("couleur_epiderme")')
		{

		}


		//return view('resultat', compact('apples'));

		// $collection = collect([
		// 	Apple::All();
		// 	]);

		// $plucked = $collection->pluck('name');

		// $plucked->all();

// ['Desk', 'Chair']




	// 		if (Apple::All()->where('id_couleur_epiderme_value', '=', '$request->input("couleur_epiderme")')){
	// 			$resultats[]=$apple;
	// 			return $resultats;
	// 		}
	// 	}

	// }

	}







