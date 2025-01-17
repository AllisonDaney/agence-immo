<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <title>@yield('title') | ImmoAgencyLyon</title>
</head>

@php
    $route = request()->route()->getName();

@endphp

<body>
    <header class="z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8 bg-orange-100" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="{{ route('index') }}"
                    class="-m-1.5 p-1.5 text-stone-700 font-semibold text-lg hover:underline ">
                    Immo Agency Lyon
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="{{ route('property.index') }}"
                    class="font-semibold leading-6 text-stone-700 text-lg hover:underline ">Nos biens</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <form action="{{ route('login') }}" method="get">
                    @csrf
                    @method('get')
                    <a href="{{ route('login') }}"
                        class="font-semibold leading-6 text-stone-700 text-lg hover:underline">Se connecter</a>
                </form>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Immo Agency Lyon</span>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="{{ route('property.index') }}"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Nos
                                biens</a>
                        </div>
                        <div class="py-6">
                            <form action="{{ route('login') }}" method="get">
                                @csrf
                                @method('get')
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    @if (session('success'))
    <div class="p-4 mb-4 text-lg font-bold text-green-500">
            {{ session('success') }}
        </div>
    @endif


    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
