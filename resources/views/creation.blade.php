@extends('layouts.app')

@section('content')
<h1>Créez une nouvelle variété</h1>
{!! Form::open([
	'route' => ['createApple']	
	]) !!}

	<h3>Nom et synomymes</h3>
	<div class="form-group">
		{!! Form::label('nom') !!}
		{!! Form::text('nom') !!}
	</div>
	<div class="form-group">
		{!! Form::label('synonyme') !!}
		{!! Form::text('synomyme') !!}
	</div>
	
	<h3>Couleur de l'épiderme</h3>
	{!! Form::label('couleur_epiderme', "Couleur du fond : ") !!}
	{!! Form::select('couleur_epiderme',['','rouge', 'jaune', 'vert','marron']) !!}
	{!! Form::label('couleur_uniforme', "Couleur uniforme : ") !!}
	{!! Form::select('couleur_uniforme',['','oui', 'non']) !!}
	<br/>

	{!! Form::label('strie', "Présence de stries : ") !!}
	{!! Form::select('strie',['','non', 'rouge', 'rouge foncé','rouge bordeaux']) !!}


	{!! Form::label('coloration', "Coloration à l'insolation : ") !!}
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
	<br/>
	{!! Form::label('signe_particulier', "Signe particulier: ") !!}
	{!! Form::textarea('signe_particulier_value',null,) !!}
	

	<br/>
	{!! Form::submit('Créez une nouvelle variété !') !!}

	{!! Form::close() !!}

	@endsection

