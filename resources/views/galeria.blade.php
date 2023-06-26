<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Kaká & Marcos - Galeria</title>
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
    <link rel="icon" href="{{asset('assets/images/icons/favicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/icons/favicon-180x180.png')}}" />
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
                    <li class="menu-item">
                        <a href="{{route('home')}}">Inicio</a>
                    </li>
                    <li class="menu-item">
                        <a id="meuLink" href='{{route('home').'#recentes'}}'>Trabalhos Recentes</a>
                    </li>
                    <li class="menu-item current-menu-item">
                        <a href="#">Galeria</a>
                    </li>
                    <li class="menu-item">
                        <a id="mobile-menu-close" href="{{route('home').'#equipe'}}">Nossa Equipe</a>
                    </li>
                    <li class="menu-item">
                        <a id="mobile-menu-close" href="{{route('home').'#contato'}}">Contato</a>
                    </li>
                    <!-- /MOBILE MENU -->
                </ul>
                <!-- /MOBILE MENU -->
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
            <div class="logo logo-5 logo-white"><a href="{{route('home')}}"><img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt="Kaká e Marcos" width="139" height="90"></a></div>
            <div class="btn-header btn-header-5"></div>
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
                    <li class="menu-item">
                        <a href="{{route('home')}}">Inicio</a>
                    </li>
                    <li class="menu-item">
                        <a id="meuLink" href='{{route('home').'#recentes'}}'>Trabalhos Recentes</a>
                    </li>
                    <li class="menu-item current-menu-item">
                        <a href="#">Galeria</a>
                    </li>
                    <li class="menu-item">
                        <a id="mobile-menu-close" href="{{route('home').'#equipe'}}">Nossa Equipe</a>
                    </li>
                    <li class="menu-item">
                        <a id="mobile-menu-close" href="{{route('home').'#contato'}}">Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- /HEADER -->
<!-- TOP HEADER IMAGE -->
<div class="top-single-bkg top-single-gallery">
    <div class="topsingleimg">
        <img src="{{$banner}}" alt="" width="1920" height="1080">
    </div>
    <div class="inner-desc">
        <div class="container">
            <h1 class="display-2 single-post-title">Galeria de Eventos</h1>
            <span class="post-subtitle">Aqui você pode ver mais sobre o nosso trabalho</span>
        </div>
    </div>
</div>
<!-- /TOP HEADER IMAGE -->
<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="el-smalltitle">Galeria</div>
                <hr>
                <div class="portfolio-grid-container">
                    <div class="portfolio-grid portfolio-layout-masonry">
                        @foreach($eventos as $key => $data)
                            <div class="item-portfolio item-4cols wedding">
                                <div class="post-image item-grid-image"><img loading="lazy" src="{{$data->capa_url}}" class="img-fluid" alt=" " width="750" height="750"> <a class="cursor-eye" href="{{route('galeria_album', ['id' => $data->id])}}"> </a></div>
                                <div class="item-text-holder">
                                    <h2 class="article-title display-6"><a href="gallery-grid-3-cols.html">{{$data->nome_evento}}</a></h2>
                                    <ul class="portfolio-categ">
                                        <li>{{$data->tipo_evento}}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <div class="paginator d-flex justify-content-center">
                        {!! $eventos->links() !!}
                    </div>
                    <!-- /portfolio-grid -->
                </div>

                <!-- /portfolio-grid-container -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /WRAP CONTENT -->
<!-- FOOTER -->
<div id="footer-instagram">
    <ul class="instagram-pics instagram-size-small">
        @foreach($fotos as $key => $data)
            <li class=""><img loading="lazy" src="{{asset($data->image_url)}}" alt=""/></li>
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
