<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/app.css">


</head>
    
<body style="box-sizing: border-box">
    @livewireStyles
    @livewireScripts
    <nav class="navbar navbar-expand-lg bg-body-teritary bg-gradient stick-top" style="background-color: teal" >
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1 text-white" href="/">Hackheroes</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active text-white" aria-current="page" href="/quiz">Quiz</a>
                    <a class="nav-link active text-white" aria-current="page" href="/aboutus">About Us</a>
                    <a class="nav-link active text-white" aria-current="page" href="#"></a>
                </div>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                @guest
            
                <li class="nav-item text-white">
                    <a class="nav-link  text-white {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item text-white">
                    <a class="nav-link  text-white {{ (request()->is('register')) ? 'active' : '' }}"
                        href="{{ route('register') }}">Register</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" >
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        <li> <a class="dropdown-item" href="{{ route('dashboard') }}" onclick="event.preventDefault();
                            document.getElementById('dashboard-form').submit();">Dashboard</a>
                                <form id="dashboard-form" action="{{ route('dashboard') }}" method="GET">
                                    @csrf
                                </form>
                            </li>
                    </ul>
                </li>
                @endguest
                </ul>
                </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @yield('content')
</body>
