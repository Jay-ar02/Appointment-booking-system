

<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        label{
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body style="background-color: #e9e9e9">
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        
   <div class="container-fluid page-body-wrapper" style="background-color: white; border-radius: 1px; width: 600px;">

 

   <div class="container" align="center" style="padding-top: 90px;">

    @if(session()->has('message'))

    <div class="alert alert-success">
        <button type="button" class="close" data-bs-dismiss="alert">
            X
        </button>
    {{session()->get('message')}}
    </div>
    
    @endif

    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div style="padding:5px;">
        <label style="color: black" for="">Doctor Name</label><br>
        <input type="text" style="color:black" name="name" placeholder="Write the name" required>
    </div>

    <div style="padding:15px">
        <label style="color: black" for="">Phone</label><br>
        <input type="number" style="color:black" name="number" placeholder="Write the number" required>
    </div>

    <div style="padding:15px">
        <label style="color: black" for="">Specialty</label><br>
        <select name="specialty" id="" style="color:black; width: 200px;" required>
            <option value="">--Select--</option>
            <option value="Dermatologist">Dermatologist</option>
            <option value="Radiologist">Radiologist</option>
            <option value="Cardiologist">Cardiologist</option>
            <option value="Psychiatrist">Psychiatrist</option>
        </select>
    </div>

    <div style="padding:15px">
        <label style="color: black" for="">Room No</label><br>
        <input type="text" style="color:black;" name="room" placeholder="Write the room number" required>
    </div>

    <div style="padding:15px">
        <label style="color: black" for="">Doctor Image</label>
        <div style="padding: 15px">
          <div style="border: 1px solid #979797; padding: 5px; width: 200px; height: 45px;">
              <input type="file" style="color: black; border: none; padding: 0; width: 100%; height: 100%;" id="file" name="file" required>
          </div>
      </div>
      
          </div>

    <div style="padding:15px">
        <input type="submit" style="color: black" class="btn btn-success">
    </div>
    </form>
   </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>