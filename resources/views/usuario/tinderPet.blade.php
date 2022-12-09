<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tinderPet.css') }}">
    <title>Card-Pet</title>
</head>
<body class="gradient">

    <div id="preloader">
        <div class="inner">
           <img src="img/gatoLoade.gif" alt="" srcset="">
        </div>
    </div>  

    <a href="{{ route('usuario.principal')}}"><img src="{{ asset('img/TinderPet/seta.png') }}" class="icon-back" alt="voltar"></a>
        <a href=""><img class="icon-chat" src="{{ asset('img/TinderPet/comment-dots-solid.svg') }}" alt="icon-chat"></a>
       

    <ion-icon id="dislike" name="heart-dislike"></ion-icon>
    <div class="swiper" id="swiper"> </div>
    <ion-icon id="like" name="heart"></ion-icon>
    <div class="text">
        <p>Seu Pet dos sonhos<br>
        Está a um match de voce!</p>
         <div class="shadow"></div>
    </div>
    <script src="{{ asset('js/tinderPreloader.js') }}"></script>
    <script src="{{ asset('js/tinderCard.js') }}"></script>
    <script src="{{ asset('js/tinderScript.js') }}"></script>
    <!--icon deslike and like -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>