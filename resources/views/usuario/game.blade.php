<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <script src="{{ asset('js/gameScript.js') }}" defer></script>
    <title>Game Dog Jump</title>
</head>
<body>

    <div id="preloader">
        <div class="inner">
           <img src="imagens/gatoLoade.gif" alt="" srcset="">
        </div>
    </div>

    <a href="{{ route('usuario.principal')}}"><img src="{{ asset('img/Game/seta.png') }}" class="icon-back" alt="voltar"></a>

    <div class="game-board">
        <img src="{{ asset('img/Game/clouds.png') }}" class="clouds">
        <img src="{{ asset('img/Game/dog.gif') }}" class="dog">
        <img src="{{ asset('img/Game/pipe.png') }}" class="pipe">
       
    </div>

    <script src="{{ asset('js/gamePreloader.js') }}"></script>
</body>
</html>