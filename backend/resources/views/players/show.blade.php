<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>detail</h1>
    <form action="" method="post">
        <input type="text" name="playerName">
    </form>
    <p>{{ $plyr['name'] }}</p>
    <p>
        @foreach ($plyr->positions as $pstn)
        {{-- 上のところ、->positions()で指定するとエラー… まじでよくわからん --}}
            {{ $pstn->name }}
        @endforeach
    </p>
</body>
</html>