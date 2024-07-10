<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title') | MonAgenceImmo</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand p-2" href="\">Agence</a>
        <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            @php
            $route = request()->route()->getName();
                
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('property.index')}}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>Biens<span class="sr-only"></span></a>
                    </li>
                </ul>
            </div>
            </div>
    </nav>
    


        @yield('content')
    
    </div>
</body>
</html>