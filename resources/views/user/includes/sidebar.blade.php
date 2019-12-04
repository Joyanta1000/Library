

<ul class="sidebar navbar-nav"><div style="padding-left: 20px; padding-top:20px;">
  <img src="{{asset(session()->get('name'))}}"  width="180" height="180"></div>
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('/user/uown')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home Page</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="{{ URL::to('/user/ulog')}}">Login</a>
          <a class="dropdown-item" href="{{ URL::to('/user/ureg')}}">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
         <!--  <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a> -->
        </div>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Users list</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user/ubooklist')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Booklist</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user/borrow')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Borrow Books</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user/return')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Return Books</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user/uob')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Transaction Records </span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/user/fileup')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Change Profile picture </span></a>
      </li>
    </ul>