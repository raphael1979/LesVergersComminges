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

                <th>Nom </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($apples as $apple)
              
              <tr>
                {{-- <td style="text-align:center;">
                  <a href="{{ route('appleShow', $apple->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                  <a href="{{ route('appleEdit', $apple->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="{{ route('appleDelete', $apple->id) }}"><i class="fa fa fa-ban" aria-hidden="true"></i></a></td> --}}
                  <td>{{$apple->nom}}</td>
                  
                  
                </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{ route('determination') }}" class="btn">Déterminer une variété</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
