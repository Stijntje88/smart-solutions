@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="welcome-section">
        <h1>Welkom op onze website!</h1>
        <img src="{{ asset('img/kubessen-blauw.jpg') }}" alt="Kubessen Blauw" class="hero-image">
        <p>Welkom op de homepage van Smart-Solutions. We zijn verheugd dat je hier bent. Op deze site vind je meer informatie over wie we zijn en hoe je contact met ons kunt opnemen. Gebruik de navigatie om naar de andere pagina's te gaan.</p>
    </div>
@endsection
