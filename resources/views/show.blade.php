@extends('base')

@section('title', $property->title)

@section('content')


<div class="grid grid-cols-3 w-full my-12 ml-4">
        <div class=" max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col items-center">
            <h5 class="mb-2 text-xl font-semibold last:tracking-tight text-stone-700 ">{{ $property->title }}</h5>
            <p class="font-normal text-stone-600 ">{{ $property->area }}m²</p>
            <p class="font-normal text-stone-600 ">{{ $property->city }} - {{ $property->postal_code }}</p> </br>
            <p class="font-bold text-orange-800 text-l">
                {{ number_format($property->price, thousands_separator: ' ') }} €</p>
        </div>
    

    
        <div class="flex flex-col items-center">
            <h5 class="font-semibold">Description</h5> </br>
            <p class="max-w-xl">{!! nl2br($property->content) !!}</p>
        </div>

        <div class="flex flex-col items-center mr-4">
            <h5 class="font-semibold">Caractéristiques</h5> </br>
            <table class="text-sm text-left rtl:text-right text-stone-700 ">
                <tr class="bg-stone-200 ">
                    <th scope="row" class="px-6 py-4 font-medium text-stone-700 whitespace-nowrap ">
                        Surface habitable
                    </th>
                    <td class="px-6 py-4">
                        {{ $property->area }} m2
                    </td>
                </tr>
                <tr class=" bg-stone-50 ">
                    <th scope="row" class="px-6 py-4 font-medium text-stone-700 whitespace-nowrap ">
                        Nombre de pièces
                    </th>
                    <td class="px-6 py-4">
                        {{ $property->rooms }}
                    </td>
                </tr>
                <tr class=" bg-stone-200 ">
                    <th scope="row" class="px-6 py-4 font-medium text-stone-700 whitespace-nowrap ">
                        Nombre de chambres
                    </th>
                    <td class="px-6 py-4">
                        {{ $property->bedrooms }}
                    </td>
                </tr>
                <tr class="bg-stone-50 ">
                    <th scope="row" class="px-6 py-4 font-medium text-text-stone-700 whitespace-nowrap ">
                        Etage
                    </th>
                    <td class="px-6 py-4">
                        {{ $property->floor }}
                    </td>
                </tr>
                <tr class="bg-stone-200 ">
                    <th scope="row" class="px-6 py-4 font-medium text-text-stone-700 whitespace-nowrap ">
                        Localisation
                    </th>
                    <td class="px-6 py-4">
                        {{ $property->address }} <br />
                        {{ $property->postal_code }} - {{ $property->city }}
                    </td>
                </tr>
            </table>
        </div>
    </div>







@endsection
