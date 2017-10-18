<!-- Section: Footer -->
<footer>
  <div class="row">
    <!-- links -->
    <div class="col-md-4">
      <div class="mx-5 pt-5">
        <div class="row">
          <div class="col">
            <h5 class="text-darkgray">The company</h5>
            <ul class="footer-links">
              <li>
                <a href="<?php echo get_permalink( get_page_by_title('About') ) ?>">About us</a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" data-placement="right" title="Coming Soon">Become a stylist</a>
              </li>
              <li>
                <a href="<?php echo get_permalink( get_page_by_title('Blog') ) ?>">Our blog</a>
              </li>
              <li>
                <a href="<?php echo get_permalink( get_page_by_title('Press') ) ?>">Press</a>
              </li>
            </ul>
          </div>
          <div class="col">
            <div class="mx-auto">
              <h5 class="text-darkgray">Have a Q?</h5>
              <ul class="footer-links">
                <li>
                  <a href="#" data-toggle="tooltip" data-placement="right" title="Coming Soon">FAQ</a>
                </li>
                <li>
                  <a href="<?php echo get_permalink( get_page_by_title('About') ) ?>">Contact us</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- news letter signup-->
    <div class="col-sm-12 col-md-4">
      <div class="text-center py-md-5">
        <?php echo do_shortcode("[mc4wp_form id=\"12809\"]"); ?>
      </div>
    </div>

    <!-- social media -->
    <div class="col-sm-12 col-md-4">
      <div class="text-center py-5">
        <a target="_blank" href="//facebook.com/unfoldid"><span class="fa fa-facebook fa-2x mx-1 text-gold"></span></a>
        <a target="_blank" href="//instagram.com/unfoldid"><span class="fa fa-instagram fa-2x mx-1 text-gold"></span></a>
        <a target="_blank" href="//pinterest.com/unfoldid/pins"><span class="fa fa-pinterest fa-2x mx-1 text-gold"></span></a>
        <a target="_blank" href="//linkedin.com/company/unfoldid"><span class="fa fa-linkedin-square mx-1 fa-2x text-gold"></span></a>
      </div>
    </div>
  </div>

   <div class="row">
    <div class="col text-center pb-5">

      <a class="px-3" href="#">Terms of use</a>
      <a class="px-3" href="#">Privacy policy</a>
      <span>&copy; 2017 Unfoldid</span>

    </div>
  </div>
</footer>
</div>

<!-- Mobile Menu -->

<div class="sidemenu font__halcom-light" style="background-color: white">
  <nav class="active">
    <a target="_self" href="/">
home
</a>
    <a target="_self" href="<?php echo get_permalink( get_page_by_title('Get Unfoldid') ) ?>">
get unfoldid
</a>
    <a target="_self" href="<?php echo get_permalink( get_page_by_title('Services') ) ?>">
services
</a>
    <a target="_self" href="<?php echo get_permalink( get_page_by_title('About') ) ?>">
about
</a>
    <a target="_self" href="<?php echo get_permalink( get_page_by_title('Blog') ) ?>">
Blog
</a>

    <!--<a target="_self" href="index.php/blog/events">
Events
</a>-->

    <a target="_self" href="<?php echo get_permalink( get_page_by_title('Press') ) ?>">
Press
</a>
    <a target="_blank" href="http://mystyle.timetoshiftyourstyle.com/wp-login.php">
Login
</a>
  </nav>

</div>

<!-- MODALS -->

<div class="modal fade" id="book-now-modal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header" style="padding:35px 50px;">
      <button type="button" class="close" data-dismiss="modal"><span class="fa fa-close"></span></button>
      <h4 class="font__halcom"><span class="fa fa-book"></span>Book Now</h4>
    </div>
    <div class="modal-body" style="padding:40px 50px;">
      <div class="text-center">
        <p>Fill out our <a target="_blank" class="modal-link" href="//styleform.unfoldid.com/">style profile form</a> for an even better experience, if you haven't already.</p>
        <p>-or-</p>
        <p><a target="_blank" class="modal-link" href="//shiftyourstyle.simplybook.me/sheduler/manage">Continue to booking</a></p>
      </div>
    </div>
    <div class="modal-footer">
    </div>
  </div>
  
</div>
</div> 
<?php wp_footer();?>
</body>

</html>