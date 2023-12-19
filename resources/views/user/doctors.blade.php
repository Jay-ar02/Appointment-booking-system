@extends('layout')

@section('title', 'Alaga | Home')

@section('content')
<div class="page-hero bg-image overlay-dark" style="background-image: url({{ asset('assets/img/bg.jpg') }});">
    <!-- Your content for the hero section goes here -->
</div>

<div class="bg-light">
    <!-- Your content for the light background section goes here -->
</div>

<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctor as $doctors)
                <div class="item">
                    <!-- Your doctor card content goes here -->
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
        <!-- Your appointment form goes here -->
    </div>
</div>
@endsection
