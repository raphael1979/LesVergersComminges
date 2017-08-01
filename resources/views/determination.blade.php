@extends('layouts.app')

@section('content')


<h1>Formulaire de détermination</h1>

{!! Form::open([
	'route' => ['recherche']
	]) !!}
	<hr>
	<h3>Couleur de l'épiderme</h3>
	{!! Form::label('couleur_epiderme', "Couleur du fond : ") !!}
	{!! Form::select('couleur_epiderme',['','rouge', 'jaune', 'vert','marron']) !!}
	{!! Form::label('couleur_uniforme', "Couleur uniforme : ") !!}
	{!! Form::select('couleur_uniforme',['','oui', 'non']) !!}
	<br/>

	{!! Form::label('strie', "Présence de stries : ") !!}
	{!! Form::select('strie',['','non', 'rouge', 'rouge foncé','rouge bordeaux']) !!}


	{!! Form::label('colaration', "Coloration à l'insolation : ") !!}
	{!! Form::select('coloration',['','oui', 'non']) !!}

	{!! Form::label('lenticelle', "Présence de lenticelle : ") !!}
	{!! Form::select('lenticelle',['','oui claires', 'oui  foncées','non']) !!}

	{!! Form::label('liege', "Liège: ") !!}
	{!! Form::select('liege',['','oui', 'non']) !!}
	<br/>

	<h3>Forme et calibre</h3>

	{!! Form::label('forme', "Forme : ") !!}
	{!! Form::select('forme',['','haute', 'ronde','large']) !!}

	{!! Form::label('calibre', "Calibre : ") !!}
	{!! Form::select('calibre',['','petit', 'moyen','gros']) !!}


	<h3>Pédoncule et cavité pédonculaire</h3>
	{!! Form::label('pedoncule', "Longueur du pédoncule : ") !!}
	{!! Form::select('pedoncule',['','très court', 'moyen','long']) !!}

	{!! Form::label('cavite_pedonculaire_larg', "Largeur de la cavité pédonculaire : ") !!}
	{!! Form::select('cavite_pedonculaire_larg',['','etroite', 'large']) !!}
	{!! Form::label('cavite_pedonculaire_prof', "Cavité pédonculaire profonde: ") !!}
	{!! Form::select('cavite_pedonculaire_prof',['','oui', 'non']) !!}

	<h3>Cuvette de l'oeil</h3>

	{!! Form::label('cuvette_oeil_larg', "Largeur de la cuvette de l'oeil : ") !!}
	{!! Form::select('cuvette_oeil_larg',['','etroite', 'large']) !!}

	{!! Form::label('cuvette_oeil_prof', "Cuvette de l'oeil profonde : ") !!}
	{!! Form::select('cuvette_oeil_prof',['','oui', 'non']) !!}

	{!! Form::submit('Affichez les résultats de votre recherche !') !!} 

	{!! Form::close() !!}

	<h1>Résultats</h1>

	@endsection

