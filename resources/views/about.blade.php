@extends('layouts.app')

@section('title', 'Over Ons')

@section('content')
    <div class="about-section">
        <h1>Over Ons</h1>
        <p>Wij zijn een jong en dynamisch team dat zich richt op het ontwikkelen van innovatieve weboplossingen. Ons doel is
            om gebruikersvriendelijke en efficiënte websites te bouwen voor bedrijven van elke omvang. Onze passie ligt in
            het verbeteren van de digitale ervaringen van onze klanten.</p>
        <img src="{{ asset('img/about-foto1.jpeg') }}" alt="Vergrootglas" class="about-image">
    </div>
@endsection
