@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="container">
						<table class="table table-striped">
							<thead>
								<div class="col-md-12 text-center">
									<a href="javascript:history.back()" class="btn"> Retour
									</a>
								</div>
								<h2>{{$apple->nom}}</h2></div>
								{!! Form::model($apple, [
									'method' => 'POST',
									'route' => ['update', $apple->id]
									]) !!}
									
									{{-- <div class="form-group">
										{!! Form::label('synonyme') !!}
										{!! Form::text('synomyme') !!}
									</div>
									--}}
									<h3>Couleur de l'épiderme</h3>
									<div class="form-group">
										{!! Form::label('couleur_epiderme', "Couleur du fond : ") !!}
										{!! Form::select('couleur_epiderme',['','rouge', 'jaune', 'vert','marron'], $apple->id_couleur_epiderme_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('couleur_uniforme', "Couleur uniforme : ") !!}
										{!! Form::select('couleur_uniforme',['','oui', 'non'], $apple->id_couleur_uniforme_value, ['disabled']) !!}
									</div>

									<div class="form-group">
										{!! Form::label('strie', "Présence de stries : ") !!}
										{!! Form::select('strie',['','non', 'rouge', 'rouge foncé','rouge bordeaux'], $apple->id_strie_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('coloration', "Coloration à l'insolation : ") !!}
										{!! Form::select('coloration',['','oui', 'non'], $apple->id_coloration_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('lenticelle', "Présence de lenticelle : ") !!}
										{!! Form::select('lenticelle',['','oui claires', 'oui  foncées','non'], $apple->id_lenticelle_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('liege', "Liège: ") !!}
										{!! Form::select('liege',['','oui', 'non'], $apple->id_liege_value, ['disabled']) !!}
									</div>

									<h3>Forme et calibre</h3>
									<div class="form-group">
										{!! Form::label('forme', "Forme : ") !!}
										{!! Form::select('forme',['','haute', 'ronde','large'], $apple->id_forme_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('calibre', "Calibre : ") !!}
										{!! Form::select('calibre',['','petit', 'moyen','gros'], $apple->id_calibre_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										<h3>Pédoncule et cavité pédonculaire</h3>
									</div>
									<div class="form-group">
										{!! Form::label('pedoncule', "Longueur du pédoncule : ") !!}
										{!! Form::select('pedoncule',['','très court', 'moyen','long'], $apple->id_pedoncule_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('cavite_pedonculaire_larg', "Largeur de la cavité pédonculaire : ") !!}
										{!! Form::select('cavite_pedonculaire_larg',['','etroite', 'large'], $apple->id_cavite_pedoncilaire_larg_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										{!! Form::label('cavite_pedonculaire_prof', "Cavité pédonculaire profonde: ") !!}
										{!! Form::select('cavite_pedonculaire_prof',['','oui', 'non'], $apple->id_cavite_pedonculaire_prof_value, ['disabled']) !!}
									</div>
									<div class="form-group">
										<h3>Cuvette de l'oeil</h3></div>
										<div class="form-group">
											<div class="form-group">
												{!! Form::label('cuvette_oeil_larg', "Largeur de la cuvette de l'oeil : ") !!}
												{!! Form::select('cuvette_oeil_larg',['','etroite', 'large'], $apple->id_cuvette_oeil_value, ['disabled']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('cuvette_oeil_prof', "Cuvette de l'oeil profonde : ") !!}
												{!! Form::select('cuvette_oeil_prof',['','oui', 'non'], $apple->id_cuvette_oeil_prof_value, ['disabled']) !!}
											</div>
											<div class="form-group">
												{!! Form::label('signe_particulier', "Signe particulier: ") !!}
												{!! Form::text('signe_particulier_value',null) !!}
											</div>

										</thead>
									</table>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection




