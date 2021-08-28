<header id="header" class="d-flex align-items-center">
    <div class="container">

      <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
      <div class="logo d-block d-lg-none">
        <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="nav-inner">
          <li class="active"><a href="index.html">Acceuil</a></li>
          <li class="drop-down"><a href="">A propos</a>
            <ul>
              <li><a href="#about">A propos de nous</a></li>
              <li><a href="#team">Team</a></li>
            </ul>
          </li>
          <li><a href="#services">Services</a></li>

          <li class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a></li>

          <li><a href="#portfolio">Divers</a></li>
          <li><a href="#pricing">Evenements</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
