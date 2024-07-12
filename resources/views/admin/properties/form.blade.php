@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Créer un bien')

@section('content')

    <h1>@yield('title')</h1>



    <section class="bg-white ">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
                @csrf
                @method($property->exists ? 'put' : 'post')
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="sm:col-span-2">
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Titre',
                            'name' => 'title',
                            'value' => $property->title,
                        ])
                    </div>
                    <div class="w-full">
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Surface',
                            'name' => 'area',
                            'value' => $property->area,
                        ])
                    </div>
                    <div class="w-full">
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Prix',
                            'name' => 'price',
                            'value' => $property->price,
                        ])
                    </div>
                    <div>
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Pièces',
                            'name' => 'rooms',
                            'value' => $property->rooms,
                        ])
                    </div>
                    <div>
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Chambres',
                            'name' => 'bedrooms',
                            'value' => $property->bedrooms,
                        ])
                    </div> 
                    <div>
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'étages',
                            'name' => 'floor',
                            'value' => $property->floor,
                        ])
                    </div> 
                    <div class="sm:col-span-2">
                        @include('shared.input', [
                            'type' => 'textarea',
                            'class' => 'col',
                            'label' => 'Description',
                            'name' => 'content',
                            'value' => $property->content,
                        ])
                    </div>
                    <div class="sm:col-span-2">
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Adresse',
                            'name' => 'address',
                            'value' => $property->address,
                        ])
                    </div>
                    <div>
                        @include('shared.input', [
                            'class' => 'col',
                            'label' => 'Code postal',
                            'name' => 'postal_code',
                            'value' => $property->postal_code,
                        ])
                    </div> 
                    <div>
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

                </div>
                <div>

                    <button class="bg-orange-800 rounded-lg text-sm px-4 py-2 my-4 text-center text-white btn-sm flex-grow-0 ">
                        @if ($property->exists)
                            Modifier
                        @else
                            Créer
                        @endif
                    </button>
        
        
                </div>
            </form>
        </div>
      </section>
@endsection
