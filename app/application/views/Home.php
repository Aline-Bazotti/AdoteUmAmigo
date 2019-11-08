
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <!-- Site Title-->
        <title>Home</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 10]>
<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Page-->
        <div class="page">
            <div class="page-loader">
                <div class="brand-name text-center"><img src="<?= base_url() ?>assets/images/logo.png" alt=""/>
                </div>
                <div class="page-loader-body">
                    <div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>
                </div>
            </div>
            <!-- Page Header-->
            <header class="page-header">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-body-class="rd-navbar-absolute-linked" data-stick-up-clone="false" data-md-stick-up-offset="72px" data-lg-stick-up-offset="72px">
                        <div class="rd-navbar-top-panel">
                            <div class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></div>
                            <div class="rd-navbar-top-panel-content">
                                <ul class="inline-list-xxs">
                                    <li><a class="icon icon-xxs icon-circle icon-gray-outline icon-effect-1 fa fa-instagram" href="https://www.instagram.com/grupoamigobicho/" target="_BLANK"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-gray-outline icon-effect-1 fa fa-facebook" href="https://www.facebook.com/grupoamigobicho/" target="_BLANK"></a></li>
                                </ul>
                                <div class="object-inline"><span class="icon icon-sm icon-gray material-icons-phone"></span><a class="link link-md link-white" href="callto:#">(49) 98427-4557  </a></div>
                            </div>
                        </div>
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand text-center"><a class="brand-name" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.png" alt="" style="width: 50%;"/></a></div>
                            </div>
                            <!-- RD Navbar Nav-->
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-nav-wrap-bg"></div>
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="<?= base_url() ?>home/sobre">Sobre nós</a>
                                    </li>
                                    <li><a href="adopt-a-pet.html">Adote um pet</a>
                                        <ul class="rd-navbar-dropdown tabs-nav">
                                            <li><a href="<?= base_url() ?>Animais/gatos">Gatos</a>
                                            </li>
                                            <li><a href="<?= base_url() ?>Animais/cachorros">Cachorros</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="lost-&amp;-found.html">Achados &amp; Perdidos</a></li>
                                    <li><a href="pet-services.html">Serviços</a></li>
                                    <li><a href="news.html">Eventos</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Swiper-->
            <section>
                <div class="swiper-bg-wrap swiper-style-1 bg-gray-dark">
                    <div class="swiper-container swiper-slider swiper-bg swiper-height-1" data-autoplay="3500" data-slide-effect="fade">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-slide-bg="<?= base_url() ?>assets/images/slider-1-slide-1-1920x850.jpg"></div>
                            <div class="swiper-slide" data-slide-bg="<?= base_url() ?>assets/images/slider-1-slide-2-1920x850.jpg"></div>
                            <div class="swiper-slide" data-slide-bg="<?= base_url() ?>assets/images/slider-1-slide-3-1920x850.jpg"></div>
                        </div>
                        <!-- Swiper Navigation-->
                        <div class="swiper-button-prev"><span>Prev</span></div>
                        <div class="swiper-button-next"><span>Next</span></div>
                        <!-- Swiper pagination-->
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-bg-content">
                        <div class="jumbotron-custom jumbotron-custom-variant-1 context-dark">
                            <div class="shell">
                                <div class="jumbotron-custom-inner">
                                    <div class="complex-text wow fadeInUpSmall" data-wow-duration=".75s">
                                        <p class="h1 complex-text-main">salve</p>
                                        <div class="complex-text-aside">
                                            <p class="h4 mark mark-alternate">uma linda</p>
                                            <p class="h2">vida</p>
                                        </div>
                                    </div>
                                    <p class="h3-alternate wow fadeInUpSmall" data-wow-delay=".1s" data-wow-duration=".75s">adote um animal sem lar</p><a class="btn btn-blue-marguerite btn-effect-anis wow fadeInUpSmall" href="adopt-a-pet.html" data-wow-delay="0.2s" data-wow-duration=".75s">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- From & pets-->
            <section class="section-md-bottom bg-gray-light">
                <div class="shell">
                    <div class="box-form box-form-1">
                        <!-- RD Mailform-->
                        <form class="rd-mailform form-style-classic">
                            <div class="range range-xs-center range-sm-bottom spacing-30">
                                <div class="cell-xs-10 cell-sm-6 cell-md-3">
                                    <div class="form-group">
                                        <label class="form-label-outside" for="form-animal-type">Tipo do animal</label>
                                        <select class="form-control select-filter" id="form-animal-type" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="animal-type">
                                            <option value="1">Todos</option>
                                            <option value="2">Gato</option>
                                            <option value="3">Cachorro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-xs-10 cell-sm-6 cell-md-3">
                                    <div class="form-group">
                                        <label class="form-label-outside" for="form-sex">Sexo</label>
                                        <select class="form-control select-filter" id="form-sex" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="sex">
                                            <option value="1">Todos</option>
                                            <option value="2">Fêmea</option>
                                            <option value="3">Macho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-xs-10 cell-sm-6 cell-md-3">
                                    <div class="form-group">
                                        <label class="form-label-outside" for="age-group">Porte</label>
                                        <select class="form-control select-filter" id="age-group" data-placeholder="All age groups" data-minimum-results-for-search="Infinity" data-constraints="@Required" name="age-group">
                                            <option value="1">Todos</option>
                                            <option value="2">Pequeno</option>
                                            <option value="3">Médio</option>
                                            <option value="4">Grande</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="cell-xs-10 cell-sm-6 cell-md-3">
                                    <div class="form-group">
                                        <button class="btn btn-block btn-primary btn-effect-anis" type="submit">Procurar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="shell">
                    <div class="range spacing-30">
                        <div class="cell-sm-6">
                            <!-- Thumbnail modern-->
                            <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="<?= base_url() ?>assets/images/home1-1-567x381.jpg" alt="" width="567" height="381"/>
                                <div class="thumbnail-modern-caption">
                                    <div class="thumbnail-modern-caption-body">
                                        <div class="thumbnail-modern-title-left">Cachorros</div>
                                        <div class="thumbnail-modern-title-right"><span>Mais de</span>
                                            <div><span class="number">44</span><span>animais</span></div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-modern-caption-aside"><a class="thumbnail-modern-control" href="adopt-a-pet.html#adopt-dogs">Ver todos</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6">
                            <!-- Thumbnail modern-->
                            <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="<?= base_url() ?>assets/images/home1-2-567x381.jpg" alt="" width="567" height="381"/>
                                <div class="thumbnail-modern-caption">
                                    <div class="thumbnail-modern-caption-body">
                                        <div class="thumbnail-modern-title-left">Gatos</div>
                                        <div class="thumbnail-modern-title-right"><span>Mais de</span>
                                            <div><span class="number">30</span><span>animais</span></div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-modern-caption-aside"><a class="thumbnail-modern-control" href="adopt-a-pet.html#adopt-cats">Ver todos</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shell text-center">
                    <article class="box-text">
                        <h1>Mais de 75</h1>
                        <div class="group-lg group-middle">
                            <h3 class="displacement-1">Adoráveis animais</h3><a class="btn btn-blue-marguerite btn-effect-anis" href="adopt-a-pet.html">ver todos</a>
                        </div>
                    </article>
                </div>
            </section>

            <!-- About Us-->
            <section class="section-decoration-wrap">
                <div class="shell">
                    <div class="range range-sm-center">
                        <div class="cell-md-6 cell-lg-5">
                            <div class="section-decoration-image"><img src="<?= base_url() ?>assets/images/home1-5-922x657.jpg" alt="" width="922" height="657"/>
                            </div>
                        </div>
                        <div class="cell-sm-9 cell-md-6 cell-lg-7">
                            <div class="section-decoration-content">
                                <div class="section-lg">
                                    <h2>Sobre nós</h2>
                                    <!-- Bootstrap tabs-->
                                    <div class="tabs-custom tabs-horizontal tabs-line tabs-left" id="tabs-1">
                                        <!-- Nav tabs-->
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tabs-1-1" data-toggle="tab">Nossa missão</a></li>
                                            <li><a href="#tabs-1-2" data-toggle="tab">Nosso objetivo</a></li>
                                            <li><a href="#tabs-1-3" data-toggle="tab">Nossa visão</a></li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tabs-1-1">
                                                <p>Every year hundreds of animals such as dogs or cats become homeless for many reasons. Our mission is to find the homeless animals around the country and give them a better life.</p>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-1-2">
                                                <p>Our goal is to make Animal Shelter the first place potential adopters turn to when looking to get a new pet, ensuring that all healthy and treatable pets find loving homes.</p>
                                            </div>
                                            <div class="tab-pane fade" id="tabs-1-3">
                                                <p>We see the future of Animal Shelter as a compassionate society where companion animals are valued and treated with respect and are guaranteed to find loving homes and families.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- SUCCESS STORIES-->
            <section class="section-md bg-gray-light text-center">
                <div class="shell">
                    <div class="range spacing-30">
                        <div class="cell-xs-12">
                            <h2>HISTÓRIAS DE SUCESSO</h2>
                            <p class="large">Compartilhe uma foto e conte-nos o papel que os animais desempenham em sua vida.</p>
                        </div>
                        <div class="cell-xs-12">
                            <div class="range range-sm-center spacing-30">
                                <div class="cell-sm-10 cell-md-6 height-fill">
                                    <!-- Quote boxed-->
                                    <blockquote class="quote-boxed">
                                        <div class="quote-boxed-left"><img class="quote-boxed-image" src="<?= base_url() ?>assets/images/adocoes/1.jpg" alt="" width="280" height="320"/>
                                        </div>
                                        <div class="quote-boxed-body">
                                            <cite>Karen Sanders</cite>
                                            <p class="caption">and Lex</p>
                                            <p class="quote-text">
                                                <q>When I saw her picture on the site, I knew she had found her home.  She is a non-shedding bundle of cuteness affectionately known as ‘Lex”.</q>
                                            </p>
                                            <div class="quote-boxed-meta">
                                                <ul class="quote-boxed-meta-list">
                                                    <li class="object-inline"><span class="icon icon-sm icon-primary-filled icon-circle mdi mdi-thumb-up-outline"></span><span>10</span></li>
                                                    <li><span>March 15, 2016</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="cell-sm-10 cell-md-6 height-fill">
                                    <!-- Quote boxed-->
                                    <blockquote class="quote-boxed">
                                        <div class="quote-boxed-left"><img class="quote-boxed-image" src="<?= base_url() ?>assets/images/adocoes/2.jpg" alt="" width="280" height="320"/>
                                        </div>
                                        <div class="quote-boxed-body">
                                            <cite>Jasmine Lee</cite>
                                            <p class="caption">and Misty</p>
                                            <p class="quote-text">
                                                <q>After adopting Misty in 2012, my life has changed greatly. I really appreciate what you did for her, and I’m glad that she found us.</q>
                                            </p>
                                            <div class="quote-boxed-meta">
                                                <ul class="quote-boxed-meta-list">
                                                    <li class="object-inline"><span class="icon icon-sm icon-primary-filled icon-circle mdi mdi-thumb-up-outline"></span><span>43</span></li>
                                                    <li><span>May 08, 2016</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="cell-sm-10 cell-md-6 height-fill">
                                    <!-- Quote boxed-->
                                    <blockquote class="quote-boxed">
                                        <div class="quote-boxed-left"><img class="quote-boxed-image" src="<?= base_url() ?>assets/images/adocoes/3.jpg" alt="" width="280" height="320"/>
                                        </div>
                                        <div class="quote-boxed-body">
                                            <cite>Joanna Smith</cite>
                                            <p class="caption">and Delta</p>
                                            <p class="quote-text">
                                                <q>Delta is one of the most energetic and cheerful dogs I ever had! Thank you, Animal Shelter, for making my life more positive and happier!</q>
                                            </p>
                                            <div class="quote-boxed-meta">
                                                <ul class="quote-boxed-meta-list">
                                                    <li class="object-inline"><span class="icon icon-sm icon-primary-filled icon-circle mdi mdi-thumb-up-outline"></span><span>23</span></li>
                                                    <li><span>June 16, 2016</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <div class="cell-sm-10 cell-md-6 height-fill">
                                    <!-- Quote boxed-->
                                    <blockquote class="quote-boxed">
                                        <div class="quote-boxed-left"><img class="quote-boxed-image" src="<?= base_url() ?>assets/images/adocoes/4.jpg" alt="" width="280" height="320"/>
                                        </div>
                                        <div class="quote-boxed-body">
                                            <cite>Emily Peterson</cite>
                                            <p class="caption">and Franco</p>
                                            <p class="quote-text">
                                                <q>Thank you for helping me find a great friend for our family and children. Franco feels great in his new forever home, and it’s thanks to you!</q>
                                            </p>
                                            <div class="quote-boxed-meta">
                                                <ul class="quote-boxed-meta-list">
                                                    <li class="object-inline"><span class="icon icon-sm icon-primary-filled icon-circle mdi mdi-thumb-up-outline"></span><span>13</span></li>
                                                    <li><span>July 26, 2016</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-primary oh">
                <div class="shell">
                    <div class="range range-custom-bordered-small">
                        <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-bordered">
                            <div class="counter-box-bold">
                                <div class="counter" data-from="0" data-to="9">9</div>
                                <p class="counter-box-header">Anos ajudando os animais</p>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-bordered">
                            <div class="counter-box-bold">
                                <div class="counter" data-from="0" data-to="865">865</div>
                                <p class="counter-box-header">Animais adotados</p>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-4 cell-md-3 cell-bordered">
                            <div class="counter-box-bold">
                                <div class="counter" data-from="0" data-to="26">26</div>
                                <p class="counter-box-header">Voluntários</p>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-12 cell-md-3 height-fill">
                            <div class="col-decoration-skew">
                                <div class="col-decoration-skew-inner">
                                    <h2>Não</h2>
                                    <h5>Permaneça Indiferente</h5><a class="btn btn-trout-inverse btn-effect-anis btn-offset-medium" href="make-a-gift-online.html">Doe agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- recent news-->
            <section class="section-sm bg-white text-center">
                <div class="shell">
                    <h2>Notícias recentes</h2>
                    <div class="range range-sm-center spacing-30">
                        <div class="cell-sm-10 cell-md-6">
                            <!-- Post boxed-->
                            <article class="post-boxed">
                                <div class="post-boxed-image-wrap"><img class="post-boxed-image" src="<?= base_url() ?>assets/images/home1-10-572x333.jpg" alt="" width="572" height="333"/>
                                </div>
                                <div class="post-boxed-body">
                                    <p class="post-boxed-title"><a href="single-post.html">Top 4 Dog Breeds You Can Easily Take to Work</a></p>
                                    <div class="post-boxed-text">
                                        <p>A dog in the workplace provides many positive benefits. However, before you decide to bring your dog to work with you check your company policies...</p>
                                    </div>
                                    <div class="post-boxed-footer">
                                        <ul class="post-meta">
                                            <li><span class="icon icon-xs icon-tan-hide material-icons-access_time"></span>
                                                <time datetime="2016-01-01">February 10, 2016</time>
                                            </li>
                                            <li><span class="icon icon-xs icon-tan-hide mdi mdi-thumb-up"></span><span>23</span></li>
                                            <li><a href="single-post.html"><span class="icon icon-xs icon-tan-hide mdi mdi-comment-outline"></span><span>6</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="cell-sm-10 cell-md-6">
                            <!-- Post boxed-->
                            <article class="post-boxed post-boxed-xs-horizontal post-boxed-blue-marguerite">
                                <div class="post-boxed-image-wrap"><img class="post-boxed-image" src="<?= base_url() ?>assets/images/home1-11-237x268.jpg" alt="" width="237" height="268"/>
                                </div>
                                <div class="post-boxed-body">
                                    <p class="post-boxed-title"><a href="single-post.html">Wellness Care Plans for Your Pets</a></p>
                                    <div class="post-boxed-text">
                                        <p>Have you ever considered enrolling your pet in a wellness care plan? These plans are quickly gaining popularity, and with good reason...</p>
                                    </div>
                                    <div class="post-boxed-footer">
                                        <ul class="post-meta">
                                            <li><span class="icon icon-xs icon-tan-hide material-icons-access_time"></span>
                                                <time datetime="2016-01-01">February 10, 2016</time>
                                            </li>
                                            <li><span class="icon icon-xs icon-tan-hide mdi mdi-thumb-up"></span><span>23</span></li>
                                            <li><a href="single-post.html"><span class="icon icon-xs icon-tan-hide mdi mdi-comment-outline"></span><span>6</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <!-- Post boxed-->
                            <article class="post-boxed post-boxed-xs-horizontal post-boxed-tan-hide">
                                <div class="post-boxed-image-wrap"><img class="post-boxed-image" src="<?= base_url() ?>assets/images/home1-12-237x268.jpg" alt="" width="237" height="268"/>
                                </div>
                                <div class="post-boxed-body">
                                    <p class="post-boxed-title"><a href="single-post.html">Top 5 Most Affectionate Cats</a></p>
                                    <div class="post-boxed-text">
                                        <p>Contrary to popular belief, not all cats are the epitome of indifference. Some cat breeds are among the most affectionate and loving pets...</p>
                                    </div>
                                    <div class="post-boxed-footer">
                                        <ul class="post-meta">
                                            <li><span class="icon icon-xs icon-tan-hide material-icons-access_time"></span>
                                                <time datetime="2016-01-01">February 10, 2016</time>
                                            </li>
                                            <li><span class="icon icon-xs icon-tan-hide mdi mdi-thumb-up"></span><span>23</span></li>
                                            <li><a href="single-post.html"><span class="icon icon-xs icon-tan-hide mdi mdi-comment-outline"></span><span>6</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- RD Google Map-->
            <section class="box-wrap">
                <div class="box-wrap-map">
                    <div class="rd-google-map rd-google-map__model" data-zoom="15" data-x="-53.5182498" data-y="-26.729009">
                        <ul class="map_locations">
                            <li data-y="-26.729009" data-x="-53.5182498">
                                <p>Rua Sete de Setembro, 2455, Centro - São Miguel do Oeste/SC</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-wrap-content">
                    <div class="shell">
                        <div class="box-wrap-content-interactive">
                            <div class="box-contacts">
                                <h4>Endereço</h4>
                                <address>
                                    <p>Rua Sete de Setembro, 2455, Centro - São Miguel do Oeste/SC</p>
                                </address>
                                <h4>E-mail</h4><a class="link-gray" href="mailto:#">onggrupoamigobicho@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-md last-section bg-white text-center" style="background-color: whitesmoke;">
                <div class="shell">
                    <div class="range range-sm-center">
                        <div class="cell-sm-10 cell-md-10 cell-lg-6">
                            <h4>Entre em contato</h4>
                            <!-- RD Mailform-->
                            <form id="contato" class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="<?= base_url() ?>Contato/cadContato">
                                <div class="range range-sm-bottom spacing-20">
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" id="contact-first-name" type="text" name="nome" id="nome" data-constraints="@Required">
                                            <label class="form-label" for="contact-first-name">Nome completo</label>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" id="contact-last-name" type="text" name="telefone" id="telefone" data-constraints="@Numeric">
                                            <label class="form-label" for="contact-last-name">Telefone</label>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="contact-message" name="msg" id="msg" data-constraints="@Required"></textarea>
                                            <label class="form-label" for="contact-message">Mensagem</label>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" id="contact-email" type="email" name="email" id="email" data-constraints="@Email @Required">
                                            <label class="form-label" for="contact-email">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <button class="btn btn-tan-hide btn-block" type="submit">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Footer-->
            <section class="pre-footer-default text-center text-sm-left">
                <div class="shell">
                    <div class="range range-sm-center spacing-55">
                        <div class="cell-sm-6 cell-md-4">
                            <div class="brand-sm"><a href="index.html"><img src="<?= base_url() ?>assets/images/logo.png" alt="" width="176" height="45"/></a></div>
                            <p>Defendemos que os animais merecem Respeito, Amor, Cuidades e Dignidade, e repudiamos toda e qualquer forma de violência ou crueldade.</p>
                            <div class="group-sm group-middle"><span class="big text-blue-marguerite">Mídias sociais</span>
                                <ul class="inline-list-xxs">
                                    <li><a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-instagram" href="https://www.instagram.com/grupoamigobicho/"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-facebook" href="https://www.facebook.com/grupoamigobicho/"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4">
                            <h5 class="pre-footer-header text-uppercase">Flickr feed</h5>
                            <div class="row spacing-10 flickr" data-flickr-tags="tm-61279" data-photo-swipe-gallery="gallery">
                                <div class="col-xs-4">
                                    <div class="flickr-item" data-type="flickr-item"><a class="thumbnail-flickr" data-image_b="href" data-photo-swipe-item>
                                            <figure><img src="<?= base_url() ?>assets/images/_blank.png" data-image_m="src" data-title="alt" width="165" height="165" alt=""></figure>
                                            <div class="thumbnail-overlay"></div></a></div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="flickr-item" data-type="flickr-item"><a class="thumbnail-flickr" data-image_b="href" data-photo-swipe-item>
                                            <figure><img src="<?= base_url() ?>assets/images/_blank.png" data-image_m="src" data-title="alt" width="165" height="165" alt=""></figure>
                                            <div class="thumbnail-overlay"></div></a></div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="flickr-item" data-type="flickr-item"><a class="thumbnail-flickr" data-image_b="href" data-photo-swipe-item>
                                            <figure><img src="<?= base_url() ?>assets/images/_blank.png" data-image_m="src" data-title="alt" width="165" height="165" alt=""></figure>
                                            <div class="thumbnail-overlay"></div></a></div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="flickr-item" data-type="flickr-item"><a class="thumbnail-flickr" data-image_b="href" data-photo-swipe-item>
                                            <figure><img src="<?= base_url() ?>assets/images/_blank.png" data-image_m="src" data-title="alt" width="165" height="165" alt=""></figure>
                                            <div class="thumbnail-overlay"></div></a></div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="flickr-item" data-type="flickr-item"><a class="thumbnail-flickr" data-image_b="href" data-photo-swipe-item>
                                            <figure><img src="<?= base_url() ?>assets/images/_blank.png" data-image_m="src" data-title="alt" width="165" height="165" alt=""></figure>
                                            <div class="thumbnail-overlay"></div></a></div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="flickr-item" data-type="flickr-item"><a class="thumbnail-flickr" data-image_b="href" data-photo-swipe-item>
                                            <figure><img src="<?= base_url() ?>assets/images/_blank.png" data-image_m="src" data-title="alt" width="165" height="165" alt=""></figure>
                                            <div class="thumbnail-overlay"></div></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-9 cell-md-4 text-sm-center text-md-left">
                            <h5 class="pre-footer-header text-uppercase">Newsletter</h5>
                            <p>Enter your e-mail to get the latest news of Animal Shelter.</p>
                            <form class="rd-mailform form-bordered form-centered" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                <div class="form-group">
                                    <input class="form-control" id="footer-subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="footer-subscribe-email">Your e-mail address</label>
                                </div>
                                <button class="btn btn-primary btn-block btn-offset-small" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="page-footer-default text-center">
                <div class="shell">
                    <div class="range spacing-30">
                        <div class="cell-md-8 cell-lg-9 text-md-left">
                            <ul class="list-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">Sobre nós</a></li>
                                <li><a href="adopt-a-pet.html">Adote um pet</a></li>
                                <li><a href="lost-&amp;-found.html">Achados & Perdidos</a></li>
                                <li><a href="pet-services.html">Serviços</a></li>
                                <li><a href="news.html">Novidades & Eventos</a></li>
                            </ul>
                        </div>
                        <div class="cell-md-4 cell-lg-3 text-md-right">
                            <p class="rights">Grupo Amigo Bicho &nbsp;&copy;&nbsp;<span id="copyright-year"></span>
                                <!-- {%FOOTER_LINK}-->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- PhotoSwipe Gallery-->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__cent"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript-->
        <script src="<?= base_url() ?>assets/js/core.min.js"></script>
        <script src="<?= base_url() ?>assets/js/script.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>assets/js/jquery.form.min.js" type="text/javascript"></script>
    </body>
    <!-- Google Tag Manager -->
    <script>
        $("#contato").validate({
            rules: {
                nome: {
                    required: true
                },
                telefone: {
                    required: true
                },
                mensagem: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: 'Este campo é obrigatório.'
                },
                telefone: {
                    required: 'Este campo é obrigatório.'
                },
                mensagem: {
                    required: 'Este campo é obrigatório.'
                }

            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                $(form).ajaxSubmit({
                    dataType: 'json',
                    success: function (r) {
                        if (!r['error']) {
                            $('#nome').val('');
                            $('#telefone').val('');
                            $('#msg').val('');
                            $('#email').val('');
                            $('#form-sucesso').addClass('active');
                        } else {
                            $('#errorR').html(r['msg']);
                            $('#errorR').css('display', 'block');
                        }
                    }
                });
            }
        });
    </script><!-- End Google Tag Manager -->
    
    <div class="snackbars" id="form-sucesso">
        <p>
            <span class="icon text-middle mdi mdi-check icon-xxs"></span>
            <span>Enviada com sucesso!</span>
        </p>
    </div>
</html>