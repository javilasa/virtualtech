<DOCTYPE html>
<html class='bg-secondary'>
  <head>
    <meta charset="utf-8"/>
		<title>Lección 2 de HTML5</title>
		<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
		<link rel="shortcut icon" href="favicon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>

  <body class='bg-body'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">VirtualTech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" data-content='home'>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-content='about'>About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-content='services'>Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Section Home -->
    <section id='home'>
      <div class="container">
        <div class="row">
          <div class="col-push-12 order-last col-md-6 order-md-first">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h1 class="u-custom-font u-font-oswald u-text u-text-palette-2-base u-text-1">Start a successful&nbsp; business</h1>
                <p class="u-text u-text-2">Virtual Tech is a platform that offers you a number of services to support your company's processes.</p>
                <p class="u-text freepic-text">
                  Image from <a href="https://www.freepik.com/photos/man-smartphone" class="u-active-none u-border-1 u-border-black u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1" target="_blank">Freepik</a>
                </p>
                <a href="https://nicepage.com/k/clothing-store-website-templates" class="rounded-pill u-button">read more</a>
            </div>
          </div>
          <div class="col-pull-12 order-first col-md-6 order-md-last">
            <div class="u-image-circle">
              <img class='w-100 wm-50' src='./assets/images/portrait-young-man-advertising-new-smartphone-showing-it-camera-against-blue-background.jpg'>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Services -->
    <section class="bg-light pt-5 pb-5 shadow-sm" id='services'>
      <div class="container">
        <div class="row pt-5">
          <div class="col-12">
            <h1 class="border-bottom mb-4">Our Services</h1>
          </div>
        </div>
        <div class="row">
          <!--ADD CLASSES HERE d-flex align-items-stretch-->
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
              <img src="https://i.postimg.cc/28PqLLQC/dotonburi-canal-osaka-japan-700.jpg" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Dōtonbori Canal</h5>
                <p class="card-text mb-4">Is a manmade waterway dug in the early 1600's and now displays many landmark commercial locals and vivid neon signs.</p>
                <a href="#" class="btn btn-primary text-white mt-auto align-self-start">Book now</a>
              </div>
            </div>
          </div>
          <!--ADD CLASSES HERE d-flex align-items-stretch-->
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
              <img src="https://i.postimg.cc/4xVY64PV/porto-timoni-double-beach-corfu-greece-700.jpg" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Porto Timoni Double Beach</h5>
                <p class="card-text mb-4">Near Afionas village, on the west coast of Corfu island. The two beaches form two unique bays. The turquoise color of the sea contrasts to the high green hills surrounding it.</p>
                <a href="#" class="btn btn-primary text-white mt-auto align-self-start">Book now</a>
              </div>
            </div>
          </div>
          <!--ADD CLASSES HERE d-flex align-items-stretch-->
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
              <img src="https://i.postimg.cc/TYyLPJWk/tritons-fountain-valletta-malta-700.jpg" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Tritons Fountain</h5>
                <p class="card-text mb-4">Located just outside the City Gate of Valletta, Malta. It consists of three bronze Tritons holding up a large basin, balanced on a concentric base built out of concrete and clad in travertine slabs.</p>
                <a href="#" class="btn btn-primary text-white mt-auto align-self-start">Book now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class='bg-secondary'>
    
      <div class="container">
          <div class="row" style="margin-top: 7px;">
                <p class="text-center">&copy; Copyright VirtualTech.</p> 
          </div>
          <!--<div class="bottom-footer">
              <div class="col-md-12"> 
                  <ul class="footer-nav">
                      <li> <a href="https://www.facebook.com/"> Facebook </a> </li>
                      <li> <a href="https://twitter.com/"> Twitter </a> </li>
                      <li> <a href="https://plus.google.com/"> Google+ </a> </li>
                  </ul>
              </div>
          </div>-->
      </div>
    
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="/assets/js/virtualtech.js"></script> 
  </body>
</html>
