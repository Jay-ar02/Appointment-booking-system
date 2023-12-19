<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')
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
                    <th style="padding:10px; border: 1px solid #cecece;">Customer Name</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Email</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Phone</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Doctor Name</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Date</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Message</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Status</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Approved</th>
                    <th style="padding:10px; border: 1px solid #cecece;">Cancel</th>
                </tr>

                @foreach($data as $appoint)

                <tr align="center" style="background-color: #ffffff;">
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->name}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->email}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->phone}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->doctor}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->date}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->message}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;">{{$appoint->status}}</td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;"><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a></td>
                  <td style="color:rgb(0, 0, 0); border: 1px solid #cecece;"><a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a></td>
              </tr>

                @endforeach

            </table>
            <!-- Your table here -->
<br>
<div style="display: flex; justify-content: center;">
  {{ $data->links() }}
</div>
        </div>
        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>