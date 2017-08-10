@extends('layouts.app')


@section('css')
@endsection

@section('content')
@if(Session::has('flash_message'))
<div class="alert alert-success">
	{{ Session::get('flash_message') }}
</div>
@endif
<div class="col-md-12 text-center">
	<a href="javascript:history.back()" class="btn"> Retour
	</a>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<h4>Gérer les variétés</h4>
							<a href='creation' class="btn">Créez une variété</a>
							<tr>
								<th>Nom</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($apples as $apple)
							<tr>
								<td>
									{{ $apple->nom }}
								</td>
								<td>
									<a href="/show/{{ $apple->id }}" class="btn btn-default btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Voir</a>
									<a href="/edition/{{ $apple->id }}" class="btn btn-default btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Modifier</a>
									<a href="/delete/{{ $apple->id }}" class="btn btn-default btn-sm"><i class="fa fa fa-ban" aria-hidden="true"></i>Supprimer</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
@endsection
