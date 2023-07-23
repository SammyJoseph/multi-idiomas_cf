<x-app-layout>
    <x-slot name="title">
        About
    </x-slot>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">{{ __('About Us') }}</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">{{ __('Home') }}</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-primary">{{ __('About Us') }}</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
        @include('_partials.about')
    <!-- About End -->


    <!-- Features Start -->
        @include('_partials.features')
    <!-- Features End -->


    <!-- Team Start -->
        @include('_partials.team')
    <!-- Team End -->
</x-app-layout>