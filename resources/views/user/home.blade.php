<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="vipcoding, https://vipcoding.com.np">

  <title>Janata Sahayak</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

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
        <span class="subhead">Your Privacy, Our Priority – Protecting What Matters Most!</span>
        <h1 class="display-4">Your Complain, Our Action </h1>
        <a href="https://wa.me/9817621779" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Coders <br> Hospital</h1>
            <p class="text-grey mb-4">Welcome to Coders Hospital, a realm where health meets technology in perfect harmony. At Coders Hospital, we transcend traditional boundaries, weaving a tapestry of healing with the precision of code and the warmth of compassion. Our commitment is to redefine healthcare through innovation, ensuring that every patient receives unparalleled care in the digital age. Here, the language of code intertwines seamlessly with the art of healing, creating a unique and transformative experience for all. Step into Coders Hospital, where the future of healthcare unfolds, and where your well-being is our foremost priority. Your journey to health begins with us.</p>
            <a href="https://wa.me/9814896965" class="btn btn-primary">Contact Hospital</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <!--  Doctor Section start-->
    @include('user.doctor')
  <!-- Doctor Section End -->


  <!-- Appointment-section Start -->
  @include('user.appointment')
  <!-- Appointment-section End -->

  <!-- .banner Start -->
  {{-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> --}}
  <!-- .banner End -->

@include('user.location')
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
