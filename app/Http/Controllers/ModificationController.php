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
// formulaire de creation nouvelle variété
	public function index()
	{
		$apples = Apple::all();
		return view('adminlist', compact('apples'));
	}

// ajouter les nouveaux enregistrements dans la BDD
	public function add(Request $request)
	{

		$apple = new \App\Apple;
		

		$apple->nom = $request->input('nom');
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
		$apple->id_signe_particulier_value= $request->input('signe_particulier');
		
		$apple->save();
		Session::flash('flash_message', 'La variete a été ajoutée avec succès!');

<<<<<<< HEAD
<<<<<<< HEAD
		$synonymes = $request->input('synonyme');
=======
		return redirect('list');
	}
>>>>>>> c0b6756a1e903331e64bf95f8e6d39e300294c8e

		$synonymes = explode('/',$synonymes);

		foreach ($synonymes as $synonyne) {

			$synonyme = new \App\Synonyme;
			$synonyme->nom = $synonyme;
			$synonyme->apple_id = $apple->id;
		}

<<<<<<< HEAD
=======
		// $synonymes = new \App\Synomyme;
		// $synonymes = $request->input('synonyme');

		// $synonymes = explode('/',$synonymes);
>>>>>>> origin/odile

		// foreach ($synonymes as $synonyne) {

		// 	$synonyme = new \App\Synonyme;
		// 	$synonyme->nom = $synonyme;
		// 	$synonyme->apple_id = $apple->id;
		// }
		return redirect('list');
<<<<<<< HEAD
>>>>>>> c0b6756a1e903331e64bf95f8e6d39e300294c8e
=======
>>>>>>> origin/odile
	}

	// enregistrement sur le storage des informations variétés
	// public function store(Request $request)
	// {
	// 	$this->validate($request, [
	// 		'nom' => 'required|max:255',
	// 		'id_couleur_epiderme_value'=>nullable(),
	// 		'id_couleur_uniforme_value'=>nullable(),
	// 		'id_strie_value'=>nullable(),
	// 		'id_coloration_value'=>nullable(),
	// 		'id_lenticelle_value'=>nullable(),
	// 		'id_liege_value'=>nullable(),
	// 		'id_forme_value'=>nullable(),
	// 		'id_calibre_value'=>nullable(),
	// 		'id_cavite_pedondulaire_larg_value'=>nullable(),
	// 		'id_cavite_pedondulaire_prof_value'=>nullable(),
	// 		'id_cuvette_oeil_prof_value'=>nullable(),
	// 		'id_cuvette_oeil_value'=>nullable(),
	// 		'signe_particulier_value'=>nullable(),
	// 		]);

	// 	$apple = [
	// 	'nom' => $request->input('nom'),
	// 	'id_couleur_epiderme_value' => $request->input('couleur_epiderme'),
	// 	'id_couleur_uniforme_value' => $request->input('couleur_uniforme'),
	// 	'id_strie_value' => $request->input('strie'),
	// 	'id_coloration_value' => $request->input('coloration'),
	// 	'id_lenticelle_value' => $request->input('lenticelle'),
	// 	'id_liege_value' => $request->input('liege'),
	// 	'id_forme_value' => $request->input('forme'),
	// 	'id_calibre_value' => $request->input('calibre'),
	// 	'id_cavite_pedonculaire_larg_value' => $request->input('cavite_pedonculaire_larg'),
	// 	'id_cavite_pedonculaire_prof_value' => $request->input('cavite_pedonculaire_prof'),
	// 	'id_cuvette_oeil_prof_value' => $request->input('cuvette_oeil_prof'),
	// 	'id_cuvette_oeil_value' => $request->input('cuvette_oeil_larg'),
	// 	'signe_particulier_value'=> $request->input('signe_particulier'),
	// 	];


	// 	$apple->save();
	// 	Session::flash('flash_message', 'La variete a été ajoutée avec succès!');
	// 	return redirect('list');
	// }





  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
  	// $apple = Apple::findOrFail($id);
  	
  	// $apple = Apple::all()->where('id', '=', $id)->first();

    $apple= Apple::findOrFail($id);

    // return view('/showApple', compact('apple'));
    return view('showApple', ['apple' => $apple]);
  }



  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
<<<<<<< HEAD
<<<<<<< HEAD
  public function edit($id_apple)
  {
  	$apple = Apple::findOrFail($id_apple);
=======
>>>>>>> origin/odile

  public function edit($id)
  {
<<<<<<< HEAD
  	$input = $request->all();

  	$apple->fill($input)->save();

  	return view('edit', compact($apple));
>>>>>>> c0b6756a1e903331e64bf95f8e6d39e300294c8e
=======
    $apple= Apple::findOrFail($id);
    return view('edit', ['apple' => $apple]);
>>>>>>> origin/odile
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

  	$apple = Apple::all()->where('id', '=', $id)->first();

	// $synomyme->synonyme = $request->input('synonyme');
  	$apple->nom = $request->input('nom');
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
    $apple->id_signe_particulier_value= $request->input('signe_particulier');

    $apple->update();

    Session::flash('flash_message', 'La variété a été modifiée avec succès!');

    return redirect('adminlist');

  	// $this->validate($request, [
  	// 	'nom' => 'required|max:255',
  	// 	'id_couleur_epiderme_value'=>nullable(),
  	// 	'id_couleur_uniforme_value'=>nullable(),
  	// 	'id_strie_value'=>nullable(),
  	// 	'id_coloration_value'=>nullable(),
  	// 	'id_lenticelle_value'=>nullable(),
  	// 	'id_liege_value'=>nullable(),
  	// 	'id_forme_value'=>nullable(),
  	// 	'id_calibre_value'=>nullable(),
  	// 	'id_cavite_pedondulaire_larg_value'=>nullable(),
  	// 	'id_cavite_pedondulaire_prof_value'=>nullable(),
  	// 	'id_cuvette_oeil_prof_value'=>nullable(),
  	// 	'id_cuvette_oeil_value'=>nullable(),
  	// 	'id_signe_particulier_value'=>nullable(),
  	// 	]);

    $input = $request->all();

    $apple->fill($input)->save();
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

  	return redirect('adminlist');
  }


}
