@extends('layouts.welcome')
@section('content')

<div class="section">
  <div class="row">
    <div class="col-md-6 col-xs-6"><a href="../list">Identifier une pomme</a></div>
    <div class="col-md-6 col-xs-6"><a href="#">Nos variétés</a></div>

    <div class="login">
      @if (Route::has('login'))
      <div class="">
        @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a href="{{ url('/login') }}">Admin</a>
        @endif
      </div>
      @endif
    </div>
  </div>
</div>

<div class="descriptif">  
  <h1>Les Pommes</h1>
  <p >Vous vous apprêtez à lancer une recherche pour identifier une variété de pomme.<br> 

    Quelques informations s'imposent :<br>

    Nous avons fait le choix d'un outil facile à utiliser, avec peu de critères, eux-mêmes faciles à observer ; vous risquez donc d'aboutir non pas à une seule pomme, mais à plusieurs. Vous pourrez vous reporter au descriptif des pommes sélectionnées pour affiner votre recherche : la période de consommation par exemple, les caractéristiques gustatives ou les photos pourront vous aider à les départager.<br> 
    Prenez obligatoirement plusieurs fruits (3 au minimum, 5-6 si possible, provenant impérativement du même arbre) car ils ne sont pas tous représentatifs et peuvent vous conduire à une mauvaise identification. Une pomme qui a poussé au centre d'un arbre bien touffu n'aura pas la même coloration qu'une pomme située en périphérie par exemple ; les arbres voisins prétendûment de la même variété ne le sont pas toujours non plus..... <br> 
    La base de données va augmenter au fil du temps, vous ne trouverez pour l'instant que les pommes étudiées depuis longtemps et sur lesquelles nous avons accumulé renseignements et photos. Si votre recherche n'aboutit pas, vous aurez sans doute plus de chance dans quelques mois.</p>
  </div>
  @endsection
