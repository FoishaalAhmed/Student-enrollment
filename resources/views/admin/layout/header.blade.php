<nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{route('admin-home')}}">F-A-S</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <div style="margin-left: 40px; ">
              <a class="btn btn-outline-primary" style="margin-bottom: 5px;" href="{{route('profile.index')}}">Profile </a> <br>
              <form action="{{route('admin.logout')}}" method="post" id="logout-form">
                @csrf
              <a class="btn btn-outline-success" href="{{route('admin.logout')}}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout </a>                
              </form>
              </div>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>