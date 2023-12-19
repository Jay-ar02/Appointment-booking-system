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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .btn-danger {
      color: #ffffff; /* text color */
      background-color: #ffaa00; /* custom yellow-orange color */
      border-color: #ffaa00; /* custom border color */
    }

    .text-red-500 {
    color: red;
}

.text-yellow-500 {
    color: yellow;
}

.text-green-500 {
    color: green;
}
  
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  

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
              <a class="nav-link" href="{{ url('home') }}">Home</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Personal Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Testimonies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Announcement</a>
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
    
    <table>
        <tr style="background-color:#00D9A5;">
            <th style="padding:10px; font-size: 20px; color:white; border: 1px solid #bdbdbd;">Doctor Name</th>
            <th style="padding:10px; font-size: 20px; color:white; border: 1px solid #bdbdbd;">Date</th>
            <th style="padding:10px; font-size: 20px; color:white; border: 1px solid #bdbdbd;">Message</th>
            <th style="padding:10px; font-size: 20px; color:white; border: 1px solid #bdbdbd;">Status</th>
            <th style="padding:10px; font-size: 20px; color:white; border: 1px solid #bdbdbd;">Cancel Appointment</th>
        </tr>

        @foreach($appoint as $appoints)

        <tr style="background-color: #f8f8f8;"; align="center">
            <td style="padding:10px; color:rgb(0, 0, 0); border: 1px solid #bdbdbd;">{{$appoints->doctor}}</td>
            <td style="padding:10px; color:rgb(0, 0, 0); border: 1px solid #bdbdbd;">{{$appoints->date}}</td>
            <td style="padding:10px; color:rgb(0, 0, 0); border: 1px solid #bdbdbd;">{{$appoints->message}}</td>
            <td style="padding:10px; border: 1px solid #bdbdbd;">
              <span class="{{ $appoints->status == 'Cancelled' ? 'text-red-500' : ($appoints->status == 'In Progress' ? 'text-yellow-500' : 'text-green-500') }}">
                  {{$appoints->status}}
              </span>
          </td>
          <td>
            <a class="btn btn-danger" style="border: 1px solid #bdbdbd;" onclick="return confirm('Are you sure to delete this?')" href="{{url('cancel_appoint',$appoints->id)}}">
                <i class="fa fa-times"></i> Cancel
            </a>
            <a class="btn btn-secondary" style="border: 1px solid #bdbdbd;" href="{{url('edit_appoint',$appoints->id)}}">
                <i class="fa fa-pencil"></i> Edit
            </a>
        </td>
        </tr>

        @endforeach

    </table>
  </div>
  <!-- Your table here -->

  <div style="display: flex; justify-content: center;">
    {{ $appoint->links() }}
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>