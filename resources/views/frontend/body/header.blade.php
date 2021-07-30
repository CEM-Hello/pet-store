<header class="header">
  <div class="overlay has-fade"></div>

  <nav class="nav-container">
    <a href="{{url('/')}}" class="header-logo">
      <img src="{{asset('frontend/assets/img/web-logo.svg')}}" alt="Pawsitively Pets" />
      <h1>Pawsitively Pets</h1>
    </a>
    <div class="mobile-cart">
      <a href="#" class="ms-3"><i class="fas fa-shopping-cart"></i></a>

      <a id="btnHamburger" href="#" class="header-toggle">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
    <div class="desktop-nav">
      <ul class="header-links">
        <li><a href="/about.html">About</a></li>
        <li>
          <a href="/our-recipes.html">Food</a>
          <ul>
            <li><a href="/for-dogs.html">For Dogs</a></li>
            <li><a href="/for-cats.html">For Cats</a></li>
            <li><a href="/treats.html">Treats</a></li>
          </ul>
        </li>
        <li>
          <a href="/pet-health.html">Health</a>
          <ul>
            <li><a href="/supplements.html">Supplements</a></li>
            <li><a href="/microbiome.html">Gut health kit</a></li>
            <li><a href="/research-and-development.html">Research</a></li>
            <li><a href="/learn.html">Learn</a></li>
          </ul>
        </li>
        <li><a href="/reviews.html">Reviews</a></li>
      </ul>
    </div>

    <div class="desktop-nav">
      <ul class="header-links">
        @auth
        <li><a href="{{ route('dashboard') }}">My Profile</a></li>
        @else
        <li><a href="{{ route('login') }}">Log In</a></li>
        @endauth
        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
      </ul>
    </div>
  </nav>

  <div class="header-menu has-fade">
    <a href="">About</a>
    <a href="">Food</a>
    <a href="">Health</a>
    <a href="">Learn</a>
    <a href="">Reviews</a>
      @auth
     <a href="{{ route('dashboard') }}">My Profile</a>
      @else
      <a href="{{ route('login') }}">Log In</a>
      @endauth
  </div>

</header>