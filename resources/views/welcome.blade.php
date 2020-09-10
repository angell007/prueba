<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>Home Page - Shopper</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- jQuery -->
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="templatejs/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="templatecss/bootstrap.css?v=1.0" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="templatecss/ui.css?v=1.0" rel="stylesheet" type="text/css" />
    <link href="templatecss/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="templatejs/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>


</head>

<body>

    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light navbar-expand-lg">


        <div class="container">

            <div class="col-lg-3 d-flex align-items-center justify-content-center">
                <div class="brand-wrap">
                    <img class="logo" src="images/logo-dark.png">
                    <h2 class="logo-text">M&G</h2>
                </div>
                <!-- brand-wrap.// -->
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse p-3 " id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pl-0" href="#"> <strong style="font-size: 1.5em">Quienes Somos</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 1.5em">Contacto</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="font-size: 1.5em">Otros servicios</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="#">Foods and Drink</a>
                            <a class="dropdown-item" href="#">Home interior</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Category 1</a>
                            <a class="dropdown-item" href="#">Category 2</a>
                            <a class="dropdown-item" href="#">Category 3</a>
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li> --}}

                </ul>
            </div>

            <div class="widget-header dropdown">
                <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                    <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i>
                    </div>
                    <div class="text-wrap">
                        <small>Hello.</small>
                        <span>Login <i class="fa fa-caret-down"></i></span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">




                    <div class="col-md-12">
                        {{-- <div class="card shadow-sm "> --}}
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bienvenido a vehiculos M&G</h1>
                                        </div>

                                        <form class="user" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">

                                                <input type="email" name="email" class="form-control"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Ingresa Email ">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror



                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control"
                                                    id="exampleInputPassword" placeholder="Contraseña">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small"
                                                    style="line-height: 1.5rem;">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Recuerdame
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Log in') }}
                                                </button>

                                            </div>

                                            <hr>
                                            <a href="index.html" class="btn btn-google btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login con Google
                                            </a>
                                            <a href="index.html" class="btn btn-facebook btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login con Facebook
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="font-weight-bold small" href="register.html">Crea una cuenta!</a>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>

                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="#">Have account? Sign up</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
                </div>
                <!--  dropdown-menu .// -->
            </div>
        </div>


    </nav>


    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg-white m-3">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="card-banner" style="height:100vh; background-image: url('https://as.com/masdeporte/imagenes/2016/01/19/golf/1453230260_739943_1453231128_noticia_grande.jpg');">
                        <article class=" overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <form class="row mb-5">
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="select-wrap">
                                            <span class="icon icon-arrow_drop_down"></span>
                                            <select name="offer-types" id="offer-types"
                                                class="form-control d-block rounded-0">
                                                <option value="">Lot Area</option>
                                                <option value="1000">1000</option>
                                                <option value="800">800</option>
                                                <option value="600">600</option>
                                                <option value="400">400</option>
                                                <option value="200">200</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="select-wrap">
                                            <span class="icon icon-arrow_drop_down"></span>
                                            <select name="offer-types" id="offer-types"
                                                class="form-control d-block rounded-0">
                                                <option value="">Property Status</option>
                                                <option value="For Sale">For Sale</option>
                                                <option value="For Rent">For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="select-wrap">
                                            <span class="icon icon-arrow_drop_down"></span>
                                            <select name="offer-types" id="offer-types"
                                                class="form-control d-block rounded-0">
                                                <option value="">Location</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Belgium">Belgium</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="select-wrap">
                                            <span class="icon icon-arrow_drop_down"></span>
                                            <select name="offer-types" id="offer-types"
                                                class="form-control d-block rounded-0">
                                                <option value="">Lot Area</option>
                                                <option value="1000">1000</option>
                                                <option value="800">800</option>
                                                <option value="600">600</option>
                                                <option value="400">400</option>
                                                <option value="200">200</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="select-wrap">
                                            <span class="icon icon-arrow_drop_down"></span>
                                            <select name="offer-types" id="offer-types"
                                                class="form-control d-block rounded-0">
                                                <option value="">Bedrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="select-wrap">
                                            <span class="icon icon-arrow_drop_down"></span>
                                            <select name="offer-types" id="offer-types"
                                                class="form-control d-block rounded-0">
                                                <option value="">Bathrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5+">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <div class="mb-4">
                                            <div id="slider-range"
                                                class="border-primary ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                    style="left: 19.1919%; width: 55.5556%;"></div><span tabindex="0"
                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                    style="left: 19.1919%;"></span><span tabindex="0"
                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                    style="left: 74.7475%;"></span>
                                            </div>
                                            <input type="text" name="text" id="amount"
                                                class="form-control border-0 pl-0 bg-white" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                        <input type="submit"
                                            class="btn btn-primary btn-block form-control-same-height rounded-0"
                                            value="Search">
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                    <!-- ================= main slide ================= -->

                    <!-- ============== main slidesow .end // ============= -->
                </div>

                <!-- col.// -->
                <!-- col.// -->
            </div>
        </div>
        <!-- container .//  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    <!-- ========================= Blog ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg">Categorias</h4>
            </header>
            <div class="row">
                <div class="col-md-3">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/2.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Apartamentos</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/2.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Casas</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-3">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/3.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Bodegas</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>

                <div class="col-md-3">
                    <div class="card-banner" style="height:250px; background-image: url('images/posts/3.jpg');">
                        <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h5 class="card-title">Locales</h5>
                                <a href="#" class="btn btn-warning btn-sm"> View All </a>
                            </div>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>

            </div>
        </div>
    </section>
    <!-- ========================= Blog .END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">Recientemente agregados</h4>
            </header>
            <div class="row">
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR4x0ZUMKtyafTlo3Z7EY1XI5mmm1SpnGj8cw&usqp=CAU">
                        </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Another name of item</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://conexpertiz.com/_images/arriendo/01.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://conexpertiz.com/_images/arriendo/01.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->

        </div>
        <!-- container .//  -->
    </section>

    <!-- ========================= SECTION ITEMS ========================= -->
    <section class="section-request bg padding-y-sm">
        <div class="container">
            <header class="section-heading heading-line">
                <h4 class="title-section bg text-uppercase">Nuestros vehiculos</h4>
            </header>
            <div class="row">

                <aside class="col-sm-3">

                    <div class="card card-filter">
                        <article class="card-group-item">
                            <header class="card-header">
                                <a class="" aria-expanded="true" href="#" data-toggle="collapse"
                                    data-target="#collapse22">
                                    <i class="icon-action fa fa-chevron-down"></i>
                                    <h6 class="title">Por Categoria</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse " id="collapse22">
                                <div class="card-body">
                                    <form class="pb-3">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Search" type="text">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"><i
                                                        class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="list-unstyled list-lg">
                                        <li><a href="#">Cras justo odio <span
                                                    class="float-right badge badge-light round">142</span> </a></li>
                                        <li><a href="#">Dapibus ac facilisis <span
                                                    class="float-right badge badge-light round">3</span> </a></li>
                                        <li><a href="#">Morbi leo risus <span
                                                    class="float-right badge badge-light round">32</span> </a></li>
                                        <li><a href="#">Another item <span
                                                    class="float-right badge badge-light round">12</span> </a></li>
                                    </ul>
                                </div>
                                <!-- card-body.// -->
                            </div>
                            <!-- collapse .// -->
                        </article>
                        <!-- card-group-item.// -->
                        <article class="card-group-item">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse33">
                                    <i class="icon-action fa fa-chevron-down"></i>
                                    <h6 class="title">Por precio </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse" id="collapse33">
                                <div class="card-body">
                                    <input type="range" class="custom-range" min="0" max="100" name="">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Min</label>
                                            <input class="form-control" placeholder="$0" type="number">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label>Max</label>
                                            <input class="form-control" placeholder="$1,0000" type="number">
                                        </div>
                                    </div>
                                    <!-- form-row.// -->
                                    <button class="btn btn-block btn-outline-primary">Apply</button>
                                </div>
                                <!-- card-body.// -->
                            </div>
                            <!-- collapse .// -->
                        </article>
                        <!-- card-group-item.// -->
                        <article class="card-group-item">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse44">
                                    <i class="icon-action fa fa-chevron-down"></i>
                                    <h6 class="title">Por caracteristicas</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse44">
                                <div class="card-body">
                                    <form>
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">
                                                <span class="float-right badge badge-light round">5</span> Amoblado
                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">
                                                <span class="float-right badge badge-light round">13</span> Mayor a 3
                                                Habiataciones

                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">
                                                <span class="float-right badge badge-light round">12</span> Mayor a 2
                                                Baños

                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                        <label class="form-check">
                                            <input class="form-check-input" value="" type="checkbox">
                                            <span class="form-check-label">
                                                <span class="float-right badge badge-light round">32</span> Parqueadero

                                            </span>
                                        </label>
                                        <!-- form-check.// -->
                                    </form>
                                </div>
                                <!-- card-body.// -->
                            </div>
                            <!-- collapse .// -->
                        </article>
                        <!-- card-group-item.// -->
                    </div>
                    <!-- card.// -->

                </aside>
                <!-- col.// -->
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img
                                src="https://acrvehiculos.com/oferta-vehiculos/cartagena-de-indias/apartamentos-pisos-apartaestudios-bodegas-casas-oficinas-lotes-2.jpg">
                        </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img
                                src="data:image/jpeg;base64,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">
                        </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://conexpertiz.com/_images/arriendo/01.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->
            <div class="row">
                <div class="col-md-3 offset-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://conexpertiz.com/_images/arriendo/01.jpg"> </div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Good product</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://conexpertiz.com/_images/arriendo/01.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
                <!-- col // -->
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="https://conexpertiz.com/_images/arriendo/01.jpg"></div>
                        <figcaption class="info-wrap">
                            <h4 class="title">Product name goes here</h4>
                            <p class="desc">Some small description goes here</p>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div>
                            </div>
                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">ver mas</a>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                <!-- col // -->
            </div>
            <!-- row.// -->

        </div>
        <!-- container // -->
    </section>

    <!-- ========================= Subscribe ========================= -->
    <section class="section-subscribe bg-primary padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your
                inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i>
                                Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party.
                    </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
    <!-- ========================= Subscribe .END// ========================= -->
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-dark white">
        <div class="container">
            <section class="footer-top padding-top">
                <div class="row">
                    <aside class="col-sm-3 col-md-3 white">
                        <h5 class="title">Customer Services</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Help center</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Terms and Policy</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                            <li> <a href="#"> My Wishlist </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">About</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Our history </a></li>
                            <li> <a href="#"> How to buy </a></li>
                            <li> <a href="#"> Delivery and payment </a></li>
                            <li> <a href="#"> Advertice </a></li>
                            <li> <a href="#"> Partnership </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3">
                        <article class="white">
                            <h5 class="title">Contacts</h5>
                            <p>
                                <strong>Phone: </strong> +123456789
                                <br>
                                <strong>Fax:</strong> +123456789
                            </p>

                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i
                                        class="fab fa-facebook-f  fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i
                                        class="fab fa-instagram  fa-fw"></i></a>
                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i
                                        class="fab fa-youtube  fa-fw"></i></a>
                                <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i
                                        class="fab fa-twitter  fa-fw"></i></a>
                            </div>
                        </article>
                    </aside>
                </div>
                <!-- row.// -->
                <br>
            </section>
            <!-- //footer-top -->
        </div>
        <!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>