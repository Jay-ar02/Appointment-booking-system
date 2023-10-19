<style>
  * {box-sizing: border-box;}
  ul {list-style-type: none;}
  body {font-family: Verdana, sans-serif;}
  
  .month {
    padding: 70px 25px;
    width: 100%;
    background: #00D9A5;
    text-align: center;
  }
  
  .month ul {
    margin: 0;
    padding: 0;
  }
  
  .month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
  }
  
  .month .prev {
    float: left;
    padding-top: 10px;
  }
  
  .month .next {
    float: right;
    padding-top: 10px;
  }
  
  .weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
  }
  
  .weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
  }
  
  .days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
  }
  
  .days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
  }
  
  .days li .active {
    padding: 5px;
    background: #00D9A5;
    color: white !important
  }
  
  /* Add media queries for smaller screens */
  @media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
  }
  
  @media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
  }
  
  @media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
  }
  </style>

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card corona-gradient-card">
            <div class="card-body py-0 px-0 px-sm-3">
              <div class="row align-items-center">
                
                <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">1,000</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Appointments</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">250</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Approved</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">100</h3>
                    <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-danger">
                    <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Cancelled</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">1,500</h3>
                    <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Pending</h6>
            </div>
          </div>
        </div>
      </div>
          
      <div class="row ">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Appointments Status</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </th>
                      <th> Name </th>
                      <th> Email </th>
                      <th> Phone </th>
                      <th> Doctor </th>
                      <th> Date </th>
                      <th> Message </th>
                      <th> Status </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="admin/assets/images/faces/face1.jpg" alt="image" />
                        <span class="ps-2">Anthony Zunigga</span>
                      </td>
                      <td> Zuniga@gmail.com</td>
                      <td> 09876523872 </td>
                      <td> Dr. Johnny </td>
                      <td> 10/02/2023 </td>
                      <td> Tooth pain </td>
                      <td>
                        <div class="badge badge-outline-success">Approved</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="admin/assets/images/faces/face2.jpg" alt="image" />
                        <span class="ps-2">John rey Dado</span>
                      </td>
                      <td> dado@gmail.com </td>
                      <td> 09875643243 </td>
                      <td> Dr. Juan </td>
                      <td> 09/25/2023 </td>
                      <td> Eye sight </td>
                      <td>
                        <div class="badge badge-outline-warning">Pending</div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check form-check-muted m-0">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                          </label>
                        </div>
                      </td>
                      <td>
                        <img src="admin/assets/images/faces/face5.jpg" alt="image" />
                        <span class="ps-2">Angelo Bautista</span>
                      </td>
                      <td> bautista@gmail.com </td>
                      <td> 0989675472 </td>
                      <td> Dr. May </td>
                      <td> 09/03/2023 </td>
                      <td> Hair loss </td>
                      <td>
                        <div class="badge badge-outline-danger">Rejected</div>
                      </td>
                    </tr>
                    
                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="month">      
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li>
            October<br>
            <span style="font-size:18px">2023</span>
          </li>
        </ul>
      </div>
      
      <ul class="weekdays">
        <li>Mo</li>
        <li>Tu</li>
        <li>We</li>
        <li>Th</li>
        <li>Fr</li>
        <li>Sa</li>
        <li>Su</li>
      </ul>
      
      <ul class="days">  
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li><span class="active">10</span></li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30</li>
        <li>31</li>
      </ul>
      
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

