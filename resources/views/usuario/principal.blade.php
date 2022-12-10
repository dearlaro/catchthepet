<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f535151ef6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css" />
    <title>Catch The Pet</title>
</head>

<body>
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
            <img src="{{ asset('img/Principal/gatoLoade.gif') }}" alt="" srcset="">
        </div>
    </div>
    <header>

        <nav id="menuHidden" class="menuHidden">
            <ul>
                <li><span href="javascript:void(0)" class="btnClose" onclick="closeNav()">&times;</span></li>
                <li><a href="">Como usar</a></li>
                <li><a href="#sec">Auau Fórum Pet</a></li>
                <li><a href="">Sobre nós</a></li>
                <li><a href="{{ route('usuario.game')}}">Mini Game</a></li>
                <li><a href="{{ route('usuario.tinderPet')}}">Match Pet</a></li>
                <li><a href="" style="border: none;">Onde esta meu pet</a></li>
                <a href="{{ route('usuario.login')}}" style="font-size:24px" class="fa">&#xf08b;</a>
            </ul>
        </nav>
        <span class="menu" id="menu" onclick="openNav()">&#9776;</span>

    </header>



    <section>

        <div class="img-gif">
            <img src="{{ asset('img/Principal/logoAnima.gif') }}" alt="" id="planet" class="planet">
        </div>
        <img src="{{ asset('img/Principal/mountains_behind.png') }}" alt="montanhas de tras" id="mountains_behind">
        <h2 id="text">Catch <br /> The Pet</h2>
        <a href="{{ route('usuario.tinderPet')}}" id="btn">Explore</a>
        <img src="{{ asset('img/Principal/mountains_front.png') }}" alt="montanhas da frente" id="mountains_front">


        <div class="map">
            <div class="backgroun-perfil">
                <div class="icon-perfil"><img src="{{ asset('img/Principal/teste.png') }}"></div>
            </div>
            <div class="backgroun-perfil-name"><label for="">Paçoca</label></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.113270818912!2d-47.21240988556126!3d-22.87227374238946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8b9576bd03a93%3A0xb652b12256f924!2sEtec%20-%20Escola%20T%C3%A9cnica%20Estadual%20de%20Hortol%C3%A2ndia!5e0!3m2!1spt-BR!2sbr!4v1668021868033!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <div class="sec" id="sec">
        <!-- form post-->
        <div class="containerTest">
        <div class="Container_Create_post">
            <div class="wrapper">
                <div class="create-post"></dic>
                    <h2>Criar publicação</h2>
                    <form action="#" class="" id="">
                    <div class="content">
                              <img src="{{ asset('img/Principal/logoredonda.png') }}" alt="" srcset="">
                            <div class="details">
                                <p>Rebecca Januario</p>
                                <div class="privacy">
                                    <i class="fas fa-user-friends"></i>
                                        <span>Friends</span>
                                        <i class="fas fa-caret-down"></i>
                                </div>
                            </div>
                        </div>
                        <textarea placeholder="O que está pensando?" required></textarea>
                        <div class="theme-emoji">
                                <img src="{{ asset('img/Principal/img-post/fb-icons/theme.svg') }}" alt="" srcset="">
                                <img src="{{ asset('img/Principal/img-post/fb-icons/smile.svg') }}" alt="" srcset="">
                            </div>
                            <div class="options">
                                <p>Adicione para Seu Post</p>
                                <ul class="list">
                                    <li><img src="{{ asset('img/Principal/img-post/fb-icons/gallery.svg') }}" alt="" srcset=""></li>
                                    <li><img src="{{ asset('img/Principal/img-post/fb-icons/tag.svg') }}" alt="" srcset=""></li>
                                    <li><img src="{{ asset('img/Principal/img-post/fb-icons/emoji.svg') }}" alt="" srcset=""></li>
                                    <li><img src="{{ asset('img/Principal/img-post/fb-icons/mic.svg') }}" alt="" srcset=""></li>
                                    <li><img src="{{ asset('img/Principal/img-post/fb-icons/more.svg') }}" alt="" srcset=""></li>
                                    </ul>
                        </div>
                        <button class="create-post-button">Post</button>
                    </form>
            </div> 
            <div id="audience">
                <div class="header">
                    <div class="arrow-back"><i class="fas fa-arrow-left"></i></div>
                    <p>Selecione a audiencia</p>
                </div>
                <div class="content-Audience">
                    <p>Quem pode ver seu post?</p>
                    <span>Seu post irá aparecer no feed de notícias, no seu perfil e nos resultados da pesquisa </span>
                </div>
                <ul class="list">
                    <li class="active">
                        <div class="column">
                        <div class="icon"><i class="fas fa-user-friends"></i></div>
                        <div class="details">
                        <p>Amigos</p>
                        <span>Somente seus amigos do Facebook</span>
                            </div>
                        </div>
                        <div class="radio"></div>
                    </li>

                    <li>
                        <div class="column">
                        <div class="icon"><i class="fas fa-user"></i></div>
                        <div class="details">
                        <p>Especifico</p>
                        <span>Só mostre para alguns amigos</span>
                            </div>
                        </div>
                        <div class="radio"></div>
                    </li>

                    <li>
                        <div class="column">
                        <div class="icon"><i class="fas fa-lock"></i></div>
                        <div class="details">
                        <p>Somente eu</p>
                        <span>Somente voce vera seu post</span>
                            </div>
                        </div>
                        <div class="radio"></div>
                    </li>

                    <li>
                        <div class="column">
                        <div class="icon"><i class="fas fa-cog"></i></div>
                        <div class="details">
                        <p>Customizado</p>
                        <span>Incluir e excluir amigos</span>
                            </div>
                        </div>
                        <div class="radio"></div>
                    </li>

                    <li>
                        <div class="column">
                        <div class="icon"><i class="fas fa-globe-asia"></i></div>
                        <div class="details">
                        <p>Publico</p>
                        <span>qualquer um dentro ou fora do facebook</span>
                            </div>
                        </div>
                        <div class="radio"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>


    </div>

    <!--start post-->
        <div class="container">
            <div class="post-body">
                <div class="user-info">
                    <div class="user">
                        <img src="{{ asset('img/Principal/img-post/Profile.png') }}" alt="" class="user-pro-pic" />
                        <h3>yoyo_Alex</h3>
                    </div>
                    <div class="post-option-icons">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>x</span>
                    </div>
                </div>
                <div class="date-time">

                    Mon 10 at 21:21 PM . <span class="fa-solid fa-earth-americas"></span>
                </div>
                <div class="description">Hora da fotinha S2 </div>
                <div class="post-detail">
                    <img src="{{ asset('img/Principal/img-post/photo-post.jpg') }}" class="upload-img" alt="">
                    <div class="likes-comment-preview">
                        <div class="likes-preview">
                            <span class="fas fa-thumbs-up"></span>
                            <span class="fas fa-heart"></span>
                            <span class="count-likes">50</span>
                        </div>
                        <div class="comment-share-preview">
                            <span>26 comments</span>
                            <span>20 shares</span>
                        </div>
                    </div>
                    <div class="likes-comment-share-icons">
                        <div class="like" tabindex="1">
                            <span class="far fa-thumbs-up"></span>
                            <i>Like</i>
                        </div>
                        <div class="comment">
                            <span class="far fa-comment"></span>
                            <i>Comment</i>
                        </div>
                        <div class="share">
                            <span class="fas fa-share"></span>
                            <i>Share</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->


        <!--start post-->
        <div class="container">
            <div class="post-body">
                <div class="user-info">
                    <div class="user">
                        <img src="{{ asset('img/Principal/img-post/Profile2.png') }}" alt="" class="user-pro-pic" />
                        <h3>julia_Nature</h3>
                    </div>
                    <div class="post-option-icons">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>x</span>
                    </div>
                </div>
                <div class="date-time">

                    Mon 10 at 19:08 PM . <span class="fa-solid fa-earth-americas"></span>
                </div>
                <div class="description">Sempre faça exames de rotina no seu pet. Quem ama cuida!</div>
                <div class="post-detail">
                    <img src="{{ asset('img/Principal/img-post/photo-post2.jpg') }}" class="upload-img" alt="">
                    <div class="likes-comment-preview">
                        <div class="likes-preview">
                            <span class="fas fa-thumbs-up"></span>
                            <span class="fas fa-heart"></span>
                            <span class="count-likes">45</span>
                        </div>
                        <div class="comment-share-preview">
                            <span>267 comments</span>
                            <span>25 shares</span>
                        </div>
                    </div>
                    <div class="likes-comment-share-icons">
                        <div class="like" tabindex="1">
                            <span class="far fa-thumbs-up"></span>
                            <i>Like</i>
                        </div>
                        <div class="comment">
                            <span class="far fa-comment"></span>
                            <i>Comment</i>
                        </div>
                        <div class="share">
                            <span class="fas fa-share"></span>
                            <i>Share</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->

        <!--start post-->
        <div class="container">
            <div class="post-body">
                <div class="user-info">
                    <div class="user">
                        <img src="{{ asset('img/Principal/img-post/Profile3.png') }}" alt="" class="user-pro-pic" />
                        <h3>diana_soul</h3>
                    </div>
                    <div class="post-option-icons">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>x</span>
                    </div>
                </div>
                <div class="date-time">

                    Mon 10 at 09:31 AM . <span class="fa-solid fa-earth-americas"></span>
                </div>
                <div class="description">Seu cãozinho tambem precisa caminhar.</div>
                <div class="post-detail">
                    <img src="{{ asset('img/Principal/img-post/photo-post3.jpg') }}" class="upload-img" alt="">
                    <div class="likes-comment-preview">
                        <div class="likes-preview">
                            <span class="fas fa-thumbs-up"></span>
                            <span class="fas fa-heart"></span>
                            <span class="count-likes">100</span>
                        </div>
                        <div class="comment-share-preview">
                            <span>21</span>
                            <span>19</span>
                        </div>
                    </div>
                    <div class="likes-comment-share-icons">
                        <div class="like" tabindex="1">
                            <span class="far fa-thumbs-up"></span>
                            <i>Like</i>
                        </div>
                        <div class="comment">
                            <span class="far fa-comment"></span>
                            <i>Comment</i>
                        </div>
                        <div class="share">
                            <span class="fas fa-share"></span>
                            <i>Share</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->


        <!--start post-->
        <div class="container">
            <div class="post-body">
                <div class="user-info">
                    <div class="user">
                        <img src="{{ asset('img/Principal/img-post/Profile4.png') }}" alt="" class="user-pro-pic" />
                        <h3>Italovaregeira </h3>
                    </div>
                    <div class="post-option-icons">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>x</span>
                    </div>
                </div>
                <div class="date-time">

                    Sun 09 at 20:15 PM . <span class="fa-solid fa-earth-americas"></span>
                </div>
                <div class="description">Sorria!!! :D</div>
                <div class="post-detail">
                    <img src="{{ asset('img/Principal/img-post/photo-post4.jpg') }}" class="upload-img" alt="">
                    <div class="likes-comment-preview">
                        <div class="likes-preview">
                            <span class="fas fa-thumbs-up"></span>
                            <span class="fas fa-heart"></span>
                            <span class="count-likes">783</span>
                        </div>
                        <div class="comment-share-preview">
                            <span>500</span>
                            <span>56</span>
                        </div>
                    </div>
                    <div class="likes-comment-share-icons">
                        <div class="like" tabindex="1">
                            <span class="far fa-thumbs-up"></span>
                            <i>Like</i>
                        </div>
                        <div class="comment">
                            <span class="far fa-comment"></span>
                            <i>Comment</i>
                        </div>
                        <div class="share">
                            <span class="fas fa-share"></span>
                            <i>Share</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->


        <!--start post-->
        <div class="container">
            <div class="post-body">
                <div class="user-info">
                    <div class="user">
                        <img src="{{ asset('img/Principal/img-post/Profile5.png') }}" alt="" class="user-pro-pic" />
                        <h3>Cdecarlos </h3>
                    </div>
                    <div class="post-option-icons">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>x</span>
                    </div>
                </div>
                <div class="date-time">

                    Sun 09 at 17:01 PM . <span class="fa-solid fa-earth-americas"></span>
                </div>
                <div class="description">Existe varios beneficios na castração, como:</div>
                <div class="post-detail">
                    <img src="{{ asset('img/Principal/img-post/photo-post6.jpg') }}" class="upload-img" alt="">
                    <div class="likes-comment-preview">
                        <div class="likes-preview">
                            <span class="fas fa-thumbs-up"></span>
                            <span class="fas fa-heart"></span>
                            <span class="count-likes">54</span>
                        </div>
                        <div class="comment-share-preview">
                            <span>6 comments</span>
                            <span>10 shares</span>
                        </div>
                    </div>
                    <div class="likes-comment-share-icons">
                        <div class="like" tabindex="1">
                            <span class="far fa-thumbs-up"></span>
                            <i>Like</i>
                        </div>
                        <div class="comment">
                            <span class="far fa-comment"></span>
                            <i>Comment</i>
                        </div>
                        <div class="share">
                            <span class="fas fa-share"></span>
                            <i>Share</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->

        <!--start post-->
        <div class="container">
            <div class="post-body">
                <div class="user-info">
                    <div class="user">
                        <img src="{{ asset('img/Principal/img-post/Profile6.png') }}" alt="" class="user-pro-pic" />
                        <h3>Light_Apple </h3>
                    </div>
                    <div class="post-option-icons">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>x</span>
                    </div>
                </div>
                <div class="date-time">

                    Sun 09 at 11:24 AM . <span class="fa-solid fa-earth-americas"></span>
                </div>
                <div class="description">Qual ração voce dá para seu gato?</div>
                <div class="post-detail">
                    <img src="{{ asset('img/Principal/img-post/photo-post7.jpg')}}" class="upload-img" alt="">
                    <div class="likes-comment-preview">
                        <div class="likes-preview">
                            <span class="fas fa-thumbs-up"></span>
                            <span class="fas fa-heart"></span>
                            <span class="count-likes">105</span>
                        </div>
                        <div class="comment-share-preview">
                            <span>94 comments</span>
                            <span>56 shares</span>
                        </div>
                    </div>
                    <div class="likes-comment-share-icons">
                        <div class="like" tabindex="1">
                            <span class="far fa-thumbs-up"></span>
                            <i>Like</i>
                        </div>
                        <div class="comment">
                            <span class="far fa-comment"></span>
                            <i>Comment</i>
                        </div>
                        <div class="share">
                            <span class="fas fa-share"></span>
                            <i>Share</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->
    </div>
    <script src="{{ asset('js/principalPreloader.js') }}"></script>
    <script>
        let planet = document.getElementById('planet');
        let mountains_behind = document.getElementById('mountains_behind');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountains_front');
        let header = document.querySelector('header')

        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            planet.style.top = value * 0.7 + 'px';
            mountains_behind.style.top = value * 0.5 + 'px';
            mountains_front.style.top = value * 0 + 'px';
            text.style.marginRight = value * 4 + 'px';
            text.style.marginTop = value * 1.2 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
            header.style.top = value * 0.5 + 'px';
        })

        function openNav() {
            document.getElementById("menuHidden").style.width = "285px";
            document.getElementById("menu").style.marginLeft = "285px";
            document.getElementById("menu").style.opacity = "0";
        }

        function closeNav() {
            document.getElementById("menuHidden").style.width = "0";
            document.getElementById("menu").style.marginLeft = "0";
            document.getElementById("menu").style.opacity = "1";
        }
    </script>

</body>

</html>