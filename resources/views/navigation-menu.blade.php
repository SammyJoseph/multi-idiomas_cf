@php
    $links = [
        [
            'name' => 'Home',
            'url' => route('home'),
            'active' => request()->routeIs('home'), // true or false
        ],
        [
            'name' => 'About Us',
            'url' => route('about'),
            'active' => request()->routeIs('about'),
        ],
        [
            'name' => 'Our Features',
            'url' => route('features'),
            'active' => request()->routeIs('features'),
        ],
        [
            'name' => 'Classes',
            'url' => route('classes'),
            'active' => request()->routeIs('classes'),
        ],
        [
            'name' => 'Contact',
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
                {{-- <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ route('features') }}" class="nav-item nav-link">Our Features</a>
                <a href="{{ route('classes') }}" class="nav-item nav-link">Classes</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="single.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a> --}}
                @foreach ($links as $link)
                    <a href="{{ $link['url'] }}" class="nav-item nav-link {{ $link['active'] ? 'active' : '' }}">{{ $link['name'] }}</a>                    
                @endforeach
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->