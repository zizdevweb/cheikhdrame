

@extends('layouts.app')


@section('contenu_page')
<div class="container">
   <h1> Ma page d'etude{($id)}<h1>
    </div>

@endsection




  <!-- About -->
  <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">

          <P><H1>FORMATIONS BASES SUR LE SYSTEME LMD</H1></p>
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
            <i class="icon-screen-desktop"></i>
          </span>
          <h4>
            <strong>Informatique general</strong>
          </h4>

        </div>


        <div class="row">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
              <i class="icon-feed"></i>
            </span>
            <h4>
              <strong>Reseau telecom</strong>
            </h4>

          </div>


        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-pencil"></i>
          </span>
          <h4>
            <strong>gestion et compta</strong>
          </h4>

        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-like"></i>
          </span>
          <h4>
            <strong>sante</strong>
          </h4>

            <i class="fas fa-heart"></i>
            </p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-mustache"></i>
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
                <p class="mb-0">comme en deuxieme:l'etudiant se presentera avec ses releves de notes et son frais d'inscription+les frais de soutenance en decembre pour l'obtention du diplome du fin de cycle</p>
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
                <p class="mb-0">Forme des savants ,des Presidents des Medccins,des experts comptable et desInformaticiens.
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

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">The buttons below are impossible to resist...</h2>
      <a href="#" class="btn btn-xl btn-light mr-4">Click Me!</a>
      <a href="#" class="btn btn-xl btn-dark">Look at Me!</a>
    </div>
  </section>

  <!-- Map -->
  <section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br />
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </section>

