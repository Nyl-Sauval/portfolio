<nav class="navbar">
    <div class="container">
        <!-- Left side (Projets, À propos, Contact) -->
        <div class="navbar-left">
            <a class="navbar-brand" href="{{route('welcome')}}">Mon Portfolio</a>
            <div class="navbar-links">
                <a class="nav-link" href="{{route('welcome')}}">Projets</a>
                <a class="nav-link" href="#about">À propos</a>
                <a class="nav-link" href="#">Contact</a>
            </div>
        </div>

        <!-- Right side (Login, Register) -->
        <div class="navbar-right">
            @if (Auth::check())
                <a class="nav-link" href="{{ route('dashboard') }}">Tableau de bord</a>
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
            @endif
        </div>

        <!-- Toggler for small screens -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

