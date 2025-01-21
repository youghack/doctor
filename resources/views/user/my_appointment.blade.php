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
                    {{-- <a class="btn  btn-primary" href="{{ url('complainview') }}">Create Complain</a> --}}
                    <a class="btn btn-primary" data-toggle="modal" data-target="#addComplainModal">Add Complain</a>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>Date of complaint</th>
                            <th>Complaint</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appoint as $complain)
                            <tr>
                                {{-- <td>{{ $complain->created_at->format('Y-m-d') }}</td> --}}
                                <td>{{ $complain->created_at ? $complain->created_at->format('F j, Y') : 'N/A' }} -
                                    {{ $complain->created_at->format('h:i A') }}</td>
                                {{-- <td>{{ $complain->created_at ? $complain->created_at->format('H:i:s') : 'N/A' }}</td> --}}

                                {{-- <td>{{ $complain->message }}</td> --}}
                                <td> {{ Str::words($complain->message, 5, '...') }}</td>
                                <td>{{ $complain->status }}</td>
                                <td>
                                    <a class="btn btn-outline-secondary btn-sm"
                                        onclick="return confirm('Confirm to edit Your Complain?')"
                                        href="{{ url('cancel_appoint', $complain->id) }}">Edit Complain</a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Confirm to delete Your Complain?')"
                                        href="{{ url('cancel_appoint', $complain->id) }}">Cancel Complain</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <!-- Myappointment End -->

    <div class="modal fade" id="addComplainModal" tabindex="-1" role="dialog" aria-labelledby="addComplainModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addComplainModalLabel">Register Your Complain</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('appointment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 py-2">
                                <input type="text" name="name" class="form-control" placeholder="Full name"
                                    required>
                            </div>
                            <div class="col-12 col-sm-6 py-2">
                                <input type="text" name="citizenship" class="form-control"
                                    placeholder="Citizenship no." required>
                            </div>
                            <div class="col-12 col-sm-6 py-2">
                                <input type="email" name="email" class="form-control" placeholder="Email address"
                                    required>
                            </div>
                            <div class="col-12 col-sm-6 py-2">
                                <input type="text" name="number" class="form-control" placeholder="Phone Number"
                                    required>
                            </div>
                            <div class="col-12 col-sm-6 py-2">
                                <label class="file-upload">
                                    <input type="file" name="avatar" id="image" class="form-control"
                                        capture="camera" required>
                                    <span class="placeholder-text">आफनो फोटो राख्नुहोस्</span>
                                </label>
                            </div>
                            <div class="col-12 col-sm-6 py-2">
                                <input type="text" name="gfather" class="form-control"
                                    placeholder="GrandFather Full Name" required>
                            </div>
                            <div class="col-12 py-2">
                                <textarea name="message" class="form-control" rows="6" placeholder="गुनासोको छोटो विवरण लेख्नुहोस् ..." required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit Complain</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








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
