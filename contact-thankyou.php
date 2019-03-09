  <!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>PetSeeker</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT|Open+Sans" rel="stylesheet">
            <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/aos.css">      

      <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark toggled_navbar">
      <div class="container">
        <a class="navbar-logo" href="index.html"><span class="text-significant">Pet</span>Seeker</a>
        <div class="site-menu-toggle js-site-menu-toggle  ml-auto"  data-aos="fade" data-toggle="collapse" data-target="#hidden-navbar-nav" aria-controls="hidden-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
            </div>

        <div class="collapse navbar-collapse" id="hidden-navbar-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
            <li class="nav-item"><a class="nav-link" href="shelters.html">Shelters</a></li>
            <li class="nav-item"><a class="nav-link" href="pet-care.html">Pet Care</a></li>
            <li class="nav-item btn-nav ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="login.html"><span class="toggled_rounded-4 px-4 rounded">SIGN IN</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

      <section class="site-hero overlay" style="background-image: url(images/hero-image.jpg)" data-stellar-background-ratio="0.5" id="section-home">
        <div class="container">
          <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
              <h1 class="heading">Your bestfriend is waiting for you.</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- END section -->

      <section class="section toggled-0"  >
        <div class="container">
          <div class="row find-pet" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

              <form action="#">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <label class="font-weight-bold text-dark">Where are you looking?</label>
                    <div class="field-icon-wrap">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                    <div class="row">
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label for="adults" class="font-weight-bold text-dark">Age</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="adults" class="form-control">
                            <option value="">Any</option>
                            <option value="">Young</option>
                            <option value="">Adult</option>
                            <option value="">Old</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3 mb-md-0">
                        <label for="children" class="font-weight-bold text-dark">Radius</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="children" class="form-control">
                            <option value="">Any</option>
                            <option value="">25 miles</option>
                            <option value="">50 miles</option>
                            <option value="">100 miles</option>                           
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 align-self-end">
                    <button class="btn btn-primary btn-block text-white">DOGS</button>
                  </div>
                  <div style="margin-top:20px;" class="col-md-6 col-lg-3 align-self-end">
                      <button class="btn btn-primary btn-block text-white">CATS</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div class="container section" id="section-adop-near">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
          <h2 class="heading" data-aos="fade-up">Adoptions near you</h2>
        </div>
      </div>
      <div class="row">

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="width: 20rem; border:none;">
                <a href="#"><img class="card-img-top" src="images/adopt1.jpg" alt="Eva the Terrier Mix"></a>
                <div class="card-body">
                  <h5 class="card-title">Eva</h5>
                  <p class="card-text">Terrier Mix
                    <br />
                    6 weeks
                  </p>
                </div>
              </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="width: 20rem; border:none;">
                <a href="#"><img class="card-img-top" src="images/adopt2.jpg" alt="Lucy the Lab  Mix"></a>
                <div class="card-body">
                  <h5 class="card-title">Lucy</h5>
                  <p class="card-text">Lab Mix
                    <br />
                    5 years
                  </p>
                </div>
              </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="card" style="width: 20rem; border:none;">
                <a href="#"><img class="card-img-top" src="images/adopt3.jpg" alt="Bella the Swiss Moutain Dog"></a>
                <div class="card-body">
                  <h5 class="card-title">Bella</h5>
                  <p class="card-text">Swiss Mountain Dog
                    <br />
                    6 months
                  </p>
                </div>
              </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="card" style="width: 20rem; border:none;">
                <a href="#"><img class="card-img-top" src="images/adopt4.jpg" alt="King George the Terrier Mix"></a>
                <div class="card-body">
                  <h5 class="card-title">King George</h5>
                  <p class="card-text">Terrier Mix
                    <br />
                    6 weeks
                  </p>
                </div>
              </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="card" style="width: 20rem; border:none;">
                <a href="#"><img class="card-img-top" src="images/adopt5.jpg" alt="Esther the German Shepherd/Husky Mix"></a>
                <div class="card-body">
                  <h5 class="card-title">Esther</h5>
                  <p class="card-text">German Shepherd / Husky Mix
                    <br />
                    1 year
                  </p>
                </div>
              </div>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card" style="width: 20rem; border:none;">
                <a href="#"><img class="card-img-top" src="images/adopt6.jpg" alt="Tyler the Schnauzer"></a>
                <div class="card-body">
                  <h5 class="card-title">Tyler</h5>
                  <p class="card-text">Shnauzer
                    <br />
                     10 months
                  </p>
                </div>
              </div>
        </div>
    </div>
  </div>


      <section class="section  bg-light" id="section-rescuess">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h2 class="heading" data-aos="fade-up">Featured Rescues</h2>
              <p data-aos="fade-up" data-aos-delay="100">
                This week's spotlight shines on rescues that have acquired <i>thousands</i> of animals loving homes and have made many families happy! While these are featured 
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <a href="http://savealifepetrescue.org" class="rescues" target="_blank">
                <figure class="img-wrap">
                  <img src="images/save-a-life.png" alt="Save a Life Pet Rescue" class="img-fluid mb-3">
                </figure>
                <div class="p-3 text-center rescues-info">
                  <h2>Save a Life Pet Rescue</h2>
                  <span class="text-uppercase letter-spacing-1">Oviedo, FL</span>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <a href="http://www.greyhoundpets.org/index.php" class="rescues" target="_blank">
                <figure class="img-wrap">
                  <img src="images/greyhound.jpg" alt="Greyhound Pets of America" class="img-fluid mb-3">
                </figure>
                <div class="p-3 text-center rescues-info">
                  <h2>Greyhound Pets of America</h2>
                  <span class="text-uppercase letter-spacing-1">Connecticut Chapter</span>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <a href="https://fuzzyfriendsrescue.com" class="rescues" target="_blank">
                <figure class="img-wrap">
                  <img src="images/fuzzy-friends.png" alt="Fuzzy Friends Rescue" class="img-fluid mb-3">
                </figure>
                <div class="p-3 text-center rescues-info">
                  <h2>Fuzzy Friends Rescue</h2>
                  <span class="text-uppercase letter-spacing-1">Waco, TX</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      
      <section class="section contact-section" id="section-contact">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h2 class="heading" data-aos="fade-up">Contact Us</h2>
              <p data-aos="fade-up">Questions, comments or want to get involved? Let us know! We'd love to hear it!</p>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">            
            <h3 class="text-center">
              <?php include 'contact-submit.php'; ?>
              Thanks for being awesome!! We will get back to you very soon!
            </h3>
          </div>
        </div>
      </div>
    </section>

      <section class="section bg-image overlay" style="background-image: url('images/jacalyn-beales-671378-unsplash.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold bottom-font">Give a pet a second chance.</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <!-- Extra large modal -->
              <a href="#" class="btn btn-outline-white-primary py-3 text-white px-5" data-toggle="modal" data-target="#reservation-form">ADOPT</a>
            </div>
          </div>
        </div>
      </section>

      <footer class="section footer-section">
        <div class="container">
          <div class="row mb-4">
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">FAQs</a></li>
               <li><a href="#">Press</a></li>
              </ul>
            </div>
            <div class="col-md-3 mb-5">
              <ul class="list-unstyled link">
                <li><a href="#">Dogs</a></li>
                <li><a href="#">Cats</a></li>
                <li><a href="#">Shelter &amp; Rescue Login</a></li>
                <li><a href="#">Shelter &amp; Rescue Registration</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-5">
              <p>Sign up for our newsletter</p>
              <form method="POST" action="addto-newsletter.php" class="footer-newsletter">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address">
                  <button type="submit" class="btn btn-outline-white-primary py-1 text-white">Sign Up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </footer>

    
      <!-- Modal -->
      <div class="modal fade " id="reservation-form" tabindex="-1" role="dialog" aria-labelledby="reservationFormTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                  
                  <form action="index.html"  method="post" class="bg-white p-4">
                    <div class="row mb-4"><div class="col-12"><h2>Start looking</h2></div></div>
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label class="text-dark font-weight-bold" for="name">Location</label>
                        <input type="text" id="name" class="form-control ">
                      </div>
                    </div>
              
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="adults" class="font-weight-bold text-dark">Age</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="adults" class="form-control">
                            <option value="">Any</option>
                            <option value="">Young</option>
                            <option value="">Adult</option>
                            <option value="">Old</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="children" class="font-weight-bold text-dark">Radius</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="children" class="form-control">
                            <option value="">Anywhere</option>
                            <option value="">25 miles</option>
                            <option value="">50 miles</option>
                            <option value="">100 miles</option> 
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="submit" value="DOGS" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                      </div>
                      <div class="col-md-6 form-group">
                        <input type="submit" value="CATS" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                      </div>
                    </div>
                  </form>

                </div>
                
              </div>
            </div>
           
          </div>
        </div>
      </div>
      
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      
      <script src="js/aos.js"></script>
      <script src="js/main.js"></script>
    </body>
  </html>