<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container bg-white ">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Art</a></li>
              <li><a class="dropdown-item" href="#">coins</a></li>
              <li><a class="dropdown-item" href="#">musical instrument</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex ms-5">
        <a href="{{ route('register') }}"><span class="mx-3">sign up</a>
        <a href="{{ route('login') }}"><span class="">Login</a>
        </div>
      </div>
    </div>
  </nav>
