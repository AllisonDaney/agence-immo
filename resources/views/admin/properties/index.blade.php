@extends('admin.admin')



@section('content')
    <div class="flex flex-col items-center w-full my-24">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.property.create') }}"
            class="bg-orange-800 rounded-lg text-sm px-4 py-2 my-4 text-center text-white btn-sm flex-grow-0 ">Ajouter un
            bien</a>

        <table class="w-full text-sm text-left rtl:text-right text-gray-800 max-w-4xl mt-12">
            <thead class="text-xs text-gray-800 uppercase bg-stone-200 ">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Titre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Surface
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prix
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ville
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr class="bg-gray-50 border-b border-stone-300">
                        <th scope="row" class="px-6 py-4 font-medium text-stone-600 whitespace-nowrap ">
                            {{ $property->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $property->area }}m²
                        </td>
                        <td class="px-6 py-4">
                            {{ number_format($property->price, thousands_separator: ' ') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $property->city }}
                        </td>
                        <td class="flex flex-wrap gap-2 justify-center px-6 py-4">
                            <a href="{{ route('admin.property.edit', $property) }}"
                                class="bg-sky-600 rounded-lg text-sm px-4 py-2 text-center text-white">Editer</a>
                            <form action="{{ route('admin.property.destroy', $property) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button
                                    class="bg-red-600 rounded-lg text-sm px-4 py-2 text-center text-white btn-sm flex-grow-0">Supprimer</button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    {{ $properties->links() }}
@endsection
