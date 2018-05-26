<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>stimpack-io</title>

        <!-- Bootstrap core CSS -->
        <link href="theme-vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="theme-vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Plugin CSS -->
        <link href="theme-vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" id="logo">STIMPACK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#what-is-this">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#gateways">Gateways</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="https://www.youtube.com/watch?time_continue=1&v=hY7m5jjJ9mM" target="_blank">|</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://data.stimpack.io/login">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="https://data.stimpack.io/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>STIMPACK</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="mb-5 color2 secondary-font">Stimpack makes the road to set up a project way shorter and faster and easier than you have ever experienced before</p>
            <a class="btn stim-button js-scroll-trigger font-600 secondary-font" href="#what-is-this">What is this?</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-800 color1" id="what-is-this">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading headline mb-5">What is this?</h2>
          </div>
          <div class="col-lg-8 mx-auto text-center">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hY7m5jjJ9mM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
          </div>
        </div>
      </div>
    </section>

    <section id="gateways">
      <div class="container bg-700 color1">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading headline">Gateways</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <a href="https://data.stimpack.io" class="color1">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-5x fa-cubes mb-3"></i>
                        <h3 class="mb-3 secondary-font font-600">Packs</h3>
                        <p class="mb-0 color2 secondary-font">Access ready-made packs</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="kickstarter.com" class="color1" target="_blank">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fab fa-5x fa-kickstarter mb-3"></i>
                            <h3 class="mb-3 secondary-font font-600">Kickstarter</h3>
                        <p class="mb-0 color2 secondary-font">Do you have enough minerals? Support our campaign at Kickstarter!</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="https://github.com/stimpack-io/stimpack" class="color1" target="_blank">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fab fa-5x fa-github mb-3"></i>
                            <h3 class="mb-3 secondary-font font-600">GitHub</h3>
                        <p class="mb-0 secondary-font color2">Check out the repo</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="https://data.stimpack.io/login" class="color1">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-5x fa-globe mb-3"></i>
                            <h3 class="mb-3 secondary-font font-600">Join!</h3>
                        <p class="mb-0 secondary-font color2">Register to be a part of the swarm</p>
                    </div>
                </a>
            </div>
        </div>
      </div>
    </section>

    <section class="bg-800" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading headline">We are looking for collaborators!</h2>
            <hr class="my-4">
            <p class="mb-5 color2 secondary-font">Send pull requests and/or get in touch with us on this email and we'd be happy if you want to join us!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mr-auto text-center">
              <i class="far fa-5x fa-envelope mb-3 color1 sr-contact"></i>
            <p>
              <a class="secondary-font color2-hover-color1" href="mailto:hello@stimpack.io">hello@stimpack.io</a>
            </p>
          </div>
        </div>
      </div>
  </section>

    <!-- Bootstrap core JavaScript -->
    <script src="theme-vendor/jquery/jquery.min.js"></script>
    <script src="theme-vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="theme-vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="theme-vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="theme-vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>
</html>
