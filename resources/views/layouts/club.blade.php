<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
   


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/home.js') }}" defer></script>


      <!-- Bootstrap core CSS -->
      <link href="vendor copy/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor copy/jquery/jquery.min.js" rel="stylesheet">
      <link href="vendor copy/bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">

    <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
 <link href="{{ asset('css/home.css') }}" rel="stylesheet">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

       <!------------pagecontent---------->

       <main class="py-4">
        @yield('content')
    </main>
    <!-----------------footer-------------->
 
<footer>
<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <div class="section-heading">
          <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
          <div class="phone-info">
            <h4>For any enquiry, Call Us: <br><br>
            <span><i class="fas fa-phone-alt"></i> <a href="#">72 570 601</a></span><br><br>
            <span><i class="far fa-envelope"></i> <a href="#">  isetb@isetb.rnu.tn</a></span>  <br> <br>  
            <span><i class="fas fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/Institut+Sup%C3%A9rieur+des+Etudes+Technologiques+de+Bizerte/@37.2351035,9.8859412,17z/data=!4m5!3m4!1s0x12e31ff1faae6e19:0xa4da7162624c5788!8m2!3d37.2349582!4d9.8857319">Road Menzel Abderrahmen – Zarzouna 7021 Bizerte، 7021</a></span><br>  
          </h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-button ">Send Your Proposition</button>
              </fieldset>
            </div>
          </div>
          <div class="contact-dec">
            <img src="assets/images/contact-decoration.png" alt="">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</footer>
</div>
</body>
</html>