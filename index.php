<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resala Wordpress Jade Test</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Modernizer-->
    <script src="js/modernizr.js"></script>
    <!-- Bootstrap styling-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen">
    <!-- Font Awesome icons-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" media="screen">
    <!-- simple line icons-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/simple-line-icons.css" type="text/css" media="screen">
    <!-- magnific popup-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css" type="text/css" media="screen">
    <!-- slick styles-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" type="text/css" media="screen">
    <!--animate css-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" type="text/css" media="screen">
    <!-- primary style-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  </head>
  <body>
    <div class="load-wrapp">
      <div class="load-1">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
    <nav class="primary-navbar fixed">
      <div class="container">
        <div class="menu-toggle"><i class="icon-menu"></i></div>
        <div id="logo"><a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/img/shpl-friends.png" alt=""></a></div>
        <ul class="navbar-content">
          <li class="active"><a href="#header" class="smooth">Home</a></li>
          <li><a href="#about-us" class="smooth">About</a></li>
          <li><a href="#events" class="smooth">Events</a></li>
          <li><a href="#" class="smooth">Donate</a></li>
          <li><a href="#footer" class="smooth">Contact</a></li>
        </ul>
      </div>
    </nav>
    <header id="header" class="version5 parallax-bg">
      <div class="container">
        <div class="content">
          <h1 class="white wow fadeInUp"> <span class="left"><img src="<?php bloginfo('template_directory'); ?>/img/quote-left-white.png" alt="" height="36px"></span>The only thing that you absolutely have to know is the location of the library.<span class="right"> <img src="<?php bloginfo('template_directory'); ?>/img/quote-right-white.png" alt="" height="36px"></span></h1>
          <p data-wow-delay="0.3s" class="white wow fadeInUp">- Albert Einstein</p>
          <form method="post" action="mail.php" class="form-inline">
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">$</div>
                <input type="text" placeholder="Amount" onfocus="this.placeholder=''" onblur="this.placeholder='Amount'" name="name" required class="form-control form-control-lg">
              </div>
            </div>
            <button data-toggle="modal" data-target="#donatemodal" class="button btn-primary btn-lg"> <span>DONATE NOW</span></button>
          </form>
        </div>
      </div>
    </header>
    <section id="about-us" class="about-us section">
      <div class="container">
        <div class="section-title">
          <h2>About us</h2>
          <div class="underlines"><span class="center"></span></div>
          <p class="description-text hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="content left"><img src="http://placehold.it/800x470" alt=""></div>
          </div>
          <div class="col-md-7 right wow fadeInRight">
            <div class="sub-section-title">
              <h3>Our Mission</h3>
              <div class="underlines"><span class="left"></span></div>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
          </div>
        </div>
      </div>
    </section>
    <section id="events" class="section events">
      <div class="container">
        <div class="section-title">
          <h2>EVENTS</h2>
          <div class="underlines"><span class="center"></span></div>
          <p class="description-text hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <div class="row">
          <div data-wow-delay="0.0s" class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
            <div class="single-event vertical">
              <div class="img overlay-dark2"></div>
              <div class="content">
                <h4 class="event-title"><a href="single-cause.html">Bookmark Napa Valley</a></h4>
                <ul>
                  <li><i class="icon-calendar"></i>Event Date</li>
                  <li><i class="icon-map"></i>Location</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, conse ctetur elit, sed do eiusmod tempor incididunt ut labor isicing  et dolore  quis nostrud ullamco... </p>
              </div>
            </div>
          </div>
          <div data-wow-delay="0.1s" class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
            <div class="single-event vertical">
              <div class="img overlay-dark2"></div>
              <div class="content">
                <h4 class="event-title"><a href="single-cause.html">Another Event</a></h4>
                <ul>
                  <li><i class="icon-calendar"></i>Event Date</li>
                  <li><i class="icon-map"></i>Location</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, conse ctetur elit, sed do eiusmod tempor incididunt ut labor isicing  et dolore  quis nostrud ullamco... </p>
              </div>
            </div>
          </div>
          <div data-wow-delay="0.2s" class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
            <div class="single-event vertical">
              <div class="img overlay-dark2"></div>
              <div class="content">
                <h4 class="event-title"><a href="single-cause.html">A Different Event</a></h4>
                <ul>
                  <li><i class="icon-calendar"></i>Event Date</li>
                  <li><i class="icon-map"></i>Location</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, conse ctetur elit, sed do eiusmod tempor incididunt ut labor isicing  et dolore  quis nostrud ullamco... </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="section our-team">
      <div class="section-title">
        <h2>Board Members</h2>
        <div class="underlines"><span class="center"></span></div>
        <p class="description-text hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
      <div class="container">
        <div class="row">
          <div data-wow-delay="0.0s" class="col-md-6 team-member-wrap wow fadeInUp">
            <div class="team-member">
              <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left">
                <div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/dan-whitehurst.jpg" alt=""></div>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12 nopadding-right nopadding-left">
                <h4>Dan Whitehurst</h4><span class="title">Chair</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
              </div>
            </div>
          </div>
          <div data-wow-delay="0.1s" class="col-md-6 team-member-wrap wow fadeInUp">
            <div class="team-member">
              <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left">
                <div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/jack-stuart.jpg" alt=""></div>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12 nopadding-right nopadding-left">
                <h4>Jack Stuart</h4><span class="title">Vice Chair</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
              </div>
            </div>
          </div>
          <div data-wow-delay="0.2s" class="col-md-6 team-member-wrap wow fadeInUp">
            <div class="team-member">
              <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left">
                <div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/leslie-moreland.jpg" alt=""></div>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12 nopadding-right nopadding-left">
                <h4>Leslie Moreland</h4><span class="title">Treasurer</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
              </div>
            </div>
          </div>
          <div data-wow-delay="0.3s" class="col-md-6 team-member-wrap wow fadeInUp">
            <div class="team-member">
              <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left">
                <div class="img"><img src="<?php bloginfo('template_directory'); ?>/img/jodine-whisten.png" alt=""></div>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12 nopadding-right nopadding-left">
                <h4>Jodine Whisten</h4><span class="title">Secretary</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="footer" class="text-center dark-bg centerd">
      <div class="container"><img src="<?php bloginfo('template_directory'); ?>/img/shpl-friends-white.png" alt="" class="logo">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco magna aliqua laboris nisi ut aliquip co </p>
      </div>
      <ul class="social">
        <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"> <i class="fa fa-undefined"></i></a></li>
        <li><a href="#"> <i class="fa fa-undefined"></i></a></li>
      </ul>
    </footer>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <script src="//localhost:9100/livereload.js"></script>
  </body>
</html>