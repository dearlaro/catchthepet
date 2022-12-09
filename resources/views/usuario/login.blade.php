<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Login</title>
</head>
<body class="gradient">

    <div id="preloader">
        <div class="inner">
           <img src="{{ asset('img/Login/gatoLoade.gif') }}" alt="" srcset="">
        </div>
    </div>


    <div class="main-login">
        <a href="{{ route('usuario.inicial')}}"><img src="{{ asset('img/Login/seta.png') }}" class="icon-back" alt="voltar"></a>
        <div class="left-login">
    
            <h1>Bem-Vindo!<br/>Estamos felizes em ve-lo por aqui</h1><br/><br/><br/><br/><br/><br/>
            <img src="{{ asset('img/Login/icon2.png') }}" class="left-login-image" alt="imagem" >
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Senha">
                </div>

                <div class="remember">
                    <label for="">
                        <input type="checkbox"> Remember me</label>
                        <a href="#">&nbspEsqueci a Senha</a>
                </div>
                <a href="{{ route('usuario.principal')}}" ><input type="submit" class="btnLogin" value="Avançar"></input ></a>

                <div class="input-box">
                    <p>Não possui uma conta?<a href="{{ route('usuario.cadastro')}}">&nbsp&nbsp Inscrever-se</a></p>
                </div>

                <h3 style="font-size: 8pt;">Ou</h3>
                <ul class="ul">
                    <li><img src="{{ asset('img/Login/facebook.svg') }}"></li>
                    <li><img src="{{ asset('img/Login/google.svg') }}"></li>
                    <li><img src="{{ asset('img/Login/twitter.svg') }}"></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/loginPreloader.js') }}"></script>
    <script>
          $(window).on('load', function () {
            $('#preloader .inner').fadeOut();
            $('#preloader').delay(10).fadeOut('slow'); 
            $('body').delay(10).css({'overflow': 'visible'});
            })
    </script>
</body>
</html>