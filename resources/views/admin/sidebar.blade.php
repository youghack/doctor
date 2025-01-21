
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('home') }}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
          class="logo-name">जनता साहायक</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="{{ url('home') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i
            data-feather="briefcase"></i><span>Pages</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('add_administrator_view') }}">Add Administrator</a></li>
          <li><a class="nav-link" href="{{ url('complain') }}">Complain</a></li>
          <li><a class="nav-link" href="{{ url('showadministrator') }}">View Administrator</a></li>
        </ul>
      </li>
    </ul>
  </aside>
