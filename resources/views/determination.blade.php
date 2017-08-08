@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="container">


						<table class="table table-striped">
							<thead>
								<div class="form-group">
									<h2>Déterminez une variété</h2></div>


									{!! Form::open([
										'route' => ['recherche']
										]) !!}
										<div class="descriptif">

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
												{!! Form::label('colaration', "Coloration à l'insolation : ") !!}
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

											{{-- <h3>Pédoncule et cavité pédonculaire</h3>
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
												{!! Form::label('cuvette_oeil_larg', "Largeur de la cuvette de l'oeil : ") !!}
												{!! Form::select('cuvette_oeil_larg',['','etroite', 'large']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('cuvette_oeil_prof', "Cuvette de l'oeil profonde : ") !!}
												{!! Form::select('cuvette_oeil_prof',['','oui', 'non']) !!}
											</div> --}}
											<div class="form-group">
												{!! Form::submit('Affichez les résultats de votre recherche !') !!} 
												{!! Form::close() !!}
											</div>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<h1>Résultats</h1>

			
		</div>

		@endsection

