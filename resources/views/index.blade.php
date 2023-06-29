<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Kaká & Marcos - Início</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' id='bootstrap-css'  href='{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}' type='text/css' media='all' />
    <!-- Font Awesome Icons CSS -->
    <link rel='stylesheet' id='font-awesome'  href='{{asset('assets/css/fontawesome/css/font-awesome.min.css')}}' type='text/css' media='all' />
    <!-- Main CSS File -->
    <link rel='stylesheet' id='tilia-style-css'  href='{{asset('assets/css/style.css')}}' type='text/css' media='all' />
    <!-- favicons -->
    <link rel="icon" href="{{asset('assets/images/icons/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('images/icons/favicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/icons/favicon-180x180.png')}}" />
</head>
<body class="home">
<div class="menu-mask">
    <!-- MOBILE MENU HOLDER -->
    <div class="container mobile-menu-holder">
        <div class="row">
            <div class="col-md-12">
                <button class="exit-mobile">
                    <svg version="1.1" id="btn-menu-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
								<path d="M15.4,15.3l-0.1,0.1c-0.7,0.7-1.9,0.7-2.6,0L0.6,3.3c-0.7-0.7-0.7-1.9,0-2.6l0.1-0.1c0.7-0.7,1.9-0.7,2.6,0l12.1,12.1
									C16.2,13.4,16.2,14.6,15.4,15.3z"></path>
                        <path d="M0.7,15.4l-0.1-0.1c-0.7-0.7-0.7-1.9,0-2.6L12.7,0.6c0.7-0.7,1.9-0.7,2.6,0l0.1,0.1c0.7,0.7,0.7,1.9,0,2.6L3.3,15.4
									C2.6,16.2,1.4,16.2,0.7,15.4z"></path>
							</svg>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <!-- MOBILE MENU -->
                <ul class="menu-mobile">
                    <li class="menu-item current-menu-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="menu-item">
                        <a id="meuLink" href='{{route('home').'#recentes'}}'>Trabalhos Recentes</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('galeria')}}">Galeria</a>
                    </li>
                    <li class="menu-item">
                        <a id="mobile-menu-close" href="{{route('home').'#equipe'}}">Nossa Equipe</a>
                    </li>
                    <li class="menu-item">
                        <a id="mobile-menu-close" href="{{route('home').'#contato'}}">Contato</a>
                    </li>
                    <!-- /MOBILE MENU -->
                </ul>
            </div>
            <!-- /col-lg-7 -->
            <div class="col-lg-5">
                <div class="menu-contact">
                    <div class="mobile-content">
                        <h5 class="widgettitle">Informações de Contato</h5>
                        <div class="mobile-address"> Rua Das Escaramuça S/N <br> Condomínio Golf Country — Avaré <br> (14) 99717-2249 — Kaká <br> (14) 99717-6236 — Marcos <br> bricoletti@hotmail.com</div>
                        <h5 class="widgettitle">Social</h5>
                        <ul class="social-media">
                            <li><a class="social-facebook" href="https://www.facebook.com/kakaemarcosdecoracoes" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="social-instagram" href="https://www.instagram.com/espacokakaemarcos/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="social-email" href="mailto:bricoletti@hotmail.com" target="_blank"><i class="far fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /col-lg-5 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /MOBILE MENU HOLDER -->
