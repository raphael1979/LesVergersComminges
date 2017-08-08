@extends('layouts.app')

@section('content')
@if(Session::has('flash_message'))
<div class="alert alert-success">
  {{ Session::get('flash_message') }}
</div>
@endif

<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">

                <div class="container">

                    <h3>Description</h3>

                    <div class="row">

                        <div class='list-group gallery'>


                            @if($images->count())

                            @foreach($images as $image)

                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>

                                <a class="thumbnail fancybox" rel="ligthbox" >
                                    <div class='text-center'>
                                        <small class='text-muted'>{{ $image->title }}</small>
                                    </div> <!-- text-center / end -->
                                    <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />

                                </a>

                                <div class='text-center'>
                                    <small class='text-muted'>{{ $image->comment }}</small>
                                </div> <!-- text-center / end -->
                            </div> <!-- col-6 / end -->

                            @endforeach

                            @endif


                        </div> <!-- list-group / end -->

                    </div> <!-- row / end -->

                </div> <!-- container / end -->


            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection