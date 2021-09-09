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
              <p class="font-italic text1">
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
              <p>Nous avons à notre actif une multitude de services qui repondrons à tous vos besoins tels qui soit.</p>
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
                      <p>Nous nous occupons de concevoir l'architecture de votre maison et de faire de devis.</p>
                  </div>
              </div>

              <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box">
                      <div class="icon"><i class="bx bx-tachometer"></i></div>
                      <h4><a href="">Fabrication de vitre (Vitrerie)</a></h4>
                      <p>Nous disposons d'un attelier entièrement dedier au vitrage, nous produisons et vendons des vitres. </p>
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
                    Premab-afique, a pour objectif de rassurer toutes personnes de la diaspora, les nationaux et tout autre individu à investir dans l'immobilier tout en étant rassurer.
                  </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Nos Atous</h4>
                  <p>
                    Nous avons du personnel très qualifié, une équipe composé  d'architectes, d'ingénieurs et techniciens disponible pour vous.
                    Nous avons de nombreuses compétences, représentées par les moyens humains déployés pour chaque chantier :
                    un bureau d’étude interne,
                    un conducteur de travaux,
                    un chef de chantier et son équip...
                  </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>La Commercialisation</h4>
                  <p> En plus de vous offrir ses services Les,  PREMAB-Afrique vends ces produits aux structures immobilières et aux particuliers...</p>
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
          <h2>Nos oeuvres</h2>
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
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            </p>
            <h3>Kouakou jean</h3>
          </div>

          <div class="testimonial-item">
            <p>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            </p>
            <h3>Tanoh Bouadou</h3>
          </div>

          <div class="testimonial-item">
            <p>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            </p>
            <h3>Tahi Ezan</h3>
          </div>

          <div class="testimonial-item">
            <p>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            </p>
            <h3>Koffi Kouassi</h3>
          </div>

          <div class="testimonial-item">
            <p>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
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
                <p>SILUE Chifolo , Commerçant demeurant à Abidjan 17 BP 1029 Abidjan 17.</p>
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
          <h2>Pourquoi nous choisir ?</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Actualité 1 (image) </h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Actualité 2 (image) </h3>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Actualité 3 (image) </h3>
            </div>
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
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed">Détenez-vous toutes les assurances légales ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq3" class="collapsed">Quelles qualifications affichez-vous ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Quelles sont vos références ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq5" class="collapsed">À quelles aides puis-je prétendre pour mes travaux de rénovation ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Quelle date pour quel livrable ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
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