<!-- HEADER -->
<header class="main-header header-5">
    <div class="container">
        <div class="top-header top-header-5">
            <div class="header-social header-social-5">
                <ul class="social-media">
                    <li><a class="social-facebook" href="https://www.facebook.com/kakaemarcosdecoracoes" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="social-instagram" href="https://www.instagram.com/espacokakaemarcos/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="social-email" href="mailto:bricoletti@hotmail.com" target="_blank"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="logo logo-5 logo-white"><a href="{{route('home')}}"><img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt="Kaka e Marcos" width="139" height="90"></a></div>
            <div class="btn-header btn-header-5"> </div>
            <!-- mobile menu button -->
            <div class="nav-button-holder nav-button-holder-5">
                <button type="button" class="nav-button">
                    <svg version="1.1" id="btn-menu-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
								<g>
                                    <path d="M2,4L2,4C0.9,4,0,3.1,0,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,3.1,3.1,4,2,4z"></path>
                                    <path d="M8,4L8,4C6.9,4,6,3.1,6,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,3.1,9.1,4,8,4z"></path>
                                    <path d="M14,4L14,4c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,3.1,15.1,4,14,4z"></path>
                                    <path d="M2,10L2,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,9.1,3.1,10,2,10z"></path>
                                    <path d="M8,10L8,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,9.1,9.1,10,8,10z"></path>
                                    <path d="M14,10L14,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,9.1,15.1,10,14,10z"></path>
                                    <path d="M2,16L2,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,15.1,3.1,16,2,16z"></path>
                                    <path d="M8,16L8,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,15.1,9.1,16,8,16z"></path>
                                    <path d="M14,16L14,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,15.1,15.1,16,14,16z"></path>
                                </g>
							</svg>
                </button>
            </div>
            <!-- /mobile menu button -->
        </div>
        <!-- /top-header -->
        <div class="header-container5">
            <nav class="nav-holder nav-holder-5">
                <ul class="menu-nav">
                    <li class="menu-item menu-item-has-children current-menu-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('home').'#recentes'}}">Trabalhos Recentes</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('galeria')}}">Galeria</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('home').'#equipe'}}">Nossa Equipe</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('home').'#contato'}}">Contato</a>
                    </li>
                    <!--<li class="menu-item menu-item-has-children">
                        <a href="portfolio-grid-v1-3-cols.html">Portfolios</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-grid-v1-3-cols.html">Portfolio Grid v1</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-grid-v1-2-cols.html">Portfolio Grid v1 2 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v1-3-cols.html">Portfolio Grid v1 3 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v1-4-cols.html">Portfolio Grid v1 4 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v1-5-cols.html">Portfolio Grid v1 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-grid-v2-4-cols.html">Portfolio Grid v2</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-grid-v2-2-cols.html">Portfolio Grid v2 2 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-3-cols.html">Portfolio Grid v2 3 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-4-cols.html">Portfolio Grid v2 4 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-5-cols.html">Portfolio Grid v2 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-masonry-v1-3-cols.html">Portfolio Masonry v1</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-masonry-v1-2-cols.html">Portfolio Masonry v1 2 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-3-cols.html">Portfolio Masonry v1 3 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-4-cols.html">Portfolio Masonry v1 4 Cols</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-5-cols.html">Portfolio Masonry v1 5 Cols</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="portfolio-list-zigzag.html">Portfolio List ZigZag</a></li>
                            <li class="menu-item"><a href="portfolio-slider.html">Portfolio Slider</a></li>
                            <li class="menu-item menu-item-has-children menu-item-parent-2level">
                                <a href="portfolio-grid-v1-5-cols.html">Portfolio FullScreen</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="portfolio-grid-v1-5-cols.html">Portfolio Grid v1 FullScreen</a></li>
                                    <li class="menu-item"><a href="portfolio-grid-v2-5-cols.html">Portfolio Grid v2 FullScreen</a></li>
                                    <li class="menu-item"><a href="portfolio-masonry-v1-5-cols.html">Portfolio Masonry v1 FullScreen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- /HEADER -->
<!-- HOME SLIDER -->
<div class="swiper-mt">
    <div class="swiper-wrapper">
        <div class="swiper-slide slider-img" style="background-image: url('{{asset('assets/images/home/slider-1.png')}}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <h1 class="display-2">Equipe Atenciosa</h1>
                    <span class="post-subtitle">Prezamos pela qualidade do seu momento especial.</span>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
        <div class="swiper-slide slider-img" style="background-image: url('{{asset('assets/images/home/slider-2.png')}}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <h1 class="display-2">Realizando Sonhos</h1>
                    <span class="post-subtitle"> 30 anos de felicidades realizadas.</span>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
        <div class="swiper-slide slider-img" style="background-image: url('{{asset('assets/images/home/slider-3.png')}}');">
            <div class="container slider-caption">
                <div class="slider-text">
                    <h1 class="display-2">Espaço Magnífico</h1>
                    <span class="post-subtitle">Perfeito para atender ao seu evento.</span>
                </div>
            </div>
        </div>
        <!-- /slider-img -->
    </div>
    <!-- /swiper-wrapper -->
    <div class="swiper-mt-button-prev" tabindex="0" role="button" aria-label="Previous slide">
        <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
					<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
						c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
            <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
						S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
				</svg>
    </div>
    <!-- /swiper-mt-button-prev -->
    <div class="swiper-mt-button-next" tabindex="0" role="button" aria-label="Next slide">
        <svg version="1.1" class="arrow-slider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
					<path d="M33.2,28.3l-8.8,8.8c-0.4,0.4-1.1,0.4-1.5,0l-1-1c-0.4-0.4-0.4-1.1,0-1.5l7-7l-7-7c-0.4-0.4-0.4-1.1,0-1.5l1-1
						c0.4-0.4,1.1-0.4,1.5,0l8.8,8.8C33.6,27.2,33.6,27.8,33.2,28.3z"></path>
            <path d="M27.5,55C12.3,55,0,42.7,0,27.5S12.3,0,27.5,0S55,12.3,55,27.5S42.7,55,27.5,55z M27.5,5C15.1,5,5,15.1,5,27.5
						S15.1,50,27.5,50S50,39.9,50,27.5S39.9,5,27.5,5z"></path>
				</svg>
    </div>
    <!-- /swiper-mt-button-next -->
