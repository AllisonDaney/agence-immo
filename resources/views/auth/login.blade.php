@extends('base')


@section('content')
    <div class="my-10">
        <form class="max-w-sm mx-auto" method="post" action="{{ route('login') }}">
            @csrf

            @include('shared.input', [
                'type' => 'email',
                'name' => 'email',
                'label' => 'Email',
            ])
            @include('shared.input', [
                'type' => 'password',
                'name' => 'password',
                'label' => 'Mot de passe',
            ])
            <button type="submit"
                class="bg-orange-800 rounded-lg text-sm px-4 py-2 text-center text-stone-50 btn-sm flex-grow-0">Se
                connecter</button>
        </form>
    </div>
@endsection
