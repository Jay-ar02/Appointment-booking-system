
<style>
.nav-linkk:hover {
  background-color: #00D9A5; /* Set the hover background color to #00D9A5 */
  color: #fff; /* Set the text color to white on hover, or any other suitable color */
}

/* Change the hover color to #00D9A5 for links inside the dropdown */
.dropdown-item.preview-item:hover .preview-subject {
  color: #00D9A5;
}


</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"> <span style="color: #00D9A5">A</span><span style="color: rgb(0, 0, 0)">laga</span>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><span style="color: #00D9A5">A</span></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/Baloloy.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Jay-ar Baloloy</h5>
              <span>Administrator</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small " style="color: rgb(63, 63, 63)">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small" style="color: rgb(63, 63, 63)">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small" style="color: rgb(63, 63, 63)">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      
      <li class="nav-linkk">
        <a class="nav-link" href="{{'add_doctor_view'}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title" style="color: #505153;">Add Doctors</span>
        </a>
      </li>

      <li class="nav-linkk">
        <a class="nav-link" href="{{'showappointment'}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title" style="color: #505153;">Appointments</span>
        </a>
      </li>

      <li class="nav-linkk">
        <a class="nav-link" href="{{'showdoctor'}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title" style="color: #505153;">All Doctors</span>
        </a>
      </li>
    </ul>
  </nav>