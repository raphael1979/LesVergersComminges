@extends('layouts.app')

@section('content')
@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif
<div class="col-md-12 text-center">
  <a href="/accueil" class="btn btn-">Retour à l'accueil</a>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">

          <table class="table table-striped">
            <thead>
              <div> <a href="/determination" class="btn">Déterminer une variété</a></div>
              <h4>Toutes nos variétés</h4>
              <tr>
                <th>Nom</th>
                {{-- <th>Vignette</th> --}}
                
              </tr>
            </thead>
            <tbody>
              @foreach ($apples as $apple)
              <tr>
               {{--   <a href="{{ route('description', $apple->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a> --}}
               <td>{{$apple->nom}}</td>
               
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
