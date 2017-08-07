<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
		'id_cuvette_oeil_prof_value',
		'signe_particulier_value'];

		
		$collection = collect($apples);
		
		
		$filtered = $collection	
		-> where('id_couleur_epiderme_value', $request->input('couleur_epiderme'));

		
		// $filtered=$filtered-> where ('id_couleur_uniforme_value', $request->input('couleur_uniforme'));

		$filtered->all();
		$plucked = $filtered->pluck('nom'); 



		return ($plucked);



		// -> where ('id_strie_value', $request->input('strie'))
		// -> where ('id_coloration_value', $request->input('coloration'))
		// -> where ('id_lenticelle_value', $request->input('lenticelle'))
		// -> where ('id_liege_value', $request->input('liege'))
		// -> where ('id_forme_value', $request->input('forme'))
		// -> where ('id_calibre_value', $request->input('calibre'))
		// -> where ('id_pedoncule_value', $request->input('pedoncule'));




	}
}

