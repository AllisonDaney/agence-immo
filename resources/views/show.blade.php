@extends('base')

@section('title', $property->title)
    
@section('content')
<div class="container mt-5">

<h1>{{ $property->title}}</h1>
<h2>{{ $property->area}} m2 - {{ $property->city}} - {{ $property->postal_code}}</h2>

<div class="text-primary fw-bold" style="font-size: 4rem;">
    {{number_format($property->price, thousands_separator: ' ')}} €
</div>

<div class="mt-4 row">
    <div class="col-6">
    <h5>Description</h5>
    <p>{!! nl2br($property->content) !!}</p>
</div>
        <div class="col-6">
            <h5>Caractéristiques</h5>
            <table class="table table-striped">
                <tr>
                    <td>Surface habitable</td>
                    <td>{{ $property->area }} m2</td>
                </tr>
                <tr>
                    <td>Nombre de pièces</td>
                    <td>{{ $property->rooms }}</td>
                </tr>
                <tr>
                    <td>Nombre de chambres</td>
                    <td>{{ $property->bedrooms }}</td>
                </tr>
                <tr>
                    <td>Etage</td>
                    <td>{{ $property->floor }}</td>
                </tr>
                <tr>
                    <td>Localisation</td>
                    <td>{{ $property->address }} <br/>
                        {{ $property->postal_code }} - {{ $property->city }}
                    </td>
                </tr>

            </table>
        </div>

    
</div>
</div>
@endsection
