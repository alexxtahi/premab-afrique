<header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="{{ url('/') }}"><img src="{{ asset('Premab-Afrique-logo-mini.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="{{ url('/') }}">Acceuil</a></li>

          <li class="drop-down"><a href="">A propos</a>
            <ul>
              <li><a href="#about">A propos de nous</a></li>
              <li><a href="#team">Promoteurs</a></li>
            </ul>
          </li>


          <li  class="drop-down"><a >Services</a>
            <ul>
              <li><a href= "Construction.blade.php">Construction</a></li>
              <li><a href="#team">Renovation</a></li>
              <li><a href="#team">Vitrerie</a></li>
              <li><a href="#team">Pavage</a></li>
            </ul>
          </li>

          <li class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('Premab-Afrique-logo-mini.png') }}" alt="" class="img-fluid header-logo"></a></li>

          <li><a href="#portfolio">Divers</a></li>
          <li><a href="#pricing">Actualités</a></li>
          <li><a href="#contact">Contacts</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
