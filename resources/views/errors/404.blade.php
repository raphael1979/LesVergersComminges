@extends('layouts.welcome')

@section('content')
<body>
    <div class="container">
       <img src="{{ asset('images/logo.png') }}" alt="" class="logo">
       <section class="descriptif">
           <h1>Nous sommes désolés<br> mais cette page n'existe pas</h1><br>
       </section>
   </div>
   <img src="{{ asset('/images/ver_pomme.jpg') }}"  class="img-responsive center-block " alt=" image message erreur">



   <div class="col-md-12 text-center">
       <a href="/accueil" class="btn btn-primary" id="retouraccueil">Retour à l'accueil</a>
   </div>
</div>
<br>
<br>
<br>
</body>
@endsection