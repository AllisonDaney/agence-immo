@extends('base')

@section('title', 'Tous nos biens')

@section('content')


    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="GET" class="container d-flex gap-2">
            <input type="number" placeholder="Surface min" class="form-control" name="area" value="{{ $input['area'] ?? ''}}">
            <input type="number" placeholder="Budget max" class="form-control" name="price" value="{{ $input['price'] ?? ''}}">
            <button class="btn btn-primary btn-sm flex-grow-0 ">Rechercher</button>
        </form>

    </div>

    <div class="container">
        <div class="row">
            @forelse ($properties as $property)
                <div class="col-3 mb-4">
                    @include('card')
                </div>

                @empty

                <div class="col mb-4">
                    Aucun bien ne correspond à votre recherche
                </div>
                    
            
            @endforelse
        </div>
        <div class="container my-4">
            {{ $properties->links() }}
        </div>
    </div>


@endsection
