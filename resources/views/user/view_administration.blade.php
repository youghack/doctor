<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="vipcoding, https://vipcoding.com.np">
  <title>Coders Hospital</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/custom.css">

</head>
<body>


  <!-- Header Start -->
  @include('user.header')
  <!-- Header End -->

  <!--  Doctor Section start-->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 py-2 wow fadeInUp">
          <h1><strong>Administrators</strong></h1>
          <p class="text-grey mb-5 text-justify">Our administrators are dedicated public servants, including police officers, Chief District Officers (CDOs), and other key officials, who work tirelessly to ensure the seamless operation of JantaSahayak, the national complaint management system. With a strong commitment to justice, accountability, and efficient governance, they manage and address public grievances with transparency and diligence. By bridging the gap between citizens and authorities, they foster trust, promote fairness, and ensure that every voice is heard and every issue is resolved for a better and more responsive nation.</p>
        </div>

        <div class="col-md-9 wow fadeInRight my-5 px-2" data-wow-delay="400ms">
            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                @foreach ($doctor as $doctors)
                <div class="card-doctor mb-3 my-3" style="max-width: 350px; max-height:350px; border-radius: 25px">
                      <div class="card">
                          <div class="image">
                            <img height="300px" src="{{ asset($doctors->image) }}" alt="{{ $doctors->name }}"/>
                          </div>
                          <div class="details">
                            <div class="center">
                              <h1>&nbsp;{{ $doctors->name }}</h1>
                              <p>{{ $doctors->speciality }} Specialist</p>
                              <p>Room No.: &nbsp;{{ $doctors->room }}</p>
                              <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="tel:{{$doctors->phone}}"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                                <li><a href="https://wa.me/{{$doctors->phone}}"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                  </div>
                @endforeach
                </div>
          </div>

      </div>
    </div>

  <!-- Doctor Section End -->

  <!-- Footer Start -->
  @include('user.footer')
  <!-- Footer End -->

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
<script src="https://kit.fontawesome.com/bb920c9925.js" crossorigin="anonymous"> </script>

</body>
</html>
