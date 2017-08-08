@extends('layouts.welcome')

@section('content')
@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <h3>Gérer les variétés</h3>
              <a href="{{ route('creationApple') }}" class="btn">Ajouter une nouvelle variété</a>
              <tr>
                <th>Nom</th>

                
              </tr>
            </thead>
            <tbody>
              @foreach ($apples as $apple)
              <tr>
                <td style="text-align:center;">
                  <td>{{$apple->nom}}</td>
                  
                  <td>
                    <a href="{{ route('editionApple', $apple->id_apple) }} " class="btn btn-default btn-sm">modifier</a>
                    <a href="{{ route('supprimerApple', $apple->id_apple) }}" class="btn btn-default btn-sm">supprimer</a></td>

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
