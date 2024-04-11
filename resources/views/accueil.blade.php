<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: "Libre Franklin", sans-serif;
        background-image: url('../sicile/mer.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }

      h1{
        font-size: 80px;
        color: rgb(0, 0, 0);
        margin-left: 10%;
      }

      img{
        object-fit: cover;
      }

      .carousel {
  border-radius: 10%; /* adjust the border radius as needed */
  width: 70%; /* adjust the width as needed */
  height: 600px; /* adjust the height as needed */
  margin: auto; /* center the carousel horizontally */
  -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
    box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
}

.carousel-inner {
  height: 100%; /* set the height of the inner container to match the carousel */
}

.carousel-item {
  height: 100%; /* set the height of each slide to match the carousel */
}

.carousel-item img {
  object-fit: cover; /* ensure the image covers the entire slide */
  height: 100%; /* set the height of the image to match the slide */
  width: auto; /* let the browser determine the width based on the aspect ratio */
}


    </style>
  
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1 class="text-end">Sicily Lines</h1>

    <div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <div class="col-8">
        <div id="CarouselAccueil" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#CarouselAccueil" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#CarouselAccueil" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#CarouselAccueil" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#CarouselAccueil" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#CarouselAccueil" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../sicile/nuit.jpg" class="rounded d-block w-100">
              <div class="container">
                <div class="carousel-caption">
                  <h5>Ragusa Ibla, Ragusa, RG, Italia </h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../sicile/crique.jpg" class="rounded d-block w-100 data-bs-interval=1000">
      
              <div class="container">
                <div class="carousel-caption">
                  <h5>Mondello, Palermo, PA, Italy</h5>
                  </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../sicile/port_italie.jpg" class="rounded d-block w-100 data-bs-interval=1000">
      
              <div class="container">
                <div class="carousel-caption">
                  <h5>Riserva naturale dello Zingaro, San Vito Lo Capo, Province of Trapani, Italy</h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../sicile/couche.jpg" class="rounded d-block w-100 data-bs-interval=1000">
      
              <div class="container">
                <div class="carousel-caption">
                  <h5>Tonnara di Scopello, Scopello, Castellammare del Golfo, Italy</h5>
                  </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="../sicile/italie.jpg" class="rounded d-block w-100 data-bs-interval=1000">
      
              <div class="container">
                <div class="carousel-caption">
                  <h5>Cefalù, Italy</h5>
                  </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#CarouselAccueil" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#CarouselAccueil" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
</div>


<div class="fixed-top p-3 text-end">
  @if (Route::has('login'))
    <div>
      @auth
        <a href="{{ url('/ferry') }}" class="btn btn-outline-light me-2">Accès page</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-light">Logout</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Log in</a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
        @endif
      @endauth
    </div>
  @endif
</div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>