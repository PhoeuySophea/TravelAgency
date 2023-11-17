<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="{{ route('front.home') }}" class="nav-item nav-link active">Home</a>
        <a href="{{ route('front.about') }}" class="nav-item nav-link">About</a>
        <a href="{{ route('front.services') }}" class="nav-item nav-link">Services</a>
        <a href="{{ route('front.packages') }}" class="nav-item nav-link">Packages</a>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu m-0">
                <a href="{{ route('front.destination') }}" class="dropdown-item">Destination</a>
                <a href="{{ route('front.booking') }}" class="dropdown-item">Booking</a>
                <a href="{{ route('front.guides') }}" class="dropdown-item">Travel Guides</a>
                <a href="{{ route('front.testimonail') }}" class="dropdown-item">Testimonial</a>
                <a href="{{ route('front.page') }}" class="dropdown-item">404 Page</a>
            </div>
        </div>
        <a href="{{ route('front.contact') }}" class="nav-item nav-link">Contact</a>
    </div>
    <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
</div>
