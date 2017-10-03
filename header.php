<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container-fluid">
      <!-- Mobile MENU -->
      <div id="navbar-mobile-menu" class="fixed-top" style="z-index: 50">
      <div style="z-index: 99; margin-left: -10%; padding: 0; width: 110%; height: 70px; background-color: rgba(255,255,255,0.9)">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/unfoldid-logo.svg" style="position: absolute; left: 10%; margin-left: 5px; margin-top: 15px;" width="71" height="40" alt="Unfoldid Logo"></a>
      </div>
    </div>

    <div class="row" style="background-color: #fff">
      <div class="col">
        <!-- Section: Navigation -->
        <nav class="navbar navbar-default navbar-expand-lg nav-padding my-lg-1 mx-lg-5">

          <!-- Center: Brand Image -->
          <div>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
              <img id="unfoldid-logo" src="<?php echo get_template_directory_uri() ?>/images/unfoldid-logo.svg" width="200" height="95" alt="Unfoldid Logo">
              <div id="unfoldid-logo-button" class="d-none">Unfoldid</div>

      </a>
            <div style="display: inline-block; position: absolute; left: calc(50% - 112px); top: 10px; width: 225px; height: 120px; background-color: #fff; z-index: 1;"></div>
          </div>

          <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left: Links -->
            <div style="word-spacing: 10px" class="mr-3">
              <a target="_blank" href="//facebook.com/unfoldid"><i class="fa fa-facebook fa-lg text-navy"></i></a>
              <a target="_blank" href="//instagram.com/unfoldid"><i class="fa fa-instagram fa-lg text-navy"></i></a>
              <a target="_blank" href="//pinterest.com/unfoldid/pins"><i class="fa fa-pinterest fa-lg text-navy"></i></a>
              <a target="_blank" href="//linkedin.com/company/unfoldid/"><i class="fa fa-linkedin-square fa-lg text-navy"></i></a>
            </div>
            <span class="d-block text-gold mr-auto" style="font-size: 1.2em; font-weight: 500">personal: styling. shopping. wellness.</span>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="<?php echo get_permalink( get_page_by_title('Get Unfoldid') ) ?>" class="nav-link" style="font-size: 1.1em">[ get Unfoldid ]</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_permalink( get_page_by_title('Services') ) ?>" class="nav-link" style="font-size: 1.1em">services</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_permalink( get_page_by_title('About') ) ?>" class="nav-link" style="font-size: 1.1em">about</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_permalink( get_page_by_title('Blog') ) ?>" class="nav-link" style="font-size: 1.1em">blog</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_permalink( get_page_by_title('Press') ) ?>" class="nav-link" style="font-size: 1.1em">press</a>
              </li>
              <li class="nav-item">
                <a href="http://mystyle.timetoshiftyourstyle.com/wp-login.php" target="_blank" class="nav-link" style="font-size: 1.1em">login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>