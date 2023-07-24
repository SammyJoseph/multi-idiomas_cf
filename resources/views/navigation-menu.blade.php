@php
    $links = [
        [
            'name' => __('Home'),
            'url' => route('home'),
            'active' => request()->routeIs('home'), // true or false
        ],
        [
            'name' => __('About Us'),
            'url' => route('about'),
            'active' => request()->routeIs('about'),
        ],
        [
            'name' => __('Our Features'),
            'url' => route('features'),
            'active' => request()->routeIs('features'),
        ],
        [
            'name' => __('Classes'),
            'url' => route('classes'),
            'active' => request()->routeIs('classes'),
        ],
        [
            'name' => __('Contact'),
            'url' => route('contact'),
            'active' => request()->routeIs('contact'),
        ],
    ]
@endphp

<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="{{ route('home') }}" class="navbar-brand">
            <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 bg-secondary">
                @foreach ($links as $link)
                    <a href="{{ $link['url'] }}" class="nav-item nav-link {{ $link['active'] ? 'active' : '' }}">{{ $link['name'] }}</a>                    
                @endforeach
                <form id="formLocalizationFlag" class="ml-3" action="{{ route('localization') }}">
                    <select name="lang" class="form-control bg-dark text-white border-danger" onchange="document.querySelector('#formLocalizationFlag').submit()">
                        <option value="en" @selected(session('lang') == 'en')>English</option>
                        <option value="es" @selected(session('lang') == 'es')>Español</option>
                        <option value="fr" @selected(session('lang') == 'fr')>Française</option>
                    </select>
                </form>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->