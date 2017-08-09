@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Informations sur la variété </div>
				<div class="panel-body">

					<div class="row">
						<div class="col-md-3">
							<b>Nom :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->nom }}
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<b>Couleur_epiderme :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_couleur_epiderme_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Couleur_uniforme :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_couleur_uniforme_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Couleur_epiderme :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_strie_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Coloration à insolation :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_coloration_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Lenticelle :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_lenticelle_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Liege :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_liege_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Forme :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_forme_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Calibre :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_calibre_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>cavite_pedonculaire_largeur :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_cavite_pedonculaire_larg_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>cavite_pedonculaire_profondeur :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_cavite_pedonculaire_prof_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Cuvette de l'oeil profondeur :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_cuvette_oeil_prof_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Cuvette de l'oeil largeur :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_cuvette_oeil_value }}
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<b>Signe particulierr :</b>
						</div>
						<div class="col-md-5">
							{{ $apple->id_signe_particulier_value }}
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection
