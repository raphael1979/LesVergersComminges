@extends('layouts.app')


@section('css')
@endsection

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
              <h4>Gérer les variétés</h4>
              <a href="{{ route('creationApple') }}" class="btn">Créez une variété</a>
              <tr>
                <th>Nom</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($apples as $apple)
              <tr>
                <td style="text-align:center;">

                 <a href="{{ route('editionApple', $apple->id) }}" class="btn btn-default btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                 <a href="{{ route('supprimerApple', $apple->id) }}" class="btn btn-default btn-sm"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td>
                 <td>{{ $apple->nom }}</td>

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