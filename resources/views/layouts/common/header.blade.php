<header>
    <!-- mobile top header -->
    <div class="mobile-top-header">
        <div class="container-lg">
            <div class="mobile-nav">
                <a href="{{ url('/') }}" class="brand-logo"> Satkar Hotel </a>
                <span class="open_modal_btn" data-bs-toggle="modal" data-bs-target="#search_room_modal">
                    <i class="bi bi-search"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="top-header">
        <div class="container-lg">
            <div class="d-flex align-items-center justify-content-between">
                <div class="right-part">
                    <ul>
                        <li>
                            <a href="mailto:mundradon1@gmail.com">
                                <i class="fa-regular fa-envelope"></i><span>mundradon1@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="whatsapp://send?phone=+977 9856985698">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>+977 9856985698</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="left-part">
                    <ul>
                        <li>
                            <a href="https://facebook.com/motuvai" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/motuvai" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/motuvai" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container-lg">
            <div class="row align-items-center justify-content-between">
                <div class="col-3">
                    <a href="{{ url('/') }}" class="brand-logo">My Application</a>
                </div>
                <div class="col-6">
                    <ul class="link-list">
                        <li><a href="{{ route('apple') }}">Iphone Series</a></li>
                        <li><a href="{{ route('samsung') }}">Samsung Series</a></li>

                        {{-- <li class="ms-3">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#search_room_modal"
                                class="dropdown-link">
                                <i class="bi bi-search"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>

                <div class="col-3">
                    @auth
                        <div class="profile__dropdown">
                            <div class="dropdown">
                                <a class=" dropdown-toggle d-flex align-items-center" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <p>{{ auth()->user()->name }}</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="/biddings">
                                            <span class="icon">
                                                <i class="fa-solid fa-heart"></i>
                                            </span>
                                            My Bid
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/products">
                                            <span class="icon">
                                                <i class="bi bi-phone"></i>
                                            </span>My Products
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/change-password">
                                            <span class="icon">
                                                <i class="fa-solid fa-unlock"></i>
                                            </span>
                                            Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="icon">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            </span>
                                            Logout
                                        </a>
                                        <form method="post" action="{{ route('logout') }}" id="logout-form">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <ul class="dropdown-list">
                            <li class="ms-3">
                                <a href="{{ route('login') }}" class="primary-button"> Login </a>
                            </li>
                            <li class="ms-3">
                                <a href="{{ route('register') }}" class="primary-outline-button"> Sign up </a>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>
