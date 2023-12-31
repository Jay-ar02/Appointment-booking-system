

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body style="background-color: #e9e9e9">
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
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
       
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:20px;">
                <table>
                    <tr style="background-color:#00D9A5;">
                        <th style="padding:10px">Doctor Name</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Specialty</th>
                        <th style="padding:10px">Room No</th>
                        <th style="padding:10px">Image</th>
                        <th style="padding:10px">Operations</th>
                    </tr>

                    @foreach($data as $doctor)

                    <tr align="center" style="background-color:#ffffff;">
                        <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$doctor->name}}</td>
                        <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$doctor->phone}}</td>
                        <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$doctor->specialty}}</td>
                        <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$doctor->room}}</td>
                        <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;"><img height="50px" width="60" src="doctorimage/{{$doctor->image}}" alt=""> </td>
                        <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">
                          <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">
                              <i class="fa fa-trash"></i> Delete
                          </a>
                          <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">
                              <i class="fa fa-pencil"></i> Update
                          </a>
                          <a class="btn btn-success" href="{{ url('view', $doctor->id) }}">
                              <i class="fa fa-eye"></i> View
                          </a>
                      </td>


                    </tr>

                    @endforeach

                </table>    
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>