<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Navbar</title>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/master.css')}}">
    <script>const navbarToggle = navbar.querySelector("#navbar-toggle");
        const navbarMenu = document.querySelector("#navbar-menu");
        const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
        let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

        const toggleNavbarVisibility = () => {
            isNavbarExpanded = !isNavbarExpanded;
            navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
        };

        navbarToggle.addEventListener("click", toggleNavbarVisibility);

        navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
        navbarMenu.addEventListener("click", toggleNavbarVisibility);</script>
</head>
<body>
<header id="navbar">
    <nav class="navbar-container container">
        <a href="{{url('/')}}" class="home-link">
            <div> <img width="50" src="{{ asset('assets/images/logoGSB.png') }}"> </div>

        </a>
        <button
                type="button"
                id="navbar-toggle"
                aria-controls="navbar-menu"
                aria-label="Toggle menu"
                aria-expanded="false"
        >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="navbar-menu" aria-labelledby="navbar-toggle">
            <ul class="navbar-links">
                @if(session('id'))
                    <li class="navbar-item"><a class="navbar-link" href={{url('listePraticien')}}>Praticiens</a></li>
                    <li class="navbar-item"><a class="navbar-link" href={{url('signOut')}}>Déconnexion</a></li>
                @else
                    <li class="navbar-item"><a class="navbar-link" href={{url('formLogin')}}>Connexion</a></li>
                @endisset
            </ul>
        </div>
    </nav>
</header>
<div class="container">
    @yield('content')
</div>

</body>
</html>
