<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark static-top sticky-top" style="background: #540300;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('image/logoAEO.png') }}" alt="logo" draggable="false" height="70"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-2 fs-4" href="#" style="color: white; font-weight: bold;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 fs-4" href="#" style="color: white; font-weight: bold; ">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 fs-4" href="#" style="color: white; font-weight: bold; ">Merchandise</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link mx-2" href="#" style="color: white; font-weight: bold; ">Our Ambassador</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link mx-2 fs-4" href="" style="color: white; font-weight: bold; ">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 fs-4" href="" style="color: white; font-weight: bold; ">Score & Ranking</a>
                </li>
                {{-- @if (Auth::user()) --}}
                    <li class="nav-item p-2">
                        <a href="#" class="shine action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-100">
                            <button class="btn w-100 text-uppercase fs-5 fw-bold" style="color: black; border-radius: 20px; background-color: #c99347">Register</button>
                        </a>
                    </li>
                    
                    <li class="nav-item p-2">
                        <a href="#" class="shine action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-100">
                            <button class="btn w-100 text-uppercase fs-5 fw-bold" style="color: black; border-radius: 20px; background-color: #c99347">Login</button>
                        </a>
                    </li>
                {{-- @endif --}}
            </ul>
        </div>
    </div>
</nav>