

<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>जनता साहायक</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="/admin/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/admin/assets/css/style.css">
  <link rel="stylesheet" href="/admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='/admin/assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('admin.navbar')
      <div class="main-sidebar sidebar-style-2">
        @include('admin.sidebar')
      </div>
      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
        @include('admin.SidebarTheme')
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="{{ url('home') }}">जनता साहायक</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="/admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="/admin/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="/admin/assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="/admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/admin/assets/js/custom.js"></script>
  <!-- Data table start-->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function(){
    $('#datatable').DataTable();
  });
</script>
  <!-- Data table end-->

</body>

<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
