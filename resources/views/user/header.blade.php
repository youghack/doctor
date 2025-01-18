<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +977 981 489 6965</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> Hospital.np@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->








      <!-- middlebar Start-->
      <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-10">
                    <div class="logo">
                        <a href="/" class="d-flex">
                            <img src="../assets/img/hospitallogo.png" class="img-fluid" alt="logo">
                            <div class="branding-name d-flex flex-column justify-content-center">
                                <h6>
                                    प्रदेश नं. २
                                </h6>
                                <h3>
                                    जनता साहायक
                                </h3>
                                <h4>
                                    जनकपुरधाम, धनुषा
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="jankitemple col-md-8 d-none d-md-block" style="background: url(https://i.postimg.cc/8Ctq2cxp/janaki.png) no-repeat bottom right !important;">
                    <div class="nepal d-flex justify-content-end">
                        <img src="../assets/img/animated_nepal_flag.gif" height="8px" class="img-fluid" alt="nepal-flag-gif">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- middlebar End-->



    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          {{-- <a class="navbar-brand" href="{{ url('/') }}"><span class="text-primary">Coders</span>-Hospital</a> --}}
          {{-- <a class="navbar-brand" href="{{ url('/') }}"><span class="text-primary"><img height="100px" src="../assets/img/hospitallogo.png" alt="Logo"></span></a> --}}



              <div class="input-group-prepend">
               <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=14&bikram_sambat=0&format=dmyw&api=6521z9n526" width="165" height="22"></iframe>
              </div>


          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('viewdoctor')}}">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://infoverse.sjcomputercenter.com.np/">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://wa.me/9814896965">Contact</a>
              </li>

              @if (Route::has('login'))
              @auth

              <li class="nav-item">
                  <a class="nav-link" style="background-color: greenyellow; color: white" href="{{ url('myappointment') }}">My Appointment</a>
                </li>
                <x-app-layout> </x-app-layout>


              @else

              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
              </li>

              <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                </li>

                @endauth
                @endif

            </ul>
          </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
  </header>
