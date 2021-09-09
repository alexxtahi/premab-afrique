<!-- Get template from layouts/app.blade.php -->
@extends('layouts.app')
<!-- ======= Content Section ======= -->
@section('content')
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>A propos de nous</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="{{ asset('assets/img/image2.jpg') }}" class="img-fluid switch1" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Ensemble pour mieux construire</h3>
              <p class="font-italic text">
                Premab-afique est une entreprise de construction spécialisée dans le génie civil, le génie public et d'autres domaines.
                Nous possédons une vaste expertise dans  la  construction, la rénovation, l'électricité, l'etude et la conception de plan...
                Premab-afique réalise tous travaux de gros œuvre et rénovation, ainsi que toutes les structures du bâtiment, se positionnant ainsi comme
                un interlocuteur fiable dans le domaine de la construction
                l'entreprise s’appuie sur son professionnalisme et une réelle culture industrielle pour vous proposer la solution la mieux adaptée à vos besoins.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
          <div class="section-title">
              <h2>Services</h2>
              <p>Nous avons à notre actif une multitude de services qui repondrons à tous vos besoins quels qui soit.</p>
          </div>
          <div class="row">

              <div class="col-xl-3 col-md-6 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bxl-dribbble"></i></div>
                      <h4><a href="">Constructionn et renovation </a></h4>
                      <p>Construction et rénovation au meilleur prix. Conseils techniques et administratifs</p>
                  </div>
              </div>

              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 nav-link.active" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-file"></i></div>
                      <h4><a href="">Conception de plan</a></h4>
                      <p>Nous nous occupons de concevoir l'architecture de votre maison et son devis.</p>
                  </div>
              </div>

              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-tachometer"></i></div>
                      <h4><a href="">Fabrication de vitre (Vitrerie)</a></h4>
                      <p>Nous disposons d'un atelier entièrement dédié au vitrage, nous produisons et vendons des vitres. </p>
                  </div>
              </div>

              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-layer"></i></div>
                      <h4><a href="">Fabrication de pavé (pavage)</a></h4>
                      <p>Nous réalisons pour vous tous types de pavages (pose des pavés sur les Voiries) et de pose de dalles.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="{{ asset('assets/img/atouts1.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="{{ asset('assets/img/atouts.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="{{ asset('assets/img/atouts2.jpg') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="{{ asset('assets/img/featured-4.png') }}" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Nos objectifs</h4>
                  <p>
                    Premab-afique a pour objectif de rassurer toutes les personnes de la diaspora, les nationaux et tout autre individu à investir dans l'immobilier tout en étant rassuré.
                  </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Nos Atouts</h4>
                  <p>
                    Nous avons du personnel très qualifié, une équipe composée d'architectes, d'ingénieurs et de techniciens disponible pour vous.
                    Nous avons de nombreuses compétences, représentées par les moyens humains déployés pour chaque chantier :
                    un bureau d’étude interne, un conducteur de travaux, un chef de chantier et son équipe, etc.
                  </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>La Commercialisation</h4>
                  <p> En plus de vous offrir ses services, PREMAB-Afrique vends ces produits aux structures immobilières et aux particuliers.</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nos réalisations</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".filter-app">attelier</li>
              <li data-filter=".filter-card">chantier</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/vitre1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voir plus</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio//vitre1.jpg') }}" data-gall="portfolioGallery" class="venobox" ><i class="bx bx-plus"></i></a>
                  </a>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/vitre2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voir plus</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/vitre2.jpg') }}" data-gall="portfolioGallery" class="venobox" ><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/materiel1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voir plus</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/materiel1.jpg') }}" data-gall="portfolioGallery" class="venobox" ><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/chantier1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voir plus</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/chantier1.jpg') }}" data-gall="portfolioGallery" class="venobox" ><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/chantier2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voir plus</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/chantier2.jpg') }}" data-gall="portfolioGallery" class="venobox" ><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('assets/img/portfolio/chantier3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Voir plus</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('assets/img/portfolio/chantier3.jpg') }}" data-gall="portfolioGallery" class="venobox" ><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="section-title" data-aos="fade-up">
          <h2 style="color: white;">Commentaires</h2>
        </div>
        <div class="quote-icon">
          <i class="bx bxs-quote-right"></i>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
                la Société de Préfabrication des Matériaux en Béton (PREMAB-Afrique) contribue
                véritablement aux programmes de construction de logements, d’écoles et de
                réhabilitation de la voirie urbaine à Abidjan et dans les villes
                de l’intérieur.
            </p>
            <h3>Kouakou jean</h3>
          </div>

          <div class="testimonial-item">
            <p>
                PREMAB-Afrique envisage d'apporter sa participation de façon directe ou indirecte
                dans toutes entreprises ou sociétés ivoiriennes ou étrangères créées ou à créer,
                ayant un objet similaire ou connexe, notamment par voie de souscription ou d’achat
                de titres de création de sociétés nouvelles, d’apports, fusion, alliance ou
                associations en participation, groupement d’intéret économique.
            </p>
            <h3>Tanoh Bouadou</h3>
          </div>

          <div class="testimonial-item">
            <p>
                Nous sommes heureux de travailler en collaboration avec la Société de
                Préfabrication des Matériaux en Béton au vu de leur organisation remarquable
                et leur façon de travailler faisant ressortir leur professionnalisme.
            </p>
            <h3>Tahi Ezan</h3>
          </div>

          <div class="testimonial-item">
            <p>
                L’objectif est de réaliser un niveau de production et de 13 840 000 pavées de luxe
                de pavage par an afin de satisfaire le marché de l’immobilier, des voiries urbaines,
                des places publiques et du réseau routier.
            </p>
            <h3>Koffi Kouassi</h3>
          </div>

          <div class="testimonial-item">
            <p>
                Le pavage est une solution plus durable que le goudronnage (30 à 40 ans par rapport
                à 15 ans). Il permet en outre de modifier ou de rectifier plus facilement les routes.
                Heureusement que c'est l'une des spécialité de PREMAB-Afrique !
            </p>
            <h3>Kone Abdel</h3>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
            <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{ asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
            <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
            <img src="{{ asset('assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Promoteurs</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amany Michel KONAN</h4>
                <span>Economiste</span>
                <p>Monsieur Amany Michel KONAN, Economiste, demeurant à Abidjan, Yopougon Sogefia.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>SILUE Chifolo</h4>
                <span>Commerçant</span>
                <p>SILUE Chifolo, Commerçant demeurant à Abidjan 17 BP 1029 Abidjan 17.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>SILUE Nahoua</h4>
                <span>Chef d’Entreprise</span>
                <p>SILUE Nahoua, Chef d’Entreprise, demeurant à Douala, République du Cameroun.</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Actualités</h2>
        </div>

        <div class="row actu-row">

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <a href="https://www.facebook.com/Premab-Afrique-KONAN-102017285410702/photos/pcb.118587340420363/118587200420377/">
                <div class="box actu-box" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('assets/img/construction-1.jpg') }}" class="img-fluid actu-img" alt="">
                    <h3 class="text">Implantation des poteaux en semelles isolees et fosse septique.</h3>
                </div>
            </a>
          </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <a href="https://www.facebook.com/102017285410702/photos/a.102020655410365/102020632077034">
                <div class="box actu-box" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('assets/img/cuisine-moderne.jpg') }}" class="img-fluid actu-img" alt="">
                    <h3 class="text">Présentation d'une cuisine moderne</h3>
                </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Questions posées frequement</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-toggle="collapse" class="collapsed" href="#faq1">Puis-je obtenir un devis de travaux détaillé ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
                  Oui, les devis que nous proposons sont fonctions des travaux à faire sur le
                  chantier et montre en totalité les dépenses qui y sont associées.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed">Détenez-vous toutes les assurances légales ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Oui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq3" class="collapsed">Quelles qualifications affichez-vous ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                  Nous sommes qualifiés dans le domaine de la construction et la rénovation,
                  dans la conception de plans sur mesures, dans la vitrerie et dans la pavage.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Quelles sont vos références ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                PREMAB-AFRIQUE SARL AU CAPITAL DE 1.000.000 FCA<br>
                RCCM : CI-ABJ-2014-24601<br>
                CC : 1444336Y<br>
                CNPS : 245257<br>
                ABIDJAN-TIASSALE 17 BP 1029 ABIDJAN 17
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq5" class="collapsed">À quelles aides puis-je prétendre pour mes travaux de rénovation ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Des aides en tout genre en passant par la restauration de vos mobiliers jusqu'au
                retapage complet de votre appartement.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Quelle date pour quel livrable ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                  Les dates varient en fonction de la demande, quantité et des spécificités
                  des matériaux.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
  @include('includes.contacts')
    <!-- End Contact Section -->
@endsection
