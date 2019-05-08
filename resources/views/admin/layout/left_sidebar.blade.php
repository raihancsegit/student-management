 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Smart Coder</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p class="text">Dashboard</p>
            </a>
          </li>

          {{--class section--}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Class
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addclasssection')}}" class="nav-link ">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('listclasssection')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>list Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addschoolclass')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Class</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('listschoolclass')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List Class</p>
                </a>
              </li>
            </ul>
          </li>
          
          {{-- Faculty section--}}
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Faculty
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addfacultytype')}}" class="nav-link ">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Types</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('listfacultytype')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List Types</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addfaculty')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Faculty</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('listfaculty')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List Faculty</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Student section--}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Student
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('addstudent') }}" class="nav-link ">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('liststudent') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>List Student</p>
                </a>
              </li>
              
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>