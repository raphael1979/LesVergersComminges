@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">

					<table class="table table-striped">
						<thead>
							<div class="col-md-12 text-center">
								<a href="/accueil" class="btn btn-">Retour à l'accueil</a>
							</div>
							<h2>Créez une nouvelle variété</h2>
							{!! Form::open([
								'url' => ['add']	
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
								<div class="form-group">
									{!! Form::label('couleur_epiderme', "Couleur du fond : ") !!}
									{!! Form::select('couleur_epiderme',['','rouge', 'jaune', 'vert','brun']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('couleur_uniforme', "Couleur uniforme : ") !!}
									{!! Form::select('couleur_uniforme',['','oui', 'non']) !!}
								</div>

								<div class="form-group">
									{!! Form::label('strie', "Présence de stries : ") !!}
									{!! Form::select('strie',['','non', 'rouge', 'rouge foncé','rouge bordeaux']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('coloration', "Coloration à l'insolation : ") !!}
									{!! Form::select('coloration',['','oui', 'non']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('lenticelle', "Présence de lenticelle : ") !!}
									{!! Form::select('lenticelle',['','oui claires', 'oui  foncées','non']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('liege', "Liège: ") !!}
									{!! Form::select('liege',['','oui', 'non']) !!}
								</div>

								<h3>Forme et calibre</h3>
								<div class="form-group">
									{!! Form::label('forme', "Forme : ") !!}
									{!! Form::select('forme',['','haute', 'ronde','large']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('calibre', "Calibre : ") !!}
									{!! Form::select('calibre',['','petit', 'moyen','gros']) !!}
								</div>
								<h3>Pédoncule et cavité pédonculaire</h3>
								<div class="form-group">
									{!! Form::label('pedoncule', "Longueur du pédoncule : ") !!}
									{!! Form::select('pedoncule',['','très court', 'moyen','long']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('cavite_pedonculaire_larg', "Largeur de la cavité pédonculaire : ") !!}
									{!! Form::select('cavite_pedonculaire_larg',['','etroite', 'large']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('cavite_pedonculaire_prof', "Cavité pédonculaire profonde: ") !!}
									{!! Form::select('cavite_pedonculaire_prof',['','oui', 'non']) !!}
								</div>
								<h3>Cuvette de l'oeil</h3>
								<div class="form-group">
									<div class="form-group">
										{!! Form::label('cuvette_oeil_larg', "Largeur de la cuvette de l'oeil : ") !!}
										{!! Form::select('cuvette_oeil_larg',['','etroite', 'large']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('cuvette_oeil_prof', "Cuvette de l'oeil profonde : ") !!}
										{!! Form::select('cuvette_oeil_prof',['','oui', 'non']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('signe_particulier', "Signe particulier: ") !!}
										{!! Form::textarea('signe_particulier_value',null) !!}
									</div>
									<div class="form-group">
										{!! Form::submit('Créez une nouvelle variété !') !!}
										{!! Form::close() !!}
									</div>
								</div>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
