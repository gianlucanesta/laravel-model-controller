<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>

    <h1>Lista Film</h1>

    {{-- {{dd($movies)}} --}}

    @foreach ($movies as $movie)
    {{-- {{ dd($movie->title)}} --}}
    <div>
        <h2>{{ $movie->title }}</h2>
        <p><strong>Original title:</strong> {{ $movie ->original_title}}</p>
        <p><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
        <p><strong>Data:</strong> {{ $movie->date  }}</p>
        <p><strong>Voto:</strong> {{ $movie->vote  }}</p>
    </div>
    
    @endforeach

</body>
</html>