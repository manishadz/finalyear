<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
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
            <a href="{{ route('registeration') }}"><span class="mx-3">sing up</a>
            <a href="{{ route('login') }}"><span class="">Login</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- search bar -->
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <form class="d-flex mx-auto">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <!---end search bar-->


      <!---slider--->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/coins.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Old Nepali Coin</h5>
              <p>This Coin was one of the oldest coin of nepal.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/khukuri.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Nepali Khukuri</h5>
              <p>One of the Oldest  Weapon of Nepal </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/image.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>नेपाली सारङ्गी</h5>
              <p>The Nepali Sarangi (Nepali: नेपाली सारङ्गी) is a Nepali folk instrument. It is a chordophone played by bowing. .</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!-- end slider--->



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
