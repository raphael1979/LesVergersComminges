<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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

		$apples = Apple::All();
		// dd($request->couleur_epiderme);
		$criteres=[
		'id_couleur_epiderme_value',
		'id_couleur_uniforme_value',
		'id_strie_value',
		'id_coloration_value',
		'id_lenticelle_value',
		'id_liege_value',
		'id_forme_value',
		'id_calibre_value',
		'id_pedoncule_value',
		'id_cavite_pedonculaire_larg_value',
		'id_cavite_pedonculaire_prof_value',
		'id_cuvette_oeil_value',
		'id_cuvette_oeil_prof_value'
		];
		$criteres_nom=[
		'couleur de l\'epiderme',
		'couleur uniforme',
		'strie',
		'coloration',
		'lenticelle',
		'liege',
		'forme',
		'calibre',
		'pedoncule',
		'largeur de cavite pedonculaire',
		'profondeur cavite pedonculaire',
		'largeur cuvette oeil',
		'profondeur cuvette oeil'
		];

		$apple_criteres=[
		$request->couleur_epiderme,
		$request->couleur_uniforme,
		$request->strie,
		$request->coloration,
		$request->lenticelle,
		$request->liege,
		$request->forme,
		$request->calibre,
		$request->pedoncule,
		$request->cavite_pedonculaire_larg,
		$request->cavite_pedonculaire_prof,
		$request->cuvette_oeil,
		$request->cuvette_oeil_prof
		];

		// $collection = collect($apples);

		// dd($apples);
		// dd($apples[0]->pluck('nom'));

		$result=[];

		foreach ($apples as $apple) {
			// dd($apple);
			$count = 0;
			$result_criteres = [];
			for ($i=0; $i < 13; $i++) {
				if($apple[$criteres[$i]] && $apple[$criteres[$i]] == $apple_criteres[$i]){
					// dd($apple_criteres[$i]);
					$count++;
					$result_criteres [] = $criteres_nom[$i];
				}
			}
			if($count > 0){
				$result [] = ['nom' => $apple->nom, 'count' => $count, 'id' => $apple->id, 'criteres' => $result_criteres];
			}
		}

		uasort($result, function($a, $b){
			if ($a['count'] == $b['count']){
				return 0;
			}else if($a['count'] > $b['count']){
				return -1;
			}else{
				return 1;
			}
		});
		// dd($result);
		return view('resultat', compact('result')); 
	}
}

