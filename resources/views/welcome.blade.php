@extends('layouts.app')

@section('content')

<header class="bg-dark">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex">
          <a class="navbar-brand text-primary fs-4 fw-bolder" href="#">CAMP REGIONAUX 2023</a>
          <button class="navbar-toggler text-bg-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active fw-bolder" aria-current="page" href="#">A Propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder" href="#">Contact</a>
              </li>
              <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li> -->
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

    <!-- le carrousel -->
  <section id="carrousel">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item slide1 active" data-bs-interval="10000">
          <!-- <img src="" class="d-block w-100" alt="..." /> -->
          <div class="carousel-caption d-md-block w-75">
            <h1 class=" fw-bold display-4 text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="2000" data-aos-easing="ease-in-sine">
              First slide label
            </h1>
            <p class="text-primary fw-bold my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="2000" data-aos-delay="2000" data-aos-easing="ease-in-sine">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item slide2" data-bs-interval="10000">
          <!-- <img src="./img/img13.jpg" class="d-block w-100" alt="..." /> -->
          <div class="carousel-caption d-md-block w-75">
            <h1 class=" fw-bold display-4 text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="2000" data-aos-easing="ease-in-sine">
              First slide label
            </h1>
            <p class="text-primary fw-bold my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="1000" data-aos-delay="2000" data-aos-easing="ease-in-sine">
              Some representative placeholder content for the first slide.
            </p>
          </div>
        </div>
        <div class="carousel-item slide3" data-bs-interval="10000">
          <!-- <img src="./img/6.jpeg" class="d-block w-100" alt="..." /> -->
          <div class="carousel-caption d-md-block w-75">
            <h1 class=" fw-bold display-4 text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="2000" data-aos-easing="ease-in-sine">
              LA JPC DE L'ADAMAOUA
            </h1>
            <p class="text-primary fw-bold my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="1000" data-aos-delay="2000" data-aos-easing="ease-in-sine">
              Une Jeunesse dynamique au Service du Seigneur dans la Région II.
            </p>
          </div>
        </div>
        <div class="carousel-item slide4" data-bs-interval="10000">
          <!-- <img src="./img/6.jpeg" class="d-block w-100" alt="..." /> -->
          <div class="carousel-caption d-md-block w-75">
            <h1 class=" fw-bold display-4 text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="2000" data-aos-easing="ease-in-sine">
              LA REGION DU SOLEIL LEVANT
            </h1>
            <p class="text-primary fw-bold my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
              data-aos-duration="1000" data-aos-delay="2000" data-aos-easing="ease-in-sine">
              Camp Régional dans la ville de Yokadouma.
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
  </section>

    <!-- Bouton Région -->
  <section class="boutonReg bg-dark py-3 region d-flex">
    <div class="container my-auto text-center">
      <h2 class="text-center fw-bolder text-white mt-5">
        INSCRIVEZ-VOUS DES MAINTENANT !
      </h2>
      <h4 class="text-center fw-bolder text-white-50 my-5">
        C'est quoi ta Région JPC ?
      </h4>
      <div class="polka1"></div>
      <div class="polka2"></div>
      <div class="row">
        @foreach($regions as $region)
          <div class="col-sm-6">
            <a href="{{ route('regions', ['id' => $region->id]) }}" type="button" class="btn btn-outline-secondary m-3 p-5 fw-bolder"
              data-aos="flip-left">
              {{ $region->name }}
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection
