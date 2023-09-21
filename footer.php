<footer id="footer">

  <div class="container">
    <div class="row footer-section pt-5">


      <div class="col-md-3 footer-block">

        <div class="footer-img pb-4">
          <img src="./assets/media/footer-logo.png">
        </div>

        <div class="social-block ">
          <ul class="d-flex ms-2">
            <li class="me-3 border rounded  ">
              <a class="text-light" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f fa-lg p-2"></i></a>
            </li>
            <li class="me-3 border rounded">
              <a class="text-light" href="https://www.google.com/" target="_parent"><i class="fa-brands fa-google-plus-g fa-lg p-2"></i></a>
            </li>
            <li class="me-3 border rounded">
              <a class="text-light" href="https://twitter.com/" target="_self"><i class="fa-brands fa-twitter fa-lg p-2"></i></a>
            </li>
            <li class="me-3 border rounded">
              <a class="text-light" href="https://www.linkedin.com/" target="_top"><i class="fa-brands fa-linkedin-in fa-lg p-2"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 footer-block mb-3">
        <h3> SERVICES</h3>
        <ul class="list-none">

          <li><a href="#"> web best online Exam</a></li>
          <li><a href="#"> Mobile and tablet Application</a> </li>
          <li><a href="#"> Question Paper Generator</a> </li>
          <li><a href="#"> Admin dashboard</a> </li>
          <li><a href="#"> Studen dashboard</a></li>
        </ul>
     </div>
      <div class="col-md-3 footer-block mb-3">
        <h3> CONTACT US</h3>
        <ul class="list-none">
          <li>Gyan Vihar University, Mahal road, Jagatpura </li>
          <li>+91 123 456 789</li>
          <li><i class="fa-solid fa-message"></i> <a href="#"> info@gyan pareekshan.com </a></li>
          <li><i class="fa-solid fa-globe"></i> <a href="#"> www.gyanpareekshan.com</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-block mb-3">
        <h3>OUR NEWSLETTER</h3>
        <p>Sign up for newsletters, events and the promotions.</p>
        <form>
          <div class="form-group">
            <label for="email"></label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <button type="submit" class="btn btn-outline-light mt-3">SUBMIT</button>
        </form>
      </div>
    </div>
    <hr>
    <div class=" row d-flex pt-2">
      <div class="col-md-12 copy-right">
       <div class="d-flex  text-muted">
        <div><small> Copyright @gyan pareekshan 2022.</small></div>
        <div class="ms-3 me-3"> <a href="#" class="text-muted"><small>Privacy policy</small> </div>
        <div><a href="#"class="text-muted"><small>Term and Condition</small></div>
       </div>
      </div>
    </div>
  </div>

  <!--Bootstrap Bundle with Popper -->
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <!-- jquery/3.6.1 -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Owl carsoul -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>


  <!-- navbar toggle -->
    <script>
          function toggleNavbar() {
              var navbarToggle = document.querySelector('.navbar-toggle');
              navbarToggle.classList.toggle('active');
          }
      </script>

    <script>

    $(document).ready(function() {

      $('.owl-one').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        mouseDrag: true,
        nav: false,
        autoplayHoverPause: true,
        autoplayTimeout: 2800,
        animateIn: 'fadeIn', // add this
        animateOut: 'fadeOut', // and this
        autoplaySpeed: 800,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }

      });

      $('.owl-two').owlCarousel({
    loop:true,
    nav: true,
    dots: false,
    autoplay: true,
    nav:true,
    margin: 10,
    autoplaySpeed:500,
    autoplayTimeout: 2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
});
</script>

<!-- AOS -->
<script src="assets/js/aos.js"></script>
  <script>
  AOS.init();
</script>
<!-- End AOS -->
</footer>

</body>
</html>