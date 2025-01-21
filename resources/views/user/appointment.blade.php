<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Register Your Complain</h1>

      <form id="complainForm" class="main-form" action="{{ url('appointment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="citizenship" class="form-control" placeholder="Citizenship No." required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Phone Number" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <label class="file-upload">
              <input type="file" name="avatar" id="image" class="form-control" capture="camera" required>
              <span class="placeholder-text">आफनो फोटो राख्नुहोस्</span>
            </label>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="text" name="gfather" class="form-control" placeholder="GrandFather Full Name" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="description" class="form-control summernote" rows="6" placeholder="गुनासोको छोटो विवरण लेख्नुहोस् ..."></textarea>
          </div>

        </div>
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
</div>
  <!-- Login Prompt Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login Required</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>To register a complaint, you must be logged in.</p>
          <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
          </div>
        </div>
      </div>
    </div>
  </div>