</div>
<!-- /swiper-mt -->
<!-- /HOME SLIDER -->
<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content custom-page-template">
    <!-- SECTION 1 -->
    <div id="home-section-1-1" class="section-holder home-section-1-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 margin-bm50">
                    <div class="el-smalltitle">Sobre Nós</div>
                    <h2 class="display-4 margin-b30">Há 30 anos registrando sonhos.</h2>
                    <div class="row">
                        <p>Com 30 anos no mercado de festas e eventos dos quais as mais inusitadas cenografias já foram executadas. Nos rendemos ao que é o objetivo de nossos clientes: a realização de sonhos, pois são momentos únicos, que acontecem para ficarem guardados na memória por toda a vida, e nos orgulhamos de poder fazer parte desse momento na vida de cada um.</p>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /col-lg-6 -->
                <div class="col-lg-6">
                    <div class="margin-l50">
                        <p>Temos como um DNA da empresa a realização de grandiosos dias onde principalmente nos tornamos parte da família, para que possamos captar toda a essência deste momento único e transforma-lo em um dia inesquecível para todos. Cuidamos de cada detalhe para que esse dia especial seja perfeito. Por isso, nosso lema é: “Não fazemos decorações, nós realizamos sonhos”.</p>
                        <p>O nosso espaço de eventos é um lugar onde sonhos se tornam realidade. Localizado em uma área privilegiada é um espaço encantador oferece uma infraestrutura completa e serviços personalizados para tornar qualquer evento inesquecível.</p>
                        <div class="row margin-t30">
                            <div class="col-md-6">
                                <ul class="list-circle">
                                    <li>Amamos o que fazemos.</li>
                                    <li>Sua felicidade é a nossa prioridade.</li>
                                </ul>
                            </div>
                            <!-- /col-md-6 -->
                            <div class="col-md-6">
                                <ul class="list-circle">
                                    <li>Escutamos às suas necessidades.</li>
                                    <li>Buscamos a qualidade.</li>
                                </ul>
                            </div>
                            <!-- /col-md-6 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /margin-l50 -->
                </div>
                <!-- /col-lg-6 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION 1 -->

    <!-- SECTION 2 -->
    <div id="recentes" class="section-holder home-section-1-3">
        <div class="container">
            <div class="row align-items-center margin-b50">
                <div class="col-lg-6 tablet-margin-b30">
                    <div class="el-smalltitle">Portifólio</div>
                    <h2 class="display-4">Trabalhos Recentes</h2>
                </div>
                <!-- /col-lg-6 -->
                <div class="col-lg-6">
                    <div class="el-align-right">
                        <a href="{{route('galeria')}}" class="read-more">Ir para Galeria</a>
                    </div>
                </div>
                <!-- /col-lg-6 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-masonry-container">
                        <div class="portfolio-masonry portfolio-layout-masonry">
                            @foreach($eventos as $key => $data)
                                <div class="item-portfolio item-3cols wedding">
                                    <div class="post-image item-grid-image"><img loading="lazy" src="{{$data->capa_url}}" class="img-fluid" alt=" "  width="750" height="500"> <a class="cursor-eye" href="{{route('galeria_album', ['id' => $data->id])}}"> </a></div>
                                    <div class="item-text-holder">
                                        <h2 class="article-title display-6"><a href="gallery-masonry-3-cols.html">{{$data->nome_evento}}</a></h2>
                                        <ul class="portfolio-categ">
                                            <li>{{$data->tipo_evento}}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- /portfolio-masonry -->
                    </div>
                    <!-- /portfolio-masonry-container -->
                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION 2 -->
    <!-- SECTION 3 -->
    <div id="equipe" class="section-holder home-section-1-5">
        <div class="container">
            <div class="row align-items-center margin-b50">
                <div class="col-lg-6">
                    <div class="el-smalltitle">Nossa Equipe</div>
                    <h2 class="display-4">Os Criativos</h2>
                </div>
                <!-- /col-lg-6 -->
            </div>
            <!-- /row -->
            <div class="row justify-content-center margin-b30less">
                <div class="col-md-6 col-lg-3 margin-b30">
                    <div class="mt-img-scale margin-b15">
                        <img class="img-fluid radius10" src="{{asset('assets/images/team/01.png')}}" alt=" " />
                    </div>
                    <h5 class="margin-b10">Kaká</h5>
                    <div class="team-position col-xl-9 col-sm-8">Apaixonado pela arte, sempre faz o melhor para realizar os sonhos de seus clientes. Atuando há anos na área, trabalha com amor, tendo como resultado um trabalho impecável e encantador. Esse amor pela profissão faz diferença no resultado final.</div>

                </div>
                <div class="col-md-6  col-lg-3 margin-b30">
                    <div class="mt-img-scale margin-b15">
                        <img class="img-fluid radius10" src="{{asset('assets/images/team/02.png')}}" alt=" " />
                    </div>
                    <h5 class="margin-b10">Marcos</h5>
                    <div class="team-position col-xl-9 col-sm-8">Já a alguns anos neste mercado de trabalho se fez tão profissional em realizar eventos e festas com luxo e grandiosidade gigantesca, que hoje é referência em decoração de festas. Sempre com foco em entregar o melhor de si em tudo o que faz.</div>
                </div>
                <!-- /col-lg-3 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION 5 -->
    <!-- SECTION 6 -->
    <div id="home-section-1-6" class="section-holder home-section-1-6">

    </div>
    <!-- /SECTION 6 -->
