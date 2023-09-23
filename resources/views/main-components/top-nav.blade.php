<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top card shadow">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-primary fs-2"><span class="text-secondary fs-2">Per</span>Toda</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link fs-3"><span
                            class="text-primary fs-3">Per</span>Toda</a></li>
            </ul>
            <form class="d-flex w-100 justify-content-center">
                <input type="text" class="searcho form-control rounded-pill border-primary w-75 p-3"
                    placeholder="Search any Site">
            </form>
            @auth
                <ul class="navbar-nav">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle py-1" type="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mx-1 fa fa-user"></i> {{ request()->user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0 mx-3" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a href="{{ route('user-profile') }}" class="nav-link btn btn-outline-primary w-100 p-1">
                                    <i class="mx-1 fa fa-user"></i> Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('create-list-get') }}" class="nav-link btn btn-outline-primary w-100 p-1">
                                    <i class="mx-1 fa fa-plus"></i> Create List
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('my-lists') }}" class="nav-link btn btn-outline-warning btn-lg w-100 p-1">
                                    <i class="mx-1 fa fa-list"></i> My Lists
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link btn btn-outline-warning btn-lg w-100 p-1"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Logut
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>

                    {{-- Second DropDown AUTH --}}





                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle py-1" type="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SPARE
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0 mx-3" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-primary w-100 p-1">
                                    <i class="mx-1 fa fa-user"></i>
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-primary w-100 p-1">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-warning btn-lg w-100 p-1">Community</a>
                            </li>
                        </ul>
                    </div> --}}



                    {{-- Second DropDown AUTH --}}
                </ul>
            @endauth

            @guest
                <ul class="navbar-nav">
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle py-1" type="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0 mx-3" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link btn btn-outline-primary w-100 p-1">
                                    <i class="mx-1 fa fa-user"></i>
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}"
                                    class="nav-link btn btn-outline-primary w-100 p-1">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-warning btn-lg w-100 p-1">Community</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Second DropDown GUEST  --}}



                    {{-- <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle py-1" type="button" id="navbarDropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SPARE
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-0 mx-3" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-primary w-100 p-1">
                                    <i class="mx-1 fa fa-user"></i>
                                    Login
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-primary w-100 p-1">Register</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link btn btn-outline-warning btn-lg w-100 p-1">Community</a>
                            </li>
                        </ul>
                    </div> --}}



                    {{-- Second DropDown GUEST --}}
                </ul>
            @endguest
        </div>
    </div>
</nav>
