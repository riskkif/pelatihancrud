<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{{ asset('homepage') }}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Home</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-523-3564
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@markups.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="{{ url('register') }}" class="aa-register">Register</a>
                  <a href="{{ url('login') }}" class="aa-login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <a class="navbar-brand aa-logo" href="index.html"> Home <span>Property</span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="index.html">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.html">PROPERTIES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties.html">PROPERTIES</a></li>
                <li><a href="properties-detail.html">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li>
            <li><a href="gallery.html">GALLERY</a></li>                                         
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BLOG <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="blog-archive.html">BLOG</a></li>
                <li><a href="blog-single.html">BLOG DETAILS</a></li>                                            
              </ul>
            </li>
            <li><a href="contact.html">CONTACT</a></li>
           <li><a href="404.html">404 PAGE</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/3.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/2.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/1.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->       
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/5.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->        
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/4.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/6.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select>
                   <option value="0" selected>Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
              </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
              </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>
              </div>
            </div>
          </div>
         <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>
            </div>
          </div>  
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="img/about-us.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Us</h2>
                    <span></span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>                  
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/1.jpg" alt="img">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $35000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/2.jpg" alt="img">
                </a>
                <div class="aa-tag for-rent">
                  For Rent
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $11000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/3.jpg" alt="img">
                </a>
                <div class="aa-tag sold-out">
                  Sold Out
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $15000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/4.jpg" alt="img">
                </a>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $35000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/5.jpg" alt="img">
                </a>                
                <div class="aa-tag sold-out">
                  Sold Out
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $11000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="img/item/6.jpg" alt="img">
                </a>
                <div class="aa-tag for-rent">
                  For Rent
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#">Appartment Title</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $15000
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->

  <!-- Promo Banner Section -->
  <section id="aa-service">
  </section>

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
  </section>
  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->
  <section id="aa-agents">
  </section>
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
  <section id="aa-client-brand">
  </section>
  <!-- / Client brand -->

  <!-- Latest blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Latest News</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
            </div>
            <div class="aa-latest-blog-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>
                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/blog-img-3.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->

  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>