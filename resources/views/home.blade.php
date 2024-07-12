@extends('base')

@section('content')

    <div class="flex flex-col items-center w-full my-6">
        <h3 class="text-xl font-bold tracking-tight text-orange-600 sm:text-4xl">Immo Agency Lyon</h3>

        <p class="mt-6 text-lg leading-8 text-stone-600 w-1/3">
            Située au cœur de Lyon, notre agence immobilière, Lyon
            Immo, est votre partenaire de confiance pour toutes vos transactions immobilières. Que vous soyez à
            la recherche de votre résidence principale, d'un investissement locatif, ou que vous souhaitiez
            vendre votre bien, notre équipe de professionnels expérimentés est à votre service pour vous
            accompagner à chaque étape de votre projet.
        </p>
    </div>

    <div class="flex flex-col items-center w-full my-12">
        <h2 class="text-lg font-semibold">Nos derniers biens</h2>
    </div>
    <div class="flex flex-wrap gap-2 w-full justify-center px-4">
        @foreach ($properties as $property)
            @include('card')
        @endforeach
    </div>
@endsection
