<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Plateforme_gestion de l'ecole</title>

    <!-- Bootstrap Core CSS --
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--

    < !-- Custom Fonts --
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
    <!-- Custom CSS --
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">-->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-dark bg-dark site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="/" aria-label="Produit">

   <img class="img-fluid" src="img/sidyy.png"  " width="100" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"></circle><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"></path></img>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="accueil"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">accueil</font></font></a>
    <a class="py-2 d-none d-md-inline-block" href="filiere"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">filiere  </font></font></a>
    <a class="py-2 d-none d-md-inline-block" href="etudiant"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">etudiant </font></font></a>
    <font style="vertical-align: inherit;"><a class="py-2 d-none d-md-inline-block" href="niveau"><font style="vertical-align: inherit;">niveau</font></a></font><a class="py-2 d-none d-md-inline-block" href="professeur"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">professeur </font></font></a>
    <a class="py-2 d-none d-md-inline-block" href="school"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">school</font></font></a>
    <a class="py-2 d-none d-md-inline-block" href="inscription"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">inscrire</font></font></a>
    <a class="py-2 d-none d-md-inline-block" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a>
  </div>
</nav>

<!-- Header --
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
-->

    @yield('contenu_page')

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
{{--                    <i class="icon-social-facebook"></i>--}}
                    <img class="img-fluid" src="img/facebook.png" alt="" width="85px">
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
{{--                    <i class="icon-social-watshapp"></i>--}}
                    <img class="img-fluid" src="img/wats.png" alt="" width="85px">
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
{{--                    <i class="icon-social-github"></i>--}}
                    <img class="img-fluid" src="img/twitter.png" alt="" width="85px">
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; UCDD 2019</p>
        <p class="text-muted small mb-0">sicap liberte 5/B en face terminus liberte 5</p>
        <p class="text-muted small mb-0">Tel 77 728 09 15 </p> <p class="text-muted small mb-0">Email : ucdd@gmail.com</p>

    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript --
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

< !-- Plugin JavaScript --
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->

<!-- Custom scripts for this template --
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>-->
<script !src="{{asset('js/all.js')}}"></script>

</body>

</html>
