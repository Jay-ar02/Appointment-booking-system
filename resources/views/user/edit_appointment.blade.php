<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>Alaga | Home</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="shortcut icon" href="admin/assets/images/mini-logo.png" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-primary">A</span>laga</a>
  
          <form action="#">
            <div class="input-group input-navbar">
              <div class="input-group-prepend">
                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
              </div>
              <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
          </form>
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupport" style="visibility: visible !important;">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.blade.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors.html">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
  
              @if(Route::has('login'))
  
              @auth
  
              <li class="nav-item">
                <a class="nav-link" style="background-color:#00D9A5; color:#ffffff;" href="{{url('myappointment')}}">My Appointment</a>
              </li>
  
              <x-app-layout>
              </x-app-layout>
              
  
              @else
  
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
              </li>
  
              <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                </li>
  
                @endauth
  
                @endif
  
            </ul>
          </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
      </nav>
    </header>
    <div align="center" style="padding:10px;">


<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Edit Appointment</h1>

        <form class="main-form" action="{{ route('user.UpdateAppointment', ['id' => $appointment->id]) }}" method="POST">

            @csrf
            @method('PUT') {{-- Use the PUT method for updating --}}
            <div class="row mt-5">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name" value="{{ $appointment->name }}">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address.." value="{{ $appointment->email }}">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control" value="{{ $appointment->date }}">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option value="">--Select Doctor--</option>
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->name }}" {{ $appointment->doctor == $doctor->name ? 'selected' : '' }}>
                                {{ $doctor->name }} --specialty-- {{ $doctor->specialty }}
                            </option>
                        @endforeach
                    </select>
                    
                </div>
                
                
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Number.." value="{{ $appointment->phone }}">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message..">{{ $appointment->message }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn;">Update Appointment</button>
        </form>
    </div>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>

</body>
</html>
