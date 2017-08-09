 @extends('layouts.app')

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
              <h4>Votre selection</h4>
              <tr>
                <th>Nom</th>
                <th>Vignette</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($apples as $apple)
              <tr>
                {{--  <a href="{{ route('description', $apple->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a> --}}
                <td>{{$apple->nom}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/determination" class="btn">Déterminer une variété</a>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
