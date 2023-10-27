
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
          class="logo-name">Otika</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Widgets</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('add_doctor_view') }}">Add DOctor</a></li>
          <li><a class="nav-link" href="{{ url('showappointment') }}">Appointment</a></li>
          <li><a class="nav-link" href="{{ url('showdoctor') }}">View Doctors</a></li>
        </ul>
      </li>


      <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>
      <li class="menu-header">Maps</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google
            Maps</span></a>
        <ul class="dropdown-menu">
          <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
          <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
          <li><a href="gmaps-geocoding.html">Geocoding</a></li>
          <li><a href="gmaps-geolocation.html">Geolocation</a></li>
          <li><a href="gmaps-marker.html">Marker</a></li>
          <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
          <li><a href="gmaps-route.html">Route</a></li>
          <li><a href="gmaps-simple.html">Simple</a></li>
        </ul>
      </li>

      <li class="menu-header">Pages</li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="user-check"></i><span>Auth</span></a>
        <ul class="dropdown-menu">

          <li><a href="auth-register.html">Register</a></li>
          <li><a href="auth-forgot-password.html">Forgot Password</a></li>
          <li><a href="auth-reset-password.html">Reset Password</a></li>
          <li><a href="subscribe.html">Subscribe</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="alert-triangle"></i><span>Errors</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="errors-503.html">503</a></li>
          <li><a class="nav-link" href="errors-403.html">403</a></li>
          <li><a class="nav-link" href="errors-404.html">404</a></li>
          <li><a class="nav-link" href="errors-500.html">500</a></li>
        </ul>
      </li>


    </ul>
  </aside>
