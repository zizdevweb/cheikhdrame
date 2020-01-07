@extends('layouts.template')
@section('contenu_page')



    <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plateforme- gestion de lecole</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!--  &lt;!&ndash; Navigation &ndash;&gt;-->
<!--  -->

<!--  <a class="menu-toggle rounded" href="#">-->
<!--    <i class="fas fa-bars"></i>-->
<!--  </a>-->
<!--  <nav id="sidebar-wrapper">-->
<!--    <ul class="sidebar-nav">-->
<!--      <li class="sidebar-brand">-->
<!--        <a class="js-scroll-trigger" href="#page-top">Start UCDD</a>-->
<!--      </li>-->
<!--      <li class="sidebar-nav-item">-->
<!--        <a class="js-scroll-trigger" href="#page-top">Mots du directeur</a>-->
<!--      </li>-->
<!--      <li class="sidebar-nav-item">-->
<!--        <a class="js-scroll-trigger" href="#about">formations bassees sur le LMD</a>-->
<!--      </li>-->
<!--      <li class="sidebar-nav-item">-->
<!--        <a class="js-scroll-trigger" href="#services">Nos offre de formations</a>-->
<!--      </li>-->
<!--      <li class="sidebar-nav-item">-->
<!--        <a class="js-scroll-trigger" href="#portfolio">conditions admissions</a>-->
<!--      </li>-->
<!--      <li class="sidebar-nav-item">-->
<!--        <a class="js-scroll-trigger" href="#contact">Contact</a>-->
<!--      </li>-->
<!--    </ul>-->
<!--   -->
<!--     -->
<!--  -->

<!--  </nav>-->


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





  <!-- About -->
  <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">

          <P><H1>FORMATIONS BASES SUR LE SYSTEME LMD</H1> </P>
            <p>

              L’architecture des études est fondée sur 2 grades (Licence, Master, ) Diplômes déclinés en domaines, mentions et spécialités.
              Organisation de formation en semestre.
              Système composé d’unités d’enseignement (U.E) ou modules.</p><br>

              <p> Un crédit est une unité de mesure des enseignements.
          Le crédit est une unité qui permet à l’université d’attribuer une valeur numérique aux études et travail exigés d’un étudiant pour atteindre les objectifs d’une activité d’enseignement ou de recherche.
          </p><br>


            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">suivant</a>
          </div>
        </div>
      </div>
    </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h3 class="text-secondary mb-0">Nos offres de formation</h3>
        <h2 class="mb-5"></h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
{{--            <i class="icon-screen-desktop"></i>--}}
              <a href="page"><img class="img-fluid" src="img/monitor.png" alt="" width="85px"></a>
          </span>
          <h4>
            <strong>Informatique general</strong>
          </h4>

        </div>


        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">

{{--              <i class="icon-feed"></i>--}}

                <a href="reseau"><img class="img-fluid" src="img/reseau.png" alt="" width="85px"></a>
            </span>
            <h4>
              <strong>Reseau telecom</strong>
            </h4>

          </div>


        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
{{--            <i class="icon-pencil"></i>--}}
              <a href="compt"><img class="img-fluid" src="img/compta.png" alt="" width="85px"></a>
          </span>
          <h4>
            <strong>gestion et compta</strong>
          </h4>

        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
{{--            <i class="icon-like"></i>--}}
              <a href="sante"><img class="img-fluid" src="img/health.png" alt="" width="85px"></a>
          </span>
          <h4>
            <strong>sante</strong>
          </h4>

            <i class="fas fa-heart"></i>
            </p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
{{--            <i class="icon-mustache"></i>--}}
              <a href="agro"><img class="img-fluid" src="img/agro.png" alt="" width="85px"></a>
          </span>
          <h4>
            <strong>agro alimentaire</strong>
          </h4>

        </div>
      </div>
    </div>

  </section>



  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">

        <h3 class="text-secondary mb-0">conditions admissions</h3>
        <h2 class="mb-5"></h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>prmieire annee</h2>
                <p class="mb-0">avoir le bac, age 18 a 23ans ,4photos d'identite, extrait de naissance et frais d'inscription(apres avoir inscrire l'etudiant a automatiquement sa carte scolaire durant toute l'annee)</p>
              </span>
            </span>
            <img class="img-fluid" src="img/cite.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Deuxime annee de licence</h2>
                <p class="mb-0">apres avoir valide l1 en respectant le nombre de credit ;l'etudiant se presentera avec ses releves de notes et son frais d'inscription.</p>
              </span>
            </span>
            <img class="img-fluid" src="img/elle.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Troisieme annee</h2>
                <p class="mb-0">comme en deuxieme annee:l'etudiant se presentera avec ses releves de notes et son frais d'inscription+les frais de soutenance en decembre pour l'obtention du diplome du fin de cycle</p>
              </span>
            </span>
            <img class="img-fluid" src="img/ecole.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>UCCD de DAKAR</h2>
                <p class="mb-0">Forme des savants ,des Presidents des Medeccins,des experts comptable et desInformaticiens.
                  Vennez tenter votre change c'est maintenant .
                  AVEC UCCD VOTRE VIE CHANGE.
                </p>
              </span>
            </span>
            <img class="img-fluid" src="img/ils.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

{{--  <!-- Call to Action -->--}}
{{--  <section class="content-section bg-primary text-white">--}}
{{--    <div class="container text-center">--}}
{{--      <h2 class="mb-4">The buttons below are impossible to resist...</h2>--}}
{{--      <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>--}}
{{--      <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>--}}
{{--    </div>--}}
{{--  </section>--}}

  <!-- Map -->
  <section id="contact" class="map">


    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </section>

{{--  <!-- Footer -->--}}
{{--  <footer class="footer text-center">--}}
{{--    <div class="container">--}}
{{--      <ul class="list-inline mb-5">--}}
{{--        <li class="list-inline-item">--}}
{{--          <a class="social-link rounded-circle text-white mr-3" href="#">--}}
{{--            <i class="icon-social-facebook"></i>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        <li class="list-inline-item">--}}
{{--          <a class="social-link rounded-circle text-white mr-3" href="#">--}}
{{--            <i class="icon-social-watshapp"></i>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--        <li class="list-inline-item">--}}
{{--          <a class="social-link rounded-circle text-white" href="#">--}}
{{--            <i class="icon-social-github"></i>--}}
{{--          </a>--}}
{{--        </li>--}}
{{--      </ul>--}}
{{--      <p class="text-muted small mb-0">Copyright &copy; UCDD 2019</p>--}}
{{--    </div>--}}
{{--  </footer>--}}

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

{{--    <header class="masthead d-flex">--}}
{{--    <div class="container text-center my-auto">--}}
{{--        <h1 class="mb-1">UCDD travail + Dicipline = Reussite</h1>--}}
{{--        <h3 class="mb-5">--}}
{{--            <em>Il faut travailler, beaucoups travailler ,encore travailler ,toujours travailler.</em>--}}

{{--            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--                <div class="carousel-inner">--}}
{{--                    <div class="carousel-item active">--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--            </div>--}}



{{--        </h3>--}}
{{--        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">suivant</a>--}}
{{--    </div>--}}
{{--    <div class="overlay"></div>--}}
{{--</header>--}}

{{--    <div class="title m-b-md">--}}
{{--      <h1>  Ma page d'etude  </h1>--}}
{{--    </div>--}}




@endsection
