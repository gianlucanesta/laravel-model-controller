<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>

    <h1>Lista Film</h1>

    {{-- {{dd($movies)}} --}}
    <div class="container ">
        <div class="cards">
            @foreach ($movies as $movie)
            {{-- {{ dd($movie->title)}} --}}
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <p><strong>Original title:</strong> {{ $movie ->original_title}}</p>
                    <p><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
                    <p><strong>Data:</strong> {{ $movie->date  }}</p>
                    <p><strong>Voto:</strong> {{ $movie->vote  }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>