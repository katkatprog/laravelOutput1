<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>players</h1>
    @foreach ($plyrs as $plyr)
        <p>{{ $plyr['id'] }}, {{ $plyr['name'] }}, </p>
        <a href="/players/{{ $plyr['id'] }}">detail</a>
        <form action="/players/delete/{{ $plyr['id'] }}" method="post">
            @csrf
            <button>delete</button>
        </form>
    @endforeach

    <h2>new</h2>
    <form action="/players/create" method="post">
        @csrf
        <input type="text" name="playerName" placeholder="name of player" required>
        {{-- <select name="positionId">
            @foreach ($pstns as $pstn)
            <option value="{{ $pstn['id'] }}">{{ $pstn['name'] }}</option>
            @endforeach
        </select> --}}
        @foreach ($pstns as $pstn)
            <input type="checkbox" name={{ $pstn['name'] }} >{{ $pstn['name'] }}
        @endforeach

        <input type="submit" value="register">
    </form>
</body>
</html>