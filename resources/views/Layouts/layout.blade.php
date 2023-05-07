<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuAdmin</title>
  <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/icons.imn.css')}}">
     <script src="{{asset('js/mdb.min.js')}}"></script>
     
</head>
<body>
  <header>
    <!-- Intro settings -->
    <style>
      /* Default height for small devices */
      #intro-example {
        height: 400px;
      }
  
      /* Height for devices larger than 992px */
      @media (min-width: 992px) {
        #intro-example {
          height: 600px;
        }
      }
    </style>
  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{'/'}}">Start</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{'login1'}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'register'}}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  
    <!-- Background image -->
    <div
      id="intro-example"
      class="p-5 text-center bg-image"
      style="background-image: url('https://uvg.edu.mx/blog/wp-content/uploads/2020/05/original-9e84128f1358bca28137f6b81aaa0c91.jpg');"
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">¡Bienvenido!  </h1>
            <h5 class="mb-4">Sistema especializado en contabilidad para tu negocio</h5>
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="https://youtu.be/o7ZYPwkJmwA"
              role="button"
              rel="nofollow"
              target="_blank"
            >Start tutorial</a
            >
            <a
              class="btn btn-outline-light btn-lg m-2"
              href="https://mdbootstrap.com/docs/standard/"
              target="_blank"
              role="button"
            ><i class="fas fa-download"></i>&nbsp;&nbsp;APP Mobile</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
<div class="container mt-5 mb-5">
    <h1>@yield('titulo')</h1>
    <hr class="hr">
    @yield('contenido')
</div>
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/gettmex.desarrollo" class="me-4 link-secondary">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>GETTMEX;
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Web page</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Android App's</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Network services</a>
          </p>
          <p>
            <a href="#!" class="text-reset">And other services</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Services</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>Jesus Maria, Ags. 20983</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            soporte@gettmex.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 52 449 202 3805</p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 52 449 370 8859</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">GETTMEX;</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer 
<script src="https://kit.fontawesome.com/be8188392f.js" crossorigin="anonymous"></script>-->
</body>
</html>