<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="vipcoding, https://vipcoding.com.np">

    <title>Janata Sahayak</title>
     <!-- Nepali Fonts (Google Fonts or Local) -->

     <style>

        .note-fonts-dropdown {
        max-height: 200px; /* Adjust this value based on your design */
        overflow-y: auto;  /* Allows vertical scrolling */
    }
        .note-editable {
          font-family: 'Arial', 'Roboto', 'Open Sans', 'Preeti', 'Mangal','Kokila', sans-serif; /* Add fallback fonts */
        }
      </style>
      <link rel="stylesheet" href="..assets/fonts/maicons.ttf">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/maicons.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="/assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <!-- Header Start -->
    @include('user.header')
    <!-- Header End -->


    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}
            <button type="button" class="close" data-dismiss="alert">
                X
            </button>
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.png);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead" style="color: grey">Your Privacy, Our Priority – Protecting What Matters
                    Most!</span>
                <h1 class="display-4">Your Complain, Our Action </h1>
                <a href="https://wa.me/9817621779" class="btn btn-primary">Emergency Contact</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Register </span> complain</p>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-person"></span>
                            </div>
                            <p><span>Contact</span> Administration</p>
                        </div>
                    </div>

                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-time-outline"></span>
                            </div>
                            <p><span>Track</span> Progress</p>
                        </div>
                    </div>

                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>Receive </span>Solution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1 style="font-size: 20px">Welcome to Your Helpdesk! <br> <strong>जनता साहायक</strong></h1>
                        <p class="text-grey mb-4 " style="text-align: justify">Welcome to JantaSahayak, a groundbreaking
                            platform where technology meets civic engagement in perfect harmony. At JantaSahayak, we go
                            beyond conventional complaint systems, providing an innovative digital solution to bridge
                            the gap between citizen and administration. Our mission is to empower citizen and
                            stakeholders by addressing concerns efficiently, transparently, and compassionately. Here,
                            technology and accountability work hand in hand, creating a seamless experience that fosters
                            trust and collaboration. Step into JantaSahayak, where every voice matters, and together, we
                            shape a more responsive and harmonious environment. Your journey to positive change starts
                            here.</p>
                        <a href="https://wa.me/9814896965" class="btn btn-primary">Helpdesk</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/about.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->



    <!-- Appointment-section Start -->
    @include('user.appointment')
    <!-- Appointment-section End -->


    <!--  Administrator Section start-->
    @include('user.administrator')
    <!-- Administrator Section End -->



    <!-- .banner Start -->
    {{-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
          <a href="#"><img src="../assets/img/logo.png" alt=""></a>
          <h1 class="font-weight-normal mb-3">जनता साहायक</h1>
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">समस्या समाधानका लागि तपाईंको विश्वासिलो साथी।</h1>
          <a href="#"><img src="../assets/img/logo.png" alt=""></a>
        </div>
      </div>
    </div>
  </div> --}}
    <!-- .banner End -->

    @include('user.location')
    <!-- Footer Start -->
    @include('user.footer')
    <!-- Footer End -->


    <script>
        document.getElementById('complainForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            // Replace this variable with the actual authentication check
            const isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};

            if (!isLoggedIn) {
                // Show login prompt
                $('#loginModal').modal('show');
            } else {
                // Submit the form if logged in
                this.submit();
            }
        });
    </script>

    <!-- Summernote JS and CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- Initialize Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'गुनासोको छोटो विवरण लेख्नुहोस् ...',
                tabsize: 2,
                height: 200
            });
        });
    </script>
    <!-- Google Fonts -->
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Write your complaint...',
                tabsize: 2,
                height: 200,
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Georgia',
                    'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto',
                    'Open Sans', 'Preeti', 'Mangal','Kokila'
                ], // Add custom fonts here
            });
        });
    </script>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>


</body>

</html>
