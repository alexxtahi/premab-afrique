<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PREMAB-Afrique</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Styles -->
  @include('includes.css')
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="{{ url('/') }}" class="hero-logo" data-aos="zoom-in"><img src="{{ asset('assets/img/hero-logo.png') }}" alt=""></a>
      <h1 data-aos="zoom-in">PREMAB-Afrique</h1>
      <h2 data-aos="fade-up">Nous somme ensemble pour mieux construire</h2>
      <a data-aos="fade-up" href="#about" class="btn-get-started scrollto">Commencer</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  @include('includes.header')
  <!-- End Header -->

  <main id="main">

  <!-- ======= Content Section ======= -->
    @yield('content')
    <!-- End Content Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('includes.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Scripts -->
  @include('includes.scripts')

</body>

</html>
