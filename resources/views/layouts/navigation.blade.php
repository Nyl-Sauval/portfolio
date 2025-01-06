<nav class="navbar">
    <div class="container">
        <!-- Logo -->
        <div class="navbar-center">
            <a href="{{ route('welcome') }}">
                <img class="logo" src="{{asset('storage/images/logo.png')}}" alt="logo"/>
            </a>
        </div>

        <!-- Menu Links (visible on larger screens) -->
        <div class="navbar-links">
            <a class="nav-link" href="{{route('projects.index')}}">{{__('projects')}}</a>
            <a class="nav-link" href="{{route('contact')}}">{{__('contact')}}</a>
            <a href="{{ route('skills') }}" class="nav-link">{{__('skills')}}</a>
        </div>

        <!-- Language Selector -->
        <div class="navbar-right">
            <form method="POST" action="{{ route('change.language') }}" class="language-form">
                @csrf
                <select name="lang" onchange="this.form.submit()" class="language-select">
                    <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}>{{__('français')}}</option>
                    <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>{{__('english')}}</option>
                    <option value="es" {{ session('locale') == 'es' ? 'selected' : '' }}>{{__('español')}}</option>
                </select>
            </form>
        </div>

        <!-- Hamburger Icon (checkbox) -->
        <input type="checkbox" id="hamburger-toggle">
        <label for="hamburger-toggle" class="hamburger-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </label>

        <!-- Mobile Menu (hidden by default) -->
        <div class="mobile-menu">
            <a class="nav-link" href="{{route('projects.index')}}">{{__('projects')}}</a>
            <a class="nav-link" href="{{route('contact')}}">{{__('contact')}}</a>
            <a href="{{ route('skills') }}" class="nav-link">{{__('skills')}}</a>
            <form method="POST" action="{{ route('change.language') }}" class="language-form">
                @csrf
                <select name="lang" onchange="this.form.submit()" class="language-select">
                    <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}>{{__('français')}}</option>
                    <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>{{__('english')}}</option>
                    <option value="es" {{ session('locale') == 'es' ? 'selected' : '' }}>{{__('español')}}</option>
                </select>
            </form>
        </div>
    </div>
</nav>