</div>
<!-- /WRAP CONTENT -->
<!-- FOOTER -->
<div id="footer-instagram">
    <ul class="instagram-pics instagram-size-small">
        @foreach($fotos as $item)
            <li class=""><img src="{{$item->image_url}}" alt=""/></li>
        @endforeach
    </ul>
</div>
<footer>
    <div id="contato" class="container">
        <div class="footer-widgets">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="foo-block">
                        <div class="widget_text widget widget-footer">
                            <h5 class="widgettitle">Sobre Nós</h5>
                            <div class="textwidget">
                                <p>Nosso trabalho na área de eventos é gratificante, com paixão por criar momentos memoráveis, únicos e encantadores. Cuidamos de cada detalhe para que o evento reflita o estilo e a personalidade dos nossos clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="foo-block">
                        <div class="widget_text widget widget-footer">
                            <h5 class="widgettitle">Informações de Contato</h5>
                            <ul class="footer-contact">
                                <li><i class="fas fa-map-marker-alt"></i><span>Rua Das Escaramuça S/N </span></li>
                                <li><span>Condomínio Golf Country — Avaré</span></li>
                                <li><i class="fas fa-mobile-alt"></i><span>(14) 99717-2249 — Kaká</span></li>
                                <li><i class="fas fa-mobile-alt"></i><span>(14) 99717-6236 — Marcos</span></li>
                                <li><i class="far fa-envelope"></i><span>bricoletti@hotmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="foo-block">
                        <div class="widget_text widget widget-footer">
                            <h5 class="widgettitle">Links Rápidos</h5>
                            <ul>
                                <li><a href="{{route('home')}}">Inicio</a></li>
                                <li><a href="{{route('home'). '#recentes'}}">Trabalhos Recentes</a></li>
                                <li><a href="{{route('galeria')}}">Galeria</a></li>
                                <li><a href="{{route('home').'#equipe'}}">Nossa Equipe</a></li>
                                <li><a href="{{route('home').'#contato'}}">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="foo-block foo-last">
                        <div class="widget widget-footer">
                            <h5 class="widgettitle">Social</h5>
                            <ul>
                                <li><a href="https://www.facebook.com/kakaemarcosdecoracoes" target="_blank">Facebook</a></li>
                                <li><a href="https://www.instagram.com/espacokakaemarcos/" target="_blank">Instagram</a></li>
                                <li><a href="mailto:bricoletti@hotmail.com" target="_blank">E-Mail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="footer-copy"> <span class="footer-year">&copy; <script>document.write(new Date().getFullYear())</script></span> - Espaço Kaka & Marcos</div>
        </div>
    </div>
</footer>
<!-- /FOOTER -->
<div class="scrollup">
    <a class="scrolltop" href="#">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<!-- JS -->
<script src='{{asset('assets/js/jquery.js')}}'></script>
<script src='{{asset('assets/js/jquery-migrate.min.js')}}'></script>
<script src='{{asset('assets/css/bootstrap/js/popper.min.js')}}'></script>
<script src='{{asset('assets/css/bootstrap/js/bootstrap.min.js')}}'></script>
<script src='{{asset('assets/js/jquery.easing.min.js')}}'></script>
<script src='{{asset('assets/js/swiper.js')}}'></script>
<script src='{{asset('assets/js/isotope.js')}}'></script>
<script src='{{asset('assets/js/simple-lightbox.js')}}'></script>
<!-- MAIN JS -->
<script src='{{asset('assets/js/init.js')}}'></script>
</body>
</html>
