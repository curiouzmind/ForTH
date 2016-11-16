<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Forth Foundation</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
 <!-- <link href="css/vendor/all.css" rel="stylesheet"> -->

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
     <link href="{{asset('css/vendor/bootstrap.css')}}" rel="stylesheet">
     <link href="{{asset('css/vendor/font-awesome.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/picto.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/material-design-iconic-font.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/datepicker3.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/jquery.minicolors.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/railscasts.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/owl.carousel.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/slick.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/daterangepicker-bs3.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendor/jquery.bootstrap-touchspin.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/vendor/select2.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendor/jquery.countdown.css')}}" rel="stylesheet"> 

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "html" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "html" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/html/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <!-- <link href="css/app/app.css" rel="stylesheet"> -->

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="{{asset('css/app/main.css')}}" rel="stylesheet">-->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

   <link href="{{asset('css/app/essentials.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/material.css')}}" rel="stylesheet" />
   <link href="{{asset('css/app/layout.css')}}" rel="stylesheet" />
   <link href="{{asset('css/app/sidebar.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/sidebar-skins.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/navbar.css')}}" rel="stylesheet" />
   <link href="{{asset('css/app/messages.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/media.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/charts.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/maps.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/colors-alerts.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/colors-background.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/colors-buttons.css')}}" rel="stylesheet" /> 
   <link href="{{asset('css/app/colors-text.css')}}" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand navbar-brand-logo">
          <a class="svg" href="index.html">
            ForTh
          </a>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-nav-margin-left">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Prosperity</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Society</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Blog </a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Publications <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Policy Reports</a></li>
              <li><a href="#">Score Card</a></li>
              <li><a href="#">Shopping Cart</a></li>
            
            </ul>
          </li>
        </ul>
        <div class="navbar-right">
          <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
            <!-- user -->
            <li class="dropdown user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/people/110/guy-6.jpg" alt="" class="img-circle" /> Bill<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="website-student-dashboard.html"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
                <li><a href="website-student-courses.html"><i class="fa fa-mortar-board"></i> My Courses</a></li>
                <li><a href="website-student-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
            <!-- // END user -->
          </ul>
          <a href="login.html" class="navbar-btn btn btn-primary">Log In</a>
        </div>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

  <div class="parallax cover overlay cover-image-full home">
    <img class="parallax-layer" src="images/the_thinker.jpg" alt="Learning Cover" />
    <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-speed="8" data-opacity="true">
      <div class="v-center">
        <div class="page-section overlay-bg-white-strong relative paper-shadow" data-z="1">
          <h1 class="text-display-2 margin-v-0-15 display-inline-block">Courses for Web &amp; Mobile</h1>
          <p class="text-subhead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur consequatur distinctio earum ipsam.</p>
          <a class="btn btn-green-500 btn-lg paper-shadow" data-hover-z="2" data-animated data-toggle="modal" href="#modal-overlay-signup">Sign Up - Only &dollar;19.00/mo</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-section-heading">
      <h2 class="text-display-1">Features</h2>
      <p class="lead text-muted">Learn about all of the features we offer.</p>
    </div>
    <div class="row" data-toggle="gridalicious">

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-green-300 text-white">
            <div class="panel-body">
              <i class="fa fa-film fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Watch Courses Offline</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-purple-300 text-white">
            <div class="panel-body">
              <i class="fa fa-life-bouy fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Premium Support</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-orange-400 text-white">
            <div class="panel-body">
              <i class="fa fa-user fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Learn from Top Tutors</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-cyan-400 text-white">
            <div class="panel-body">
              <i class="fa fa-code fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Lesson Source Files</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-pink-400 text-white">
            <div class="panel-body">
              <i class="fa fa-print fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Printed Diploma</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-red-400 text-white">
            <div class="panel-body">
              <i class="fa fa-tasks fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">New Lessons Every Day</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <br/>

  <div class="page-section bg-white">
    <div class="container">

      <div class="text-center">
        <h3 class="text-display-1">Featured Courses</h3>
        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <br/>

      <div class="slick-basic slick-slider" data-items="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-items-xs="1">
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-default"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-primary"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-lightred"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                        <span class="v-center">
                            <i class="fa fa-windows"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Portable Environments with Vagrant</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-brown"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-purple"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-default"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center">
        <br/>
        <a class="btn btn-lg btn-primary" href="website-directory-grid.html">Browse Courses</a>
      </div>

    </div>
  </div>

  <div class="parallax cover overlay height-300 margin-none">
    <img class="parallax-layer" data-auto-offset="true" data-auto-size="false" src="images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg" alt="Learning Cover" />
    <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-opacity="true" data-speed="8">
      <div class="v-center">
        <div class="page-section">
          <h1 class="text-display-2 overlay-bg-white margin-v-0-15 inline-block">Feedback</h1>
          <br/>
          <p class="lead text-overlay overlay-bg-white-strong inline-block">How others use E-learning to improve their skills</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-section">
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
              </div>
            </div>
            <div class="media v-middle">
              <div class="media-left">
                <img src="images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" />
              </div>
              <div class="media-body">
                <p class="text-subhead margin-v-5-0">
                  <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                </p>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
              </div>
            </div>
            <div class="media v-middle">
              <div class="media-left">
                <img src="images/people/50/guy-6.jpg" alt="People" class="img-circle width-40" />
              </div>
              <div class="media-body">
                <p class="text-subhead margin-v-5-0">
                  <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                </p>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
              </div>
            </div>
            <div class="media v-middle">
              <div class="media-left">
                <img src="images/people/50/guy-3.jpg" alt="People" class="img-circle width-40" />
              </div>
              <div class="media-body">
                <p class="text-subhead margin-v-5-0">
                  <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                </p>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>

  </div>

  <div class="modal grow modal-overlay modal-backdrop-body fade" id="modal-overlay-signup">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <div class="modal-dialog">
      <div class="v-cell">
        <div class="modal-content">
          <div class="modal-body">

            <div class="wizard-container wizard-1" id="wizard-demo-1">
              <div data-scrollable-h>
                <ul class="wiz-progress">
                  <li class="active">Plan &amp; Payment</li>
                  <li>Account Setup</li>
                  <li>Personal Details</li>
                </ul>
              </div>
              <form action="#" data-toggle="wizard" class="max-width-400 h-center">

                <fieldset class="step relative paper-shadow form-horizontal" data-z="2">
                  <div class="page-section-heading">
                    <h2 class="text-h3 margin-v-0">Payment</h2>
                    <h3 class="text-h4 margin-v-10 text-grey-400">Your plan is
                      <strong class="text-uppercase">learner</strong> for
                      <strong>&dollar;19.99/mo</strong>
                    </h3>
                    <a href="pricing.html">See pricing</a>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <label for="credit-card" class="col-xs-4 control-label">Credit Card</label>
                    <div class="col-xs-8">
                      <div class="form-control-material">
                        <input type="text" class="form-control" id="credit-card" placeholder="**** **** **** 2422">
                        <label for="credit-card">Credit Card</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="card-expiration" class="col-xs-4 control-label">Expiration:</label>
                    <div class="col-xs-8">
                      <select id="card-expiration" data-toggle="select2">
                        <option value="1" selected>January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                      <select data-toggle="select2">
                        <option value="2015" selected>2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cvv" class="col-xs-4 control-label">CVV</label>
                    <div class="col-xs-8">
                      <div class="form-control-material">
                        <input type="email" class="form-control" id="cvv" placeholder="123">
                        <label for="cvv">CVV</label>
                      </div>
                    </div>
                  </div>
                  <div class="text-right">
                    <button type="button" class="wiz-next btn btn-primary">Next</button>
                  </div>
                </fieldset>

                <fieldset class="step relative paper-shadow" data-z="2">
                  <div class="page-section-heading">
                    <h2 class="text-h3 margin-v-0">Create your account</h2>
                    <h3 class="text-h4 margin-v-10 text-grey-400">This is a multi step form</h3>
                  </div>
                  <div class="form-group form-control-material">
                    <input class="form-control" type="text" id="wiz-email" placeholder="Email" />
                    <label for="wiz-email">Email:</label>
                  </div>
                  <div class="form-group form-control-material">
                    <input class="form-control" type="password" id="wiz-password" placeholder="Password" />
                    <label for="wiz-password">Password:</label>
                  </div>
                  <div class="form-group form-control-material">
                    <input class="form-control" type="password" id="wiz-password2" placeholder="Confirm Password" />
                    <label for="wiz-password2">Confirm Password:</label>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <button type="button" class="wiz-prev btn btn-default">Previous</button>
                    </div>
                    <div class="col-xs-6 text-right">
                      <button type="button" class="wiz-next btn btn-primary">Next</button>
                    </div>
                  </div>
                </fieldset>

                <fieldset class="step relative paper-shadow" data-z="2">
                  <div class="page-section-heading">
                    <h2 class="text-h3 margin-v-0">Personal Details</h2>
                    <h3 class="text-h4 margin-v-10 text-grey-400">Your personal details are safe with us</h3>
                  </div>
                  <div class="form-group form-control-material">
                    <input class="form-control" type="text" id="wiz-fname" placeholder="First name" />
                    <label for="wiz-fname">First name:</label>
                  </div>
                  <div class="form-group form-control-material">
                    <input class="form-control" type="tel" id="wiz-lname" placeholder="Last name" />
                    <label for="wiz-lname">Last name:</label>
                  </div>
                  <div class="form-group form-control-material">
                    <input class="form-control" type="text" id="wiz-phone" placeholder="Phone" />
                    <label for="wiz-phone">Phone:</label>
                  </div>
                  <div class="form-group form-control-material">
                    <textarea rows="5" class="form-control" id="wiz-address" placeholder="Your address"></textarea>
                    <label for="wiz-address">Address:</label>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <button type="button" class="wiz-prev btn btn-default">Previous</button>
                    </div>
                    <div class="col-xs-6 text-right">
                      <button type="button" class="wiz-step btn btn-primary" data-target="0">Submit</button>
                    </div>
                  </div>
                </fieldset>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <h4 class="text-headline text-light">Corporate</h4>
          <ul class="list-unstyled">
            <li><a href="#">About the company</a></li>
            <li><a href="#">Company offices</a></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-3">
          <h4 class="text-headline text-light">Explore</h4>
          <ul class="list-unstyled">
            <li><a href="">Courses</a></li>
            <li><a href="">Tutors</a></li>
            <li><a href="">Pricing</a></li>
            <li><a href="">Become Tutor</a></li>
            <li><a href="">Sign Up</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-md-6">
          <h4 class="text-headline text-light">Newsletter</h4>

          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Enter email here...">
              <span class="input-group-btn">
								<button class="btn btn-grey-800" type="button">Subscribe</button>
							  </span>
            </div>
          </div>
          <br/>
          <p>
            <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
            <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
          </p>

          <p class="text-subhead">
            &copy; 2015 Learning App by mosaicpro.
          </p>

        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <strong>Forth Foundation</strong>  &copy; Copyright 2016
  </footer>
  <!-- // Footer -->

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "html",
      skins: {
        "default": {
          "primary-color": "#42a5f5"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="js/vendor/all.js"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="{{asset('js/vendor/core/all.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery.js')}}"></script> 
   <script src="{{asset('js/vendor/core/bootstrap.js')}}"></script> 
   <script src="{{asset('js/vendor/core/breakpoints.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery.nicescroll.js')}}"></script> 
   <script src="{{asset('js/vendor/core/isotope.pkgd.js')}}"></script> 
   <script src="{{asset('js/vendor/core/packery-mode.pkgd.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery.grid-a-licious.js')}}"></script>  
   <script src="{{asset('js/vendor/core/jquery.cookie.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery-ui.custom.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery.hotkeys.js')}}"></script> 
   <script src="{{asset('js/vendor/core/handlebars.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery.hotkeys.js')}}"></script> 
   <script src="{{asset('js/vendor/core/load_image.js')}}"></script> 
   <script src="{{asset('js/vendor/core/jquery.debouncedresize.js')}}"></script> 
   <script src="{{asset('js/vendor/core/modernizr.js')}}"></script> 
   <script src="{{asset('js/vendor/core/velocity.js')}}"></script> 
   <script src="{{asset('js/vendor/tables/all.js')}}"></script> 
   <script src="{{asset('js/vendor/forms/all.js')}}"></script> 
   <script src="{{asset('js/vendor/media/slick.js')}}"></script> 
   <script src="{{asset('js/vendor/charts/flot/all.js')}}"></script> 
   <script src="{{asset('js/vendor/nestable/jquery.nestable.js')}}"></script> 
   <script src="{{asset('js/vendor/countdown/all.js')}}"></script> 
   <script src="{{asset('js/vendor/angular/all.js')}}"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
   <script src="js/app/app.js"></script> 

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="{{asset('js/app/essentials.js')}}"></script>
   <script src="{{asset('js/app/material.js')}}"></script> 
   <script src="{{asset('js/app/layout.js')}}"></script> 
   <script src="{{asset('js/app/sidebar.js')}}"></script> 
   <script src="{{asset('js/app/media.js')}}"></script> 
   <script src="{{asset('js/app/messages.js')}}"></script>
   <script src="{{asset('js/app/maps.js')}}"></script> 
   <script src="{{asset('js/app/charts.js')}}"></script> -->

  <!-- App Scripts CORE [html]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  <!-- <script src="{{asset('js/app/main.js')}}"></script> -->

</body>

</html>