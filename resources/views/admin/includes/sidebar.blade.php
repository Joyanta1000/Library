<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ URL::to('/admin/own')}}">
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
          <a class="dropdown-item" href="{{ URL::to('/admin/alog')}}">Login</a>
         
          
          <div class="dropdown-divider"></div>
         <!--  <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a> -->
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/abooklist')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Booklist</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/booki')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Books Entry</span></a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/bookim')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Books Image Entry</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/bookfileup')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Books Image Update</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/borrowlist')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Books Records</span></a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('/admin/userlist')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>User List</span></a>
      </li>
    </ul>