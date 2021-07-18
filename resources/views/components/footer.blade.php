<div>
    <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HELP4U</h3>
            <p>
              22, Mahendra Bagchi Road <br>
              Bally, Howrah,<br>
              West Bengal - 711201, IN. <br><br>
              <strong>Phone:</strong> +91 94323 28568<br>
              <strong>Email:</strong> rishikeshjha846@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donation Drives</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Helping Needy</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Slum Visits</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">School Visits</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Yoga Tutorials</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="{{ route('subscriber.store') }}" method="post">
              @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
              
            </form>
            @error('email') <span class="text-danger m-4">{{ $message}}</span> @enderror
              @if (session('success'))
                    <div class="text-primary m-4">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="text-danger m-4">
                        {{ session('error') }}
                    </div>
                @endif 
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>HELP4U</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by Rishikesh Jha</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
</div>