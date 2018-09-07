<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="/uploaded_files/student-img/{{Sentinel::getUser()->image}}" alt="">
            </div>
            <div class="details">
              <p class="user-name">{{Sentinel::getUser()->name}}</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin-home')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Students</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('student.create')}}">Add Students</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('student.index')}}">View Students</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Cource</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cource.create')}}">Add Cource</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cource.index')}}">View Cource</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">Teacher Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="authSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher.create')}}">Add Teacher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('teacher.index')}}"> View Teacher</a>
                  </li>
                </ul>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uiBasicSubmenu" aria-expanded="false" aria-controls="uiBasicSubmenu">
                <i class="mdi mdi-buffer menu-icon"></i>
                <span class="menu-title">Department</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="uiBasicSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cse.index')}}">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('cs.index')}}">CS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('bba.index')}}">BBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('eee.index')}}">EEE</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
          </ul>
        </nav>