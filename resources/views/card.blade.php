<a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}"
    class="block w-1/5 p-6 bg-white border border-gray-200 rounded-lg shadow ">
    <h5 class="mb-2 text-xl font-semibold last:tracking-tight text-stone-700">{{ $property->title }}</h5>
    <p class="font-normal text-stone-600 ">{{ $property->area }}m²</p>
    <p class="font-normal text-stone-600 ">{{ $property->city }} - {{ $property->postal_code }}</p> </br>
    <p class="font-bold text-orange-800 text-l">{{ number_format($property->price, thousands_separator: ' ') }} €
    </p>
</a>
