<x-app-layout>
    <!-- Carousel Start -->
        @include('_partials.carousel')
    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5">
        @include('_partials.gym-class')
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
        @include('_partials.about')
    <!-- About End -->


    <!-- Features Start -->
        @include('_partials.features')
    <!-- Features End -->


    <!-- GYM Feature Start -->
        @include('_partials.gym-feature')
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
        @include('_partials.subscribe')
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->
        @include('_partials.class-timetable')
    <!-- Class Timetable End -->


    <!-- BMI Calculation Start -->
        @include('_partials.bmi-calculation')
    <!-- BMI Calculation End -->


    <!-- Team Start -->
        @include('_partials.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid position-relative testimonial my-5">
        @include('_partials.testimonial')
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
        @include('_partials.blog')
    <!-- Blog End -->
</x-app-layout>