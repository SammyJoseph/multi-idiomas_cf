<x-app-layout>
    <x-slot name="title">
        Classes
    </x-slot>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">{{ __('Gym Classes') }}</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">{{ __('Home') }}</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-primary">{{ __('Gym Classes') }}</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5" style="margin-top: 90px;">
        @include('_partials.gym-class')
    </div>
    <!-- Gym Class End -->


    <!-- Class Timetable Start -->
        @include('_partials.class-timetable')
    <!-- Class Timetable End -->
    

    <!-- BMI Calculation Start -->
        @include('_partials.bmi-calculation')
    <!-- BMI Calculation End -->
</x-app-layout>