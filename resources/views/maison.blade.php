<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plateforme_gestion de l'ecole</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />  
    <!-- Custom styles for this template -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  <!-- Custom CSS -->
  <script src="{{asset('js/app.js')}}"></script>
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  

  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Start UCDD</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#page-top">Mots du directeur</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#about">formations bassees sur le LMD</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#services">Nos offre de formations</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#portfolio">conditions admissions</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#contact">Contact</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">UCDD travail + Dicipline = Reussite</h1>
      <h3 class="mb-5">
        <em>Il faut travailler, beaucoups travailler ,encore travailler ,toujours travailler.</em>
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
               
       
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



     </h3>
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">suivant</a>
    </div>
    <div class="overlay"></div>
  </header>


  <div class="container">
@yield('contenu_page')
</div>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#">
            <i class="icon-social-watshapp"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; UCDD 2019</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
