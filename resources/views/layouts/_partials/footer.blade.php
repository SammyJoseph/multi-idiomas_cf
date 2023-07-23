<!-- Footer Start -->
<div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">{{ __('Get In Touch') }}</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">{{ __('Quick Links') }}</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="{{ route('home') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Home') }}</a>
                <a class="text-white mb-2" href="{{ route('about') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('About Us') }}</a>
                <a class="text-white mb-2" href="{{ route('features') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Our Features') }}</a>
                <a class="text-white mb-2" href="{{ route('classes') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Classes') }}</a>
                <a class="text-white" href="{{ route('contact') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Contact Us') }}</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">{{ __('Popular Links') }}</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="{{ route('home') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Home') }}</a>
                <a class="text-white mb-2" href="{{ route('about') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('About Us') }}</a>
                <a class="text-white mb-2" href="{{ route('features') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Our Features') }}</a>
                <a class="text-white mb-2" href="{{ route('classes') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Classes') }}</a>
                <a class="text-white" href="{{ route('contact') }}"><i class="fa fa-angle-right mr-2"></i>{{ __('Contact Us') }}</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">{{ __('Opening Hours') }}</h4>
            <h5 class="text-white">{{ __('Monday') }} - {{ __('Friday') }}</h5>
            <p>8.00 AM - 8.00 PM</p>
            <h5 class="text-white">{{ __('Saturday') }} - {{ __('Sunday') }}</h5>
            <p>2.00 PM - 8.00 PM</p>
        </div>
    </div>
    <div class="container border-top border-dark pt-5 d-flex justify-content-between align-items-center">
        <p class="m-0 text-white">
            &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. {{ __('All Rights Reserved') }}. {{ __('Designed by') }}
            <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
        <div>
            <form id="formLocalization" action="{{ route('localization') }}">
                <select name="lang" class="form-control" onchange="document.querySelector('#formLocalization').submit()">
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="fr">Française</option>
                </select>
            </form>
        </div>
    </div>
</div>
<!-- Footer End -->