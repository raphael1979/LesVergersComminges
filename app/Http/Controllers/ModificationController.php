<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Apple;


class ModificationController extends Controller
{
// formulaire de creation nouvelle variété
	public function index()
	{
		return view('creation');

	}
	
// ajouter les nouveaux enregistrements dans la BDD
	public function add(Request $request)
	{

		$apple = new \App\Apple;
		// $synonyme = new \App\Synonyme;

		$apple->nom = $request->input('nom');
		// $synomyme->synonyme = $request->input('synonyme');
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
		Session::flash('flash_message', 'La variete a été ajoutée avec succès!');

		return redirect()->route('nos_varietes');
	}




	// enregistrement sur le storage des informations variétés
	public function store(Request $request)
	{
		$this->validate($request, [
			'nom' => 'required|max:255',
			'id_couleur_epiderme_value'=>nullable(),
			'id_couleur_uniforme_value'=>nullable(),
			'id_strie_value'=>nullable(),
			'id_coloration_value'=>nullable(),
			'id_lenticelle_value'=>nullable(),
			'id_liege_value'=>nullable(),
			'id_forme_value'=>nullable(),
			'id_calibre_value'=>nullable(),
			'id_cavite_pedondulaire_larg_value'=>nullable(),
			'id_cavite_pedondulaire_prof_value'=>nullable(),
			'id_cuvette_oeil_prof_value'=>nullable(),
			'id_cuvette_oeil_value'=>nullable(),
			'signe_particulier_value'=>nullable(),

			]);
		$apple = [
		'nom' => $request->input('nom'),
		'id_couleur_epiderme_value' => $request->input('couleur_epiderme'),
		'id_couleur_uniforme_value' => $request->input('couleur_uniforme'),
		'id_strie_value' => $request->input('strie'),
		'id_coloration_value' => $request->input('coloration'),
		'id_lenticelle_value' => $request->input('lenticelle'),
		'id_liege_value' => $request->input('liege'),
		'id_forme_value' => $request->input('forme'),
		'id_calibre_value' => $request->input('calibre'),
		'id_cavite_pedonculaire_larg_value' => $request->input('cavite_pedonculaire_larg'),
		'id_cavite_pedonculaire_prof_value' => $request->input('cavite_pedonculaire_prof'),
		'id_cuvette_oeil_prof_value' => $request->input('cuvette_oeil_prof'),
		'id_cuvette_oeil_value' => $request->input('cuvette_oeil_larg'),
		'signe_particulier_value'=> $request->input('signe_particulier'),

		];


		$apple->save();
		Session::flash('flash_message', 'La variete a été ajoutée avec succès!');
		return redirect()->route('nos_varietes');
	}

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
  	$apple = Apple::findOrFail($id);

  	return view('showApple', compact('apple'));
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
  	$apple = Apple::findOrFail($id);

  	return view('edit')->withApple($apple);
  }



  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update($id, Request $request)
  {
  	$apple = Apple::findOrFail($id);

  	$this->validate($request, [
  		$this->validate($request, [
  			'nom' => 'required|max:255',
  			'id_couleur_epiderme_value'=>nullable(),
  			'id_couleur_uniforme_value'=>nullable(),
  			'id_strie_value'=>nullable(),
  			'id_coloration_value'=>nullable(),
  			'id_lenticelle_value'=>nullable(),
  			'id_liege_value'=>nullable(),
  			'id_forme_value'=>nullable(),
  			'id_calibre_value'=>nullable(),
  			'id_cavite_pedondulaire_larg_value'=>nullable(),
  			'id_cavite_pedondulaire_prof_value'=>nullable(),
  			'id_cuvette_oeil_prof_value'=>nullable(),
  			'id_cuvette_oeil_value'=>nullable(),
  			'id_signe_particulier_value'=>nullable(),

  			])
  		]);
  	$input = $request->all();

  	$apple->fill($input)->save();

  	Session::flash('flash_message', 'La variété a été modifiée avec succès!');

  	return redirect()->route('adminlist');
  }



  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
  	$apple = Apple::findOrFail($id);

  	$apple->delete();

  	Session::flash('flash_message', 'La variété a été supprimée avec succès!');

  	return redirect()->route('adminlist');
  }


}
