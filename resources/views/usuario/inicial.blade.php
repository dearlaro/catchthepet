<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inicial.css') }}">
    <title>Inicial</title>
</head>
<body >
    <div id="preloader">
        <div class="inner">
           <img src="{{ asset('img/inicial/gatoLoade.gif ') }}" alt="" srcset="">
        </div>
    </div>

    <div class="main">
        <div class="imagens"> 
                <img src="{{ asset('img/inicial/logo.png ') }}" class="imgLogo"alt="logo" srcset="">
                <img src="{{ asset('img/inicial/logoAnima.gif ') }}" alt="Iconlogo" class="img">
        </div>
        <div class="button">
            <a href="{{ route('usuario.login')}}"><button class="btn"> Iniciar</button></a>
        </div>
    </div>


    <script src="{{ asset('js/inicialPreloader.js') }}"></script>
    <script>

    $(window).on('load', function () {
        $('#preloader .inner').fadeOut();
        $('#preloader').delay(10).fadeOut('slow'); 
        $('body').delay(10).css({'overflow': 'visible'});})
        
    </script>
      
</body>
</html>