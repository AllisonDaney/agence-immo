@extends('base')

@section('title', 'Tous nos biens')

@section('content')

    <div class="flex flex-col items-center w-full bg-stone-100 p-5 mb-5 text-center rounded-lg my-6">
        <form action="" method="GET" class="container d-flex gap-2">
            <input type="number" placeholder="Surface min" class="form-control rounded-lg" name="area"
                value="{{ $input['area'] ?? '' }}">
            <input type="number" placeholder="Budget max" class="form-control rounded-lg" name="price"
                value="{{ $input['price'] ?? '' }}">
            <button
                class="bg-orange-800 rounded-lg text-sm px-4 py-2 text-center text-stone-50 btn-sm flex-grow-0 ">Rechercher</button>
        </form>

    </div>
    <div class="flex flex-wrap gap-2 w-full px-4 justify-center">
        @forelse ($properties as $property)
            @include('card')


        @empty

            <div class="col mb-4">
                Aucun bien ne correspond à votre recherche
            </div>
        @endforelse
    </div>
    <div class="container my-4">
        {{ $properties->links() }}
    </div>



@endsection
