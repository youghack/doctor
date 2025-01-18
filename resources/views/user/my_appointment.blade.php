<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>जनता साहायक</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!-- Header Start -->
  @include('user.header')
  <!-- Header End -->

  <!-- Myappointment Start -->
  <div align="center" style="padding: 70px;">

    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <a class="btn  btn-secondary" href="{{ url('/') }}">Back</a>
            </div>

        </div>
        <div class="card-body">
                <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                        <tr>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appoint as $appoints)
                        <tr>
                            <td>{{ $appoints->doctor }}</td>
                            <td>{{ $appoints->date }}</td>
                            <td>{{ $appoints->message }}</td>
                            <td>{{ $appoints->status }}</td>
                            <td> <a class="btn btn-outline-danger btn-sm" onclick="return confirm('Confirm to cancel Your Appointment?')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel Appointment</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

  </div>


  <!-- Myappointment End -->


  <!-- Footer Start -->
  @include('user.footer')
  <!-- Footer End -->



  <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
