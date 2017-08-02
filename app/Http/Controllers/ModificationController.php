<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apple;
use App\Synonyme;

class ModificationController extends Controller
{

	public function index()
	{
		return view('creation');

	}
	
// creer les nouveaux enregistrements dans la BDD
	public function creation(Request $request)
	{




		$apple = new \App\Apple;
		$apple->nom = $request->input('nom');
		// $apple->synonyme = $request->input('synonyme');
		$apple->id_couleur_epiderme_value = $request->input('couleur_epiderme');
		$apple->id_couleur_uniforme_value = $request->input('couleur_uniforme');
		$apple->id_strie_value = $request->input('strie');
		$apple->id_coloration_value = $request->input('coloration');
		$apple->id_lenticelle_value= $request->input('lenticelle');
		$apple->id_liege_value = $request->input('liege');
		$apple->id_forme_value = $request->input('forme');
		$apple->id_calibre_value = $request->input('calibre');
		$apple->id_cavite_pedonculaire_larg_value = $request->input('cavite_pedonculaire_larg');
		$apple->id_cavite_pedonculaire_prof_value = $request->input('cavite_pedonculaire_prof');
		$apple->id_cuvette_oeil_prof_value = $request->input('cuvette_oeil_prof');
		$apple->id_cuvette_oeil_value = $request->input('cuvette_oeil_larg');
		$apple->signe_particulier_value= $request->input('signe_particulier');
		
		$apple->save();
		Session::flash('flash_message', 'La variété a été ajoutée avec succès!');

		return redirect()->route('listApples');

	}
	public function show($id)
	{
		$apple = App\Apple::findOrFail($id);

		return view('edition', compact('apple'));
	}

}

