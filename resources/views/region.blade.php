@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <!-- section nav bar -->
    <header class="navBar">
        <nav class="navbar navbar-dark fixed-top bg-dark bg-opacity-75">
            <div class="container-fluid">
                <a class="navbar-brand fw-bolder" href="#">{{ $region->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-secondary" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">CAMP REGIONAL YAGOUA 2023</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-bg-dark text-white rounded-1 p-2 w-50" aria-current="page" href="{{ route('welcome') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link w-50 p-2" href="#">Consulter les listes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link w-50 p-2" href="#">Les badges</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link w-50 p-2" href="#">A Propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link w-50 p-2" href="#">Contacts</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--Section img slider  -->
    <section class="img-slider2">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
                <div class="carousel-item active slideA1" data-bs-interval="10000">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    <div class="carousel-caption d-md-block w-100 px-2">
                        <h1 class="fw-bold display-4 text-secondary"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-duration="2000"
                        data-aos-easing="ease-in-sine"
                        >CIRCONSCRIPTION DU <br> DIAMARE I</h1>
                        <p class="text-white fw-bold my-3"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-duration="2000"
                        data-aos-delay="1000"
                        data-aos-easing="ease-in-sine"
                        >la JPC du Diamaré I après sa brilante prestation au Camp National <br> des Jeunes Ngaounadéré 2022</p>
                        <a href="{{ route('home') }}" class="btn btn-primary my-3"
                        data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom"
                        data-aos-duration="100"
                        data-aos-delay="3000"
                        data-aos-easing="ease-in-out"
                        >S'inscrire maintenant</a>
                    </div>
                </div>
                <div class="carousel-item slideA2" data-bs-interval="5000">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    <div class="carousel-caption d-md-block w-100 px-2">
                        <h1 class="fw-bold display-4 text-danger">CIRCONSCRIPTION DU <br> DIAMARE I</h1>
                        <p class="text-white fw-bold my-3">la JPC du Diamaré I après sa brilante prestation au Camp National <br> des Jeunes Ngaounadéré 2022</p>
                    </div>
                </div>
                <div class="carousel-item slideA3" data-bs-interval="5000">
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    <div class="carousel-caption d-md-block w-100 px-2">
                        <h1 class="fw-bold display-4 text-primary">CIRCONSCRIPTION DU <br> LOGONE ET CHARI</h1>
                        <p class="text-white fw-bold my-3">la JPC du Diamaré I après sa brilante prestation au Camp National <br> des Jeunes Ngaounadéré 2022</p>
                    </div>
                </div>
            </div>
            <i class="fa-solid fa-chevron-left" 
            class="carousel-control-prev" 
            type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            </i>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button> -->

            <i class="fa-solid fa-chevron-right"
            class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next"
            >
            </i>

            <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </section>

    <!-- section statistiques -->
    <section class="stats py-5 bg-dark">
        <div class="container px-2">
            <h1 class="fw-bolder text-center my-2 text-secondary">
                STATISTIQUE DES INSCRIPTIONS
            </h1>
            <P class="text-center my-3 text-white">
                Nous vous offrons un rapport en temps réel des inscriptions dans votre Région ! 
            </P>
            <div class="blocStats my-5 px-3">
                <div class="row d-flex justify-content-around">
                    @foreach($region->circonscriptions as $circonscription)
                        <div class="card col-sm-4 p-3 my-3 bg-dark" style="width: 20rem;">
                            <h5 class="card-title text-center fw-bold text-secondary">{{ $circonscription->name }}</h5>
                            <div class="HF d-flex justify-content-around my-2">
                                <button class="homme btn btn-outline-success">Homme : <span class="effectifH">550</span> </button>
                                <button class="femme btn btn-outline-warning">Femme : <span class="effectifF">122</span> </button>
                            </div>
                            <div class="T d-flex justify-content-center my-2">
                                <button class="femme btn btn-outline-secondary">TOTAL : <span class="effectifT">{{$circonscription->members->count()}}</span> </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="" class="btn btn-secondary d-block mx-auto p-2 my-3">
                    Consuter les listes
                </a>
            </div>
        </div>
    </section>

@endsection