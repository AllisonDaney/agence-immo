@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Créer un bien')

@section('content')

    <h1>@yield('title')</h1>

    <form class="vstack gap-2"
        action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">

        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Titre',
                'name' => 'title',
                'value' => $property->title,
            ])
            <div class="col row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Surface',
                    'name' => 'area',
                    'value' => $property->area,
                ])
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Prix',
                    'name' => 'price',
                    'value' => $property->price,
                ])
            </div>
        </div>
        @include('shared.input', [
            'type' => 'textarea',
            'class' => 'col',
            'label' => 'Description',
            'name' => 'content',
            'value' => $property->content,
        ])

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Pièces',
                'name' => 'rooms',
                'value' => $property->rooms,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Chambres',
                'name' => 'bedrooms',
                'value' => $property->bedrooms,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'étages',
                'name' => 'floor',
                'value' => $property->floor,
            ])

        </div>

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Adresse',
                'name' => 'address',
                'value' => $property->address,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Code postal',
                'name' => 'postal_code',
                'value' => $property->postal_code,
            ])
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Ville',
                'name' => 'city',
                'value' => $property->city,
            ])

        </div>
        @include('shared.checkbox', [
            'label' => 'Vendu',
            'name' => 'sold',
            'value' => $property->sold,
        ])

        <div>

            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>


        </div>


    </form>

@endsection
