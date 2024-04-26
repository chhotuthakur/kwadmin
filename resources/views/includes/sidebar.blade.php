<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">KnowWage l</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin Panel</a>
            </div>
        </div>

        {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                {{-- main menu --}}
           
                <li class="nav-item">
                  <a href="pages/calendar.html" class="nav-link">
                      <i class="nav-icon fa fa-home"></i>
                      <p>DashBoard
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon fa fa-question"></i>
                    <p>Manage Quizzes</p>
                </a>
            </li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                  <i class="nav-icon far fa-user"></i>
                  <p>Manage Users
                  </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-flag"></i>
                <p>Reports
                </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="/configure" class="nav-link">
              <i class="nav-icon fa fa-wrench"></i>
              <p>Settings
              </p>
          </a>
      </li>
      <li class="nav-item">
        <a href="pages/calendar.html" class="nav-link">
            <i class="nav-icon fa fa-phone"></i>
            <p>Help and Support
            </p>
        </a>
    </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
