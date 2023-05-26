<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

        </div>
      </div>
    </div>
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.png" alt="logo" /></a>

      </div>
      <ul class="nav">

        <li class="nav-item nav-category">
          <span class="nav-link">Dashboard</span>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('product')}}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title"> Add new Products</span>
          </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showproduct')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title"> Show all Products</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showorder')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title"> Orders</span>
            </a>
          </li>


      </ul>
    </nav>
