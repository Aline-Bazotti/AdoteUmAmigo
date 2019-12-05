
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>
        <!-- Site Title-->
        <title>Adopt pets</title>
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
            <header class="page-header">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="true" data-md-stick-up-offset="190px" data-lg-stick-up-offset="190px">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand-name" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.png" alt="" style="width: 65%;"/></a></div>
                            </div>
                            <!-- RD Navbar Nav-->
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li><a href="<?= base_url() ?>">Home</a>
                                    </li>
                                    
                                    <li><a href="">Adote um pet</a>
                                        <ul class="rd-navbar-dropdown tabs-nav">
                                            <li><a href="<?= base_url() ?>Animais/gatos">Gatos</a>
                                            </li>
                                            <li><a href="<?= base_url() ?>Animais/cachorros">Cachorros</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="<?= base_url() ?>Donativos">Donativos</a>
                                    </li>
                                    <li><a href="<?= base_url() ?>Usuario/Cadastro">Cadastre-se</a></li>
                                    <li><a href="<?= base_url() ?>Usuario/Login">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- Breadcrumbs & Page title-->
            <div class="page-title">
                <div class="page-title-text"><span data-content-to="#adopt-cats">Adote Gatos</span><span data-content-to="#adopt-dogs">Adopt Dogs</span><span data-content-to="#adopt-small-pets">Adopt Small Pets</span></div>
                <ul class="breadcrumbs-custom">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="adopt-a-pet.html">Adote um pet</a></li>
                    <li class="active"><span data-content-to="#adopt-cats">Gatos</span><span data-content-to="#adopt-dogs">Adopt Dogs</span><span data-content-to="#adopt-small-pets">Adopt Small Pets</span></li>
                </ul>
            </div>

            <!-- Adopt pets-->
            <section class="section-md bg-white text-center">
                <div class="shell">
                    <div data-content-to="#adopt-cats">
                        <h3>UM DOS GATOS PODE SE TORNAR SEU</h3>
                        <p class="big text-width-medium">De corajoso a dócil e carinhoso a independente, nós temos dezenas de gatinhos e gatos à espera de suas casas para sempre. Dê uma olhada e veja qual é o certo para você!</p>
                    </div>
                    <div data-content-to="#adopt-dogs">
                        <h3>Adopt a dog in New York City</h3>
                        <p class="big text-width-smaller">Looking for a true friend for you, your children or your family? Consider adopting a dog from Animal Shelter today!</p>
                    </div>
                    <div data-content-to="#adopt-small-pets">
                        <h3>Small Animals for Adoption</h3>
                        <p class="big text-width-small">Small animals can be great companions if you cannot afford a bigger pet or live in a small house, but are looking for someone cute to adopt.</p>
                    </div>
                    <!-- Bootstrap tabs-->
                    <div class="tabs tabs-custom tabs-vertical tabs-corporate tabs-wide" id="tabs-1" data-url-tabs="true">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#adopt-cats" data-toggle="tab">Gatos</a></li>
                            <li><a href="#adopt-dogs" data-toggle="tab">Cachorros</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <!-- Tab 1-->
                            <div class="tab-pane fade in active" id="adopt-cats"><img class="img-responsive" src="<?= base_url() ?>assets/images/adopt-cats-1-770x485.jpg" alt="" width="770" height="485"/>
                                <h4>Bring a New Cat Home</h4>
                                <p>Choosing to adopt a cat or kitten is an exciting time. Even though there are many things to consider before adopting a pet,  a cat from Animal Shelter can easily become a new member of your family and what’s more important find a loving family and home. Here are the cats and kittens we are glad to offer you for adoption.</p>
                                <div class="range spacing-30">
                                    <div class="cell-md-6">
                                        <!-- Thumbnail boxed vertical-->
                                        <div class="thumbnail-boxed thumbnail-boxed-vertical">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-cats-2-370x240.jpg" alt="" width="370" height="240"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Lavender</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>This beautiful cat had health issues her family couldn’t take care of, so she came to us...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>2.1 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>7 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-md-6">
                                        <!-- Thumbnail boxed vertical-->
                                        <div class="thumbnail-boxed thumbnail-boxed-vertical thumbnail-boxed-blue-marguerite">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-cats-3-370x240.jpg" alt="" width="370" height="240"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Moss</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>Moss needed more time and attention than her caretaker could provide, so she was...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>2.5 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>5 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-md-6">
                                        <!-- Thumbnail boxed vertical-->
                                        <div class="thumbnail-boxed thumbnail-boxed-vertical thumbnail-boxed-tan-hide">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-cats-4-370x240.jpg" alt="" width="370" height="240"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Nettle</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>As one of the oldest cats at our shelter, Nettle requires some special attention and...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>10 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>4 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-md-6">
                                        <!-- Thumbnail boxed vertical-->
                                        <div class="thumbnail-boxed thumbnail-boxed-vertical">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-cats-5-370x240.jpg" alt="" width="370" height="240"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Princess</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>This kitty was found as a stray and came to Animal Shelter to find a new home. People...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>2.1 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>6 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pagination-custom">
                                    <li class="disabled"><a href="#" aria-label="Previous"></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"></a></li>
                                </ul>
                            </div>
                            <!-- Tab 2-->
                            <div class="tab-pane fade" id="adopt-dogs">
                                <h4>Our Featured Dogs</h4>
                                <p>At Animal Shelter, we have a variety of dogs ready to be adopted today! They will be glad to become your best friends.Check out this list of featured dogs looking for good homes. You can also perform a search by zip code to meet available dogs in your area! If you live in New York City, don't forget to check out the dogs available at Animal Shelter.</p>
                                <div class="range spacing-30">
                                    <div class="cell-xs-12">
                                        <!-- Thumbnail boxed horizontal-->
                                        <div class="thumbnail-boxed thumbnail-boxed-horizontal">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-dogs-1-370x254.jpg" alt="" width="370" height="254"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Beasley</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>He was in a shelter that lacked the resources to continue to care for him, so Beasley came to our shelter to find a new home. He is playful and cheerful dog, who enjoys playing with toys and often...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>2.5 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>42 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <!-- Thumbnail boxed horizontal-->
                                        <div class="thumbnail-boxed thumbnail-boxed-horizontal thumbnail-boxed-blue-marguerite">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-dogs-2-370x254.jpg" alt="" width="370" height="254"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Jade</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>Jade needed help with her behavior, so she came to Animal Shelter to learn good manners and find a new home. She is ready to find a new home and a loving family. is very positive and emotional, so...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>12 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>47 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <!-- Thumbnail boxed horizontal-->
                                        <div class="thumbnail-boxed thumbnail-boxed-horizontal thumbnail-boxed-tan-hide">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-dogs-3-370x254.jpg" alt="" width="370" height="254"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Blake</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>Blake was delivered to our shelter after a brutal attack by other dogs. Our vets helped him to survive the results of this incident, and now he is ready to be adopted! He is doing very well with other dogs...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>10 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>92 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <!-- Thumbnail boxed horizontal-->
                                        <div class="thumbnail-boxed thumbnail-boxed-horizontal">
                                            <div class="thumbnail-boxed-left"><img class="thumbnail-boxed-image" src="<?= base_url() ?>assets/images/adopt-dogs-4-370x254.jpg" alt="" width="370" height="254"/>
                                            </div>
                                            <div class="thumbnail-boxed-body">
                                                <p class="thumbnail-boxed-title"><a href="single-page-pets.html">Niles</a></p>
                                                <div class="thumbnail-boxed-text">
                                                    <p>Niles is a handsome 4-year old Belgian/German shepherd mix arriving in NYC on November 19 from a high kill shelter in Alabama. This sweet boy is just waiting to find a forever home where he can cuddle...</p>
                                                </div>
                                                <div class="thumbnail-boxed-footer">
                                                    <ul class="thumbnail-boxed-meta">
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-event_available"></span><span>4.4 years old</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-done"></span><span>64 pounds</span></li>
                                                        <li><span class="icon icon-xs icon-tan-hide material-icons-place"></span><span>New York</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pagination-custom">
                                    <li class="disabled"><a href="#" aria-label="Previous"></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#" aria-label="Next"></a></li>
                                </ul>
                            </div>
                            <!-- Tab 3-->
                            <div class="tab-pane fade" id="adopt-small-pets">
                                <div class="range spacing-70">
                                    <div class="cell-md-6"><img class="img-responsive" src="<?= base_url() ?>assets/images/adopt-small-pets-1-370x240.jpg" alt="" width="370" height="240"/>
                                    </div>
                                    <div class="cell-md-6 text-gray-darker">
                                        <p>We have a selection of small animals available for adoption. Our animal shelter offers you a possibility to adopt almost any small pet that come in different shapes and sizes and can be perfect friends or companions for your family. Our range of small pets includes:</p>
                                        <ul class="marked-list">
                                            <li>Hamsters</li>
                                            <li>Rabbits</li>
                                            <li>Parrots</li>
                                        </ul>
                                    </div>
                                    <div class="cell-xs-12">
                                        <blockquote class="quote-primary">
                                            <div class="quote-primary-body">
                                                <svg class="quote-primary-mark" version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="15px" viewbox="0 0 21 15" overflow="scroll" xml:space="preserve" preserveAspectRatio="none">
                                                <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                                        c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                                        C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                                        c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                                        C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                                </svg>
                                                <div class="quote-primary-text">
                                                    <q>I got a rabbit called Max 2 years ago from your shelter. I am so glad he has joined my family. All my friends and relatives are so in love with him. He brings in an element of cuteness I didn’t know was missing. Thank you for Max, he is now the real member of my family.</q>
                                                </div>
                                            </div>
                                            <div class="quote-primary-footer">
                                                <cite>Dennis Williams</cite>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <div class="cell-xs-12">
                                        <div class="range spacing-negative-1">
                                            <div class="cell-md-6"><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-2-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Brittany</p>
                                                        <p class="thumbnail-minimal-subtitle">Budgerigar Parrot</p>
                                                    </div></a><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-3-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Harlow</p>
                                                        <p class="thumbnail-minimal-subtitle">Hamster</p>
                                                    </div></a><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-4-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">August</p>
                                                        <p class="thumbnail-minimal-subtitle">Budgerigar Parrot</p>
                                                    </div></a><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-5-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Christina</p>
                                                        <p class="thumbnail-minimal-subtitle">Rabbit</p>
                                                    </div></a>
                                            </div>
                                            <div class="cell-md-6"><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-6-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Martha</p>
                                                        <p class="thumbnail-minimal-subtitle">Hamster</p>
                                                    </div></a><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-7-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Mink</p>
                                                        <p class="thumbnail-minimal-subtitle">Budgerigar Parrot</p>
                                                    </div></a><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-8-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Penelope</p>
                                                        <p class="thumbnail-minimal-subtitle">Rabbit</p>
                                                    </div></a><a class="thumbnail-minimal" href="single-page-pets.html">
                                                    <div class="thumbnail-minimal-left"><img class="thumbnail-minimal-image-minimal" src="<?= base_url() ?>assets/images/adopt-small-pets-9-96x107.jpg" alt="" width="96" height="107"/>
                                                    </div>
                                                    <div class="thumbnail-minimal-body">
                                                        <p class="thumbnail-minimal-title">Macy</p>
                                                        <p class="thumbnail-minimal-subtitle">Budgerigar Parrot</p>
                                                    </div></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Page Footer-->
            <section class="pre-footer-default text-center text-sm-left">
                <div class="shell">
                    <div class="range range-sm-center spacing-55">
                        <div class="cell-sm-6 cell-md-4">
                            <div class="brand-sm"><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.png" alt="" width="176" height="45"/></a></div>
                            <p>As the leading animal welfare organization in the area, Animal Shelter is transforming the way people care about animals throughout the USA.</p>
                            <div class="group-sm group-middle"><span class="big text-blue-marguerite">Social media</span>
                                <ul class="inline-list-xxs">
                                    <li><a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-instagram" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-google-plus" href="#"></a></li>
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
                            <!-- RD Mailform-->
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
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About us</a></li>
                                <li class="active"><a href="adopt-a-pet.html">Adopt a Pet</a></li>
                                <li><a href="lost-&amp;-found.html">Lost & Found</a></li>
                                <li><a href="pet-services.html">Pet Services</a></li>
                                <li><a href="news.html">News & Events</a></li>
                            </ul>
                        </div>
                        <div class="cell-md-4 cell-lg-3 text-md-right">
                            <p class="rights">Animal Shelter&nbsp;&copy;&nbsp;<span id="copyright-year"></span>.&nbsp;<br class="veil-sm"><a class="link-underline" href="privacy-policy.html">Privacy Policy</a>
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
    </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>